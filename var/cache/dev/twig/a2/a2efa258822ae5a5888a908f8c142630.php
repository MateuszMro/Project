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

/* admin-panel/list-all-order.html.twig */
class __TwigTemplate_b77e4b6e79477ede6c96010436c6aafe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/list-all-order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/list-all-order.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "admin-panel/list-all-order.html.twig", 1);
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
                    Lista wszystkich zamówień
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się wszystkie zamówienia.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz znależć konkretne zamówienie, wpisz poniżej jego numer.
                </p>
                <div class=\"mb-3 mt-3\">
                    <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_order");
        echo "\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"order-number\"
                                name=\"order-number\"
                                type=\"text\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj zamówienia\"
                                aria-label=\"Search\"
                                aria-describedby=\"button-addon3\" />

                        <button
                                class=\"relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0\"
                                type=\"submit\"
                                id=\"button-addon3\"
                                data-te-ripple-init>
                            Szukaj
                        </button>
                    </form>
                </div>

                <!-- Wyświetlanie jednego złoszenia -->
                <div class=\"relative overflow-x-auto\">

                    ";
        // line 44
        if ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                        <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                            <div class=\"mt-3 mb-3\">
                                <p><strong class=\"text-green-600\">SZUKANE ZAMÓWIENIE</strong></p>
                                <table class=\"min-w-full divide-y divide-gray-200\">
                                    <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zamówienia</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status zamówienia</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                                    <tr>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "orderNumber", [], "any", false, false, false, 60), "html", null, true);
            echo "
                                            <p class=\"text-blue-500 text-xs\">
                                                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Zobacz szczegóły zamówienia</a>
                                            </p>
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">
                                            ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67) == "ZAMÓWIENIE DOSTARCZONE")) {
                // line 68
                echo "                                                <strong class=\"font-bold text-green-600\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "status", [], "any", false, false, false, 68), "html", null, true);
                echo "</strong>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69) == "W TRAKCIE REALIZACJI")) {
                // line 70
                echo "                                                <strong class=\"font-bold text-yellow-500\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "status", [], "any", false, false, false, 70), "html", null, true);
                echo "</strong>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 71
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 71, $this->source); })()), "status", [], "any", false, false, false, 71) == "W TRAKCIE DOSTAWY")) {
                // line 72
                echo "                                                <strong class=\"font-bold text-green-300\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72), "html", null, true);
                echo "</strong>
                                            ";
            } else {
                // line 74
                echo "                                                <strong class=\"font-bold text-red-600\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 74, $this->source); })()), "status", [], "any", false, false, false, 74), "html", null, true);
                echo "</strong>
                                            ";
            }
            // line 76
            echo "                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";
        }
        // line 83
        echo "                </div>


                <!-- Wyświetlanie wszystkich zgłoszeń -->

                <div class=\"relative overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status zamówienia</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 100
            echo "                            ";
            if ( !(null === $context["order"])) {
                // line 101
                echo "                                <tr>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 103), "html", null, true);
                echo "
                                        <p class=\"text-blue-500 text-xs\">
                                            <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\">Zobacz szczegóły zamówienia</a>
                                        </p>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 110) == "ZAMÓWIENIE DOSTARCZONE")) {
                    // line 111
                    echo "                                            <strong class=\"font-bold text-green-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 111), "html", null, true);
                    echo "</strong>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["order"], "status", [], "any", false, false, false, 112) == "W TRAKCIE REALIZACJI")) {
                    // line 113
                    echo "                                            <strong class=\"font-bold text-yellow-500\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 113), "html", null, true);
                    echo "</strong>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["order"], "status", [], "any", false, false, false, 114) == "ZAMÓWIENIE W DRODZE")) {
                    // line 115
                    echo "                                            <strong class=\"font-bold text-green-300\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 115), "html", null, true);
                    echo "</strong>
                                        ";
                } else {
                    // line 117
                    echo "                                            <strong class=\"font-bold text-red-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 117), "html", null, true);
                    echo "</strong>
                                        ";
                }
                // line 119
                echo "                                    </td>
                                </tr>
                            ";
            }
            // line 122
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                        </tbody>
                    </table>
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
        return "admin-panel/list-all-order.html.twig";
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
        return array (  291 => 123,  285 => 122,  280 => 119,  274 => 117,  268 => 115,  266 => 114,  261 => 113,  259 => 112,  254 => 111,  252 => 110,  247 => 108,  241 => 105,  236 => 103,  232 => 102,  229 => 101,  226 => 100,  222 => 99,  204 => 83,  195 => 76,  189 => 74,  183 => 72,  181 => 71,  176 => 70,  174 => 69,  169 => 68,  167 => 67,  162 => 65,  156 => 62,  151 => 60,  147 => 59,  131 => 45,  129 => 44,  103 => 21,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
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
                    Lista wszystkich zamówień
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się wszystkie zamówienia.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz znależć konkretne zamówienie, wpisz poniżej jego numer.
                </p>
                <div class=\"mb-3 mt-3\">
                    <form action=\"{{ path('app_list_all_order') }}\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"order-number\"
                                name=\"order-number\"
                                type=\"text\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj zamówienia\"
                                aria-label=\"Search\"
                                aria-describedby=\"button-addon3\" />

                        <button
                                class=\"relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0\"
                                type=\"submit\"
                                id=\"button-addon3\"
                                data-te-ripple-init>
                            Szukaj
                        </button>
                    </form>
                </div>

                <!-- Wyświetlanie jednego złoszenia -->
                <div class=\"relative overflow-x-auto\">

                    {% if order %}
                        <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                            <div class=\"mt-3 mb-3\">
                                <p><strong class=\"text-green-600\">SZUKANE ZAMÓWIENIE</strong></p>
                                <table class=\"min-w-full divide-y divide-gray-200\">
                                    <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zamówienia</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status zamówienia</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                                    <tr>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">{{ order.id }}</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">{{ order.orderNumber }}
                                            <p class=\"text-blue-500 text-xs\">
                                                <a href=\"{{ path('app_order_show', { id: order.id }) }}\">Zobacz szczegóły zamówienia</a>
                                            </p>
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">{{ order.email }}</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">
                                            {% if order.status == 'ZAMÓWIENIE DOSTARCZONE' %}
                                                <strong class=\"font-bold text-green-600\">{{ order.status }}</strong>
                                            {% elseif order.status == 'W TRAKCIE REALIZACJI' %}
                                                <strong class=\"font-bold text-yellow-500\">{{ order.status }}</strong>
                                            {% elseif order.status == 'W TRAKCIE DOSTAWY' %}
                                                <strong class=\"font-bold text-green-300\">{{ order.status }}</strong>
                                            {% else %}
                                                <strong class=\"font-bold text-red-600\">{{ order.status }}</strong>
                                            {% endif %}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    {% endif %}
                </div>


                <!-- Wyświetlanie wszystkich zgłoszeń -->

                <div class=\"relative overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status zamówienia</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                        {% for order in orders %}
                            {% if order is not null %}
                                <tr>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ order.id }}</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ order.orderNumber }}
                                        <p class=\"text-blue-500 text-xs\">
                                            <a href=\"{{ path('app_order_show', { id: order.id }) }}\">Zobacz szczegóły zamówienia</a>
                                        </p>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ order.email }}</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        {% if order.status == 'ZAMÓWIENIE DOSTARCZONE' %}
                                            <strong class=\"font-bold text-green-600\">{{ order.status }}</strong>
                                        {% elseif order.status == 'W TRAKCIE REALIZACJI' %}
                                            <strong class=\"font-bold text-yellow-500\">{{ order.status }}</strong>
                                        {% elseif order.status == 'ZAMÓWIENIE W DRODZE' %}
                                            <strong class=\"font-bold text-green-300\">{{ order.status }}</strong>
                                        {% else %}
                                            <strong class=\"font-bold text-red-600\">{{ order.status }}</strong>
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
    </div>
{% endblock %}", "admin-panel/list-all-order.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\admin-panel\\list-all-order.html.twig");
    }
}
