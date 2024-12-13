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

/* pages/list-all-clients.html.twig */
class __TwigTemplate_97611316274ab5b844d0dd5d67a20c47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-all-clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-all-clients.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/list-all-clients.html.twig", 1);
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

        echo "Lista użytkowników";
        
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
                    Lista wszystkich użytkowników
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się wszyscy zarejestrowani użytkownicy.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz znależć konkretnego użytkownika, wpisz poniżej jego adres e-mail.
                </p>
                <div class=\"mb-3 mt-3\">
                    <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients");
        echo "\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"email-client\"
                                name=\"email-client\"
                                type=\"email\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj użytkownika\"
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
                ";
        // line 40
        if ((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3\">
                            <p><strong class=\"text-green-600\">SZUKANY UŻYTKOWNIK</strong></p>
                            <p><strong>ID: </strong>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            <p><strong>Adres e-mail: </strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                            <p><strong>Login: </strong>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 46, $this->source); })()), "login", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                            <p><strong>Status konta: </strong>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 47, $this->source); })()), "confirmAccount", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                            <p><strong>Rola: </strong>
                                ";
            // line 49
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 49, $this->source); })()), "roles", [], "any", false, false, false, 49))) {
                // line 50
                echo "                            <p>ROLE_SUPER_ADMIN</p>
                            ";
            }
            // line 52
            echo "                            ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52))) {
                // line 53
                echo "                                <p>ROLE_ADMIN</p>
                            ";
            }
            // line 55
            echo "                            ";
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55))) {
                // line 56
                echo "                                <p>ROLE_USER</p>
                            ";
            }
            // line 58
            echo "                            </p>
                            <p><strong>Data utworzenia konta: </strong>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 59, $this->source); })()), "createdDate", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
                            <p><strong>Adres IP: </strong>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 60, $this->source); })()), "IP", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                            <p>
                                ";
            // line 62
            if (!twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 62, $this->source); })()), "roles", [], "any", false, false, false, 62))) {
                // line 63
                echo "                                ";
                if (!twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63))) {
                    // line 64
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 64, $this->source); })()), "confirmAccount", [], "any", false, false, false, 64) == "Aktywne")) {
                        // line 65
                        echo "                            <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
                        echo "\">
                                <strong>Zmień status konta: </strong>
                                <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                            </form>
                        ";
                    } else {
                        // line 70
                        echo "                            <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
                        echo "\">
                                <strong>Zmień status konta: </strong>
                                <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                            </form>
                            ";
                    }
                    // line 75
                    echo "                            ";
                }
                // line 76
                echo "                            ";
            }
            // line 77
            echo "                            </p>
                        </div>
                    </div>
                ";
        }
        // line 81
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 82
            echo "                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3\">
                            <p><strong>ID: </strong>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "</p>
                            <p><strong>Adres e-mail: </strong>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 85), "html", null, true);
            echo "</p>
                            <p><strong>Login: </strong>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "login", [], "any", false, false, false, 86), "html", null, true);
            echo "</p>
                            <p><strong>Status konta: </strong>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
                            <p><strong>Rola: </strong>
                                ";
            // line 89
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 89))) {
                // line 90
                echo "                                    <p>ROLE_SUPER_ADMIN</p>
                                ";
            }
            // line 92
            echo "                                ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 92))) {
                // line 93
                echo "                                    <p>ROLE_ADMIN</p>
                                ";
            }
            // line 95
            echo "                                ";
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 95))) {
                // line 96
                echo "                                    <p>ROLE_USER</p>
                                ";
            }
            // line 98
            echo "                            </p>
                            <p><strong>Data utworzenia konta: </strong>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "createdDate", [], "any", false, false, false, 99), "html", null, true);
            echo "</p>
                            <p><strong>Adres IP: </strong>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "IP", [], "any", false, false, false, 100), "html", null, true);
            echo "</p>
                            <p>
                                ";
            // line 102
            if (!twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 102))) {
                // line 103
                echo "                                    ";
                if (!twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 103))) {
                    // line 104
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 104) == "Aktywne")) {
                        // line 105
                        echo "                                            <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                        echo "\">
                                                <strong>Zmień status konta: </strong>
                                                <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                            </form>
                                        ";
                    } else {
                        // line 110
                        echo "                                            <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                        echo "\">
                                                <strong>Zmień status konta: </strong>
                                                <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                            </form>
                                        ";
                    }
                    // line 115
                    echo "                                    ";
                }
                // line 116
                echo "                                ";
            }
            // line 117
            echo "                            </p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </div>
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
        return "pages/list-all-clients.html.twig";
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
        return array (  318 => 121,  309 => 117,  306 => 116,  303 => 115,  294 => 110,  285 => 105,  282 => 104,  279 => 103,  277 => 102,  272 => 100,  268 => 99,  265 => 98,  261 => 96,  258 => 95,  254 => 93,  251 => 92,  247 => 90,  245 => 89,  240 => 87,  236 => 86,  232 => 85,  228 => 84,  224 => 82,  219 => 81,  213 => 77,  210 => 76,  207 => 75,  198 => 70,  189 => 65,  186 => 64,  183 => 63,  181 => 62,  176 => 60,  172 => 59,  169 => 58,  165 => 56,  162 => 55,  158 => 53,  155 => 52,  151 => 50,  149 => 49,  144 => 47,  140 => 46,  136 => 45,  132 => 44,  127 => 41,  125 => 40,  103 => 21,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Lista użytkowników{% endblock %}



{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h1 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Lista wszystkich użytkowników
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się wszyscy zarejestrowani użytkownicy.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz znależć konkretnego użytkownika, wpisz poniżej jego adres e-mail.
                </p>
                <div class=\"mb-3 mt-3\">
                    <form action=\"{{ path('app_list_all_clients') }}\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"email-client\"
                                name=\"email-client\"
                                type=\"email\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj użytkownika\"
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
                {% if client %}
                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3\">
                            <p><strong class=\"text-green-600\">SZUKANY UŻYTKOWNIK</strong></p>
                            <p><strong>ID: </strong>{{ client.id }}</p>
                            <p><strong>Adres e-mail: </strong>{{ client.email }}</p>
                            <p><strong>Login: </strong>{{ client.login }}</p>
                            <p><strong>Status konta: </strong>{{ client.confirmAccount }}</p>
                            <p><strong>Rola: </strong>
                                {% if 'ROLE_SUPER_ADMIN' in client.roles %}
                            <p>ROLE_SUPER_ADMIN</p>
                            {% endif %}
                            {% if 'ROLE_ADMIN' in client.roles %}
                                <p>ROLE_ADMIN</p>
                            {% endif %}
                            {% if 'ROLE_USER' in client.roles %}
                                <p>ROLE_USER</p>
                            {% endif %}
                            </p>
                            <p><strong>Data utworzenia konta: </strong>{{ client.createdDate }}</p>
                            <p><strong>Adres IP: </strong>{{ client.IP }}</p>
                            <p>
                                {% if 'ROLE_SUPER_ADMIN' not in client.roles %}
                                {% if 'ROLE_ADMIN' not in client.roles %}
                                {% if client.confirmAccount == 'Aktywne' %}
                            <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                <strong>Zmień status konta: </strong>
                                <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                            </form>
                        {% else %}
                            <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                <strong>Zmień status konta: </strong>
                                <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                            </form>
                            {% endif %}
                            {% endif %}
                            {% endif %}
                            </p>
                        </div>
                    </div>
                {% endif %}
                {% for client in clients %}
                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3\">
                            <p><strong>ID: </strong>{{ client.id }}</p>
                            <p><strong>Adres e-mail: </strong>{{ client.email }}</p>
                            <p><strong>Login: </strong>{{ client.login }}</p>
                            <p><strong>Status konta: </strong>{{ client.confirmAccount }}</p>
                            <p><strong>Rola: </strong>
                                {% if 'ROLE_SUPER_ADMIN' in client.roles %}
                                    <p>ROLE_SUPER_ADMIN</p>
                                {% endif %}
                                {% if 'ROLE_ADMIN' in client.roles %}
                                    <p>ROLE_ADMIN</p>
                                {% endif %}
                                {% if 'ROLE_USER' in client.roles %}
                                    <p>ROLE_USER</p>
                                {% endif %}
                            </p>
                            <p><strong>Data utworzenia konta: </strong>{{ client.createdDate }}</p>
                            <p><strong>Adres IP: </strong>{{ client.IP }}</p>
                            <p>
                                {% if 'ROLE_SUPER_ADMIN' not in client.roles %}
                                    {% if 'ROLE_ADMIN' not in client.roles %}
                                        {% if client.confirmAccount == 'Aktywne' %}
                                            <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                <strong>Zmień status konta: </strong>
                                                <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                            </form>
                                        {% else %}
                                            <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                <strong>Zmień status konta: </strong>
                                                <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                            </form>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                            </p>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "pages/list-all-clients.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\list-all-clients.html.twig");
    }
}
