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

/* reset-password/reset-password.html.twig */
class __TwigTemplate_bbfd9e718ecbb509cd55bb2a439c09fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset-password/reset-password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset-password/reset-password.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "reset-password/reset-password.html.twig", 1);
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

        echo "Reset hasła";
        
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
        echo "    <section class=\"bg-gray-900 rounded-lg container my-24 mx-auto md:px-6\">
        <div class=\"container h-full px-6 py-24\">
            <div class=\"g-6 flex h-full flex-wrap items-center justify-center lg:justify-between\">
                <!-- Left column container with background-->
                <div class=\"mb-12 md:mb-0 md:w-8/12 lg:w-6/12\">
                    <img src=\"https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\"
                         class=\"w-full\"
                         alt=\"Phone image\" />
                </div>

                <!-- Right column container with form -->
                <div class=\"md:w-8/12 lg:ml-6 lg:w-5/12 bg-gray-800 px-14 py-14 rounded-lg text-white\">
                    <h1 class=\"text-xl font-bold leading-tight tracking-tight text-white md:text-2xl py-6 flex justify-center\">
                        Resetuj hasło
                    </h1>
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4 md:space-y-6 border-b border-gray-200 py-12"]]);
        echo "

                    <div>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'row', ["attr" => ["autofocus" => true, "placeholder" => "example@gmail.com", "class" => "bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                dark:focus:border-blue-500"]]);
        // line 29
        echo "
                    </div>
                    <div>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 32, $this->source); })()), "login", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "login", "class" => "bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                dark:focus:border-blue-500"]]);
        // line 36
        echo "
                    </div>

                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 40
            echo "                        <div class=\"text-red-500 text-xs font-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 40), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", ["error"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "                        <div class=\"text-red-500 text-xs font-bold\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    <button type=\"submit\" class=\"w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium
                            rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                        Resetuj hasło
                    </button>
                    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetPasswordForm"]) || array_key_exists("resetPasswordForm", $context) ? $context["resetPasswordForm"] : (function () { throw new RuntimeError('Variable "resetPasswordForm" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
                </div>
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
        return "reset-password/reset-password.html.twig";
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
        return array (  164 => 50,  158 => 46,  149 => 44,  145 => 43,  142 => 42,  133 => 40,  129 => 39,  124 => 36,  120 => 32,  115 => 29,  111 => 24,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Reset hasła{% endblock %}

{% block content %}
    <section class=\"bg-gray-900 rounded-lg container my-24 mx-auto md:px-6\">
        <div class=\"container h-full px-6 py-24\">
            <div class=\"g-6 flex h-full flex-wrap items-center justify-center lg:justify-between\">
                <!-- Left column container with background-->
                <div class=\"mb-12 md:mb-0 md:w-8/12 lg:w-6/12\">
                    <img src=\"https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\"
                         class=\"w-full\"
                         alt=\"Phone image\" />
                </div>

                <!-- Right column container with form -->
                <div class=\"md:w-8/12 lg:ml-6 lg:w-5/12 bg-gray-800 px-14 py-14 rounded-lg text-white\">
                    <h1 class=\"text-xl font-bold leading-tight tracking-tight text-white md:text-2xl py-6 flex justify-center\">
                        Resetuj hasło
                    </h1>
                    {{ form_start(resetPasswordForm, {'attr': {'class': 'space-y-4 md:space-y-6 border-b border-gray-200 py-12'}}) }}

                    <div>
                        {{ form_row(resetPasswordForm.email, {'attr': {
                            'autofocus': true,
                            'placeholder': 'example@gmail.com',
                            'class': 'bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                dark:focus:border-blue-500'}}) }}
                    </div>
                    <div>
                        {{ form_row(resetPasswordForm.login, {'attr': {
                            'placeholder': 'login',
                            'class': 'bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                dark:focus:border-blue-500'}}) }}
                    </div>

                    {% for error in resetPasswordForm.vars.errors %}
                        <div class=\"text-red-500 text-xs font-bold\">{{ error.message }}</div>
                    {% endfor %}

                    {% for flashMessage in app.flashes('error') %}
                        <div class=\"text-red-500 text-xs font-bold\">{{ flashMessage }}</div>
                    {% endfor %}
                    <button type=\"submit\" class=\"w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium
                            rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                        Resetuj hasło
                    </button>
                    {{ form_end(resetPasswordForm) }}
                </div>
            </div>
        </div>
        </div>
    </section>
{% endblock %}
", "reset-password/reset-password.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\reset-password\\reset-password.html.twig");
    }
}
