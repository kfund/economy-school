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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/course/comments.htm */
class __TwigTemplate_7ce42142110dfbb3d419d5736268c901cd20de5a70ca747ea0e3bb5f29d4cd49 extends \Twig\Template
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
<div class=\"owl-carousel students-review--owl\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 5
            echo "    <div class=\"slides\" data-count='";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 5) + 1), "html", null, true);
            echo "'>
        <div class=\"students-review--owl-card\">
            <div class=\"owl-card--header\">
                <picture>
                    <source srcset=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "photo_webp", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" type=\"image/webp\">
                    <img data-src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "photo_png", [], "any", false, false, true, 10), "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" class=\"lazyload owl-card--header-avatar\" alt=\"\">
                </picture>
                <div class=\"owl-card--header-student\">";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</div>
                <img class=\"owl-card--header-icon\" src=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/courses/heart.png");
            echo "\" alt=\"\">
            </div>
            <div class=\"owl-card--body\">";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, true, 15), 15, $this->source);
            echo "<span class=\"show-more\"> ...</span>
                <span class=\"hided\"></span>
            </div>
            <div class=\"owl-card--footer\">
                <div class=\"owl-card--footer--wrapper\">
                    <div><span class=\"uk-text-center course-category\"><span>IT</span></span>
                    </div>
                    <div>
                        <h3 class=\"owl-card--footer--wrapper-profession\">";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["record"], "courses", [], "any", false, false, true, 23)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/course/comments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  99 => 23,  88 => 15,  83 => 13,  79 => 12,  74 => 10,  70 => 9,  62 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}

<div class=\"owl-carousel students-review--owl\">
    {% for record in records %}
    <div class=\"slides\" data-count='{{ loop.index + 1 }}'>
        <div class=\"students-review--owl-card\">
            <div class=\"owl-card--header\">
                <picture>
                    <source srcset=\"{{ record.photo_webp.path }}\" type=\"image/webp\">
                    <img data-src=\"{{ record.photo_png.path }}\" class=\"lazyload owl-card--header-avatar\" alt=\"\">
                </picture>
                <div class=\"owl-card--header-student\">{{ record.name }}</div>
                <img class=\"owl-card--header-icon\" src=\"{{ 'assets/images/courses/heart.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"owl-card--body\">{{ record.text|raw }}<span class=\"show-more\"> ...</span>
                <span class=\"hided\"></span>
            </div>
            <div class=\"owl-card--footer\">
                <div class=\"owl-card--footer--wrapper\">
                    <div><span class=\"uk-text-center course-category\"><span>IT</span></span>
                    </div>
                    <div>
                        <h3 class=\"owl-card--footer--wrapper-profession\">{{ record.courses[0].title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
</div>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/course/comments.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4);
        static $filters = array("escape" => 5, "theme" => 13, "raw" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'theme', 'raw'],
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
