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

/* C:\OpenServer\domains\economy.school/themes/economy-school/layouts/default.htm */
class __TwigTemplate_7e7fd7f8ec5e0b937cf11a7380524a50ac28712bef5eab51273fe4713d24bc1c extends \Twig\Template
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
<!DOCTYPE html>
";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "url", [], "any", false, false, true, 4) == "/")) {
            // line 5
            echo "    <html lang=\"en\" class=\"homepage\">
";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["this"] ?? null), "page", [], "any", false, false, true, 6), "url", [], "any", false, false, true, 6) == "/course/:slug") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "url", [], "any", false, false, true, 6) == "/frontend_course"))) {
            // line 7
            echo "    <html lang=\"en\" class=\"courses front\">
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["this"] ?? null), "page", [], "any", false, false, true, 8), "url", [], "any", false, false, true, 8) == "/posts")) {
            // line 9
            echo "    <html lang=\"en\" class=\"news front\">
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["this"] ?? null), "page", [], "any", false, false, true, 10), "url", [], "any", false, false, true, 10) == "/contacts")) {
            // line 11
            echo "    <html lang=\"en\" class=\"contacts front\">
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["this"] ?? null), "page", [], "any", false, false, true, 12), "url", [], "any", false, false, true, 12) == "/reg-form")) {
            // line 13
            echo "    <html lang=\"en\" class=\"registration front\">
";
        } else {
            // line 15
            echo "    <html lang=\"en\" class=\"post\">
";
        }
        // line 17
        echo "<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"Courses site\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#317EFB\" />
    <title>";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"icon\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/logo_.ico");
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"#\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/owlcarousel/owl.carousel.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/owlcarousel/owl.theme.default.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\" />
    <link rel='stylesheet' href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 32
        echo "</head>

    <body>

        <!-- Header -->
        <a class=\"skip-link\" href=\"#maincontent\">Skip to main</a>
    <div class=\"header-padding\"> </div>
    <div class=\"header-wrapper\">
        <header class=\"header\">
            <div>
                ";
        // line 42
        if ((($context["activeLocale"] ?? null) == "ua")) {
            // line 43
            echo "                <a href=\"../\" class=\"header--logo\"> <img width=\"52\" height=\"48\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
            echo "\" alt=\"logo\"> <span> <span>школа</span> <span>креативної</span> <span>економіки</span></span>
                </a>
                ";
        } else {
            // line 46
            echo "                <a href=\"../\" class=\"header--logo\"> <img width=\"52\" height=\"48\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
            echo "\" alt=\"logo\"> <span> <span>creative</span> <span>economy</span> <span>school</span></span>
                </a>
                ";
        }
        // line 49
        echo "                
                <a href=\"#\" class=\"header--logo__nav-active\"> <img width=\"52\" height=\"48\" src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_nav.svg");
        echo "\" alt=\"logo\"> </a>
            </div>

            <ul class=\"header--lang\">
            <li class=\"lang-switcher \">";
        // line 54
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
            </ul>
            <div class=\"header--burger\">
                <div id=\"menu-toggle\" class=\"burger--btn\">
                    <div class=\"header--burger-text\">";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Меню"]);
        echo "</div>
                    <div id=\"hamburger\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div id=\"cross\">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

        </header>
        <div class=\"header--dropdown header--dropdown--modile\">
            <a class=\"header--dropdown--title main-button dropdown\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Курси"]);
        echo "</a>
            <div class=\"header--dropdown--body\" uk-dropdown=\"pos: bottom-justify\">
                <ul>
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 77
            echo "                    <li>
                        <small>";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "course_type", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo " </small>
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "courses", [], "any", false, false, true, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 80
                echo "                            <a href=\"/course/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo " </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </ul>
            </div>
        </div>
        <div class=\"header--desk-menu header--dropdown\">
            <ul class=\"header--main-links\">
                ";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/cities"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "                <li class=\"header--app-status\">Online</li>
                <li class=\"header--nav-item\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про нас"]);
        echo "</li>
                <li class=\"header--dropdown--title main-button header--nav-item dropdown btn-violet\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Курси"]);
        echo "</li>
                <li class=\"header--dropdown--body\" uk-dropdown=\"mode: click\">
                    <ul>
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 96
            echo "                        <li>
                            <small>";
            // line 97
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "course_type", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo " </small>
                                ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "courses", [], "any", false, false, true, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 99
                echo "                                    <a href=\"/course/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "</a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                    </ul>
                </li>
                <li class=\"header--dropdown--title main-button header--nav-item dropdown other\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Кар’єрні можливості"]);
        echo "</li>
                <li class=\"header--dropdown--body\" uk-dropdown=\"mode: click\">
                    <ul>
                        <li>

                            <a href=\"#\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вакансії"]);
        echo " </a>
                        </li>
                        <li>

                            <a href=\"#\">";
        // line 114
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Стажування"]);
        echo " </a>
                        </li>
                        <li>

                            <a href=\"#\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Професійне тестування"]);
        echo "</a>
                        </li>
                        <li>
                            <a href=\"/posts\">";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Корисні матеріали"]);
        echo "</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header--nav-item\"><a href=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контакти"]);
        echo "</a></li>
                <li class=\"lang-switcher dropdown\">";
        // line 126
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
            </ul>
        </div>
    </div>
    <div class=\"mobile-menu\">
        <div class=\"mobile-menu--content\">
            <a class=\"mobile-menu--content--simple--link\" href=\"#\">";
        // line 132
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про нас"]);
        echo "</a>
            <ul uk-accordion=\"multiple: true\">
                <li>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Курси"]);
        echo "</a>
                    <div class=\"uk-accordion-content courses\">
                        <ul>
                            ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 139
            echo "                                <li>
                                    <small>";
            // line 140
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "course_type", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo " </small>
                                    ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "courses", [], "any", false, false, true, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 142
                echo "                                        <a href=\"/course/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo " </a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                        </ul>
                    </div>
                </li>
                <li>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Кар’єрні можливості"]);
        echo "</a>
                    <div class=\"uk-accordion-content vacancies\">
                        <ul>
                            <li>
                                <a href=\"#\">";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вакансії"]);
        echo " </a>
                            </li>
                            <li>
    
                                <a href=\"#\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Стажування"]);
        echo " </a>
                            </li>
                            <li>
    
                                <a href=\"#\">";
        // line 162
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Професійне тестування"]);
        echo "</a>
                            </li>
                            <li>
                                <a href=\"/posts\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Корисні матеріали"]);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a class=\"mobile-menu--content--simple--link\" href=\"";
        // line 171
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контакти"]);
        echo "</a>
        </div>
        <div class=\"mobile-menu--footer\">
            <div>
                <p>";
        // line 175
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Виберіть місто"]);
        echo "</p>
                <div class=\"mobile-menu--footer--dropdown\">
                        ";
        // line 177
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/cities-mobile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 178
        echo "                </div>
            </div>
            <div>
                <p>";
        // line 181
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ми в соц. мережах"]);
        echo "</p>
                <ul class=\"mobile-menu--footer--social\">
                    <li>
                        <a href=\"#\"> <img width=\"25\" height=\"25\" src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Instagram.svg");
        echo "\" alt=\"Instagram\"> </a>
                    </li>
                    <li>
                        <a href=\"#\"><img width=\"25\" height=\"25\" src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Twitter.svg");
        echo "\" alt=\"Twitter\"> </a>
                    </li>
                    <li>
                        <a href=\"#\"><img width=\"13\" height=\"25\" src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Facebook.svg");
        echo "\" alt=\"Facebook\"> </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class=\"menu-bg\"> </div>

    <!-- Header -->

        <!-- Content -->
        ";
        // line 202
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 203
        echo "
        <!-- Footer -->
        ";
        // line 205
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 206
        echo "
        <!-- Scripts -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/gsap\"></script>
        
        
        <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>

        <script src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/lazy.min.js");
        echo "\"></script>
        <script src=\"";
        // line 215
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/uikit.min.js");
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/videoapi.js");
        echo "\"></script>
        <script src=\"";
        // line 218
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/owlcarousel/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/jquery.nice-select.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 220
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
        
        ";
        // line 222
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 223
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 224
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 224,  526 => 223,  515 => 222,  510 => 220,  506 => 219,  502 => 218,  498 => 217,  493 => 215,  489 => 214,  479 => 206,  475 => 205,  471 => 203,  469 => 202,  454 => 190,  448 => 187,  442 => 184,  436 => 181,  431 => 178,  427 => 177,  422 => 175,  413 => 171,  404 => 165,  398 => 162,  391 => 158,  384 => 154,  377 => 150,  371 => 146,  364 => 144,  353 => 142,  349 => 141,  345 => 140,  342 => 139,  338 => 138,  332 => 135,  326 => 132,  315 => 126,  309 => 125,  302 => 121,  296 => 118,  289 => 114,  282 => 110,  274 => 105,  270 => 103,  263 => 101,  252 => 99,  248 => 98,  244 => 97,  241 => 96,  237 => 95,  231 => 92,  227 => 91,  224 => 90,  220 => 89,  213 => 84,  206 => 82,  195 => 80,  191 => 79,  187 => 78,  184 => 77,  180 => 76,  174 => 73,  156 => 58,  147 => 54,  140 => 50,  137 => 49,  130 => 46,  123 => 43,  121 => 42,  109 => 32,  106 => 31,  102 => 30,  97 => 28,  93 => 27,  88 => 25,  82 => 22,  75 => 17,  71 => 15,  67 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}

<!DOCTYPE html>
{% if this.page.url == '/' %}
    <html lang=\"en\" class=\"homepage\">
{% elseif this.page.url == '/course/:slug' or this.page.url == '/frontend_course' %}
    <html lang=\"en\" class=\"courses front\">
{% elseif this.page.url == '/posts' %}
    <html lang=\"en\" class=\"news front\">
{% elseif this.page.url == '/contacts' %}
    <html lang=\"en\" class=\"contacts front\">
{% elseif this.page.url == '/reg-form' %}
    <html lang=\"en\" class=\"registration front\">
{% else %}
    <html lang=\"en\" class=\"post\">
{% endif %}
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"Courses site\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#317EFB\" />
    <title>{{ this.page.title }}</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"icon\" href=\"{{ 'assets/logo_.ico'|theme }}\">
    <link rel=\"apple-touch-icon\" href=\"#\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/owlcarousel/owl.carousel.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/owlcarousel/owl.theme.default.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\" />
    <link rel='stylesheet' href=\"{{ 'assets/css/main.css'|theme }}\">
    {% styles %}
</head>

    <body>

        <!-- Header -->
        <a class=\"skip-link\" href=\"#maincontent\">Skip to main</a>
    <div class=\"header-padding\"> </div>
    <div class=\"header-wrapper\">
        <header class=\"header\">
            <div>
                {% if activeLocale == 'ua' %}
                <a href=\"../\" class=\"header--logo\"> <img width=\"52\" height=\"48\" src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"logo\"> <span> <span>школа</span> <span>креативної</span> <span>економіки</span></span>
                </a>
                {% else %}
                <a href=\"../\" class=\"header--logo\"> <img width=\"52\" height=\"48\" src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"logo\"> <span> <span>creative</span> <span>economy</span> <span>school</span></span>
                </a>
                {% endif %}
                
                <a href=\"#\" class=\"header--logo__nav-active\"> <img width=\"52\" height=\"48\" src=\"{{ 'assets/images/logo_nav.svg'|theme }}\" alt=\"logo\"> </a>
            </div>

            <ul class=\"header--lang\">
            <li class=\"lang-switcher \">{% component 'localePicker' %}</li>
            </ul>
            <div class=\"header--burger\">
                <div id=\"menu-toggle\" class=\"burger--btn\">
                    <div class=\"header--burger-text\">{{ 'Меню'|_ }}</div>
                    <div id=\"hamburger\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div id=\"cross\">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

        </header>
        <div class=\"header--dropdown header--dropdown--modile\">
            <a class=\"header--dropdown--title main-button dropdown\">{{ 'Курси'|_ }}</a>
            <div class=\"header--dropdown--body\" uk-dropdown=\"pos: bottom-justify\">
                <ul>
                    {% for record in records %}
                    <li>
                        <small>{{ record.course_type }} </small>
                        {% for course in record.courses %}
                            <a href=\"/course/{{ course.slug }}\">{{ course.title }} </a>
                        {% endfor %}
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"header--desk-menu header--dropdown\">
            <ul class=\"header--main-links\">
                {% partial 'home/cities' %}
                <li class=\"header--app-status\">Online</li>
                <li class=\"header--nav-item\">{{ 'Про нас'|_ }}</li>
                <li class=\"header--dropdown--title main-button header--nav-item dropdown btn-violet\">{{ 'Курси'|_ }}</li>
                <li class=\"header--dropdown--body\" uk-dropdown=\"mode: click\">
                    <ul>
                        {% for record in records %}
                        <li>
                            <small>{{ record.course_type }} </small>
                                {% for course in record.courses %}
                                    <a href=\"/course/{{ course.slug }}\">{{ course.title }}</a>
                                {% endfor %}
                        </li>
                        {% endfor %}
                    </ul>
                </li>
                <li class=\"header--dropdown--title main-button header--nav-item dropdown other\">{{ 'Кар’єрні можливості'|_ }}</li>
                <li class=\"header--dropdown--body\" uk-dropdown=\"mode: click\">
                    <ul>
                        <li>

                            <a href=\"#\">{{ 'Вакансії'|_ }} </a>
                        </li>
                        <li>

                            <a href=\"#\">{{ 'Стажування'|_ }} </a>
                        </li>
                        <li>

                            <a href=\"#\">{{ 'Професійне тестування'|_ }}</a>
                        </li>
                        <li>
                            <a href=\"/posts\">{{ 'Корисні матеріали'|_ }}</a>
                        </li>
                    </ul>
                </li>
                <li class=\"header--nav-item\"><a href=\"{{ 'contacts'|page }}\">{{ 'Контакти'|_ }}</a></li>
                <li class=\"lang-switcher dropdown\">{% component 'localePicker' %}</li>
            </ul>
        </div>
    </div>
    <div class=\"mobile-menu\">
        <div class=\"mobile-menu--content\">
            <a class=\"mobile-menu--content--simple--link\" href=\"#\">{{ 'Про нас'|_ }}</a>
            <ul uk-accordion=\"multiple: true\">
                <li>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ 'Курси'|_ }}</a>
                    <div class=\"uk-accordion-content courses\">
                        <ul>
                            {% for record in records %}
                                <li>
                                    <small>{{ record.course_type }} </small>
                                    {% for course in record.courses %}
                                        <a href=\"/course/{{ course.slug }}\">{{ course.title }} </a>
                                    {% endfor %}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </li>
                <li>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ 'Кар’єрні можливості'|_ }}</a>
                    <div class=\"uk-accordion-content vacancies\">
                        <ul>
                            <li>
                                <a href=\"#\">{{ 'Вакансії'|_ }} </a>
                            </li>
                            <li>
    
                                <a href=\"#\">{{ 'Стажування'|_ }} </a>
                            </li>
                            <li>
    
                                <a href=\"#\">{{ 'Професійне тестування'|_ }}</a>
                            </li>
                            <li>
                                <a href=\"/posts\">{{ 'Корисні матеріали'|_ }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a class=\"mobile-menu--content--simple--link\" href=\"{{ 'contacts'|page }}\">{{ 'Контакти'|_ }}</a>
        </div>
        <div class=\"mobile-menu--footer\">
            <div>
                <p>{{ 'Виберіть місто'|_ }}</p>
                <div class=\"mobile-menu--footer--dropdown\">
                        {% partial 'home/cities-mobile' %}
                </div>
            </div>
            <div>
                <p>{{ 'Ми в соц. мережах'|_ }}</p>
                <ul class=\"mobile-menu--footer--social\">
                    <li>
                        <a href=\"#\"> <img width=\"25\" height=\"25\" src=\"{{ 'assets/images/Instagram.svg'|theme }}\" alt=\"Instagram\"> </a>
                    </li>
                    <li>
                        <a href=\"#\"><img width=\"25\" height=\"25\" src=\"{{ 'assets/images/Twitter.svg'|theme }}\" alt=\"Twitter\"> </a>
                    </li>
                    <li>
                        <a href=\"#\"><img width=\"13\" height=\"25\" src=\"{{ 'assets/images/Facebook.svg'|theme }}\" alt=\"Facebook\"> </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class=\"menu-bg\"> </div>

    <!-- Header -->

        <!-- Content -->
        {% page %}

        <!-- Footer -->
        {% partial 'footer' %}

        <!-- Scripts -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\" integrity=\"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/gsap\"></script>
        
        
        <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>

        <script src=\"{{ 'assets/lazy.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/uikit.min.js'|theme }}\"></script>

        <script type=\"text/javascript\" src=\"{{ 'assets/videoapi.js'|theme }}\"></script>
        <script src=\"{{ 'assets/owlcarousel/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/jquery.nice-select.min.js'|theme }}\"></script>
        <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
        
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4, "styles" => 31, "component" => 54, "for" => 76, "partial" => 89, "page" => 202, "framework" => 222, "scripts" => 223);
        static $filters = array("escape" => 22, "theme" => 25, "_" => 58, "page" => 125);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'styles', 'component', 'for', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme', '_', 'page'],
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
