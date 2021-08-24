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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/home/video-represent.htm */
class __TwigTemplate_ef4586128e7a367e79bc9639fb46a3ae6ef48bf9958890650a6861d2ba84b79a extends \Twig\Template
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
<section id=\"video-represent\">
    <div class=\"uk-container\">
        ";
        // line 5
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/video-heading.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/video-desrc.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "        <div class=\"video-iframe container-xl\">
            <div class=\"video-iframe--banner\">
                <div class=\"video-iframe--content\" data-video=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["records"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "video_link", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
                    <div class=\"target\">
                        <a href=\"#\" class=\"video__button text\" uk-parallax=\"y: 60, -100\"> ";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про курс"]);
        echo "<span> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про курс"]);
        echo "</span> <img
                                data-src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon_video.svg");
        echo "\" class=\"lazyload\" uk-parallax=\"y: 60, -100\"
                                alt=\"play video\"> </a>
                    </div>
                </div>
            </div>
            <div class=\"trailer\">
                <div class=\"cover\">

                    <div class=\"tv\">
                        <div class=\"screen\" id=\"tv\"></div>
                    </div>
                </div>
            </div>
            <div class=\"video-iframe--logo-overlay\" uk-parallax=\"y: -10, 30\">
                <img data-src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_nav.svg");
        echo "\" class=\"lazyload\" alt=\"logo over video\">
            </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/video-represent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  74 => 12,  68 => 11,  63 => 9,  59 => 7,  52 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}

<section id=\"video-represent\">
    <div class=\"uk-container\">
        {% component 'contenteditor' file=\"home/video-heading.htm\" fixture=\"h2\" %}
        {% component 'contenteditor' file=\"home/video-desrc.htm\" fixture=\"p\" %}
        <div class=\"video-iframe container-xl\">
            <div class=\"video-iframe--banner\">
                <div class=\"video-iframe--content\" data-video=\"{{ records[0].video_link }}\">
                    <div class=\"target\">
                        <a href=\"#\" class=\"video__button text\" uk-parallax=\"y: 60, -100\"> {{ 'Про курс'|_ }}<span> {{ 'Про курс'|_ }}</span> <img
                                data-src=\"{{ 'assets/images/icon_video.svg'|theme }}\" class=\"lazyload\" uk-parallax=\"y: 60, -100\"
                                alt=\"play video\"> </a>
                    </div>
                </div>
            </div>
            <div class=\"trailer\">
                <div class=\"cover\">

                    <div class=\"tv\">
                        <div class=\"screen\" id=\"tv\"></div>
                    </div>
                </div>
            </div>
            <div class=\"video-iframe--logo-overlay\" uk-parallax=\"y: -10, 30\">
                <img data-src=\"{{ 'assets/images/logo_nav.svg'|theme }}\" class=\"lazyload\" alt=\"logo over video\">
            </div>
        </div>
</section>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/video-represent.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "component" => 5);
        static $filters = array("escape" => 9, "_" => 11, "theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component'],
                ['escape', '_', 'theme'],
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
