<?php

/* themes/estore/templates/system/page.html.twig */
class __TwigTemplate_ecee982db77ddd6433acf1c0605f0d97f92f306c12ef07a55860b640ecc911c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 62, "t" => 133);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 153
        echo "
";
        // line 155
        $this->displayBlock('main', $context, $blocks);
        // line 224
        echo "

  ";
        // line 226
        $this->displayBlock('footer', $context, $blocks);
        // line 278
        echo "
";
    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : ("")));
        // line 65
        echo "    <div class=\"top-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"left-top-header\">
          ";
        // line 68
        if ($this->getAttribute(($context["top_header"] ?? null), "header_email", array())) {
            // line 69
            echo "            <div class=\"site-email\">
              <i class=\"fa fa-envelope\"></i>
              ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_header"] ?? null), "header_email", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 74
        echo "          ";
        if ($this->getAttribute(($context["top_header"] ?? null), "header_phone", array())) {
            // line 75
            echo "            <div class=\"site-phone\">
              <i class=\"fa fa-phone\"></i>
              ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_header"] ?? null), "header_phone", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 80
        echo "          ";
        if ($this->getAttribute(($context["top_header"] ?? null), "header_location", array())) {
            // line 81
            echo "            <div class=\"site-map-marker\">
              <i class=\"fa fa-map-marker\"></i>
              ";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_header"] ?? null), "header_location", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 86
        echo "          ";
        if ($this->getAttribute(($context["top_header"] ?? null), "header_shop_opens", array())) {
            // line 87
            echo "            <div class=\"site-clock-o\">
              <i class=\"fa fa-clock-o\"></i>
              ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_header"] ?? null), "header_shop_opens", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 92
        echo "        </div>
        <div class=\"right-top-header\">
          ";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "top_header_right", array())) {
            // line 95
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header_right", array()), "html", null, true));
            echo "
          ";
        }
        // line 97
        echo "        </div>
      </div>
    </div>

    <div class=\"middle-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"col-md-3\">
          ";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "left_middle_header", array())) {
            // line 105
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_middle_header", array()), "html", null, true));
            echo "
          ";
        }
        // line 107
        echo "        </div>

        <div class=\"col-md-6 text-center hidden-sm hidden-xs\">
          ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "middle_header", array())) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "middle_header", array()), "html", null, true));
            echo "
          ";
        }
        // line 113
        echo "        </div>

        <div class=\"col-md-3\">
          ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "right_middle_header", array())) {
            // line 117
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_middle_header", array()), "html", null, true));
            echo "
          ";
        }
        // line 119
        echo "        </div>

      </div>
    </div>

    <header";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 125
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 126
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 128
        echo "      <div class=\"navbar-header\">
        ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 131
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 132
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 139
        echo "      </div>

      ";
        // line 142
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 143
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 144
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 147
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 148
            echo "        </div>
      ";
        }
        // line 150
        echo "    </header>
  ";
    }

    // line 155
    public function block_main($context, array $blocks = array())
    {
        // line 156
        echo "  ";
        // line 157
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 158
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 167
            echo "  ";
        }
        // line 168
        echo "
  <div role=\"main\" class=\"main-container ";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"main-container-inner\">

      ";
        // line 173
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 174
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 179
            echo "      ";
        }
        // line 180
        echo "
      ";
        // line 182
        echo "      ";
        // line 183
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 184
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 185
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 186
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 187
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 190
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 193
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 194
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 197
            echo "        ";
        }
        // line 198
        echo "
        ";
        // line 200
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 201
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 204
            echo "        ";
        }
        // line 205
        echo "
        ";
        // line 207
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 211
        echo "      </section>

      ";
        // line 214
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 215
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 220
            echo "      ";
        }
        // line 221
        echo "    </div>
  </div>
";
    }

    // line 158
    public function block_header($context, array $blocks = array())
    {
        // line 159
        echo "      <div class=\"header-region clearfix\" role=\"heading\">
        <div class=\"container-fluid\">
          <div class=\"header-inner text-center\">
            ";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 174
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 175
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 194
    public function block_highlighted($context, array $blocks = array())
    {
        // line 195
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 201
    public function block_help($context, array $blocks = array())
    {
        // line 202
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 207
    public function block_content($context, array $blocks = array())
    {
        // line 208
        echo "          <a id=\"main-content\"></a>
          ";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 215
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 216
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 217
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 226
    public function block_footer($context, array $blocks = array())
    {
        // line 227
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"footer-top clearfix\">
        <div class=\"container-fluid\">
          ";
        // line 230
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 231
            echo "            <div class=\"footer-first col-sm-6 col-md-3\">
              ";
            // line 232
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 235
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 236
            echo "            <div class=\"footer-second col-sm-6 col-md-3\">
              ";
            // line 237
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 240
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
            // line 241
            echo "            <div class=\"footer-third col-sm-6 col-md-3\">
              ";
            // line 242
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 245
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
            // line 246
            echo "            <div class=\"footer-fourth col-sm-6 col-md-3\">
              ";
            // line 247
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 250
        echo "        </div>
      </div>

      <div class=\"footer-bottom clearfix\">
        <div class=\"container-fluid\">
          <div class=\"footer-bottom-left\">
            ";
        // line 256
        if (($context["copyright_text"] ?? null)) {
            // line 257
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["copyright_text"] ?? null), "html", null, true));
            echo "
            ";
        }
        // line 259
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_left", array())) {
            // line 260
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom_left", array()), "html", null, true));
            echo "
            ";
        }
        // line 262
        echo "          </div>
          <div class=\"footer-bottom-right\">
            ";
        // line 264
        if (($context["theme_credits"] ?? null)) {
            // line 265
            echo "              <div class=\"theme-credits\">
                ";
            // line 266
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_credits"] ?? null), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 269
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_right", array())) {
            // line 270
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom_right", array()), "html", null, true));
            echo "
            ";
        }
        // line 272
        echo "          </div>
        </div>
      </div>

    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/estore/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 272,  533 => 270,  530 => 269,  524 => 266,  521 => 265,  519 => 264,  515 => 262,  509 => 260,  506 => 259,  500 => 257,  498 => 256,  490 => 250,  484 => 247,  481 => 246,  478 => 245,  472 => 242,  469 => 241,  466 => 240,  460 => 237,  457 => 236,  454 => 235,  448 => 232,  445 => 231,  443 => 230,  438 => 227,  435 => 226,  428 => 217,  425 => 216,  422 => 215,  416 => 209,  413 => 208,  410 => 207,  403 => 202,  400 => 201,  393 => 195,  390 => 194,  383 => 176,  380 => 175,  377 => 174,  368 => 162,  363 => 159,  360 => 158,  354 => 221,  351 => 220,  348 => 215,  345 => 214,  341 => 211,  338 => 207,  335 => 205,  332 => 204,  329 => 201,  326 => 200,  323 => 198,  320 => 197,  317 => 194,  314 => 193,  308 => 190,  306 => 187,  305 => 186,  304 => 185,  303 => 184,  302 => 183,  300 => 182,  297 => 180,  294 => 179,  291 => 174,  288 => 173,  282 => 169,  279 => 168,  276 => 167,  273 => 158,  270 => 157,  268 => 156,  265 => 155,  260 => 150,  256 => 148,  253 => 147,  247 => 144,  244 => 143,  241 => 142,  237 => 139,  228 => 133,  225 => 132,  222 => 131,  218 => 129,  215 => 128,  209 => 126,  207 => 125,  203 => 124,  196 => 119,  190 => 117,  188 => 116,  183 => 113,  177 => 111,  175 => 110,  170 => 107,  164 => 105,  162 => 104,  153 => 97,  147 => 95,  145 => 94,  141 => 92,  135 => 89,  131 => 87,  128 => 86,  122 => 83,  118 => 81,  115 => 80,  109 => 77,  105 => 75,  102 => 74,  96 => 71,  92 => 69,  90 => 68,  85 => 65,  83 => 62,  82 => 61,  81 => 59,  79 => 58,  76 => 57,  71 => 278,  69 => 226,  65 => 224,  63 => 155,  60 => 153,  56 => 57,  54 => 56,  52 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/estore/templates/system/page.html.twig", "C:\\wamp64\\www\\kickstart-3106\\web\\themes\\estore\\templates\\system\\page.html.twig");
    }
}
