<?php

/* partials/relatedpages.html.twig */
class __TwigTemplate_400a692fdae15d0b0964df6cef2341fd6ffc53f976a966f5cfa465fbb52c975d extends Twig_Template
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
        echo "<ul class=\"related-pages\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related_pages"]) ? $context["related_pages"] : null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "pages", array(), "array"), "get", array(0 => $context["related_path"]), "method");
            // line 4
            echo "        ";
            if ((isset($context["related"]) ? $context["related"] : null)) {
                // line 5
                echo "            <li>
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "show_score", array())) {
                    // line 7
                    echo "                    <span class=\"score\">";
                    echo $context["score"];
                    echo "</span>
                ";
                }
                // line 9
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "\">";
                echo $this->getAttribute((isset($context["related"]) ? $context["related"] : null), "title", array());
                echo "</a>
            </li>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 12,  43 => 9,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="related-pages">*/
/*     {% for related_path, score in related_pages %}*/
/*         {% set related = grav['pages'].get(related_path) %}*/
/*         {% if related %}*/
/*             <li>*/
/*                 {% if config.plugins.relatedpages.show_score %}*/
/*                     <span class="score">{{ score }}</span>*/
/*                 {% endif %}*/
/*                 <a href="{{ related.url }}" title="{{ related.title }}">{{ related.title }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </ul>*/
