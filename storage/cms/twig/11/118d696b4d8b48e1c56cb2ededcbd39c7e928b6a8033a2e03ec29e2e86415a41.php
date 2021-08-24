<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/home/hero.htm */
class __TwigTemplate_92df3b45a92c9f6c1eeb80e564ac8270ef41fd9c4edd1cda8b362186cc9682e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "
<section id=\"hero\">
        <div class=\"uk-container\">
            ";
        // line 5
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "welcome.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "hero--site-slogan uk-text-center"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
        <div class=\"owl-theme  owl-carousel owl-carousel--hero\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 9
            echo "            <div>
                <picture>
                    <source srcset=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "course_img_webp", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" type=\"image/webp\">
                    <img data-src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "course_image_png", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" class=\"lazyload\" alt=\"\">
                </picture>
                <div class=\"hero--item-description\">
                    <div class=\"hero--item-description-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
        <div class=\"hero---scroll-to-courses\">
            <a href=\"#registration\"><img data-src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow_down.svg");
        echo "\" class=\"lazyload\" alt=\"\"></a>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  85 => 19,  75 => 15,  69 => 12,  65 => 11,  61 => 9,  57 => 8,  53 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}

<section id=\"hero\">
        <div class=\"uk-container\">
            {% component 'contenteditor' file=\"welcome.htm\" fixture=\"h1\" class=\"hero--site-slogan uk-text-center\"%}
        </div>
        <div class=\"owl-theme  owl-carousel owl-carousel--hero\">
            {% for record in records %}
            <div>
                <picture>
                    <source srcset=\"{{ record.course_img_webp.path }}\" type=\"image/webp\">
                    <img data-src=\"{{ record.course_image_png.path }}\" class=\"lazyload\" alt=\"\">
                </picture>
                <div class=\"hero--item-description\">
                    <div class=\"hero--item-description-text\">{{ record.title }}</div>
                </div>
            </div>
            {% endfor %}
        </div>
        <div class=\"hero---scroll-to-courses\">
            <a href=\"#registration\"><img data-src=\"{{ 'assets/images/arrow_down.svg'|theme }}\" class=\"lazyload\" alt=\"\"></a>
        </div>
</section>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/hero.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "component" => 5, "for" => 8);
        static $filters = array("escape" => 11, "theme" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for'],
                ['escape', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
