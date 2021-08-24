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

/* C:\OpenServer\domains\economy.school/plugins/kfund/contact/components/contactform/default.htm */
class __TwigTemplate_549fa33a23ac57d5299dc9d7a56cf6219643e1a939ea854cf4af7b4db94aa7f1 extends \Twig\Template
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
        echo "<section id=\"registration-section\">
    <div class=\"uk-container\">
        <div class=\"small-description\"> <a href=\"#\">Деталі курсу</a></div>
        <h1 class=\"main-title\"> Реєстрація на курс</h1>
        <form id=\"contact-form\" class=\"form-template\" action=\"\" data-request=\"onSend\">
            <input type=\"hidden\" name=\"contact_number\">
            <fieldset class=\"registration-inputs-wrapper\">

                <div class=\"field required\">
                    <label>Обери місто</label>
                    <select name=\"city\" id=\"city\">
                        <option value=\"\">Обери серед доступних</option>
                        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reg-form/choose-city"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "                    </select>
                    <!-- input element for validate prev element select  -->
                    <input type=\"text\" name=\"simple1\" class=\"for_city\" required>

                </div>
                <div class=\"field required\">
                    <label>Обери курс</label>
                    <select name=\"course\" id=\"course\">
                        <option value=\"\">Обери курс</option>
                        ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reg-form/choose-course"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "                    </select>
                    <!-- input element for validate prev element select  -->
                    <input type=\"text\" name=\"simple2\" class=\"for_course\" required>

                </div>
                <div class=\"field required\">
                    <label for=\"email\">Email</label>

                    <input type=\"email\" placeholder=\"Hello@school.com\" name=\"reply_to\" id=\"email\" class=\"email\" required>
                </div>
                <div class=\"field required\">
                    <label for=\"phone\">Телефон</label>
                    <input type=\"text\" placeholder=\"(093) 763 77 22\" name=\"phone\" id=\"phone\" class=\"required\">
                </div>
            </fieldset>
            <div class=\"newsletter-subscribe\">
                <label for=\"newsletter\"><input type=\"checkbox\" name=\"newsletter\" id=\"newsletter\" checked>
                    <span></span>
                    <p>Отримувати корисні матеріали та новини від креативної школи економіки</p>
                </label>

            </div>
            <button class=\"main-button\" type=\"submit\">Хочу навчатися</button>
            <p class=\"agb\">Реєструючись, я погоджуюсь з <a href=\"#\">Умовами використання </a> та <a href=\"#\">Політикою
                    конфіденційності </a> Школи креативної економіки</p>
        </form>
    </div>

</section>

    <div id=\"bg-overlay\">
        <div class=\"bg-overlay--VideoHead-popup-video-exit\">
            <div class=\"bg-overlay--VideoHead-popup-video-exit line-1\"></div>
            <div class=\"bg-overlay--VideoHead-popup-video-exit line-2\"></div>
        </div>
    </div>
    <div class=\"customer-support\">
        <div class=\"customer--overlay\">
            <div class=\"customer--line\"></div>
        </div>
        <div class=\"customer--element\"></div>
    </div>
    <div class=\"cursor\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/plugins/kfund/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  68 => 23,  57 => 14,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"registration-section\">
    <div class=\"uk-container\">
        <div class=\"small-description\"> <a href=\"#\">Деталі курсу</a></div>
        <h1 class=\"main-title\"> Реєстрація на курс</h1>
        <form id=\"contact-form\" class=\"form-template\" action=\"\" data-request=\"onSend\">
            <input type=\"hidden\" name=\"contact_number\">
            <fieldset class=\"registration-inputs-wrapper\">

                <div class=\"field required\">
                    <label>Обери місто</label>
                    <select name=\"city\" id=\"city\">
                        <option value=\"\">Обери серед доступних</option>
                        {% partial 'reg-form/choose-city' %}
                    </select>
                    <!-- input element for validate prev element select  -->
                    <input type=\"text\" name=\"simple1\" class=\"for_city\" required>

                </div>
                <div class=\"field required\">
                    <label>Обери курс</label>
                    <select name=\"course\" id=\"course\">
                        <option value=\"\">Обери курс</option>
                        {% partial 'reg-form/choose-course' %}
                    </select>
                    <!-- input element for validate prev element select  -->
                    <input type=\"text\" name=\"simple2\" class=\"for_course\" required>

                </div>
                <div class=\"field required\">
                    <label for=\"email\">Email</label>

                    <input type=\"email\" placeholder=\"Hello@school.com\" name=\"reply_to\" id=\"email\" class=\"email\" required>
                </div>
                <div class=\"field required\">
                    <label for=\"phone\">Телефон</label>
                    <input type=\"text\" placeholder=\"(093) 763 77 22\" name=\"phone\" id=\"phone\" class=\"required\">
                </div>
            </fieldset>
            <div class=\"newsletter-subscribe\">
                <label for=\"newsletter\"><input type=\"checkbox\" name=\"newsletter\" id=\"newsletter\" checked>
                    <span></span>
                    <p>Отримувати корисні матеріали та новини від креативної школи економіки</p>
                </label>

            </div>
            <button class=\"main-button\" type=\"submit\">Хочу навчатися</button>
            <p class=\"agb\">Реєструючись, я погоджуюсь з <a href=\"#\">Умовами використання </a> та <a href=\"#\">Політикою
                    конфіденційності </a> Школи креативної економіки</p>
        </form>
    </div>

</section>

    <div id=\"bg-overlay\">
        <div class=\"bg-overlay--VideoHead-popup-video-exit\">
            <div class=\"bg-overlay--VideoHead-popup-video-exit line-1\"></div>
            <div class=\"bg-overlay--VideoHead-popup-video-exit line-2\"></div>
        </div>
    </div>
    <div class=\"customer-support\">
        <div class=\"customer--overlay\">
            <div class=\"customer--line\"></div>
        </div>
        <div class=\"customer--element\"></div>
    </div>
    <div class=\"cursor\"></div>", "C:\\OpenServer\\domains\\economy.school/plugins/kfund/contact/components/contactform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 13);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
