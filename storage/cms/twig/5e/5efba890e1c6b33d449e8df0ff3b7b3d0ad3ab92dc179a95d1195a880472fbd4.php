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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/home/posts-home.htm */
class __TwigTemplate_65d7b9cb1d9709cd049ab6e827b1c5692d15daa7940ea0693bdab61e5184bb6f extends \Twig\Template
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
        echo "<section id=\"related-posts\">
  <div class=\"uk-container\">
    <h2 class=\"uk-text-center\">Пости</h2>
    <div class=\"posts-wrapper\">
      ";
        // line 6
        $context["break"] = false;
        // line 7
        echo "      ";
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
            // line 8
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 8) >= 7)) {
                // line 9
                echo "      ";
                $context["break"] = true;
                // line 10
                echo "      ";
            } else {
                // line 11
                echo "      <a href=\"/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" class=\"post-wrapper__item overlayShow\">
        <div class=\"uk-panel--card-overlay\"> </div>
        <picture>
          <source srcset=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "post_image", [], "any", false, false, true, 14), "path", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" type=\"image/webp\">
          <img data-src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "post_image", [], "any", false, false, true, 15), "path", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" class=\"lazyload\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\">
        </picture>
        <div class=\"uk-overlay uk-position-top uk-dark\">
          <div class=\"post-info\">
            <div class=\"small-description post-info__category\">
              ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "tags", [], "any", false, false, true, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 21
                    echo "              <span href=\"#\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "</span>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </div>
            <span class=\"info__date\">";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
            </span>
          </div>
          <br><br><br><br><br>
          <p>";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</p>
        </div>
      </a>
      ";
            }
            // line 32
            echo "      ";
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
        // line 33
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/posts-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  127 => 32,  120 => 28,  113 => 24,  110 => 23,  101 => 21,  97 => 20,  87 => 15,  83 => 14,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  49 => 7,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
<section id=\"related-posts\">
  <div class=\"uk-container\">
    <h2 class=\"uk-text-center\">Пости</h2>
    <div class=\"posts-wrapper\">
      {% set break = false %}
      {% for record in records %}
      {% if loop.index >=7 %}
      {% set break = true %}
      {% else %}
      <a href=\"/post/{{ record.id }}\" class=\"post-wrapper__item overlayShow\">
        <div class=\"uk-panel--card-overlay\"> </div>
        <picture>
          <source srcset=\"{{ record.post_image.path }}\" type=\"image/webp\">
          <img data-src=\"{{ record.post_image.path }}\" class=\"lazyload\" alt=\"{{ record.title }}\">
        </picture>
        <div class=\"uk-overlay uk-position-top uk-dark\">
          <div class=\"post-info\">
            <div class=\"small-description post-info__category\">
              {% for tag in record.tags %}
              <span href=\"#\">{{ tag.title }}</span>
              {% endfor %}
            </div>
            <span class=\"info__date\">{{ record.date }}
            </span>
          </div>
          <br><br><br><br><br>
          <p>{{ record.title }}</p>
        </div>
      </a>
      {% endif %}
      {% endfor %}
    </div>
  </div>
</section>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/posts-home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 7, "if" => 8);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
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
