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

/* C:\OpenServer\domains\economy.school/themes/economy-school/pages/post.htm */
class __TwigTemplate_c8811f4fd41dcbeb2d48be93c1b0521bc5829cb08d4ffcf5645a42b6aea51277 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["list"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        echo "
<section id=\"post-content\">
        <div class=\"uk-container\">
            <div class=\"post-info\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tags", [], "any", false, false, true, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 8
            echo "                <div class=\"small-description post-info__category\">
                    <a href=\"#\">";
            // line 9
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, true, 9), 9, $this->source)]);
            echo "</a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                <span class=\"info__date\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</span>
            </div>
            <h1 class=\"main-title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"post-content__grid container-xl\">
            <div class=\"sidebar-left\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "discount", [], "any", false, false, true, 18) == "1")) {
            // line 19
            echo "                
                    <div class=\"uk-card uk-card-default\">
                        <div class=\"uk-card-media-top\">
                            <img src=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/post/left-sidebar.jpg");
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"uk-card-body\">
                            <h3 class=\"card-title\">";
            // line 25
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cкидка 15% для онлайн курсів"]);
            echo "</h3>
                            <a href=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reg-form");
            echo "\" class=\"main-button\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
            echo "</a>
                        </div>
                    </div>
                
            ";
        }
        // line 31
        echo "            </div>
            <div class=\"article\">
                <div class=\"post-content__grid--main-description\">
                    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "short_descr", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</p>
                </div>
                <div class=\"post-content__grid--main-picture\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "post_image_inner", [], "any", false, false, true, 37), "path", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"main-picture--source\">";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "image_source", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</div>
                </div>
                <div class=\"post-content__grid--article\">
                    <p> ";
        // line 41
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "paragraph_1", [], "any", false, false, true, 41), 41, $this->source);
        echo " </p>

                    <p> ";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "paragraph_2", [], "any", false, false, true, 43), 43, $this->source);
        echo " </p>
                </div>
                ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "video_link", [], "any", false, false, true, 45)) {
            // line 46
            echo "                <div class=\"post-content__grid--video\">
                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/";
            // line 47
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "video_link", [], "any", false, false, true, 47), 47, $this->source);
            echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                </div>
                ";
        }
        // line 50
        echo "                <div class=\"post-content__grid--article-details\">
                    <h2 class=\"secondary-title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "article_1_title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"post-content__grid--article\">
                    <p>";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "article_1_text", [], "any", false, false, true, 54), 54, $this->source);
        echo "</p>
                </div>
                <div class=\"post-content__grid--article-details\">
                    <h2 class=\"secondary-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "article_2_title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"post-content__grid--article\">
                    <p>";
        // line 60
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "article_2_text", [], "any", false, false, true, 60), 60, $this->source);
        echo "</p>
                </div>
                <div class=\"post-content__grid--categories\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tags", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 64
            echo "                        <div class=\"small-description\">
                            <a href=\"#\">";
            // line 65
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </div>
                <ul class=\"socials socials-hovering\">
                    <a href=\"#\" class=\"facebook\">
                    </a>
                    <a href=\"#\" class=\"linkedin\">
                    </a>
                    <a href=\"#\" class=\"twitter\">
                    </a>
                </ul>
            </div>
            <div class=\"sidebar-right\">
                <ul class=\"socials\">
                    <li>
                        <a href=\"#\"><img width=\"13\" height=\"25\" src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Facebook-black.svg");
        echo "\" alt=\"Facebook\"> </a>

                    </li>
                    <li class=\"linkedin\">
                        <a href=\"#\"><img width=\"25\" height=\"25\" src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-black.svg");
        echo "\" alt=\"linkedin\"> </a>
                    </li>
                    <li>
                        <a href=\"#\"> <img width=\"25\" height=\"25\" src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Twitter-black.svg");
        echo "\" alt=\"Twitter\">
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <div class=\"post-content__other\">
            <h1 class=\"slider-title\">Тематичні новини</h1>
            <div class=\"swiper-container mySwiper\">
                <div class=\"swiper-wrapper\">
                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tags", [], "any", false, false, true, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 100
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 101
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 101) == twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 101))) {
                    // line 102
                    echo "                            
                            ";
                } else {
                    // line 104
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, true, 104) == twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "tags", [], "any", false, false, true, 104)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "slug", [], "any", false, false, true, 104))) {
                        // line 105
                        echo "                                    <a href=\"/post/";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                        echo "\" class=\"swiper-slide\">
                                        <div>
                                            <img src=\"";
                        // line 107
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "post_image", [], "any", false, false, true, 107), "path", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo "\" alt=\"\">
                                            <div class=\"uk-overlay-default uk-position-cover\"></div>
                                            <div class=\"uk-overlay uk-position-top uk-dark\">
                                                <div class=\"post-info\">
                                                    <div class=\"small-description post-info__category\">
                                                        <span href=\"/posts/";
                        // line 112
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                        echo "</span>
                                                    </div>
                                                    <span class=\"info__date\">";
                        // line 114
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                        echo "</span>
                                                </div>
                                                <p>";
                        // line 116
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "short_descr", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                        echo "</p>
                                            </div>
                                        </div>
                                    </a>
                                ";
                    }
                    // line 121
                    echo "                            ";
                }
                // line 122
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                </div>
        
            </div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </section>

    ";
        // line 131
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reg-bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 132
        echo "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(\".mySwiper\", {
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                    formatFractionCurrent: function(number) {
                        return number;
                    },
                    formatFractionTotal: function(number) {
                        return number;
                    },
                    renderFraction: function(currentClass, totalClass) {
                        return '<span class=\"' + currentClass + '\"></span>' +
                            '<span class=\"line\"></span>' +
                            '<span class=\"' + totalClass + '\"></span>';
                    }
                },
                navigation: {
                    nextEl: \".swiper-button-next\",
                    prevEl: \".swiper-button-prev\",
                },
                slidesPerView: \"auto\",
                spaceBetween: 15,
            });
        });
    </script>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 132,  311 => 131,  302 => 124,  296 => 123,  290 => 122,  287 => 121,  279 => 116,  274 => 114,  267 => 112,  259 => 107,  253 => 105,  250 => 104,  246 => 102,  243 => 101,  238 => 100,  234 => 99,  220 => 88,  214 => 85,  207 => 81,  192 => 68,  183 => 65,  180 => 64,  176 => 63,  170 => 60,  164 => 57,  158 => 54,  152 => 51,  149 => 50,  143 => 47,  140 => 46,  138 => 45,  133 => 43,  128 => 41,  122 => 38,  118 => 37,  112 => 34,  107 => 31,  97 => 26,  93 => 25,  85 => 22,  80 => 19,  78 => 18,  71 => 14,  65 => 12,  56 => 9,  53 => 8,  49 => 7,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set list = builderList.records %}

<section id=\"post-content\">
        <div class=\"uk-container\">
            <div class=\"post-info\">
                {% for tag in record.tags %}
                <div class=\"small-description post-info__category\">
                    <a href=\"#\">{{ tag.title|_ }}</a>
                </div>
                {% endfor %}
                <span class=\"info__date\">{{ record.date }}</span>
            </div>
            <h1 class=\"main-title\">{{ record.title }}</h1>
        </div>
        <div class=\"post-content__grid container-xl\">
            <div class=\"sidebar-left\">
            {% if record.discount == '1' %}
                
                    <div class=\"uk-card uk-card-default\">
                        <div class=\"uk-card-media-top\">
                            <img src=\"{{ 'assets/images/post/left-sidebar.jpg'|theme }}\" alt=\"{{ record.title }}\">
                        </div>
                        <div class=\"uk-card-body\">
                            <h3 class=\"card-title\">{{ 'Cкидка 15% для онлайн курсів'|_ }}</h3>
                            <a href=\"{{ 'reg-form'|page }}\" class=\"main-button\">{{ 'Реєструйся'|_ }}</a>
                        </div>
                    </div>
                
            {% endif %}
            </div>
            <div class=\"article\">
                <div class=\"post-content__grid--main-description\">
                    <p>{{ record.short_descr }}</p>
                </div>
                <div class=\"post-content__grid--main-picture\">
                    <img src=\"{{ record.post_image_inner.path }}\" alt=\"\">
                    <div class=\"main-picture--source\">{{ record.image_source }}</div>
                </div>
                <div class=\"post-content__grid--article\">
                    <p> {{ record.paragraph_1|raw }} </p>

                    <p> {{ record.paragraph_2|raw }} </p>
                </div>
                {% if record.video_link %}
                <div class=\"post-content__grid--video\">
                    <iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/{{ record.video_link|raw }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                </div>
                {% endif %}
                <div class=\"post-content__grid--article-details\">
                    <h2 class=\"secondary-title\">{{ record.article_1_title }}</h2>
                </div>
                <div class=\"post-content__grid--article\">
                    <p>{{ record.article_1_text|raw }}</p>
                </div>
                <div class=\"post-content__grid--article-details\">
                    <h2 class=\"secondary-title\">{{ record.article_2_title }}</h2>
                </div>
                <div class=\"post-content__grid--article\">
                    <p>{{ record.article_2_text|raw }}</p>
                </div>
                <div class=\"post-content__grid--categories\">
                    {% for tag in record.tags %}
                        <div class=\"small-description\">
                            <a href=\"#\">{{ tag.title }}</a>
                        </div>
                    {% endfor %}
                </div>
                <ul class=\"socials socials-hovering\">
                    <a href=\"#\" class=\"facebook\">
                    </a>
                    <a href=\"#\" class=\"linkedin\">
                    </a>
                    <a href=\"#\" class=\"twitter\">
                    </a>
                </ul>
            </div>
            <div class=\"sidebar-right\">
                <ul class=\"socials\">
                    <li>
                        <a href=\"#\"><img width=\"13\" height=\"25\" src=\"{{ 'assets/images/Facebook-black.svg'|theme }}\" alt=\"Facebook\"> </a>

                    </li>
                    <li class=\"linkedin\">
                        <a href=\"#\"><img width=\"25\" height=\"25\" src=\"{{ 'assets/images/linkedin-black.svg'|theme }}\" alt=\"linkedin\"> </a>
                    </li>
                    <li>
                        <a href=\"#\"> <img width=\"25\" height=\"25\" src=\"{{ 'assets/images/Twitter-black.svg'|theme }}\" alt=\"Twitter\">
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <div class=\"post-content__other\">
            <h1 class=\"slider-title\">Тематичні новини</h1>
            <div class=\"swiper-container mySwiper\">
                <div class=\"swiper-wrapper\">
                    {% for tag in record.tags %}
                        {% for item in list %}
                            {% if item.title == record.title %}
                            
                            {% else %}
                                {% if tag.slug == item.tags[0].slug %}
                                    <a href=\"/post/{{ item.id }}\" class=\"swiper-slide\">
                                        <div>
                                            <img src=\"{{ item.post_image.path }}\" alt=\"\">
                                            <div class=\"uk-overlay-default uk-position-cover\"></div>
                                            <div class=\"uk-overlay uk-position-top uk-dark\">
                                                <div class=\"post-info\">
                                                    <div class=\"small-description post-info__category\">
                                                        <span href=\"/posts/{{ item.id }}\">{{ item.title }}</span>
                                                    </div>
                                                    <span class=\"info__date\">{{ item.date }}</span>
                                                </div>
                                                <p>{{ item.short_descr }}</p>
                                            </div>
                                        </div>
                                    </a>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                </div>
        
            </div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </section>

    {% partial 'reg-bottom' %}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(\".mySwiper\", {
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                    formatFractionCurrent: function(number) {
                        return number;
                    },
                    formatFractionTotal: function(number) {
                        return number;
                    },
                    renderFraction: function(currentClass, totalClass) {
                        return '<span class=\"' + currentClass + '\"></span>' +
                            '<span class=\"line\"></span>' +
                            '<span class=\"' + totalClass + '\"></span>';
                    }
                },
                navigation: {
                    nextEl: \".swiper-button-next\",
                    prevEl: \".swiper-button-prev\",
                },
                slidesPerView: \"auto\",
                spaceBetween: 15,
            });
        });
    </script>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 7, "if" => 18, "partial" => 131);
        static $filters = array("_" => 9, "escape" => 12, "theme" => 22, "page" => 26, "raw" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['_', 'escape', 'theme', 'page', 'raw'],
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
