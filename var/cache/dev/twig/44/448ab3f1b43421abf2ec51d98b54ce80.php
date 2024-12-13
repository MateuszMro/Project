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

/* admin-panel/order-show.html.twig */
class __TwigTemplate_3117fd9686f750c79c98e28cc1b63fe0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/order-show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/order-show.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "admin-panel/order-show.html.twig", 1);
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
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 136, $this->source); })()), "status", [], "any", false, false, false, 136) == "ZAMÓWIENIE W DRODZE")) {
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()), "status", [], "any", false, false, false, 156) == "ZAMÓWIENIE DOSTARCZONE")) {
            // line 157
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_waiting", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">OCZEKUJE NA REALIZACJĘ</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE REALIZACJI</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_in_road", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-300 font-bold\">ZAMÓWIENIE W DRODZE</button>
                                </form>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 166
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 166, $this->source); })()), "status", [], "any", false, false, false, 166) == "ZAMÓWIENIE W DRODZE")) {
            // line 167
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_waiting", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">OCZEKUJE NA REALIZACJĘ</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE REALIZACJI</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_delivered", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">ZAMÓWIENIE DOSTARCZONE</button>
                                </form>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 176
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "status", [], "any", false, false, false, 176) == "W TRAKCIE REALIZACJI")) {
            // line 177
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_waiting", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 177, $this->source); })()), "id", [], "any", false, false, false, 177)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">OCZEKUJE NA REALIZACJĘ</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_delivered", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 180, $this->source); })()), "id", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">ZAMÓWIENIE DOSTARCZONE</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_in_road", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-300 font-bold\">ZAMÓWIENIE W DRODZE</button>
                                </form>
                            ";
        } else {
            // line 187
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_in_road", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-300 font-bold\">ZAMÓWIENIE W DRODZE</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE REALIZACJI</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_delivered", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">ZAMÓWIENIE DOSTARCZONE</button>
                                </form>
                            ";
        }
        // line 197
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 197, $this->source); })()), "paymentStatus", [], "any", false, false, false, 197) == "DO ZAPŁATY")) {
            // line 198
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_price_YES", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">ZAPŁACONO</button>
                                </form>
                            ";
        } else {
            // line 202
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_price_NO", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">DO ZAPŁATY</button>
                                </form>
                            ";
        }
        // line 206
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 207
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 207, $this->source); })()), "id", [], "any", false, false, false, 207)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zamówienie?');\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZAMÓWIENIE</button>
                                </form>
                                <form class=\"mt-2\" method=\"post\" action=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order_update_price", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Czy na pewno chcesz zmienić cenę zamówienia?');\">
                                    <div class=\"form-group\">
                                        <label for=\"newPrice\" class=\"text-blue-600 font-bold mt-2\">NOWA CENA:</label>
                                        <input type=\"number\" class=\"placeholder-gray-500 border\" placeholder=\"Podaj nową cenę\" id=\"newPrice\" name=\"newPrice\" required min=\"0\" step=\"0.01\">
                                    </div>
                                    <button type=\"submit\" class=\"text-blue-600 font-bold mt-2\">ZMIEŃ CENĘ ZAMÓWIENIA</button>
                                </form>
                            ";
        }
        // line 218
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
        return "admin-panel/order-show.html.twig";
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
        return array (  438 => 218,  427 => 210,  420 => 207,  417 => 206,  409 => 202,  401 => 198,  398 => 197,  391 => 193,  385 => 190,  378 => 187,  371 => 183,  365 => 180,  358 => 177,  356 => 176,  350 => 173,  344 => 170,  337 => 167,  335 => 166,  329 => 163,  323 => 160,  316 => 157,  314 => 156,  303 => 148,  294 => 141,  288 => 139,  282 => 137,  280 => 136,  275 => 135,  273 => 134,  268 => 133,  266 => 132,  257 => 125,  251 => 123,  245 => 121,  243 => 120,  232 => 112,  221 => 104,  210 => 96,  199 => 88,  188 => 80,  177 => 72,  166 => 64,  155 => 56,  144 => 48,  133 => 40,  122 => 32,  111 => 24,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
                            {% elseif order.status == 'ZAMÓWIENIE W DRODZE' %}
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
                            {% if order.status == 'ZAMÓWIENIE DOSTARCZONE' %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_waiting', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">OCZEKUJE NA REALIZACJĘ</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_in_process', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE REALIZACJI</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_in_road', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-green-300 font-bold\">ZAMÓWIENIE W DRODZE</button>
                                </form>
                            {% elseif order.status == 'ZAMÓWIENIE W DRODZE' %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_waiting', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">OCZEKUJE NA REALIZACJĘ</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_in_process', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE REALIZACJI</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_delivered', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">ZAMÓWIENIE DOSTARCZONE</button>
                                </form>
                            {% elseif order.status == 'W TRAKCIE REALIZACJI' %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_waiting', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">OCZEKUJE NA REALIZACJĘ</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_delivered', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">ZAMÓWIENIE DOSTARCZONE</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_in_road', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-green-300 font-bold\">ZAMÓWIENIE W DRODZE</button>
                                </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_in_road', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-green-300 font-bold\">ZAMÓWIENIE W DRODZE</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_in_process', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE REALIZACJI</button>
                                </form>
                                <form method=\"post\" action=\"{{ path('app_list_all_order_delivered', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">ZAMÓWIENIE DOSTARCZONE</button>
                                </form>
                            {% endif %}
                            {% if order.paymentStatus == 'DO ZAPŁATY' %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_price_YES', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">ZAPŁACONO</button>
                                </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_price_NO', {'id': order.id}) }}\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">DO ZAPŁATY</button>
                                </form>
                            {% endif %}
                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                <form method=\"post\" action=\"{{ path('app_list_all_order_delete', {'id': order.id}) }}\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zamówienie?');\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZAMÓWIENIE</button>
                                </form>
                                <form class=\"mt-2\" method=\"post\" action=\"{{ path('app_list_all_order_update_price', {'id': order.id}) }}\" onsubmit=\"return confirm('Czy na pewno chcesz zmienić cenę zamówienia?');\">
                                    <div class=\"form-group\">
                                        <label for=\"newPrice\" class=\"text-blue-600 font-bold mt-2\">NOWA CENA:</label>
                                        <input type=\"number\" class=\"placeholder-gray-500 border\" placeholder=\"Podaj nową cenę\" id=\"newPrice\" name=\"newPrice\" required min=\"0\" step=\"0.01\">
                                    </div>
                                    <button type=\"submit\" class=\"text-blue-600 font-bold mt-2\">ZMIEŃ CENĘ ZAMÓWIENIA</button>
                                </form>
                            {% endif %}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
{% endblock %}
", "admin-panel/order-show.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\admin-panel\\order-show.html.twig");
    }
}
