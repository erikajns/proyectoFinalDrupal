<?php

/* themes/estore/templates/block/commerce-cart-block.html.twig */
class __TwigTemplate_119157b9cceb0085aca904b3a09cc64ee617be33e02e220e60bcad6fb339bda0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "if" => 19);
        $filters = array("commerce_price_format" => 16, "t" => 28);
        $functions = array("url" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('commerce_price_format', 't'),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        $context["classes"] = array(0 => "block", 1 => "cart-block-wrapper", 2 => "has-dropdown", 3 => "clearfix");
        // line 9
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("commerce_cart.page")));
        echo "\" class=\"cart-icon\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span class=\"cart-value\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["count"] ?? null), "html", null, true));
        echo "</span>
  </a>
  <div class=\"my-cart-wrap\">
    <div class=\"my-cart\">Total</div>
    <div class=\"cart-total\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice(($context["total"] ?? null)), "html", null, true));
        echo "</div>
  </div>
  <div class=\"cart-contents\">
    ";
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo "      <div class=\"cart-block-content\">
        ";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
      </div>
      <div class=\"cart-block-links\">
        ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["links"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        } else {
            // line 27
            echo "      <div class=\"cart-block-empty\">
        ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cart is empty.")));
            echo "
      </div>
    ";
        }
        // line 31
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/estore/templates/block/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  88 => 28,  85 => 27,  79 => 24,  73 => 21,  70 => 20,  68 => 19,  62 => 16,  55 => 12,  50 => 10,  45 => 9,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/estore/templates/block/commerce-cart-block.html.twig", "C:\\wamp64\\www\\kickstart-3106\\web\\themes\\estore\\templates\\block\\commerce-cart-block.html.twig");
    }
}
