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

/* pages/defects.html.twig */
class __TwigTemplate_e755a7a368ca8bd22c7049ffdc4cb353 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/defects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/defects.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/defects.html.twig", 1);
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

        echo "Zgłoszenia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-[600px] text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Zgłoszenia
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajduje się formularz dotyczący zgłoszeń, jeżeli ujawniłeś jakąś usterkę bądź napotkałeś jakiś inny problem, wypełnij formularz.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz zobaczyć swoje zgłoszenia <a href=\"/list-defects\" class=\"text-blue-500 font-bold underline\">kliknij tutaj</a>
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["defectsForm"]) || array_key_exists("defectsForm", $context) ? $context["defectsForm"] : (function () { throw new RuntimeError('Variable "defectsForm" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "sm:divide-y sm:divide-gray-200 text-black flex justify-center"]]);
        echo "
                <div class=\"mt-3\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["defectsForm"]) || array_key_exists("defectsForm", $context) ? $context["defectsForm"] : (function () { throw new RuntimeError('Variable "defectsForm" does not exist.', 25, $this->source); })()), "numberPhone", [], "any", false, false, false, 25), 'row', ["attr" => ["placeholder" => "Numer telefonu", "autofocus" => true, "class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 29
        echo "
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defectsForm"]) || array_key_exists("defectsForm", $context) ? $context["defectsForm"] : (function () { throw new RuntimeError('Variable "defectsForm" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 31
            echo "                        <div class=\"text-red-500 text-xs font-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    <br>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["defectsForm"]) || array_key_exists("defectsForm", $context) ? $context["defectsForm"] : (function () { throw new RuntimeError('Variable "defectsForm" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Opis problemu", "class" => "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 37
        echo "

                    <button type=\"submit\" class=\"mb-2 w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium
                                    rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                        Wyślij zgłoszenie
                    </button>
                </div>
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["defectsForm"]) || array_key_exists("defectsForm", $context) ? $context["defectsForm"] : (function () { throw new RuntimeError('Variable "defectsForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
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
        return "pages/defects.html.twig";
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
        return array (  143 => 44,  134 => 37,  131 => 34,  128 => 33,  119 => 31,  115 => 30,  112 => 29,  109 => 25,  104 => 23,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Zgłoszenia{% endblock %}




{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-[600px] text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Zgłoszenia
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajduje się formularz dotyczący zgłoszeń, jeżeli ujawniłeś jakąś usterkę bądź napotkałeś jakiś inny problem, wypełnij formularz.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz zobaczyć swoje zgłoszenia <a href=\"/list-defects\" class=\"text-blue-500 font-bold underline\">kliknij tutaj</a>
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                {{ form_start(defectsForm, {'attr': {'class': 'sm:divide-y sm:divide-gray-200 text-black flex justify-center'}}) }}
                <div class=\"mt-3\">
                    {{ form_row(defectsForm.numberPhone, {'attr': {
                        'placeholder': 'Numer telefonu',
                        'autofocus': true,
                        'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {% for error in defectsForm.vars.errors %}
                        <div class=\"text-red-500 text-xs font-bold\">{{ error.message }}</div>
                    {% endfor %}
                    <br>
                    {{ form_row(defectsForm.description, {'attr': {
                        'placeholder': 'Opis problemu',
                        'class': 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}

                    <button type=\"submit\" class=\"mb-2 w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium
                                    rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                        Wyślij zgłoszenie
                    </button>
                </div>
                {{ form_end(defectsForm) }}
            </div>
        </div>
    </div>
{% endblock %}", "pages/defects.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\defects.html.twig");
    }
}
