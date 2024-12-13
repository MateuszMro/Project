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

/* pages/my-order-show.html.twig */
class __TwigTemplate_4249570d2c99bcf02516bc6de81379cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/my-order-show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/my-order-show.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/my-order-show.html.twig", 1);
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

        echo "Zamówienie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "orderNumber", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Zamówienie ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "orderNumber", [], "any", false, false, false, 11), "html", null, true);
        echo "
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz szczegóły wybranego zamówienia.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "orderNumber", [], "any", false, false, false, 24), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer zamówionego produktu
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "productID", [], "any", false, false, false, 32), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Ilość sztuk
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "quantity", [], "any", false, false, false, 40), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Szerokość produktu (wyrażana w milimetrach)
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "width", [], "any", false, false, false, 48), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Wysokość produktu (wyrażana w milimetrach)
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "height", [], "any", false, false, false, 56), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres e-mail
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Imię
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Nazwisko
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 80, $this->source); })()), "surname", [], "any", false, false, false, 80), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer telefonu
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 88, $this->source); })()), "numberPhone", [], "any", false, false, false, 88), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres dostawy
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 96, $this->source); })()), "address", [], "any", false, false, false, 96), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Uwagi do zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 104, $this->source); })()), "commentsOrder", [], "any", false, false, false, 104), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Cena
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 112, $this->source); })()), "price", [], "any", false, false, false, 112), "html", null, true);
        echo " zł
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status płatności
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 120, $this->source); })()), "paymentStatus", [], "any", false, false, false, 120) == "ZAPŁACONO")) {
            // line 121
            echo "                                <strong class=\"font-bold text-green-600\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 121, $this->source); })()), "paymentStatus", [], "any", false, false, false, 121), "html", null, true);
            echo "</strong>
                            ";
        } else {
            // line 123
            echo "                                <strong class=\"font-bold text-red-600\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 123, $this->source); })()), "paymentStatus", [], "any", false, false, false, 123), "html", null, true);
            echo "</strong>
                            ";
        }
        // line 125
        echo "                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 132
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 132, $this->source); })()), "status", [], "any", false, false, false, 132) == "ZAMÓWIENIE DOSTARCZONE")) {
            // line 133
            echo "                                <strong class=\"font-bold text-green-600\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 133, $this->source); })()), "status", [], "any", false, false, false, 133), "html", null, true);
            echo "</strong>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 134
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 134, $this->source); })()), "status", [], "any", false, false, false, 134) == "W TRAKCIE REALIZACJI")) {
            // line 135
            echo "                                <strong class=\"font-bold text-yellow-500\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 135, $this->source); })()), "status", [], "any", false, false, false, 135), "html", null, true);
            echo "</strong>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 136
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 136, $this->source); })()), "status", [], "any", false, false, false, 136) == "W TRAKCIE DOSTAWY")) {
            // line 137
            echo "                                <strong class=\"font-bold text-green-300\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 137, $this->source); })()), "status", [], "any", false, false, false, 137), "html", null, true);
            echo "</strong>
                            ";
        } else {
            // line 139
            echo "                                <strong class=\"font-bold text-red-600\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 139, $this->source); })()), "status", [], "any", false, false, false, 139), "html", null, true);
            echo "</strong>
                            ";
        }
        // line 141
        echo "                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Data złożenia zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 148, $this->source); })()), "orderDate", [], "any", false, false, false, 148), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Akcje
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "paymentStatus", [], "any", false, false, false, 156) == "DO ZAPŁATY")) {
            // line 157
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_my_order_cancel", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Czy na pewno chcesz anulować te zamówienie?');\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">ANULUJ ZAMÓWIENIE</button>
                                </form>
                            ";
        }
        // line 161
        echo "                        </dd>
                    </div>
                </dl>
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
        return "pages/my-order-show.html.twig";
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
        return array (  324 => 161,  316 => 157,  314 => 156,  303 => 148,  294 => 141,  288 => 139,  282 => 137,  280 => 136,  275 => 135,  273 => 134,  268 => 133,  266 => 132,  257 => 125,  251 => 123,  245 => 121,  243 => 120,  232 => 112,  221 => 104,  210 => 96,  199 => 88,  188 => 80,  177 => 72,  166 => 64,  155 => 56,  144 => 48,  133 => 40,  122 => 32,  111 => 24,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Zamówienie {{ order.orderNumber }}{% endblock %}


{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Zamówienie {{ order.orderNumber }}
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz szczegóły wybranego zamówienia.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.orderNumber }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer zamówionego produktu
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.productID }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Ilość sztuk
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.quantity }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Szerokość produktu (wyrażana w milimetrach)
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.width }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Wysokość produktu (wyrażana w milimetrach)
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.height }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres e-mail
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.email }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Imię
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.name }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Nazwisko
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.surname }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer telefonu
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.numberPhone }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres dostawy
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.address }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Uwagi do zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.commentsOrder }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Cena
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.price }} zł
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status płatności
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {% if order.paymentStatus == 'ZAPŁACONO' %}
                                <strong class=\"font-bold text-green-600\">{{ order.paymentStatus }}</strong>
                            {% else %}
                                <strong class=\"font-bold text-red-600\">{{ order.paymentStatus }}</strong>
                            {% endif %}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {% if order.status == 'ZAMÓWIENIE DOSTARCZONE' %}
                                <strong class=\"font-bold text-green-600\">{{ order.status }}</strong>
                            {% elseif order.status == 'W TRAKCIE REALIZACJI' %}
                                <strong class=\"font-bold text-yellow-500\">{{ order.status }}</strong>
                            {% elseif order.status == 'W TRAKCIE DOSTAWY' %}
                                <strong class=\"font-bold text-green-300\">{{ order.status }}</strong>
                            {% else %}
                                <strong class=\"font-bold text-red-600\">{{ order.status }}</strong>
                            {% endif %}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Data złożenia zamówienia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ order.orderDate }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Akcje
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {% if order.paymentStatus == 'DO ZAPŁATY' %}
                                <form method=\"post\" action=\"{{ path('app_list_my_order_cancel', {'id': order.id}) }}\" onsubmit=\"return confirm('Czy na pewno chcesz anulować te zamówienie?');\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">ANULUJ ZAMÓWIENIE</button>
                                </form>
                            {% endif %}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
{% endblock %}
", "pages/my-order-show.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\my-order-show.html.twig");
    }
}
