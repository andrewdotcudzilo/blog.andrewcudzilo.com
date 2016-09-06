<?php

/* partials/base.html.twig */
class __TwigTemplate_e3ac89136cc82b5edd3f15a0c1678a49dbf9c0a4008b9ec3b9e3096b95490cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('showcase', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 81
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
        echo "        </div>
    </div>
    ";
        // line 84
        $this->displayBlock('bottom', $context, $blocks);
        // line 97
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 20
        echo "
        ";
        // line 21
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 22
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 23
            echo "        ";
        }
        // line 24
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 26
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/custom.js"), "method");
        // line 37
        echo "    ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 47
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 50
        $this->displayBlock('header_extra', $context, $blocks);
        // line 51
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 52
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 52)->display($context);
            // line 53
            echo "                ";
        }
        // line 54
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 50
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 54
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 55
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                ";
    }

    // line 62
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "        </section>
        ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p> <i class=\"fa fa-code\"></i> by </i><a href=\"http://www.andrewcudzilo.com\">andrewcudzilo.com</a> based on <a href=\"http://getgrav.org\">Grav</a>.</p>
        </footer>
        ";
    }

    // line 84
    public function block_bottom($context, array $blocks = array())
    {
        // line 85
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 85,  291 => 84,  281 => 71,  278 => 70,  273 => 66,  268 => 67,  266 => 66,  261 => 65,  258 => 64,  253 => 62,  249 => 56,  246 => 55,  243 => 54,  238 => 50,  231 => 57,  228 => 54,  225 => 53,  222 => 52,  219 => 51,  217 => 50,  209 => 47,  205 => 45,  202 => 44,  198 => 37,  195 => 36,  192 => 35,  189 => 34,  186 => 33,  183 => 32,  180 => 31,  176 => 28,  173 => 27,  170 => 26,  167 => 25,  164 => 24,  161 => 23,  158 => 22,  156 => 21,  153 => 20,  150 => 19,  147 => 18,  144 => 17,  141 => 16,  138 => 15,  135 => 14,  132 => 13,  124 => 38,  122 => 31,  116 => 29,  114 => 13,  109 => 11,  105 => 10,  102 => 9,  100 => 8,  92 => 7,  89 => 6,  86 => 5,  80 => 97,  78 => 84,  74 => 82,  72 => 81,  67 => 78,  65 => 70,  62 => 69,  60 => 64,  57 => 63,  55 => 62,  52 => 61,  50 => 44,  45 => 42,  42 => 41,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/* <head>*/
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png') }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}*/
/*         {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}*/
/*         {% do assets.addCss('theme://css-compiled/template.css', 101) %}*/
/*         {% do assets.addCss('theme://css/custom.css', 100) %}*/
/*         {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}*/
/*         {% do assets.addCss('theme://css/slidebars.min.css') %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery', 101) %}*/
/*         {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}*/
/*         {% do assets.addJs('theme://js/antimatter.js') %}*/
/*         {% do assets.addJs('theme://js/slidebars.min.js') %}*/
/*         {% do assets.addJs('theme://js/custom.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head %}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="header">*/
/*             <div id="logo">*/
/*                 <h3><a href="{{ base_url == '' ? '/' : base_url }}">{{ config.site.title }}</a></h3>*/
/*             </div>*/
/*             <div id="navbar">*/
/*                 {% block header_extra %}{% endblock %}*/
/*                 {% if config.plugins.langswitcher.enabled %}*/
/*                 {% include 'partials/langswitcher.html.twig' %}*/
/*                 {% endif %}*/
/*                 {% block header_navigation %}*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*                 {% endblock %}*/
/*                 <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*             </div>*/
/*         </header>*/
/*         {% endblock %}*/
/* */
/*         {% block showcase %}{% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer id="footer">*/
/*             <div class="totop">*/
/*                 <span><a href="#" id="toTop"><i class="fa fa-arrow-up"></i></a></span>*/
/*             </div>*/
/*             <p> <i class="fa fa-code"></i> by </i><a href="http://www.andrewcudzilo.com">andrewcudzilo.com</a> based on <a href="http://getgrav.org">Grav</a>.</p>*/
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
