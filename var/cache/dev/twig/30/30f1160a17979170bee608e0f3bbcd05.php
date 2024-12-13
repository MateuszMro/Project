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
class __TwigTemplate_24f7c7525d1a0b8b4ef3c93cf18074e9 extends Template
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
                <table class=\"min-w-full divide-y divide-gray-200 mt-2\">
                    <thead class=\"bg-gray-50\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defects"]) || array_key_exists("defects", $context) ? $context["defects"] : (function () { throw new RuntimeError('Variable "defects" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["defect"]) {
            // line 27
            echo "                        ";
            if ( !(null === $context["defect"])) {
                // line 28
                echo "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "defectNumber", [], "any", false, false, false, 29), "html", null, true);
                echo "
                                    <p class=\"text-blue-500 text-xs\">
                                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_defects_show", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">Zobacz szczegóły</a>
                                    </p>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "email", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    ";
                // line 36
                if ((twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 36) == "OTWARTE")) {
                    // line 37
                    echo "                                        <strong class=\"font-bold text-green-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 37), "html", null, true);
                    echo "</strong>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["defect"], "status", [], "any", false, false, false, 38) == "W TRAKCIE")) {
                    // line 39
                    echo "                                        <strong class=\"font-bold text-yellow-500\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 39), "html", null, true);
                    echo "</strong>
                                    ";
                } else {
                    // line 41
                    echo "                                        <strong class=\"font-bold text-red-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 41), "html", null, true);
                    echo "</strong>
                                    ";
                }
                // line 43
                echo "                                </td>
                            </tr>
                        ";
            }
            // line 46
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </tbody>
                </table>
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
        return array (  166 => 47,  160 => 46,  155 => 43,  149 => 41,  143 => 39,  141 => 38,  136 => 37,  134 => 36,  129 => 34,  123 => 31,  118 => 29,  115 => 28,  112 => 27,  108 => 26,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
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
                <table class=\"min-w-full divide-y divide-gray-200 mt-2\">
                    <thead class=\"bg-gray-50\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                    {% for defect in defects %}
                        {% if defect is not null %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.defectNumber }}
                                    <p class=\"text-blue-500 text-xs\">
                                        <a href=\"{{ path('app_list_defects_show', { id: defect.id }) }}\">Zobacz szczegóły</a>
                                    </p>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.email }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    {% if defect.status == 'OTWARTE' %}
                                        <strong class=\"font-bold text-green-600\">{{ defect.status }}</strong>
                                    {% elseif defect.status == 'W TRAKCIE' %}
                                        <strong class=\"font-bold text-yellow-500\">{{ defect.status }}</strong>
                                    {% else %}
                                        <strong class=\"font-bold text-red-600\">{{ defect.status }}</strong>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
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
