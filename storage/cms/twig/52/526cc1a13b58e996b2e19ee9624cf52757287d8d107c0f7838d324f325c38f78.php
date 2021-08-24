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

/* C:\OpenServer\domains\economy.school/themes/economy-school/pages/404.htm */
class __TwigTemplate_9d1ab627eca9cbc3f0b5649fe41c002c5c751a2f6390e5bfd7b1457bffe7739f extends \Twig\Template
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
        echo "<main class=\"not_found\">
<div class=\"uk-container uk-container-small\">
  <h1>4<span><span class=\"footer--logo\"><img class=\"footer--logo-rotate\" width=\"52\" height=\"48\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_nav.svg");
        echo "\" alt=\"logo\" style=\"transform: rotate(-0.495372rad);\">
        </span></span>4</h1>
  <h2>Error: 404 page not found</h2>
  <p>Sorry, the page you're looking for cannot be accessed</p>
<a href=\"../\" class=\"main-button\"> Back to home </a>
</div>
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"not_found\">
<div class=\"uk-container uk-container-small\">
  <h1>4<span><span class=\"footer--logo\"><img class=\"footer--logo-rotate\" width=\"52\" height=\"48\" src=\"{{ 'assets/images/logo_nav.svg'|theme }}\" alt=\"logo\" style=\"transform: rotate(-0.495372rad);\">
        </span></span>4</h1>
  <h2>Error: 404 page not found</h2>
  <p>Sorry, the page you're looking for cannot be accessed</p>
<a href=\"../\" class=\"main-button\"> Back to home </a>
</div>
</main>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/404.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
