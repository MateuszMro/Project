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

/* pages/list-my-order.html.twig */
class __TwigTemplate_e6c2e2f40e463ae7c59b4740d388e916 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-my-order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-my-order.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/list-my-order.html.twig", 1);
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

        echo "Lista zamówień";
        
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
                    Lista Twoich zamówień
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się Twoje wszystkie zamówienia.
                </p>
                <table class=\"min-w-full divide-y divide-gray-200 mt-2\">
                    <thead class=\"bg-gray-50\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zamówienia</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status zamówienia</th>
                    </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["orders"]) {
            // line 27
            echo "                        ";
            if ( !(null === $context["orders"])) {
                // line 28
                echo "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "orderNumber", [], "any", false, false, false, 29), "html", null, true);
                echo "
                                    <p class=\"text-blue-500 text-xs\">
                                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_my_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["orders"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">Zobacz szczegóły zamówienia</a>
                                    </p>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "email", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                        ";
                // line 36
                if ((twig_get_attribute($this->env, $this->source, $context["orders"], "status", [], "any", false, false, false, 36) == "ZAMÓWIENIE DOSTARCZONE")) {
                    // line 37
                    echo "                                            <strong class=\"font-bold text-green-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "status", [], "any", false, false, false, 37), "html", null, true);
                    echo "</strong>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["orders"], "status", [], "any", false, false, false, 38) == "W TRAKCIE REALIZACJI")) {
                    // line 39
                    echo "                                            <strong class=\"font-bold text-yellow-500\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "status", [], "any", false, false, false, 39), "html", null, true);
                    echo "</strong>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 40
$context["orders"], "status", [], "any", false, false, false, 40) == "W TRAKCIE DOSTAWY")) {
                    // line 41
                    echo "                                            <strong class=\"font-bold text-green-300\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "status", [], "any", false, false, false, 41), "html", null, true);
                    echo "</strong>
                                        ";
                } else {
                    // line 43
                    echo "                                        <strong class=\"font-bold text-red-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orders"], "status", [], "any", false, false, false, 43), "html", null, true);
                    echo "</strong>
                                        ";
                }
                // line 45
                echo "                                </td>
                            </tr>
                        ";
            }
            // line 48
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/list-my-order.html.twig";
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
        return array (  173 => 49,  167 => 48,  162 => 45,  156 => 43,  150 => 41,  148 => 40,  143 => 39,  141 => 38,  136 => 37,  134 => 36,  129 => 34,  123 => 31,  118 => 29,  115 => 28,  112 => 27,  108 => 26,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Lista zamówień{% endblock %}



{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h1 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Lista Twoich zamówień
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się Twoje wszystkie zamówienia.
                </p>
                <table class=\"min-w-full divide-y divide-gray-200 mt-2\">
                    <thead class=\"bg-gray-50\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zamówienia</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status zamówienia</th>
                    </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                    {% for orders in order %}
                        {% if orders is not null %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ orders.orderNumber }}
                                    <p class=\"text-blue-500 text-xs\">
                                        <a href=\"{{ path('app_list_my_order_show', { id: orders.id }) }}\">Zobacz szczegóły zamówienia</a>
                                    </p>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ orders.email }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                        {% if orders.status == 'ZAMÓWIENIE DOSTARCZONE' %}
                                            <strong class=\"font-bold text-green-600\">{{ orders.status }}</strong>
                                        {% elseif orders.status == 'W TRAKCIE REALIZACJI' %}
                                            <strong class=\"font-bold text-yellow-500\">{{ orders.status }}</strong>
                                        {% elseif orders.status == 'W TRAKCIE DOSTAWY' %}
                                            <strong class=\"font-bold text-green-300\">{{ orders.status }}</strong>
                                        {% else %}
                                        <strong class=\"font-bold text-red-600\">{{ orders.status }}</strong>
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
{% endblock %}", "pages/list-my-order.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\list-my-order.html.twig");
    }
}
