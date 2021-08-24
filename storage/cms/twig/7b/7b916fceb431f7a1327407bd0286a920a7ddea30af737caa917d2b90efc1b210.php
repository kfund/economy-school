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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/home/team.htm */
class __TwigTemplate_dbae99a0c5bff32b5324d0f7ff300ccd370cd07f169a2614b4c7b9d1cab8a47e extends \Twig\Template
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
        echo "<section id=\"team\">
    <div class=\"uk-container\">
        <h2 class=\"uk-text-center\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Познайомся з нашою командою"]);
        echo "</h2>
    </div>
    <div class=\"owl-carousel--team  owl-carousel  owl-theme\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 8
            echo "        <div class=\"item\">
            <div class=\"picture-wrapper\">
                <picture>
                    <source srcset=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "teacher_photo_webp", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" type=\"image/webp\">
                    <img data-src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "teacher_photo_webp", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" class=\"lazyload\" alt=\"\">
                </picture>
            </div>
            <div class=\"team--role\">
                <h3 class=\"teammate--name\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h3>
                <p class=\"teammate--rank\">";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</p>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    <div class=\"team__desk-custom\" uk-parallax=\"bgx: -600\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 24
            echo "        <div class=\"item item-coords\">
            <div class=\"picture-wrapper\">
                <picture>
                    <source srcset=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "teacher_photo_webp", [], "any", false, false, true, 27), "path", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" type=\"image/webp\">
                    <img data-src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "teacher_photo_webp", [], "any", false, false, true, 28), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\" class=\"lazyload\" alt=\"\">
                </picture>
            </div>
            <div class=\"team--role\">
                <h3 class=\"teammate--name\">";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</h3>
                <p class=\"teammate--rank\">";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</p>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "   
    </div>
    </div>
    <div class=\"uk-container\">
        ";
        // line 40
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "teachers/team-description.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = "team--description"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 41
        echo "        <div class=\"team--watch-all-team\"> <a class=\"main-button  team--action\" href=\"#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Всі викладачі"]);
        echo "</a></div>
    </div>
    </div>
    <div class=\"team--background-overlay\"> </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  129 => 40,  123 => 36,  113 => 33,  109 => 32,  102 => 28,  98 => 27,  93 => 24,  89 => 23,  85 => 21,  75 => 17,  71 => 16,  64 => 12,  60 => 11,  55 => 8,  51 => 7,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
<section id=\"team\">
    <div class=\"uk-container\">
        <h2 class=\"uk-text-center\">{{ 'Познайомся з нашою командою'|_ }}</h2>
    </div>
    <div class=\"owl-carousel--team  owl-carousel  owl-theme\">
        {% for record in records %}
        <div class=\"item\">
            <div class=\"picture-wrapper\">
                <picture>
                    <source srcset=\"{{ record.teacher_photo_webp.path }}\" type=\"image/webp\">
                    <img data-src=\"{{ record.teacher_photo_webp.path }}\" class=\"lazyload\" alt=\"\">
                </picture>
            </div>
            <div class=\"team--role\">
                <h3 class=\"teammate--name\">{{ record.name }}</h3>
                <p class=\"teammate--rank\">{{ record.title }}</p>
            </div>
        </div>
        {% endfor %}
    </div>
    <div class=\"team__desk-custom\" uk-parallax=\"bgx: -600\">
        {% for record in records %}
        <div class=\"item item-coords\">
            <div class=\"picture-wrapper\">
                <picture>
                    <source srcset=\"{{ record.teacher_photo_webp.path }}\" type=\"image/webp\">
                    <img data-src=\"{{ record.teacher_photo_webp.path }}\" class=\"lazyload\" alt=\"\">
                </picture>
            </div>
            <div class=\"team--role\">
                <h3 class=\"teammate--name\">{{ record.name }}</h3>
                <p class=\"teammate--rank\">{{ record.title }}</p>
            </div>
        </div>
        {% endfor %}   
    </div>
    </div>
    <div class=\"uk-container\">
        {% component 'contenteditor' file=\"teachers/team-description.htm\" fixture=\"p\" class=\"team--description\"%}
        <div class=\"team--watch-all-team\"> <a class=\"main-button  team--action\" href=\"#\">{{ 'Всі викладачі'|_ }}</a></div>
    </div>
    </div>
    <div class=\"team--background-overlay\"> </div>
</section>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/team.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 7, "component" => 40);
        static $filters = array("_" => 4, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'component'],
                ['_', 'escape'],
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
