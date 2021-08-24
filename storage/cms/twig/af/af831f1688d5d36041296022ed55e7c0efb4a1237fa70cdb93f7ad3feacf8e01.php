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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/footer.htm */
class __TwigTemplate_fef184216236432506537848ed6335c30a57dbefe2afa1c6794c050f36e86a1d extends \Twig\Template
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
        echo "<footer id=\"footer\">
    <section>
        <div class=\"uk-container\">
            <div class=\"footer--logo-links-wrapper\">
                <a class=\"footer--logo\" href=\"#\"><img width=\"52\" height=\"48\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_nav.svg");
        echo "\" alt=\"logo\">
                </a>
                <ul class=\"footer--links\">
                    <li><a href=\"#\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Договір оферти"]);
        echo "</a></li>
                    <li><a href=\"#\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Умови користування"]);
        echo "</a></li>
                    <li><a href=\"#\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Політика конфіденційності"]);
        echo "</a></li>
                    <li><a href=\"#\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Політика cookies"]);
        echo "</a></li>
                </ul>
            </div>
            <ul class=\"socials\">
                <li>
                    <a href=\"#\"> <img width=\"25\" height=\"25\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram.svg");
        echo "\" alt=\"Instagram\"> </a>
                </li>
                <li>
                    <a href=\"#\"><img width=\"25\" height=\"25\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/twitter.svg");
        echo "\" alt=\"Twitter\"> </a>
                </li>
                <li>
                    <a href=\"#\"><img width=\"13\" height=\"25\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook.svg");
        echo "\" alt=\"Facebook\"> </a>
                </li>
            </ul>

        </div>
    </section>

</footer>
<div class=\"customer-support\">
    <div class=\"customer--overlay\">
        <div class=\"customer--line\"></div>
    </div>
    <div class=\"customer--element\"></div>
</div>
</div>
<div class=\"cursor\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  77 => 19,  71 => 16,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">
    <section>
        <div class=\"uk-container\">
            <div class=\"footer--logo-links-wrapper\">
                <a class=\"footer--logo\" href=\"#\"><img width=\"52\" height=\"48\" src=\"{{ 'assets/images/logo_nav.svg'|theme }}\" alt=\"logo\">
                </a>
                <ul class=\"footer--links\">
                    <li><a href=\"#\">{{ 'Договір оферти'|_ }}</a></li>
                    <li><a href=\"#\">{{ 'Умови користування'|_ }}</a></li>
                    <li><a href=\"#\">{{ 'Політика конфіденційності'|_ }}</a></li>
                    <li><a href=\"#\">{{ 'Політика cookies'|_ }}</a></li>
                </ul>
            </div>
            <ul class=\"socials\">
                <li>
                    <a href=\"#\"> <img width=\"25\" height=\"25\" src=\"{{ 'assets/images/instagram.svg'|theme }}\" alt=\"Instagram\"> </a>
                </li>
                <li>
                    <a href=\"#\"><img width=\"25\" height=\"25\" src=\"{{ 'assets/images/twitter.svg'|theme }}\" alt=\"Twitter\"> </a>
                </li>
                <li>
                    <a href=\"#\"><img width=\"13\" height=\"25\" src=\"{{ 'assets/images/facebook.svg'|theme }}\" alt=\"Facebook\"> </a>
                </li>
            </ul>

        </div>
    </section>

</footer>
<div class=\"customer-support\">
    <div class=\"customer--overlay\">
        <div class=\"customer--line\"></div>
    </div>
    <div class=\"customer--element\"></div>
</div>
</div>
<div class=\"cursor\"></div>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5, "_" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', '_'],
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
