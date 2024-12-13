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

/* pages/my-profile.html.twig */
class __TwigTemplate_8d05a37471096bf1b863dbbcb30cb856 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/my-profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/my-profile.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/my-profile.html.twig", 1);
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

        echo "Mój profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-[1050px] text-white rounded-lg\">
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"text-xl leading-6 font-bold text-gray-600\">Panel klienta</div>
            <div class=\"mt-1 max-w-2xl text-gray-500 font-medium\">Witaj, ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "login", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
        </div>
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border flex\">
            <div class=\"\">
                <div class=\"text-lg leading-6 text-gray-600 font-bold\">Mój profil</div>
                <div class=\"mt-2 max-w-2xl text-gray-700 text-sm flex justify-center items-center gap-6 grid gap-x-28 gap-y-4 grid-cols-3\">
                    <a href=\"/profile\" class=\"ease-in-out hover:scale-110\">
                        Informacje o profilu
                    </a>
                    <a href=\"/change-password\" class=\"ease-in-out hover:scale-110\">
                        Zmiana hasła
                    </a>
                </div>
            </div>
        </div>
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border flex\">
            <div class=\"\">
                <div class=\"text-lg leading-6 text-gray-600 font-bold\">Zamówienia i zwroty</div>
                <div class=\"mt-2 max-w-2xl text-gray-700 text-sm flex justify-center items-center gap-6 grid gap-x-28 gap-y-4 grid-cols-3\">
                    <a href=\"/order/my-order\" class=\"ease-in-out hover:scale-110\">
                        Historia zamówień
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Zamów wizytę specjalisty
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Historia wizyt specjalisty
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Utwórz zwrot zamówienia
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Historia zwrotów
                    </a>
                </div>
            </div>
        </div>
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border flex\">
            <div class=\"\">
                <div class=\"text-lg leading-6 text-gray-600 font-bold\">Zgłoszenia</div>
                <div class=\"mt-2 max-w-2xl text-gray-700 text-sm flex justify-center items-center gap-6 grid gap-x-28 gap-y-4 grid-cols-3\">
                    <a href=\"/defects\" class=\"ease-in-out hover:scale-110\">
                        Utwórz zgłoszenie
                    </a>
                    <a href=\"/list-defects\" class=\"ease-in-out hover:scale-110\">
                        Historia zgłoszeń
                    </a>
                </div>
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
        return "pages/my-profile.html.twig";
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
        return array (  93 => 10,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Mój profil{% endblock %}


{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-[1050px] text-white rounded-lg\">
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"text-xl leading-6 font-bold text-gray-600\">Panel klienta</div>
            <div class=\"mt-1 max-w-2xl text-gray-500 font-medium\">Witaj, {{ app.user.login }}</div>
        </div>
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border flex\">
            <div class=\"\">
                <div class=\"text-lg leading-6 text-gray-600 font-bold\">Mój profil</div>
                <div class=\"mt-2 max-w-2xl text-gray-700 text-sm flex justify-center items-center gap-6 grid gap-x-28 gap-y-4 grid-cols-3\">
                    <a href=\"/profile\" class=\"ease-in-out hover:scale-110\">
                        Informacje o profilu
                    </a>
                    <a href=\"/change-password\" class=\"ease-in-out hover:scale-110\">
                        Zmiana hasła
                    </a>
                </div>
            </div>
        </div>
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border flex\">
            <div class=\"\">
                <div class=\"text-lg leading-6 text-gray-600 font-bold\">Zamówienia i zwroty</div>
                <div class=\"mt-2 max-w-2xl text-gray-700 text-sm flex justify-center items-center gap-6 grid gap-x-28 gap-y-4 grid-cols-3\">
                    <a href=\"/order/my-order\" class=\"ease-in-out hover:scale-110\">
                        Historia zamówień
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Zamów wizytę specjalisty
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Historia wizyt specjalisty
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Utwórz zwrot zamówienia
                    </a>
                    <a href=\"/\" class=\"ease-in-out hover:scale-110\">
                        Historia zwrotów
                    </a>
                </div>
            </div>
        </div>
        <div class=\"px-4 py-5 sm:px-6 bg-white overflow-hidden shadow rounded-lg border flex\">
            <div class=\"\">
                <div class=\"text-lg leading-6 text-gray-600 font-bold\">Zgłoszenia</div>
                <div class=\"mt-2 max-w-2xl text-gray-700 text-sm flex justify-center items-center gap-6 grid gap-x-28 gap-y-4 grid-cols-3\">
                    <a href=\"/defects\" class=\"ease-in-out hover:scale-110\">
                        Utwórz zgłoszenie
                    </a>
                    <a href=\"/list-defects\" class=\"ease-in-out hover:scale-110\">
                        Historia zgłoszeń
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pages/my-profile.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\my-profile.html.twig");
    }
}
