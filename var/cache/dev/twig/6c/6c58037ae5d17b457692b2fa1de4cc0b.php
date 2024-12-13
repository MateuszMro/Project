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

/* admin-panel/admin-panel.html.twig */
class __TwigTemplate_6b722f12e8371ad293fbd1ab7d5b0a5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/admin-panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/admin-panel.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "admin-panel/admin-panel.html.twig", 1);
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

        echo "Panel zarządzania";
        
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
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Panel Administratora
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz wszystkie pozwolenia przypisane do Twojej rangi.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 21
            echo "                        <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">
                                Zarządzanie całą bazą danych z poziomu Super Admina
                            </dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                                <a href=\"/admin_super_panel\" class=\"font-bold underline text-red-500\">Wejdź do panelu Super Admina</a>
                            </dd>
                        </div>
                    ";
        }
        // line 30
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                        <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">
                                Podgląd i zarządzanie zgłoszeniami z poziomu Admina
                            </dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                                <a href=\"/list_all_defects\" class=\"font-bold underline text-green-500\">Wejdź do panelu zgłoszeń</a>
                            </dd>
                        </div>
                        <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">
                                Podgląd i zarządzanie użytkownikami z poziomu Admina
                            </dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                                <a href=\"/list_all_clients\" class=\"font-bold underline text-green-500\">Wejdź do panelu z użytkownikami</a>
                            </dd>
                        </div>
                    ";
        }
        // line 48
        echo "                </dl>
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
        return "admin-panel/admin-panel.html.twig";
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
        return array (  137 => 48,  118 => 31,  115 => 30,  104 => 21,  102 => 20,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Panel zarządzania{% endblock %}



{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Panel Administratora
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz wszystkie pozwolenia przypisane do Twojej rangi.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                        <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">
                                Zarządzanie całą bazą danych z poziomu Super Admina
                            </dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                                <a href=\"/admin_super_panel\" class=\"font-bold underline text-red-500\">Wejdź do panelu Super Admina</a>
                            </dd>
                        </div>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">
                                Podgląd i zarządzanie zgłoszeniami z poziomu Admina
                            </dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                                <a href=\"/list_all_defects\" class=\"font-bold underline text-green-500\">Wejdź do panelu zgłoszeń</a>
                            </dd>
                        </div>
                        <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">
                                Podgląd i zarządzanie użytkownikami z poziomu Admina
                            </dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                                <a href=\"/list_all_clients\" class=\"font-bold underline text-green-500\">Wejdź do panelu z użytkownikami</a>
                            </dd>
                        </div>
                    {% endif %}
                </dl>
            </div>
        </div>
    </div>
{% endblock %}", "admin-panel/admin-panel.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\admin-panel\\admin-panel.html.twig");
    }
}
