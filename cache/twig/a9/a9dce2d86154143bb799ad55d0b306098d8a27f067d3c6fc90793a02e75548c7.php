<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_e1f0d80aad2db1bffc9ff4b4e909f4975e0c80d95be499f1d974d242cb2c59c9 extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "c");
        echo "\">
                <span>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span> <em>";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "F");
        echo "</em> <span>";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y");
        echo "</span>
            </time>
        </span>
        ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 15
            echo "            <h4 class=\"p-name\">
                ";
            // line 16
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 17
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 19
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 22
            echo "            <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 26
            echo "        <span class=\"tags\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                echo "            <a href=\"";
                echo $this->env->getExtension('GravTwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </span>
        ";
        }
        // line 32
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 33
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 34
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 35
                echo "            ";
            } else {
                // line 36
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 37
                echo "            ";
            }
            // line 38
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
        ";
        }
        // line 40
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 46
            echo "        <div class=\"e-content\">        
            ";
            // line 47
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
        ";
            // line 49
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 50
                echo "        ";
                $context["show_prev_next"] = true;
                // line 51
                echo "        ";
            }
            // line 52
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 53
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 54
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            <p><a href=\"";
            // line 55
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('GravTwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 57
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 58
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 59
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 60
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "
                </div>
            ";
            } else {
                // line 63
                echo "                    ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
                
            ";
            }
            // line 66
            echo "            <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('GravTwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 69
            echo "        <div class=\"e-content\">
            ";
            // line 70
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>

        ";
            // line 73
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 74
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 74)->display($context);
                // line 75
                echo "        ";
            }
            // line 76
            echo "
        ";
            // line 77
            $context["show_prev_next"] = true;
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 81
            echo "
        <p class=\"prev-next\">
            ";
            // line 83
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 84
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('GravTwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "</a>
            ";
            }
            // line 86
            echo "
            ";
            // line 87
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 88
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('GravTwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 90
            echo "        </p>
    ";
        }
        // line 92
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 92,  266 => 90,  258 => 88,  256 => 87,  253 => 86,  245 => 84,  243 => 83,  239 => 81,  237 => 80,  234 => 79,  231 => 78,  229 => 77,  226 => 76,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  209 => 69,  200 => 66,  193 => 63,  186 => 60,  184 => 59,  181 => 58,  179 => 57,  172 => 55,  168 => 54,  165 => 53,  162 => 52,  159 => 51,  156 => 50,  154 => 49,  149 => 47,  146 => 46,  144 => 45,  137 => 40,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  109 => 30,  95 => 28,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  75 => 22,  66 => 19,  60 => 17,  58 => 16,  55 => 15,  53 => 14,  43 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-item h-entry">*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(900) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(300) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/*     <div class="list-blog-header">*/
/*         <span class="list-blog-date">*/
/*             <time class="dt-published" datetime="{{ page.date|date("c") }}">*/
/*                 <span>{{ page.date|date("d") }}</span> <em>{{ page.date|date("F") }}</em> <span>{{ page.date|date("Y") }}</span>*/
/*             </time>*/
/*         </span>*/
/*         {% if page.header.link %}*/
/*             <h4 class="p-name">*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                 <a href="{{ page.url }}"><i class="fa fa-angle-double-right u-url"></i></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}" class="u-url">{{ page.title }}</a>*/
/*             </h4>*/
/*         {% else %}*/
/*             <h4 class="p-name"><a href="{{ page.url }}" class="u-url">{{ page.title }}</a></h4>*/
/*         {% endif %}*/
/* */
/*         {% if page.taxonomy.tag %}*/
/*         <span class="tags">*/
/*             {% for tag in page.taxonomy.tag %}*/
/*             <a href="{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}" class="p-category">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </span>*/
/*         {% endif %}*/
/*         {% if header_image %}*/
/*             {% if header_image_file %}*/
/*                 {% set header_image_media = page.media.images[header_image_file] %}*/
/*             {% else %}*/
/*                 {% set header_image_media = page.media.images|first %}*/
/*             {% endif %}*/
/*             {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div class="list-blog-padding">*/
/* */
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         <div class="e-content">        */
/*             {{ page.content }}*/
/*         </div>*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         <div class="p-summary e-content">*/
/*             {{ page.summary }}*/
/*             <p><a href="{{ page.url }}">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>*/
/*         </div>*/
/*     {% elseif truncate %}*/
/*         <div class="p-summary e-content">*/
/*             {% if page.summary != page.content %}*/
/*                     {{ page.content|truncate(550) }}*/
/*                 </div>*/
/*             {% else %}*/
/*                     {{ page.content }}*/
/*                 */
/*             {% endif %}*/
/*             <p><a href="{{ page.url }}">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="e-content">*/
/*             {{ page.content }}*/
/*         </div>*/
/* */
/*         {% if config.plugins.comments.enabled %}*/
/*             {% include 'partials/comments.html.twig' %}*/
/*         {% endif %}*/
/* */
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/* */
/*     {% if show_prev_next %}*/
/* */
/*         <p class="prev-next">*/
/*             {% if not page.isFirst %}*/
/*                 <a class="button" href="{{ page.nextSibling.url }}"><i class="fa fa-chevron-left"></i> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>*/
/*             {% endif %}*/
/* */
/*             {% if not page.isLast %}*/
/*                 <a class="button" href="{{ page.prevSibling.url }}">{{ 'BLOG.ITEM.PREV_POST'|t }} <i class="fa fa-chevron-right"></i></a>*/
/*             {% endif %}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
