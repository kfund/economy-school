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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/reg-bottom.htm */
class __TwigTemplate_71e41d602d3facc7b89ea4f036500d251ba20a0173f9baddea26be5bf0b45a3d extends \Twig\Template
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
        $context["list"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        echo "
<section id=\"registration\">
    <a class=\"footer--logo\" href=\"#\"><img width=\"52\" height=\"48\" class=\"footer--logo-rotate\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_nav.svg");
        echo "\" alt=\"logo\">
              </a>
  <div class=\"uk-container\">
    ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["records"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "discount", [], "any", false, false, true, 8) == "1")) {
            // line 9
            echo "      <h2 class=\"registration--description\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся на онлайн навчання та отримай <span>15%</span> знижку!"]);
            echo "</h2>
    ";
        }
        // line 11
        echo "    <form>
          <select class=\"nice-select wide\">
              <option value=\"1\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вибери курс"]);
        echo "</option>
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 15) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "          </select>
          

          <button class=\"registration--registration-on-course\" type=\"submit\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Зареєструйся"]);
        echo "</button>
    </form>
    </div>
</section>
<div id=\"bg-overlay\">
  <div class=\"bg-overlay--VideoHead-popup-video-exit\">
      <div class=\"bg-overlay--VideoHead-popup-video-exit line-1\"></div>
      <div class=\"bg-overlay--VideoHead-popup-video-exit line-2\"></div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/reg-bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  105 => 17,  86 => 15,  69 => 14,  65 => 13,  61 => 11,  55 => 9,  53 => 8,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set list = builderList2.records %}

<section id=\"registration\">
    <a class=\"footer--logo\" href=\"#\"><img width=\"52\" height=\"48\" class=\"footer--logo-rotate\" src=\"{{ 'assets/images/logo_nav.svg'|theme }}\" alt=\"logo\">
              </a>
  <div class=\"uk-container\">
    {% if records[0].discount == '1' %}
      <h2 class=\"registration--description\">{{ 'Реєструйся на онлайн навчання та отримай <span>15%</span> знижку!'|_ }}</h2>
    {% endif %}
    <form>
          <select class=\"nice-select wide\">
              <option value=\"1\">{{ 'Вибери курс'|_ }}</option>
              {% for item in list %}
                <option value=\"{{ loop.index + 1 }}\">{{ item.title }}</option>
              {% endfor %}
          </select>
          

          <button class=\"registration--registration-on-course\" type=\"submit\">{{ 'Зареєструйся'|_ }}</button>
    </form>
    </div>
</section>
<div id=\"bg-overlay\">
  <div class=\"bg-overlay--VideoHead-popup-video-exit\">
      <div class=\"bg-overlay--VideoHead-popup-video-exit line-1\"></div>
      <div class=\"bg-overlay--VideoHead-popup-video-exit line-2\"></div>
  </div>
</div>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/reg-bottom.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8, "for" => 14);
        static $filters = array("theme" => 5, "_" => 9, "escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['theme', '_', 'escape'],
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
