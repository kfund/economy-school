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

/* C:\OpenServer\domains\economy.school/themes/economy-school/partials/home/courses.htm */
class __TwigTemplate_f04fa3a5929942acfd098264ce769c1440c1cec123dd13cbd55ba273f0957aee extends \Twig\Template
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
<section id=\"courses\">
    <div class=\"uk-container\">
        <h2 class=\"uk-text-center\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Навчальні курси"]);
        echo "</h2>
        <div class=\"courses--tabs\">
            <ul class=\"uk-tab-bottom\" uk-tab>
                <li class=\"uk-active courses--tabs--title all-course\"><a href=\"#\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Всі курси"]);
        echo "</a>
                </li>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "ctypes", [], "any", false, false, true, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 12
                echo "                <li class=\"courses--tabs--title\"><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "course_type", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
            <div class=\"courses--tabs--content active\">


                <div class=\"uk-position-relative uk-visible-toggle uk-light\" tabindex=\"-1\" uk-slider>

                    <ul class=\"uk-slider-items uk-grid\">
                        ";
        // line 22
        $context["break"] = false;
        // line 23
        echo "                        ";
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
            // line 24
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 24) >= 7)) {
                // line 25
                echo "                        ";
                $context["break"] = true;
                // line 26
                echo "                        ";
            } else {
                // line 27
                echo "                        <a class=\"uk-width-4-5\" href=\"#\">
                            <div class=\"uk-panel\">
                                <div class=\"uk-panel--card-overlay\"> </div>
                                <picture>
                                    <source srcset=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "course_img_webp", [], "any", false, false, true, 31), "path", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\" type=\"image/webp\">
                                    <img data-src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "course_image_png", [], "any", false, false, true, 32), "path", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\" class=\"lazyload\" alt=\"\">
                                </picture>
                                <div class=\"uk-position-center uk-text-center\">
                                    <p uk-slider-parallax=\"x: 200,-200\">
                                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "ctypes", [], "any", false, false, true, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 37
                    echo "                                        <span class=\"courses--type\"> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "course_type", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo " </span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                                        <span class=\"courses--free-space\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вільних місць:"]);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "free_places", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "<span>
                                    </p>
                                    <h2 uk-slider-parallax=\"x: 100,-100\">";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</h2>

                                </div>
                            </div>
                        </a>
                        ";
            }
            // line 47
            echo "                        ";
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
        // line 48
        echo "                    </ul>

                    <ul class=\"uk-slider-nav uk-dotnav\"></ul>

                </div>

            </div>

            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "ctypes", [], "any", false, false, true, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 58
                echo "            <div class=\"courses--tabs--content\">

                <div class=\"uk-position-relative uk-visible-toggle uk-light\" tabindex=\"-2\" uk-slider>

                    <ul class=\"uk-slider-items uk-grid\">
                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 64
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "ctypes", [], "any", false, false, true, 64));
                    foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                        // line 65
                        echo "                        <a class=\"uk-width-4-5\" href=\"#\">
                            <div class=\"uk-panel\">
                                <div class=\"uk-panel--card-overlay\"> </div>
                                <picture>
                                    <source srcset=\"";
                        // line 69
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "course_img_webp", [], "any", false, false, true, 69), "path", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                        echo "\" type=\"image/webp\">
                                    <img data-src=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "course_image_png", [], "any", false, false, true, 70), "path", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                        echo "\" class=\"lazyload\" alt=\"\">
                                </picture>
                                <div class=\"uk-position-center uk-text-center\">
                                    <p uk-slider-parallax=\"x: 200,-200\"><span class=\"courses--type\">";
                        // line 73
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "course_type", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        // line 74
                        echo "</span>
                                        <span class=\"courses--free-space\">";
                        // line 75
                        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вільних місць:"]);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "free_places", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                        echo "<span>
                                    </p>
                                    <h2 uk-slider-parallax=\"x: 100,-100\">";
                        // line 77
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        echo "</h2>

                                </div>
                            </div>
                        </a>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                    </ul>

                    <ul class=\"uk-slider-nav uk-dotnav\"></ul>

                </div>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
        </div>
    </div>
</section>
";
        // line 97
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 98
        echo "<script type=\"text/javascript\">
    window.onload = function () {
        let uniqueCat = [];
        \$('.uk-tab .courses--tabs--title').each(function () {
            if (uniqueCat.includes(\$(this).text())) {
                \$(this).css('display', 'none')
            }
            uniqueCat.push(\$(this).text())
        })
        \$('.uk-tab .courses--tabs--title').on('click', function (index) {
            let category = \$(this).text();
            let hideStatus = null;
            if (\$(this).attr('class').split(' ').includes('all-course')) {
                hideStatus = true;
            }
            \$('.uk-panel .courses--type').each(function () {
                if (\$(this).text() != category) {
                    \$(this).closest('a.uk-width-4-5').css('display', 'none')
                }
                else {
                    \$(this).closest('a.uk-width-4-5').css('display', 'block')
                }
                if (hideStatus) {
                    \$(this).closest('a.uk-width-4-5').css('display', 'block')
                }
            })
        })
    }
</script>
";
        // line 97
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/courses.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 97,  288 => 98,  286 => 97,  280 => 93,  274 => 92,  261 => 84,  255 => 83,  243 => 77,  236 => 75,  233 => 74,  231 => 73,  225 => 70,  221 => 69,  215 => 65,  210 => 64,  206 => 63,  199 => 58,  194 => 57,  190 => 56,  180 => 48,  166 => 47,  157 => 41,  149 => 39,  140 => 37,  136 => 36,  129 => 32,  125 => 31,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  92 => 23,  90 => 22,  81 => 15,  75 => 14,  66 => 12,  61 => 11,  57 => 10,  52 => 8,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}

<section id=\"courses\">
    <div class=\"uk-container\">
        <h2 class=\"uk-text-center\">{{ 'Навчальні курси'|_ }}</h2>
        <div class=\"courses--tabs\">
            <ul class=\"uk-tab-bottom\" uk-tab>
                <li class=\"uk-active courses--tabs--title all-course\"><a href=\"#\">{{ 'Всі курси'|_ }}</a>
                </li>
                {% for record in records %}
                {% for type in record.ctypes %}
                <li class=\"courses--tabs--title\"><a href=\"#\">{{ type.course_type }}</a></li>
                {% endfor %}
                {% endfor %}
            </ul>
            <div class=\"courses--tabs--content active\">


                <div class=\"uk-position-relative uk-visible-toggle uk-light\" tabindex=\"-1\" uk-slider>

                    <ul class=\"uk-slider-items uk-grid\">
                        {% set break = false %}
                        {% for record in records %}
                        {% if loop.index >=7 %}
                        {% set break = true %}
                        {% else %}
                        <a class=\"uk-width-4-5\" href=\"#\">
                            <div class=\"uk-panel\">
                                <div class=\"uk-panel--card-overlay\"> </div>
                                <picture>
                                    <source srcset=\"{{ record.course_img_webp.path }}\" type=\"image/webp\">
                                    <img data-src=\"{{ record.course_image_png.path }}\" class=\"lazyload\" alt=\"\">
                                </picture>
                                <div class=\"uk-position-center uk-text-center\">
                                    <p uk-slider-parallax=\"x: 200,-200\">
                                        {% for type in record.ctypes %}
                                        <span class=\"courses--type\"> {{ type.course_type }} </span>
                                        {% endfor %}
                                        <span class=\"courses--free-space\">{{ 'Вільних місць:'|_ }} {{ record.free_places }}<span>
                                    </p>
                                    <h2 uk-slider-parallax=\"x: 100,-100\">{{ record.title }}</h2>

                                </div>
                            </div>
                        </a>
                        {% endif %}
                        {% endfor %}
                    </ul>

                    <ul class=\"uk-slider-nav uk-dotnav\"></ul>

                </div>

            </div>

            {% for record in records %}
            {% for type in record.ctypes %}
            <div class=\"courses--tabs--content\">

                <div class=\"uk-position-relative uk-visible-toggle uk-light\" tabindex=\"-2\" uk-slider>

                    <ul class=\"uk-slider-items uk-grid\">
                        {% for record in records %}
                        {% for type in record.ctypes %}
                        <a class=\"uk-width-4-5\" href=\"#\">
                            <div class=\"uk-panel\">
                                <div class=\"uk-panel--card-overlay\"> </div>
                                <picture>
                                    <source srcset=\"{{ record.course_img_webp.path }}\" type=\"image/webp\">
                                    <img data-src=\"{{ record.course_image_png.path }}\" class=\"lazyload\" alt=\"\">
                                </picture>
                                <div class=\"uk-position-center uk-text-center\">
                                    <p uk-slider-parallax=\"x: 200,-200\"><span class=\"courses--type\">{{ type.course_type
                                            }}</span>
                                        <span class=\"courses--free-space\">{{ 'Вільних місць:'|_ }} {{ record.free_places }}<span>
                                    </p>
                                    <h2 uk-slider-parallax=\"x: 100,-100\">{{ record.title }}</h2>

                                </div>
                            </div>
                        </a>
                        {% endfor %}
                        {% endfor %}
                    </ul>

                    <ul class=\"uk-slider-nav uk-dotnav\"></ul>

                </div>

            </div>
            {% endfor %}
            {% endfor %}

        </div>
    </div>
</section>
{% put scripts %}
<script type=\"text/javascript\">
    window.onload = function () {
        let uniqueCat = [];
        \$('.uk-tab .courses--tabs--title').each(function () {
            if (uniqueCat.includes(\$(this).text())) {
                \$(this).css('display', 'none')
            }
            uniqueCat.push(\$(this).text())
        })
        \$('.uk-tab .courses--tabs--title').on('click', function (index) {
            let category = \$(this).text();
            let hideStatus = null;
            if (\$(this).attr('class').split(' ').includes('all-course')) {
                hideStatus = true;
            }
            \$('.uk-panel .courses--type').each(function () {
                if (\$(this).text() != category) {
                    \$(this).closest('a.uk-width-4-5').css('display', 'none')
                }
                else {
                    \$(this).closest('a.uk-width-4-5').css('display', 'block')
                }
                if (hideStatus) {
                    \$(this).closest('a.uk-width-4-5').css('display', 'block')
                }
            })
        })
    }
</script>
{% endput %}", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/partials/home/courses.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 10, "if" => 24, "put" => 97);
        static $filters = array("_" => 5, "escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'put'],
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
