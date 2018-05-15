<?php

namespace Drupal\commerce_wishlist;

use Drupal\commerce\CommerceContentEntityStorage;
use Drupal\commerce\PurchasableEntityInterface;
use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the wishlist item storage.
 */
class WishlistItemStorage extends CommerceContentEntityStorage implements WishlistItemStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function createFromPurchasableEntity(PurchasableEntityInterface $entity, array $values = []) {
    $wishlist_item_type = $this->resolveWishlistItemTypeId($entity);
    $values += [
      'type' => $wishlist_item_type,
      'title' => $entity->getOrderItemTitle(),
      'purchasable_entity' => $entity,
    ];
    return self::create($values);
  }

  /**
   * Determines the wishlist item type to use with the given purchasable entity.
   *
   * For orders, the entity has it's getOrderItemTypeId() function, but that
   * can't be re-used for wishlists. We will use third party settings on the
   * config entities, that will be read here. Additionally we will provide a
   * fallback to the "default" type.
   *
   * @param \Drupal\commerce\PurchasableEntityInterface $entity
   *   The purchasable entity.
   *
   * @return string
   *   The wishlist item type to use with the given purchasable entity.
   */
  protected function resolveWishlistItemTypeId(PurchasableEntityInterface $entity) {
    $wishlist_item_type = 'default';
    $entity_type = $entity->getEntityType();
    if ($entity_type instanceof ConfigEntityBase) {
      $wishlist_item_type = $entity_type->getThirdPartySetting('commerce_wishlist', 'wishlist_item_type', 'default');
    }
    return $wishlist_item_type;
  }

}
