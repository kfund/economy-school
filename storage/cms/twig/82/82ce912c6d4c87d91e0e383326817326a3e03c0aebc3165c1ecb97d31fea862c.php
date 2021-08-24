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

/* C:\OpenServer\domains\economy.school/themes/economy-school/pages/course.htm */
class __TwigTemplate_e332a9ab84df3859c3f6a95f9f81680a97bc33f8ca2b1fcb36388a190a189cfb extends \Twig\Template
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
        echo "<section id=\"hero\">
        <div class=\"uk-container uk-container-small \">
            <div class=\"hero--left-side\">
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "ctypes", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 6
            echo "                        <span class=\"hero--courses-mark\"> <span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "course_type", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</span> </span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "                <h1 class=\"hero--site-slogan uk-text-left \"><span class=\"hero--site-slogan-padding\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</span> course</h1>
                <p class=\"hero--description\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "short_descr", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
                <div class=\"hero--left-side--regisration \">
                    <div class=\"hero--regisration-gray-bg\">
                        <!-- date when courses started in element with class \"end-course\" dataset f ex: years - XXXX , month - XX ...-->
                        <p class=\"end-course\" data-years=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "start_date", [], "any", false, false, true, 13), 13, $this->source), "Y"), "html", null, true);
        echo "\" data-month=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "start_date", [], "any", false, false, true, 13), 13, $this->source), "m"), "html", null, true);
        echo "\" data-days=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "start_date", [], "any", false, false, true, 13), 13, $this->source), "d"), "html", null, true);
        echo "\" data-hours=\"00\" data-minutes=\"00\" data-seconds=\"00\"> Реєстрація на курс закінчиться через</p>
                        <div class=\"left-side--regisration-time-wrapper\">
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"days time-wrapper--number\"> 00</div>
                                <div class=\"time-wrapper--text\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["днів"]);
        echo "</div>
                            </div>
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"hours time-wrapper--number\">12</div>
                                <div class=\"time-wrapper--text\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["годин"]);
        echo "</div>
                            </div>
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"minutes time-wrapper--number\">13</div>
                                <div class=\"time-wrapper--text\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["хвилин"]);
        echo "</div>
                            </div>
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"seconds time-wrapper--number\">36</div>
                                <div class=\"time-wrapper--text\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["секунд"]);
        echo "</div>
                            </div>
                        </div>
                        <p class=\"registration--free-space\"> Вільних місць залишилось у наборі</p>
                        <div class=\"registration--number-of-free-space\">";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "free_places", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"registration--footer\"> <a href=\"/reg-form\">Реєструйся</a> </div>
                </div>
                ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "discount", [], "any", false, false, true, 37) == "1")) {
            // line 38
            echo "                    <div class=\"hero--post-description\"> <span class=\"hero--post-description--attention orange-attention\"><span>!</span></span>
                        <p>Реєструйся на онлайн навчання та отримай <span>15%</span> знижку!</p>
                    </div>
                ";
        }
        // line 42
        echo "            </div>
            <div class=\"hero--right-side\" style=\"background-image: url(";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "course_image_inner", [], "any", false, false, true, 43), "path", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ")\">

            </div>
        </div>
    </section>
    <section id=\"mobile-navigation\">
        <div class=\"uk-container uk-container-small \">
            <div class=\"mobile-navigation-wrapper\">
                <div class=\"header--burger\">
                    <div id=\"menu-toggle\" class=\"burger--btn\">
                        <div id=\"hamburger\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <span>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Навігація"]);
        echo "</span>
                </div>
                <ul class=\"mobile-navigation--list\">
                    <li>
                        <a href=\"#course-for\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Для кого курс"]);
        echo " </a>
                    </li>
                    <li>
                        <a href=\"#video-represent\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Навіщо курс"]);
        echo " </a>
                    </li>
                    <li>
                        <a href=\"#course-program\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Програма курсів"]);
        echo " </a>
                    </li>
                    <li>
                        <a href=\"#course-technology\">";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Технології"]);
        echo " </a>
                    </li>
                    <li>
                        <a href=\"#course-price\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ціна"]);
        echo " </a>
                    </li>
                    <li>
                        <a href=\"#students-review\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Відгуки"]);
        echo " </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id=\"course-for\">
        <div class=\"uk-container uk-container-small \">
            <h2>";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Для кого курс"]);
        echo "</h2>
            <p>";
        // line 87
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "for_whom", [], "any", false, false, true, 87), 87, $this->source);
        echo "</p>
            <div class=\"course-for--numbers-achievement\">
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "st_years", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "+</div>
                    <div class=\"numbers-achievement--wrapper-description\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Років практики в онлайн та офлайн навчанні"]);
        echo "
                    </div>
                </div>
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "st_hours", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "+</div>
                    <div class=\"numbers-achievement--wrapper-description\">";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Годин навчання на практиці"]);
        echo "</div>
                </div>
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">";
        // line 99
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "st_percents", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "%</div>
                    <div class=\"numbers-achievement--wrapper-description\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Студентів отримує роботу в ІТ-компаніях"]);
        echo "</div>
                </div>
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">";
        // line 103
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "st_students", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "+</div>
                    <div class=\"numbers-achievement--wrapper-description\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Випускників по всій Україні"]);
        echo "</div>
                </div>
            </div>


    </section>
    <section id=\"video-represent\">
        <div class=\"uk-container uk-container-small \">
            <h2>";
        // line 112
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Навіщо цей курс"]);
        echo "</h2>
            <p>";
        // line 113
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "for_what", [], "any", false, false, true, 113), 113, $this->source);
        echo "</p>
        </div>
        <div class=\"video-iframe container-xl\">
            <div class=\"video-iframe--banner\">
                <div class=\"video-iframe--content\" data-video=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "video_link", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "\">
                    <div class=\"target\">
                        <a href=\"#\" class=\"video__button text\">";
        // line 119
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про курс"]);
        echo "<span>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про курс"]);
        echo "</span> <img
                                data-src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon_video.svg");
        echo "\" class=\"lazyload\" alt=\"play video\"> </a>
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
        </div>
    </section>
    <section id=\"course-program\">
        <div class=\"uk-container uk-container-small \">
            <h2>Програма курсів</h2>
            <ul uk-accordion>
                <li class=\"uk-open\">
                    <a href=\"#\" class=\"registration-action\">";
        // line 139
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_1_title", [], "any", false, false, true, 140), 140, $this->source)]);
        echo "</a>
                    <div class=\"uk-accordion-content\">
                        <p>";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_1_text", [], "any", false, false, true, 142), 142, $this->source);
        echo "</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">";
        // line 146
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_2_title", [], "any", false, false, true, 147), 147, $this->source)]);
        echo "</a>
                    <div class=\"uk-accordion-content\">
                        <p>";
        // line 149
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_2_text", [], "any", false, false, true, 149), 149, $this->source);
        echo "</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 154
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_3_title", [], "any", false, false, true, 154), 154, $this->source)]);
        echo "</a>
                    <div class=\"uk-accordion-content\">
                        <p>";
        // line 156
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_3_text", [], "any", false, false, true, 156), 156, $this->source);
        echo "</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 161
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_4_title", [], "any", false, false, true, 161), 161, $this->source)]);
        echo "</a>
                    <div class=\"uk-accordion-content\">
                        <p>";
        // line 163
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_4_text", [], "any", false, false, true, 163), 163, $this->source);
        echo "</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
                    <a class=\"uk-accordion-title\" href=\"#\">";
        // line 168
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_5_title", [], "any", false, false, true, 168), 168, $this->source)]);
        echo "</a>
                    <div class=\"uk-accordion-content\">
                        <p>";
        // line 170
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "acc_5_text", [], "any", false, false, true, 170), 170, $this->source);
        echo "</p>
                    </div>
                </li>

            </ul>
    </section>
    <section id=\"course-technology\">
        <div class=\"uk-container uk-container-small \">
            <h2 class=\"uk-text-center course-technology--title\">";
        // line 178
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Технології"]);
        echo "</h2>
            <div class=\"course-technology--grid\">
                ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "course_technologies", [], "any", false, false, true, 180));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 181
            echo "                    <div class=\"course-technology--grid-item\">
                        <img data-src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "\" class=\"lazyload\" alt=\"Vue\">
                        <p class=\"course-technology--grid-item--description\">";
            // line 183
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "            </div>
            <p class=\"uk-text-center course-technology--follow-us\">Приєднуйся до нас та отримай доступ до всіх технологій
            </p>
            <a class=\"course-technology--get-all\" href=\"#\">";
        // line 189
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Всі технології"]);
        echo "<span> <span class=\"orange-attention\"> +
                    </span></span> </a>
        </div>
    </section>
    <section id=\"course-price\">
        <div class=\"uk-container uk-container-small \">
            <h2 class=\"uk-text-left course-technology--title\">";
        // line 195
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ціна за курс"]);
        echo "</h2>
            <div class=\"course-price--price-wrapper\">
                <div class=\"price-wrapper--main-price-wrapper\">
                    <p class=\"price-wrapper--main-price\">
                        <span class=\"main-price--price--cost\">";
        // line 199
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "course_price", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
        echo " </span><span class=\"main-price--currency\">грн</span>
                    </p>
                </div>
                <div class=\"course-price--course-description\">

                    <div class=\"course-price--course-description-wrapper\">
                        <h3 class=\"course-price--vacancies\">
                            <div><span class=\"course-category uk-text-center \">
                                    ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "ctypes", [], "any", false, false, true, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 208
            echo "                                       <span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "course_type", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
            echo "</span>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                            </span>
                            </div>";
        // line 211
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
        echo "</h3>
                        <ul>
                            <li><span>";
        // line 213
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "lessons_count", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
        echo " </span>занять</li>
                            <li><span>";
        // line 214
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "hours_count", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
        echo " </span>годин практики</li>
                            <li>м.Київ <span>Слобода 24</span>, 3 поверх</li>
                            <li>+380 97 123 33 44</li>
                        </ul>
                    </div>
                </div>
                <a href=\"#\" class=\"main-button-action \">";
        // line 220
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
            </div>
        </div>
    </section>
    <section id=\"students-review\">
        <h2 class=\"uk-text-center students-review--title title-onlymobile\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Що про нас кажуть"]);
        echo "</h2>
        <h2 class=\"uk-text-center students-review--title\">";
        // line 226
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Про нас кажуть"]);
        echo "</h2>
        ";
        // line 227
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("course/comments"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 228
        echo "        <div class=\"students-review--counter\">
            <span class=\"counter--current-item\">1</span>
            <span class=\"counter--border-progress\"><span class=\"pulse\"></span></span>
            <span class=\"counter--all-items\"></span>
        </div>
        <a class=\"students-review--get-all\" href=\"#\"> Додати відгук <span class=\"students-review--plus-wrapper\"> <span
                    class=\"orange-attention\"> +
                </span></span> </a>
    </section>
    ";
        // line 237
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reg-bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 238
        echo "    <div class=\"desk-menu-courses\">
        <div class=\"desk-menu-courses--content\">
            <div class=\"desk-menu-courses--content-fs\">
                <span class=\"uk-text-center course-category\">
                    ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "ctypes", [], "any", false, false, true, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 243
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "course_type", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
            echo "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                </span>
                <h2 class=\"marquee\" data-text=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
        echo "\"></h2>
            </div>
            <ul class=\"desk-menu-courses--anchors\">
                <li>
                    <a href=\"#course-for\">";
        // line 250
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Для кого курс"]);
        echo " </a>
                </li>
                <li>
                    <a href=\"#video-represent\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Навіщо курс"]);
        echo " </a>
                </li>
                <li>
                    <a href=\"#course-program\">";
        // line 256
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Програма курсів"]);
        echo " </a>
                </li>
                <li>
                    <a href=\"#course-technology\">";
        // line 259
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Технології"]);
        echo " </a>
                </li>
                <li>
                    <a href=\"#course-price\">";
        // line 262
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ціна"]);
        echo " </a>
                </li>
                <li>
                    <a href=\"#students-review\">";
        // line 265
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Відгуки"]);
        echo " </a>
                </li>
            </ul>
            <div class=\"desk-menu-courses--action\">
                <div class=\"registration-action\">
                    <a href=\"#\">";
        // line 270
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Реєструйся"]);
        echo "</a>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/course.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 270,  564 => 265,  558 => 262,  552 => 259,  546 => 256,  540 => 253,  534 => 250,  527 => 246,  524 => 245,  515 => 243,  511 => 242,  505 => 238,  501 => 237,  490 => 228,  486 => 227,  482 => 226,  478 => 225,  470 => 220,  461 => 214,  457 => 213,  452 => 211,  449 => 210,  440 => 208,  436 => 207,  425 => 199,  418 => 195,  409 => 189,  404 => 186,  395 => 183,  391 => 182,  388 => 181,  384 => 180,  379 => 178,  368 => 170,  363 => 168,  359 => 167,  352 => 163,  347 => 161,  343 => 160,  336 => 156,  331 => 154,  327 => 153,  320 => 149,  315 => 147,  311 => 146,  304 => 142,  299 => 140,  295 => 139,  273 => 120,  267 => 119,  262 => 117,  255 => 113,  251 => 112,  240 => 104,  236 => 103,  230 => 100,  226 => 99,  220 => 96,  216 => 95,  209 => 91,  205 => 90,  199 => 87,  195 => 86,  184 => 78,  178 => 75,  172 => 72,  166 => 69,  160 => 66,  154 => 63,  147 => 59,  128 => 43,  125 => 42,  119 => 38,  117 => 37,  110 => 33,  103 => 29,  96 => 25,  89 => 21,  82 => 17,  71 => 13,  64 => 9,  59 => 8,  50 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
<section id=\"hero\">
        <div class=\"uk-container uk-container-small \">
            <div class=\"hero--left-side\">
                    {% for type in record.ctypes %}
                        <span class=\"hero--courses-mark\"> <span>{{ type.course_type }}</span> </span>
                    {% endfor %}
                <h1 class=\"hero--site-slogan uk-text-left \"><span class=\"hero--site-slogan-padding\">{{ record.title }}</span> course</h1>
                <p class=\"hero--description\">{{ record.short_descr }}</p>
                <div class=\"hero--left-side--regisration \">
                    <div class=\"hero--regisration-gray-bg\">
                        <!-- date when courses started in element with class \"end-course\" dataset f ex: years - XXXX , month - XX ...-->
                        <p class=\"end-course\" data-years=\"{{ record.start_date|date('Y') }}\" data-month=\"{{ record.start_date|date('m') }}\" data-days=\"{{ record.start_date|date('d') }}\" data-hours=\"00\" data-minutes=\"00\" data-seconds=\"00\"> Реєстрація на курс закінчиться через</p>
                        <div class=\"left-side--regisration-time-wrapper\">
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"days time-wrapper--number\"> 00</div>
                                <div class=\"time-wrapper--text\">{{ 'днів'|_ }}</div>
                            </div>
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"hours time-wrapper--number\">12</div>
                                <div class=\"time-wrapper--text\">{{ 'годин'|_ }}</div>
                            </div>
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"minutes time-wrapper--number\">13</div>
                                <div class=\"time-wrapper--text\">{{ 'хвилин'|_ }}</div>
                            </div>
                            <div class=\"regisration-time-wrapper--blocks\">
                                <div class=\"seconds time-wrapper--number\">36</div>
                                <div class=\"time-wrapper--text\">{{ 'секунд'|_ }}</div>
                            </div>
                        </div>
                        <p class=\"registration--free-space\"> Вільних місць залишилось у наборі</p>
                        <div class=\"registration--number-of-free-space\">{{ record.free_places }}</div>
                    </div>
                    <div class=\"registration--footer\"> <a href=\"/reg-form\">Реєструйся</a> </div>
                </div>
                {% if record.discount == '1' %}
                    <div class=\"hero--post-description\"> <span class=\"hero--post-description--attention orange-attention\"><span>!</span></span>
                        <p>Реєструйся на онлайн навчання та отримай <span>15%</span> знижку!</p>
                    </div>
                {% endif %}
            </div>
            <div class=\"hero--right-side\" style=\"background-image: url({{ record.course_image_inner.path }})\">

            </div>
        </div>
    </section>
    <section id=\"mobile-navigation\">
        <div class=\"uk-container uk-container-small \">
            <div class=\"mobile-navigation-wrapper\">
                <div class=\"header--burger\">
                    <div id=\"menu-toggle\" class=\"burger--btn\">
                        <div id=\"hamburger\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <span>{{ 'Навігація'|_ }}</span>
                </div>
                <ul class=\"mobile-navigation--list\">
                    <li>
                        <a href=\"#course-for\">{{ 'Для кого курс'|_ }} </a>
                    </li>
                    <li>
                        <a href=\"#video-represent\">{{ 'Навіщо курс'|_ }} </a>
                    </li>
                    <li>
                        <a href=\"#course-program\">{{ 'Програма курсів'|_ }} </a>
                    </li>
                    <li>
                        <a href=\"#course-technology\">{{ 'Технології'|_ }} </a>
                    </li>
                    <li>
                        <a href=\"#course-price\">{{ 'Ціна'|_ }} </a>
                    </li>
                    <li>
                        <a href=\"#students-review\">{{ 'Відгуки'|_ }} </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id=\"course-for\">
        <div class=\"uk-container uk-container-small \">
            <h2>{{ 'Для кого курс'|_ }}</h2>
            <p>{{ record.for_whom|raw }}</p>
            <div class=\"course-for--numbers-achievement\">
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">{{ record.st_years }}+</div>
                    <div class=\"numbers-achievement--wrapper-description\">{{ 'Років практики в онлайн та офлайн навчанні'|_ }}
                    </div>
                </div>
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">{{ record.st_hours }}+</div>
                    <div class=\"numbers-achievement--wrapper-description\">{{ 'Годин навчання на практиці'|_ }}</div>
                </div>
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">{{ record.st_percents }}%</div>
                    <div class=\"numbers-achievement--wrapper-description\">{{ 'Студентів отримує роботу в ІТ-компаніях'|_ }}</div>
                </div>
                <div class=\"numbers-achievement--wrapper\">
                    <div class=\"numbers-achievement--wrapper-number\">{{ record.st_students }}+</div>
                    <div class=\"numbers-achievement--wrapper-description\">{{ 'Випускників по всій Україні'|_ }}</div>
                </div>
            </div>


    </section>
    <section id=\"video-represent\">
        <div class=\"uk-container uk-container-small \">
            <h2>{{ 'Навіщо цей курс'|_ }}</h2>
            <p>{{ record.for_what|raw }}</p>
        </div>
        <div class=\"video-iframe container-xl\">
            <div class=\"video-iframe--banner\">
                <div class=\"video-iframe--content\" data-video=\"{{ records.video_link }}\">
                    <div class=\"target\">
                        <a href=\"#\" class=\"video__button text\">{{ 'Про курс'|_ }}<span>{{ 'Про курс'|_ }}</span> <img
                                data-src=\"{{ 'assets/images/icon_video.svg'|theme }}\" class=\"lazyload\" alt=\"play video\"> </a>
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
        </div>
    </section>
    <section id=\"course-program\">
        <div class=\"uk-container uk-container-small \">
            <h2>Програма курсів</h2>
            <ul uk-accordion>
                <li class=\"uk-open\">
                    <a href=\"#\" class=\"registration-action\">{{ 'Реєструйся'|_ }}</a>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ record.acc_1_title|_ }}</a>
                    <div class=\"uk-accordion-content\">
                        <p>{{ record.acc_1_text|raw }}</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">{{ 'Реєструйся'|_ }}</a>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ record.acc_2_title|_ }}</a>
                    <div class=\"uk-accordion-content\">
                        <p>{{ record.acc_2_text|raw }}</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">{{ 'Реєструйся'|_ }}</a>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ record.acc_3_title|_ }}</a>
                    <div class=\"uk-accordion-content\">
                        <p>{{ record.acc_3_text|raw }}</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">{{ 'Реєструйся'|_ }}</a>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ record.acc_4_title|_ }}</a>
                    <div class=\"uk-accordion-content\">
                        <p>{{ record.acc_4_text|raw }}</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"registration-action\">{{ 'Реєструйся'|_ }}</a>
                    <a class=\"uk-accordion-title\" href=\"#\">{{ record.acc_5_title|_ }}</a>
                    <div class=\"uk-accordion-content\">
                        <p>{{ record.acc_5_text|raw }}</p>
                    </div>
                </li>

            </ul>
    </section>
    <section id=\"course-technology\">
        <div class=\"uk-container uk-container-small \">
            <h2 class=\"uk-text-center course-technology--title\">{{ 'Технології'|_ }}</h2>
            <div class=\"course-technology--grid\">
                {% for image in record.course_technologies %}
                    <div class=\"course-technology--grid-item\">
                        <img data-src=\"{{ image.path }}\" class=\"lazyload\" alt=\"Vue\">
                        <p class=\"course-technology--grid-item--description\">{{ image.path }}</p>
                    </div>
                {% endfor %}
            </div>
            <p class=\"uk-text-center course-technology--follow-us\">Приєднуйся до нас та отримай доступ до всіх технологій
            </p>
            <a class=\"course-technology--get-all\" href=\"#\">{{ 'Всі технології'|_ }}<span> <span class=\"orange-attention\"> +
                    </span></span> </a>
        </div>
    </section>
    <section id=\"course-price\">
        <div class=\"uk-container uk-container-small \">
            <h2 class=\"uk-text-left course-technology--title\">{{ 'Ціна за курс'|_ }}</h2>
            <div class=\"course-price--price-wrapper\">
                <div class=\"price-wrapper--main-price-wrapper\">
                    <p class=\"price-wrapper--main-price\">
                        <span class=\"main-price--price--cost\">{{ record.course_price }} </span><span class=\"main-price--currency\">грн</span>
                    </p>
                </div>
                <div class=\"course-price--course-description\">

                    <div class=\"course-price--course-description-wrapper\">
                        <h3 class=\"course-price--vacancies\">
                            <div><span class=\"course-category uk-text-center \">
                                    {% for type in record.ctypes %}
                                       <span>{{ type.course_type }}</span>
                                    {% endfor %}
                            </span>
                            </div>{{ record.title }}</h3>
                        <ul>
                            <li><span>{{ record.lessons_count }} </span>занять</li>
                            <li><span>{{ record.hours_count }} </span>годин практики</li>
                            <li>м.Київ <span>Слобода 24</span>, 3 поверх</li>
                            <li>+380 97 123 33 44</li>
                        </ul>
                    </div>
                </div>
                <a href=\"#\" class=\"main-button-action \">{{ 'Реєструйся'|_ }}</a>
            </div>
        </div>
    </section>
    <section id=\"students-review\">
        <h2 class=\"uk-text-center students-review--title title-onlymobile\">{{ 'Що про нас кажуть'|_ }}</h2>
        <h2 class=\"uk-text-center students-review--title\">{{ 'Про нас кажуть'|_ }}</h2>
        {% partial 'course/comments' %}
        <div class=\"students-review--counter\">
            <span class=\"counter--current-item\">1</span>
            <span class=\"counter--border-progress\"><span class=\"pulse\"></span></span>
            <span class=\"counter--all-items\"></span>
        </div>
        <a class=\"students-review--get-all\" href=\"#\"> Додати відгук <span class=\"students-review--plus-wrapper\"> <span
                    class=\"orange-attention\"> +
                </span></span> </a>
    </section>
    {% partial 'reg-bottom' %}
    <div class=\"desk-menu-courses\">
        <div class=\"desk-menu-courses--content\">
            <div class=\"desk-menu-courses--content-fs\">
                <span class=\"uk-text-center course-category\">
                    {% for type in record.ctypes %}
                    <span>{{ type.course_type }}</span>
                    {% endfor %}
                </span>
                <h2 class=\"marquee\" data-text=\"{{ record.title }}\"></h2>
            </div>
            <ul class=\"desk-menu-courses--anchors\">
                <li>
                    <a href=\"#course-for\">{{ 'Для кого курс'|_ }} </a>
                </li>
                <li>
                    <a href=\"#video-represent\">{{ 'Навіщо курс'|_ }} </a>
                </li>
                <li>
                    <a href=\"#course-program\">{{ 'Програма курсів'|_ }} </a>
                </li>
                <li>
                    <a href=\"#course-technology\">{{ 'Технології'|_ }} </a>
                </li>
                <li>
                    <a href=\"#course-price\">{{ 'Ціна'|_ }} </a>
                </li>
                <li>
                    <a href=\"#students-review\">{{ 'Відгуки'|_ }} </a>
                </li>
            </ul>
            <div class=\"desk-menu-courses--action\">
                <div class=\"registration-action\">
                    <a href=\"#\">{{ 'Реєструйся'|_ }}</a>
                </div>
            </div>
        </div>
    </div>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/course.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 5, "if" => 37, "partial" => 227);
        static $filters = array("escape" => 6, "date" => 13, "_" => 17, "raw" => 87, "theme" => 120);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['escape', 'date', '_', 'raw', 'theme'],
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
