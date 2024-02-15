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

/* login-security/login.html.twig */
class __TwigTemplate_3ba55ba4fd7763dd75a771b4438ece57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login-security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login-security/login.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "login-security/login.html.twig", 1);
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

        echo "Logowanie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section class=\"h-screen bg-gray-900 rounded-lg container my-24 mx-auto md:px-6\">
        <div class=\"container h-full px-6 py-24\">
            <div
                    class=\"g-6 flex h-full flex-wrap items-center justify-center lg:justify-between\">
                <!-- Left column container with background-->
                <div class=\"mb-12 md:mb-0 md:w-8/12 lg:w-6/12\">
                    <img
                            src=\"https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\"
                            class=\"w-full\"
                            alt=\"Phone image\" />
                </div>

                <!-- Right column container with form -->
                <div class=\"md:w-8/12 lg:ml-6 lg:w-5/12 bg-gray-800 px-14 py-14 rounded-lg\">
                    <h1 class=\"text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white py-12 flex justify-center\">
                        Logowanie
                    </h1>
                    <form method=\"post\">
                        <!-- Email input -->
                        <div class=\"relative mb-6\" data-te-input-wrapper-init>
                            <label for=\"email\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">E-mail</label>
                            <input
                                    type=\"email\"
                                    value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\"
                                    name=\"email\"
                                    id=\"email\"
                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600
                                         focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                         dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                                    placeholder=\"email@gmail.com\"
                                    required
                                    autocomplete=\"email\"
                                    autofocus
                            >
                        </div>

                        <!-- Password input -->
                        <div class=\"relative mb-6\" data-te-input-wrapper-init>
                            <label for=\"password\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Hasło</label>
                            <input
                                    type=\"password\"
                                    name=\"password\"
                                    id=\"password\"
                                    placeholder=\"*********\"
                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                         dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                                    required
                                    autocomplete=\"current-password\"
                            >
                        </div>

                        ";
        // line 58
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "                            <div id=\"alert alert-danger\" class=\"py-4 text-red-500 text-xs font-bold\">
                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 60, $this->source); })()), "messageKey", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 60, $this->source); })()), "messageData", [], "any", false, false, false, 60), "security"), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 63
        echo "                        <input
                                type=\"hidden\"
                                name=\"_csrf_token\"
                                value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                        >

                        <button type=\"submit\"
                                class=\"w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none
                                 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600
                                 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                            Zaloguj
                        </button>
                        <div class=\"mt-5 text-blue-300 flex justify-center\">
                            <a href=\"/reset_password\" class=\"ease-in-out hover:scale-110\">Nie pamiętasz hasła?</a>
                        </div>

                        <!-- Divider -->
                        <div
                                class=\"my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300\">

                        </div>

                        <!-- Social login buttons -->

                    </form>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login-security/login.html.twig";
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
        return array (  161 => 66,  156 => 63,  150 => 60,  147 => 59,  145 => 58,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Logowanie{% endblock %}

{% block content %}
    <section class=\"h-screen bg-gray-900 rounded-lg container my-24 mx-auto md:px-6\">
        <div class=\"container h-full px-6 py-24\">
            <div
                    class=\"g-6 flex h-full flex-wrap items-center justify-center lg:justify-between\">
                <!-- Left column container with background-->
                <div class=\"mb-12 md:mb-0 md:w-8/12 lg:w-6/12\">
                    <img
                            src=\"https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\"
                            class=\"w-full\"
                            alt=\"Phone image\" />
                </div>

                <!-- Right column container with form -->
                <div class=\"md:w-8/12 lg:ml-6 lg:w-5/12 bg-gray-800 px-14 py-14 rounded-lg\">
                    <h1 class=\"text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white py-12 flex justify-center\">
                        Logowanie
                    </h1>
                    <form method=\"post\">
                        <!-- Email input -->
                        <div class=\"relative mb-6\" data-te-input-wrapper-init>
                            <label for=\"email\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">E-mail</label>
                            <input
                                    type=\"email\"
                                    value=\"{{ last_username }}\"
                                    name=\"email\"
                                    id=\"email\"
                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600
                                         focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                         dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                                    placeholder=\"email@gmail.com\"
                                    required
                                    autocomplete=\"email\"
                                    autofocus
                            >
                        </div>

                        <!-- Password input -->
                        <div class=\"relative mb-6\" data-te-input-wrapper-init>
                            <label for=\"password\" class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Hasło</label>
                            <input
                                    type=\"password\"
                                    name=\"password\"
                                    id=\"password\"
                                    placeholder=\"*********\"
                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                         dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"
                                    required
                                    autocomplete=\"current-password\"
                            >
                        </div>

                        {% if error %}
                            <div id=\"alert alert-danger\" class=\"py-4 text-red-500 text-xs font-bold\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                        <input
                                type=\"hidden\"
                                name=\"_csrf_token\"
                                value=\"{{ csrf_token('authenticate') }}\"
                        >

                        <button type=\"submit\"
                                class=\"w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none
                                 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600
                                 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                            Zaloguj
                        </button>
                        <div class=\"mt-5 text-blue-300 flex justify-center\">
                            <a href=\"/reset_password\" class=\"ease-in-out hover:scale-110\">Nie pamiętasz hasła?</a>
                        </div>

                        <!-- Divider -->
                        <div
                                class=\"my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300\">

                        </div>

                        <!-- Social login buttons -->

                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "login-security/login.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\login-security\\login.html.twig");
    }
}
