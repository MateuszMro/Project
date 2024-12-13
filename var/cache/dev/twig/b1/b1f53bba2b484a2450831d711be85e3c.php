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

/* pages/order.html.twig */
class __TwigTemplate_4e1b97d514172a9e72a0af19f514bdc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/order.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Zamówienia ";
        
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
                    Tworzenie zamówienia
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Po złożeniu zamówienia oczekuj na kontakt naszego pracownika celem poinformowania o cenie zamówienia. Cena dostępna będzie również
                    w historii zamówień, która znajduje się w panelu klienta. Zamówienie jest realizowane po opłaceniu zamówienia.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "sm:divide-y sm:divide-gray-200 text-black flex justify-center"]]);
        echo "
                <div class=\"mt-3\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "Imię", "autofocus" => true, "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 27
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 28, $this->source); })()), "surname", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "Nazwisko", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 31
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "example@gmail.com", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 35
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 36, $this->source); })()), "numberPhone", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Numer telefonu", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 39
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 40, $this->source); })()), "address", [], "any", false, false, false, 40), 'row', ["attr" => ["placeholder" => "Adres dostawy", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 43
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 44, $this->source); })()), "productID", [], "any", false, false, false, 44), 'row', ["attr" => ["placeholder" => "5 cyfrowy numer produktu", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 47
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 48, $this->source); })()), "quantity", [], "any", false, false, false, 48), 'row', ["attr" => ["placeholder" => "Ilość produktów", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 51
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 52, $this->source); })()), "width", [], "any", false, false, false, 52), 'row', ["attr" => ["placeholder" => "Szerokość w milimetrach", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 55
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 56, $this->source); })()), "height", [], "any", false, false, false, 56), 'row', ["attr" => ["placeholder" => "Wysokość w milimetrach", "class" => "mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 59
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 60, $this->source); })()), "commentsOrder", [], "any", false, false, false, 60), 'row', ["attr" => ["placeholder" => "Dodatkowe informacje", "class" => "mb-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black"]]);
        // line 63
        echo "
                    <div class=\"flex items-center\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 65, $this->source); })()), "acceptTerms", [], "any", false, false, false, 65), 'label');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 66, $this->source); })()), "acceptTerms", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                                 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600"]]);
        // line 68
        echo "
                    </div>
                    <button type=\"submit\" class=\"mt-2 mb-2 w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium
                                    rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                        Złóż zamówienie
                    </button>
                    ";
        // line 74
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74)) > 0)) {
            // line 75
            echo "                        <div class=\"mb-2 alert alert-danger mt-3 text-red-600 font-bold\">
                            <ul>
                                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 78
                echo "                                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 78), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 83
        echo "                </div>
                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderProductForm"]) || array_key_exists("orderProductForm", $context) ? $context["orderProductForm"] : (function () { throw new RuntimeError('Variable "orderProductForm" does not exist.', 84, $this->source); })()), 'form_end');
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
        return "pages/order.html.twig";
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
        return array (  210 => 84,  207 => 83,  202 => 80,  193 => 78,  189 => 77,  185 => 75,  183 => 74,  175 => 68,  172 => 66,  168 => 65,  164 => 63,  161 => 60,  158 => 59,  155 => 56,  152 => 55,  149 => 52,  146 => 51,  143 => 48,  140 => 47,  137 => 44,  134 => 43,  131 => 40,  128 => 39,  125 => 36,  122 => 35,  119 => 32,  116 => 31,  113 => 28,  110 => 27,  107 => 23,  102 => 21,  88 => 9,  78 => 8,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}



{% block title %}Zamówienia {% endblock %}


{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-[600px] text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Tworzenie zamówienia
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Po złożeniu zamówienia oczekuj na kontakt naszego pracownika celem poinformowania o cenie zamówienia. Cena dostępna będzie również
                    w historii zamówień, która znajduje się w panelu klienta. Zamówienie jest realizowane po opłaceniu zamówienia.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                {{ form_start(orderProductForm, {'attr': {'class': 'sm:divide-y sm:divide-gray-200 text-black flex justify-center'}}) }}
                <div class=\"mt-3\">
                    {{ form_row(orderProductForm.name, {'attr': {
                        'placeholder': 'Imię',
                        'autofocus': true,
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.surname, {'attr': {
                        'placeholder': 'Nazwisko',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.email, {'attr': {
                        'placeholder': 'example@gmail.com',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.numberPhone, {'attr': {
                        'placeholder': 'Numer telefonu',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.address, {'attr': {
                        'placeholder': 'Adres dostawy',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.productID, {'attr': {
                        'placeholder': '5 cyfrowy numer produktu',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.quantity, {'attr': {
                        'placeholder': 'Ilość produktów',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.width, {'attr': {
                        'placeholder': 'Szerokość w milimetrach',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.height, {'attr': {
                        'placeholder': 'Wysokość w milimetrach',
                        'class': 'mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    {{ form_row(orderProductForm.commentsOrder, {'attr': {
                        'placeholder': 'Dodatkowe informacje',
                        'class': 'mb-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
                                focus:shadow-outline border-black'}}) }}
                    <div class=\"flex items-center\">
                        {{ form_label(orderProductForm.acceptTerms) }}
                        {{ form_widget(orderProductForm.acceptTerms, {'attr': {
                            'class': 'ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded
                                 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600'}}) }}
                    </div>
                    <button type=\"submit\" class=\"mt-2 mb-2 w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium
                                    rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800\">
                        Złóż zamówienie
                    </button>
                    {% if orderProductForm.vars.errors|length > 0 %}
                        <div class=\"mb-2 alert alert-danger mt-3 text-red-600 font-bold\">
                            <ul>
                                {% for error in orderProductForm.vars.errors %}
                                    <li>{{ error.message }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}
                </div>
                {{ form_end(orderProductForm) }}
            </div>
        </div>
    </div>

{% endblock %}", "pages/order.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\order.html.twig");
    }
}
