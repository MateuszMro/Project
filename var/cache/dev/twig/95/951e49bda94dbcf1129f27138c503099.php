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

/* pages/list-defects.html.twig */
class __TwigTemplate_974e7706e960d96d455a76a6b576549f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pages/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-defects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-defects.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/list-defects.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lista zgłoszeń";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h1 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Lista Twoich zgłoszeń
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się Twoje zgłoszenia.
                </p>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defects"]) || array_key_exists("defects", $context) ? $context["defects"] : (function () { throw new RuntimeError('Variable "defects" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["defect"]) {
            // line 18
            echo "                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3\">
                            <p><strong>Numer zgłoszenia: </strong>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "defectNumber", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "createdDate", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "description", [], "any", false, false, false, 23), 0, 50), "html", null, true);
            echo "...</span>
                                <span class=\"full-description\" style=\"display:none;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 28) == "OPEN")) {
                // line 29
                echo "                                    <strong class=\"font-bold text-green-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 29), "html", null, true);
                echo "</strong>
                                ";
            } else {
                // line 31
                echo "                                    <strong class=\"font-bold text-red-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 31), "html", null, true);
                echo "</strong>
                                ";
            }
            // line 33
            echo "                            </p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.show-more-btn').forEach(button => {
            button.addEventListener('click', () => {
                const parent = button.parentElement;
                const shortDescription = parent.querySelector('.short-description');
                const fullDescription = parent.querySelector('.full-description');

                if (fullDescription.style.display === 'none') {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'inline';
                    button.textContent = 'Ukryj opis';
                } else {
                    shortDescription.style.display = 'inline';
                    fullDescription.style.display = 'none';
                    button.textContent = 'Pokaż cały opis';
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/list-defects.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 37,  143 => 33,  137 => 31,  131 => 29,  129 => 28,  122 => 24,  116 => 23,  111 => 21,  107 => 20,  103 => 18,  99 => 17,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Lista zgłoszeń{% endblock %}



{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h1 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Lista Twoich zgłoszeń
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się Twoje zgłoszenia.
                </p>
                {% for defect in defects %}
                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3\">
                            <p><strong>Numer zgłoszenia: </strong>{{ defect.defectNumber }}</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>{{ defect.createdDate }}</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"{{ defect.description }}\">{{ defect.description | slice(0, 50) }}...</span>
                                <span class=\"full-description\" style=\"display:none;\">{{ defect.description }}</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                {% if defect.status == 'OPEN' %}
                                    <strong class=\"font-bold text-green-600\"> {{ defect.status }}</strong>
                                {% else %}
                                    <strong class=\"font-bold text-red-600\"> {{ defect.status }}</strong>
                                {% endif %}
                            </p>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.show-more-btn').forEach(button => {
            button.addEventListener('click', () => {
                const parent = button.parentElement;
                const shortDescription = parent.querySelector('.short-description');
                const fullDescription = parent.querySelector('.full-description');

                if (fullDescription.style.display === 'none') {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'inline';
                    button.textContent = 'Ukryj opis';
                } else {
                    shortDescription.style.display = 'inline';
                    fullDescription.style.display = 'none';
                    button.textContent = 'Pokaż cały opis';
                }
            });
        });
    </script>
{% endblock %}", "pages/list-defects.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\list-defects.html.twig");
    }
}
