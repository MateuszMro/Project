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

/* pages/profile-info.html.twig */
class __TwigTemplate_ca044b83c26681dcb3bcfb979db9d141 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/profile-info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/profile-info.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/profile-info.html.twig", 1);
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

        echo "Profil";
        
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
                    Profil
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz wszystkie informacje o profilu.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres e-mail
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Login
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "login", [], "any", false, false, false, 33), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Hasło
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            <div>**********</div>
                            <a href=\"/change_password\" class=\"text-blue-500 text-xs\">Zmień hasło</a>
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status konta
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "confirmAccount", [], "any", false, false, false, 50), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Rola
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 60
                echo "                                    Super_Admin
                                ";
            }
            // line 62
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 63
                echo "                                    Administrator
                                ";
            }
            // line 65
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 66
                echo "                                    Użytkownik
                                ";
            }
            // line 68
            echo "                            ";
        }
        // line 69
        echo "                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Data utworzenia konta
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "createdDate", [], "any", false, false, false, 76), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres IP
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "IP", [], "any", false, false, false, 84), "html", null, true);
        echo "
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <form method=\"post\" action=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_account");
        echo "\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć konto?');\">
            <button type=\"submit\" class=\"inline-flex justify-center float-right mt-5 rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium
            text-white shadow-sm hover:bg-red-600 focus:outline-none focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5\">
                Usuń konto
            </button>
        </form>
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
        return "pages/profile-info.html.twig";
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
        return array (  204 => 90,  195 => 84,  184 => 76,  175 => 69,  172 => 68,  168 => 66,  165 => 65,  161 => 63,  158 => 62,  154 => 60,  151 => 59,  149 => 58,  138 => 50,  118 => 33,  107 => 25,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Profil{% endblock %}



{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Profil
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz wszystkie informacje o profilu.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres e-mail
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ app.user.email }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Login
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ app.user.login }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Hasło
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            <div>**********</div>
                            <a href=\"/change_password\" class=\"text-blue-500 text-xs\">Zmień hasło</a>
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status konta
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ app.user.confirmAccount }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Rola
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {% if app.user  %}
                                {% if is_granted('ROLE_SUPER_ADMIN') %}
                                    Super_Admin
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    Administrator
                                {% endif %}
                                {% if is_granted('ROLE_USER') %}
                                    Użytkownik
                                {% endif %}
                            {% endif %}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Data utworzenia konta
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ app.user.createdDate }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres IP
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ app.user.IP }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <form method=\"post\" action=\"{{ path('app_delete_account') }}\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć konto?');\">
            <button type=\"submit\" class=\"inline-flex justify-center float-right mt-5 rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium
            text-white shadow-sm hover:bg-red-600 focus:outline-none focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5\">
                Usuń konto
            </button>
        </form>
    </div>
{% endblock %}", "pages/profile-info.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\profile-info.html.twig");
    }
}
