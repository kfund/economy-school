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

/* C:\OpenServer\domains\economy.school/themes/economy-school/pages/registration.htm */
class __TwigTemplate_ccb9f4cebd1c25d08995b54603c14e354eb0713da95e462f147f53451e11727b extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<script>
        function checkSelect() {
            \$('select option:selected').each(function() {
                if (\$(this).val().length == 0) {
                    \$(this).parent().addClass('empty')
                } else {
                    \$(this).parent().removeClass('empty')
                }
            })
        }
        window.onload = () => {
            checkSelect()
            \$('#city').niceSelect();
            \$('#course').niceSelect();
            \$.validator.addMethod('customphone', function(value, element) {
                return this.optional(element) || /^((8|\\+7)[\\- ]?)?(\\(?\\d{3}\\)?[\\- ]?)?[\\d\\- ]{7,10}\$/.test(value);
            }, \"Please enter a valid phone number\");

            \$(\"#registration-form\").validate({
                rules: {
                    phone: 'customphone',
                },
                messages: {
                    phone: \"Введіть коректний номер\",
                    email: \"Введіть коректний Email\",
                    simple2: \"Оберіть курс з доступних\",
                    simple1: \"Оберіть місто з доступних\",
                },
                debug: true
            });
            \$('#city').on('change', function() {
                checkSelect()
                if (\$(this).val().length !== 0) {
                    \$('.for_city').val('ok')
                    return
                }
                \$('.for_city').val('')
            })
            \$('#course').on('change', function() {
                checkSelect()
                if (\$(this).val().length !== 0) {
                    \$('.for_course').val('ok')
                    return
                }
                \$('.for_course').val('')
            })
            \$('#registration-form').submit(function() {
                if (\$(this).valid()) {
                    alert('form sending');

                }
            });

        }
    </script>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/registration.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'contactform' %}
<script>
        function checkSelect() {
            \$('select option:selected').each(function() {
                if (\$(this).val().length == 0) {
                    \$(this).parent().addClass('empty')
                } else {
                    \$(this).parent().removeClass('empty')
                }
            })
        }
        window.onload = () => {
            checkSelect()
            \$('#city').niceSelect();
            \$('#course').niceSelect();
            \$.validator.addMethod('customphone', function(value, element) {
                return this.optional(element) || /^((8|\\+7)[\\- ]?)?(\\(?\\d{3}\\)?[\\- ]?)?[\\d\\- ]{7,10}\$/.test(value);
            }, \"Please enter a valid phone number\");

            \$(\"#registration-form\").validate({
                rules: {
                    phone: 'customphone',
                },
                messages: {
                    phone: \"Введіть коректний номер\",
                    email: \"Введіть коректний Email\",
                    simple2: \"Оберіть курс з доступних\",
                    simple1: \"Оберіть місто з доступних\",
                },
                debug: true
            });
            \$('#city').on('change', function() {
                checkSelect()
                if (\$(this).val().length !== 0) {
                    \$('.for_city').val('ok')
                    return
                }
                \$('.for_city').val('')
            })
            \$('#course').on('change', function() {
                checkSelect()
                if (\$(this).val().length !== 0) {
                    \$('.for_course').val('ok')
                    return
                }
                \$('.for_course').val('')
            })
            \$('#registration-form').submit(function() {
                if (\$(this).valid()) {
                    alert('form sending');

                }
            });

        }
    </script>", "C:\\OpenServer\\domains\\economy.school/themes/economy-school/pages/registration.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
