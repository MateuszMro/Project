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

/* admin-panel/list-all-clients.html.twig */
class __TwigTemplate_93f6eb0ad7bb8175b5826e57686ebb22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/list-all-clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/list-all-clients.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "admin-panel/list-all-clients.html.twig", 1);
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

                <!-- Wyświetlanie jednego użytkownika -->

                <div class=\"relative overflow-x-auto\">
                    ";
        // line 44
        if ((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Login</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status konta</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Rola</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Data utworzenia konta</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres IP</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 62, $this->source); })()), "login", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 63, $this->source); })()), "confirmAccount", [], "any", false, false, false, 63) == "Aktywne")) {
                // line 64
                echo "                                    <td class=\"px-6 py-4 whitespace-nowrap text-green-600 font-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 64, $this->source); })()), "confirmAccount", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 66
                echo "                                    <td class=\"px-6 py-4 whitespace-nowrap text-red-600 font-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 66, $this->source); })()), "confirmAccount", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                ";
            }
            // line 68
            echo "                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    ";
            // line 69
            if (twig_in_filter("ROLE_OWNER", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 69, $this->source); })()), "roles", [], "any", false, false, false, 69))) {
                // line 70
                echo "                                        <p class=\"text-red-600 font-bold\">ROLE_OWNER</p>
                                    ";
            }
            // line 72
            echo "                                    ";
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 72, $this->source); })()), "roles", [], "any", false, false, false, 72))) {
                // line 73
                echo "                                        <p class=\"text-yellow-600 font-bold\">ROLE_SUPER_ADMIN</p>
                                    ";
            }
            // line 75
            echo "                                    ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 75, $this->source); })()), "roles", [], "any", false, false, false, 75))) {
                // line 76
                echo "                                        <p class=\"text-green-600 font-bold\">ROLE_ADMIN</p>
                                    ";
            }
            // line 78
            echo "                                    ";
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 78, $this->source); })()), "roles", [], "any", false, false, false, 78))) {
                // line 79
                echo "                                        <p>ROLE_USER</p>
                                    ";
            }
            // line 81
            echo "                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 82, $this->source); })()), "createdDate", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 83, $this->source); })()), "IP", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    ";
            // line 85
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
                // line 86
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86))) {
                    // line 87
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 87, $this->source); })()), "confirmAccount", [], "any", false, false, false, 87) == "Aktywne")) {
                        // line 88
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            ";
                    } else {
                        // line 92
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            ";
                    }
                    // line 96
                    echo "                                        ";
                }
                // line 97
                echo "                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 98
                echo "                                        ";
                if (((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)) && !twig_in_filter("ROLE_OWNER", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 98, $this->source); })()), "roles", [], "any", false, false, false, 98)))) {
                    // line 99
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 99, $this->source); })()), "confirmAccount", [], "any", false, false, false, 99) == "Aktywne")) {
                        // line 100
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            ";
                    } else {
                        // line 104
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            ";
                    }
                    // line 108
                    echo "                                        ";
                }
                // line 109
                echo "                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 110
                echo "                                        ";
                if ((((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110)) && !twig_in_filter("ROLE_OWNER", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 110, $this->source); })()), "roles", [], "any", false, false, false, 110))) && !twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 110, $this->source); })()), "roles", [], "any", false, false, false, 110)))) {
                    // line 111
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 111, $this->source); })()), "confirmAccount", [], "any", false, false, false, 111) == "Aktywne")) {
                        // line 112
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            ";
                    } else {
                        // line 116
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            ";
                    }
                    // line 120
                    echo "                                        ";
                }
                // line 121
                echo "                                    ";
            }
            // line 122
            echo "                                </td>
                            </tr>
                            </tbody>
                        </table>
                    ";
        }
        // line 127
        echo "                </div>

                <!-- Wyświetlanie wszystkich użytkowników -->
                <div class=\"relative overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Login</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status konta</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Rola</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Data utworzenia konta</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres IP</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 146
            echo "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 148), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "login", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
                                ";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 150) == "Aktywne")) {
                // line 151
                echo "                                        <td class=\"px-6 py-4 whitespace-nowrap text-green-600 font-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 151), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 153
                echo "                                        <td class=\"px-6 py-4 whitespace-nowrap text-red-600 font-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 153), "html", null, true);
                echo "</td>
                                ";
            }
            // line 155
            echo "                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    ";
            // line 156
            if (twig_in_filter("ROLE_OWNER", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 156))) {
                // line 157
                echo "                                        <p class=\"text-red-600 font-bold\">ROLE_OWNER</p>
                                    ";
            }
            // line 159
            echo "                                    ";
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 159))) {
                // line 160
                echo "                                        <p class=\"text-yellow-600 font-bold\">ROLE_SUPER_ADMIN</p>
                                    ";
            }
            // line 162
            echo "                                    ";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 162))) {
                // line 163
                echo "                                        <p class=\"text-green-600 font-bold\">ROLE_ADMIN</p>
                                    ";
            }
            // line 165
            echo "                                    ";
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 165))) {
                // line 166
                echo "                                        <p>ROLE_USER</p>
                                    ";
            }
            // line 168
            echo "                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "createdDate", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "IP", [], "any", false, false, false, 170), "html", null, true);
            echo "</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    ";
            // line 172
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER")) {
                // line 173
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 173) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173))) {
                    // line 174
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 174) == "Aktywne")) {
                        // line 175
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 175)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            ";
                    } else {
                        // line 179
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            ";
                    }
                    // line 183
                    echo "                                        ";
                }
                // line 184
                echo "                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 185
                echo "                                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 185) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185)) && !twig_in_filter("ROLE_OWNER", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 185)))) {
                    // line 186
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 186) == "Aktywne")) {
                        // line 187
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 187)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            ";
                    } else {
                        // line 191
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 191)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            ";
                    }
                    // line 195
                    echo "                                        ";
                }
                // line 196
                echo "                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 197
                echo "                                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 197) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197)) && !twig_in_filter("ROLE_OWNER", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 197))) && !twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["client"], "roles", [], "any", false, false, false, 197)))) {
                    // line 198
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["client"], "confirmAccount", [], "any", false, false, false, 198) == "Aktywne")) {
                        // line 199
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 199)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            ";
                    } else {
                        // line 203
                        echo "                                                <form method=\"post\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_clients_active", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                        echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            ";
                    }
                    // line 207
                    echo "                                        ";
                }
                // line 208
                echo "                                    ";
            }
            // line 209
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
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
        return "admin-panel/list-all-clients.html.twig";
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
        return array (  498 => 212,  490 => 209,  487 => 208,  484 => 207,  476 => 203,  468 => 199,  465 => 198,  462 => 197,  459 => 196,  456 => 195,  448 => 191,  440 => 187,  437 => 186,  434 => 185,  431 => 184,  428 => 183,  420 => 179,  412 => 175,  409 => 174,  406 => 173,  404 => 172,  399 => 170,  395 => 169,  392 => 168,  388 => 166,  385 => 165,  381 => 163,  378 => 162,  374 => 160,  371 => 159,  367 => 157,  365 => 156,  362 => 155,  356 => 153,  350 => 151,  348 => 150,  344 => 149,  340 => 148,  336 => 147,  333 => 146,  329 => 145,  309 => 127,  302 => 122,  299 => 121,  296 => 120,  288 => 116,  280 => 112,  277 => 111,  274 => 110,  271 => 109,  268 => 108,  260 => 104,  252 => 100,  249 => 99,  246 => 98,  243 => 97,  240 => 96,  232 => 92,  224 => 88,  221 => 87,  218 => 86,  216 => 85,  211 => 83,  207 => 82,  204 => 81,  200 => 79,  197 => 78,  193 => 76,  190 => 75,  186 => 73,  183 => 72,  179 => 70,  177 => 69,  174 => 68,  168 => 66,  162 => 64,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  131 => 45,  129 => 44,  103 => 21,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
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

                <!-- Wyświetlanie jednego użytkownika -->

                <div class=\"relative overflow-x-auto\">
                    {% if client %}
                        <table class=\"min-w-full divide-y divide-gray-200\">
                            <thead class=\"bg-gray-50\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Login</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status konta</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Rola</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Data utworzenia konta</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres IP</th>
                                <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                            </tr>
                            </thead>
                            <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.id }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.email }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.login }}</td>
                                {% if client.confirmAccount == 'Aktywne' %}
                                    <td class=\"px-6 py-4 whitespace-nowrap text-green-600 font-bold\">{{ client.confirmAccount }}</td>
                                {% else %}
                                    <td class=\"px-6 py-4 whitespace-nowrap text-red-600 font-bold\">{{ client.confirmAccount }}</td>
                                {% endif %}
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    {% if 'ROLE_OWNER' in client.roles %}
                                        <p class=\"text-red-600 font-bold\">ROLE_OWNER</p>
                                    {% endif %}
                                    {% if 'ROLE_SUPER_ADMIN' in client.roles %}
                                        <p class=\"text-yellow-600 font-bold\">ROLE_SUPER_ADMIN</p>
                                    {% endif %}
                                    {% if 'ROLE_ADMIN' in client.roles %}
                                        <p class=\"text-green-600 font-bold\">ROLE_ADMIN</p>
                                    {% endif %}
                                    {% if 'ROLE_USER' in client.roles %}
                                        <p>ROLE_USER</p>
                                    {% endif %}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.createdDate }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.IP }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    {% if is_granted('ROLE_OWNER') %}
                                        {% if client.id != app.user.id %}
                                            {% if client.confirmAccount == 'Aktywne' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    {% elseif is_granted('ROLE_SUPER_ADMIN') %}
                                        {% if client.id != app.user.id and 'ROLE_OWNER' not in client.roles %}
                                            {% if client.confirmAccount == 'Aktywne' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    {% elseif is_granted('ROLE_ADMIN') %}
                                        {% if client.id != app.user.id and 'ROLE_OWNER' not in client.roles and 'ROLE_SUPER_ADMIN' not in client.roles %}
                                            {% if client.confirmAccount == 'Aktywne' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    {% endif %}
                </div>

                <!-- Wyświetlanie wszystkich użytkowników -->
                <div class=\"relative overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Login</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status konta</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Rola</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Data utworzenia konta</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres IP</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                        {% for client in clients %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.id }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.email }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.login }}</td>
                                {% if client.confirmAccount == 'Aktywne' %}
                                        <td class=\"px-6 py-4 whitespace-nowrap text-green-600 font-bold\">{{ client.confirmAccount }}</td>
                                    {% else %}
                                        <td class=\"px-6 py-4 whitespace-nowrap text-red-600 font-bold\">{{ client.confirmAccount }}</td>
                                {% endif %}
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    {% if 'ROLE_OWNER' in client.roles %}
                                        <p class=\"text-red-600 font-bold\">ROLE_OWNER</p>
                                    {% endif %}
                                    {% if 'ROLE_SUPER_ADMIN' in client.roles %}
                                        <p class=\"text-yellow-600 font-bold\">ROLE_SUPER_ADMIN</p>
                                    {% endif %}
                                    {% if 'ROLE_ADMIN' in client.roles %}
                                        <p class=\"text-green-600 font-bold\">ROLE_ADMIN</p>
                                    {% endif %}
                                    {% if 'ROLE_USER' in client.roles %}
                                        <p>ROLE_USER</p>
                                    {% endif %}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.createdDate }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">{{ client.IP }}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    {% if is_granted('ROLE_OWNER') %}
                                        {% if client.id != app.user.id %}
                                            {% if client.confirmAccount == 'Aktywne' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    {% elseif is_granted('ROLE_SUPER_ADMIN') %}
                                        {% if client.id != app.user.id and 'ROLE_OWNER' not in client.roles %}
                                            {% if client.confirmAccount == 'Aktywne' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    {% elseif is_granted('ROLE_ADMIN') %}
                                        {% if client.id != app.user.id and 'ROLE_OWNER' not in client.roles and 'ROLE_SUPER_ADMIN' not in client.roles %}
                                            {% if client.confirmAccount == 'Aktywne' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_ban', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">Zablokuj</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_clients_active', {'id': client.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">Aktywuj</button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin-panel/list-all-clients.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\admin-panel\\list-all-clients.html.twig");
    }
}
