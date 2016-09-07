<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_2ae5415b20c8f31812bd6fb3337d730f2683f6a3ff55e2fca2d82ecf5149d025 extends Twig_Template
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
        // line 1
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 6
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.SIMPLE_SEARCH.HEADLINE");
            echo "</h4>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 11
            echo "    <h4>";
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
        }
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 15
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 16
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 17
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
</div>
";
        }
        // line 20
        echo "<div class=\"sidebar-content\">
\t<h4>Social</h4>
\t<p>
\t    <ul class=\"social-links\">
            <li><a href=\"https://github.com/andrewdotcudzilo\" target=\"_new\"><i class=\"fa fa-github\" aria-hidden=\"true\"></i> GitHub</a></li>
            <li><a href=\"https://www.facebook.com/andrew.cudzilo\"><i class=\"fa fa-facebook-square\" target=\"_new\" aria-hidden=\"true\"></i> Facebook</a></li>
            <li><a href=\"https://www.linkedin.com/in/andrewcudzilo\"><i class=\"fa fa-linkedin-square\" target=\"_new\" aria-hidden=\"true\"></i> LinkedIn</a></li>
            <li><a href=\"https://www.instagram.com/andrewcudzilo/\"><i class=\"fa fa-instagram\" target=\"_new\" aria-hidden=\"true\"></i> Instagram</a></li>
            <li><a href=\"https://twitter.com/andrewcudzilo\"><i class=\"fa fa-twitter-square\" target=\"_new\" aria-hidden=\"true\"></i> Twitter</a></li>
     \t</ul>
\t</p>
</div>
";
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 33
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 34
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 35
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 35)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 36
            echo "</div>
";
        }
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 39
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 40
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
\t";
            // line 41
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 41)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null))));
            // line 42
            echo "</div>
";
        }
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 45
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 46
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 47
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 48
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  121 => 47,  117 => 46,  114 => 45,  112 => 44,  108 => 42,  106 => 41,  102 => 40,  99 => 39,  97 => 38,  93 => 36,  91 => 35,  87 => 34,  84 => 33,  82 => 32,  68 => 20,  60 => 17,  56 => 16,  53 => 15,  51 => 14,  48 => 12,  43 => 11,  41 => 10,  37 => 8,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}*/
/* {% set new_base_url = blog.url == '/' ? '' : blog.url %}*/
/* */
/* {% if config.plugins.simplesearch.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>*/
/*     {% include 'partials/simplesearch_searchbox.html.twig' %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}*/
/*     <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>*/
/*     {% include 'partials/relatedpages.html.twig' %}*/
/* {% endif %}*/
/* {% if config.plugins.random.enabled %}*/
/* <div class="sidebar-content">*/
/* 	<h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>*/
/* 	<a class="button" href="{{ base_url }}/random"><i class="fa fa-retweet"></i> {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>*/
/* </div>*/
/* {% endif %}*/
/* <div class="sidebar-content">*/
/* 	<h4>Social</h4>*/
/* 	<p>*/
/* 	    <ul class="social-links">*/
/*             <li><a href="https://github.com/andrewdotcudzilo" target="_new"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a></li>*/
/*             <li><a href="https://www.facebook.com/andrew.cudzilo"><i class="fa fa-facebook-square" target="_new" aria-hidden="true"></i> Facebook</a></li>*/
/*             <li><a href="https://www.linkedin.com/in/andrewcudzilo"><i class="fa fa-linkedin-square" target="_new" aria-hidden="true"></i> LinkedIn</a></li>*/
/*             <li><a href="https://www.instagram.com/andrewcudzilo/"><i class="fa fa-instagram" target="_new" aria-hidden="true"></i> Instagram</a></li>*/
/*             <li><a href="https://twitter.com/andrewcudzilo"><i class="fa fa-twitter-square" target="_new" aria-hidden="true"></i> Twitter</a></li>*/
/*      	</ul>*/
/* 	</p>*/
/* </div>*/
/* {% if config.plugins.taxonomylist.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>*/
/*     {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.archives.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>*/
/* 	{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.feed.enabled %}*/
/* <div class="sidebar-content syndicate">*/
/*     <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>*/
/*     <a class="button" href="{{ feed_url }}.atom"><i class="fa fa-rss-square"></i> Atom 1.0</a>*/
/*     <a class="button" href="{{ feed_url }}.rss"><i class="fa fa-rss-square"></i> RSS</a>*/
/* </div>*/
/* {% endif %}*/
