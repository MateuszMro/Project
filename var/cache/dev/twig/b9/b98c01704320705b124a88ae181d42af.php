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

/* admin-panel/list-all-defects.html.twig */
class __TwigTemplate_4c5094a1a51df98d5fb2dae4939e2899 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/list-all-defects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/list-all-defects.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "admin-panel/list-all-defects.html.twig", 1);
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

        echo "Lista zgłoszeń";
        
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
                    Lista wszystkich zgłoszeń
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się wszystkie zgłoszenia.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz znależć konkretne zgłoszenie, wpisz poniżej jego numer.
                </p>
                <div class=\"mb-3 mt-3\">
                    <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects");
        echo "\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"number-defects\"
                                name=\"number-defects\"
                                type=\"text\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj zgłoszenia\"
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
        if ((isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                        <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                            <div class=\"mt-3 mb-3\">
                                <p><strong class=\"text-green-600\">SZUKANE ZGŁOSZENIE</strong></p>
                                <table class=\"min-w-full divide-y divide-gray-200\">
                                    <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                                    <tr>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 61, $this->source); })()), "defectNumber", [], "any", false, false, false, 61), "html", null, true);
            echo "
                                            <p class=\"text-blue-500 text-xs\">
                                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_defects_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">Zobacz szczegóły</a>
                                            </p>
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">
                                            ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 68, $this->source); })()), "status", [], "any", false, false, false, 68) == "OTWARTE")) {
                // line 69
                echo "                                                <strong class=\"font-bold text-green-600\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69), "html", null, true);
                echo "</strong>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 70
(isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 70, $this->source); })()), "status", [], "any", false, false, false, 70) == "W TRAKCIE")) {
                // line 71
                echo "                                                <strong class=\"font-bold text-yellow-500\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 71, $this->source); })()), "status", [], "any", false, false, false, 71), "html", null, true);
                echo "</strong>
                                            ";
            } else {
                // line 73
                echo "                                                <strong class=\"font-bold text-red-600\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 73, $this->source); })()), "status", [], "any", false, false, false, 73), "html", null, true);
                echo "</strong>
                                            ";
            }
            // line 75
            echo "                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">
                                            ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77) == "OTWARTE")) {
                // line 78
                echo "                                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                                </form>
                                                <form method=\"post\" action=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\">
                                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                                </form>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 84
(isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84) == "ZAMKNIĘTE")) {
                // line 85
                echo "                                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                                </form>
                                                <form method=\"post\" action=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\">
                                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                                </form>
                                            ";
            } else {
                // line 92
                echo "                                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                                </form>
                                                <form method=\"post\" action=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
                echo "\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                                </form>
                                            ";
            }
            // line 99
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 100
                echo "                                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zgłoszenie?');\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZGŁOSZENIE</button>
                                                </form>
                                            ";
            }
            // line 104
            echo "                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";
        }
        // line 111
        echo "                </div>


                <!-- Wyświetlanie wszystkich zgłoszeń -->

                <div class=\"relative overflow-x-auto\">
                    <table class=\"min-w-full divide-y divide-gray-200\">
                        <thead class=\"bg-gray-50\">
                        <tr>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defects"]) || array_key_exists("defects", $context) ? $context["defects"] : (function () { throw new RuntimeError('Variable "defects" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["defect"]) {
            // line 129
            echo "                            ";
            if ( !(null === $context["defect"])) {
                // line 130
                echo "                                <tr>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 131), "html", null, true);
                echo "</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "defectNumber", [], "any", false, false, false, 132), "html", null, true);
                echo "
                                        <p class=\"text-blue-500 text-xs\">
                                            <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_defects_show", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                echo "\">Zobacz szczegóły</a>
                                        </p>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "email", [], "any", false, false, false, 137), "html", null, true);
                echo "</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        ";
                // line 139
                if ((twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 139) == "OTWARTE")) {
                    // line 140
                    echo "                                            <strong class=\"font-bold text-green-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 140), "html", null, true);
                    echo "</strong>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 141
$context["defect"], "status", [], "any", false, false, false, 141) == "W TRAKCIE")) {
                    // line 142
                    echo "                                            <strong class=\"font-bold text-yellow-500\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 142), "html", null, true);
                    echo "</strong>
                                        ";
                } else {
                    // line 144
                    echo "                                            <strong class=\"font-bold text-red-600\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 144), "html", null, true);
                    echo "</strong>
                                        ";
                }
                // line 146
                echo "                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        ";
                // line 148
                if ((twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 148) == "OTWARTE")) {
                    // line 149
                    echo "                                            <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                            </form>
                                            <form method=\"post\" action=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_in_process", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 152)]), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                            </form>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 155
$context["defect"], "status", [], "any", false, false, false, 155) == "ZAMKNIĘTE")) {
                    // line 156
                    echo "                                            <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                            </form>
                                            <form method=\"post\" action=\"";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_in_process", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                            </form>
                                        ";
                } else {
                    // line 163
                    echo "                                            <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                            </form>
                                            <form method=\"post\" action=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                    echo "\">
                                                <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                            </form>
                                        ";
                }
                // line 170
                echo "                                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 171
                    echo "                                            <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 171)]), "html", null, true);
                    echo "\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zgłoszenie?');\">
                                                <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZGŁOSZENIE</button>
                                            </form>
                                        ";
                }
                // line 175
                echo "                                    </td>
                                </tr>
                            ";
            }
            // line 178
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.show-more-btn').forEach(button => {
            button.addEventListener('click', () => {
                const parent = button.parentElement;
                const shortDescription = parent.querySelector('.short-description');
                const fullDescription = parent.querySelector('.full-description');

                if (fullDescription.style.display === 'none') {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'inline';
                    button.textContent = 'Ukryj opis';
                } else {
                    shortDescription.style.display = 'inline';
                    fullDescription.style.display = 'none';
                    button.textContent = 'Pokaż cały opis';
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin-panel/list-all-defects.html.twig";
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
        return array (  399 => 179,  393 => 178,  388 => 175,  380 => 171,  377 => 170,  370 => 166,  363 => 163,  356 => 159,  349 => 156,  347 => 155,  341 => 152,  334 => 149,  332 => 148,  328 => 146,  322 => 144,  316 => 142,  314 => 141,  309 => 140,  307 => 139,  302 => 137,  296 => 134,  291 => 132,  287 => 131,  284 => 130,  281 => 129,  277 => 128,  258 => 111,  249 => 104,  241 => 100,  238 => 99,  231 => 95,  224 => 92,  217 => 88,  210 => 85,  208 => 84,  202 => 81,  195 => 78,  193 => 77,  189 => 75,  183 => 73,  177 => 71,  175 => 70,  170 => 69,  168 => 68,  163 => 66,  157 => 63,  152 => 61,  148 => 60,  131 => 45,  129 => 44,  103 => 21,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Lista zgłoszeń{% endblock %}



{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h1 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Lista wszystkich zgłoszeń
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdują się wszystkie zgłoszenia.
                </p>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Jeśli chcesz znależć konkretne zgłoszenie, wpisz poniżej jego numer.
                </p>
                <div class=\"mb-3 mt-3\">
                    <form action=\"{{ path('app_list_all_defects') }}\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"number-defects\"
                                name=\"number-defects\"
                                type=\"text\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj zgłoszenia\"
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

                    {% if defect %}
                        <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                            <div class=\"mt-3 mb-3\">
                                <p><strong class=\"text-green-600\">SZUKANE ZGŁOSZENIE</strong></p>
                                <table class=\"min-w-full divide-y divide-gray-200\">
                                    <thead class=\"bg-gray-50\">
                                    <tr>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">ID</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Numer zgłoszenia</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Adres e-mail</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status</th>
                                        <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                                    </tr>
                                    </thead>
                                    <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                                    <tr>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.id }}</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.defectNumber }}
                                            <p class=\"text-blue-500 text-xs\">
                                                <a href=\"{{ path('app_defects_show', { id: defect.id }) }}\">Zobacz szczegóły</a>
                                            </p>
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.email }}</td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">
                                            {% if defect.status == 'OTWARTE' %}
                                                <strong class=\"font-bold text-green-600\">{{ defect.status }}</strong>
                                            {% elseif defect.status == 'W TRAKCIE' %}
                                                <strong class=\"font-bold text-yellow-500\">{{ defect.status }}</strong>
                                            {% else %}
                                                <strong class=\"font-bold text-red-600\">{{ defect.status }}</strong>
                                            {% endif %}
                                        </td>
                                        <td class=\"px-6 py-4 whitespace-nowrap\">
                                            {% if defect.status == 'OTWARTE' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_close', {'id': defect.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                                </form>
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_in_process', {'id': defect.id}) }}\">
                                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                                </form>
                                            {% elseif defect.status == 'ZAMKNIĘTE' %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_open', {'id': defect.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                                </form>
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_in_process', {'id': defect.id}) }}\">
                                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                                </form>
                                            {% else %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_close', {'id': defect.id}) }}\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                                </form>
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_open', {'id': defect.id}) }}\">
                                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                                </form>
                                            {% endif %}
                                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                                <form method=\"post\" action=\"{{ path('app_list_all_defects_delete', {'id': defect.id}) }}\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zgłoszenie?');\">
                                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZGŁOSZENIE</button>
                                                </form>
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
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Status</th>
                            <th scope=\"col\" class=\"px-6 py-3 text-left text-base font-bold text-black uppercase tracking-wider\">Akcje</th>
                        </tr>
                        </thead>
                        <tbody class=\"bg-white divide-y divide-gray-200 text-sm text-black\">
                        {% for defect in defects %}
                            {% if defect is not null %}
                                <tr>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.id }}</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.defectNumber }}
                                        <p class=\"text-blue-500 text-xs\">
                                            <a href=\"{{ path('app_defects_show', { id: defect.id }) }}\">Zobacz szczegóły</a>
                                        </p>
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">{{ defect.email }}</td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        {% if defect.status == 'OTWARTE' %}
                                            <strong class=\"font-bold text-green-600\">{{ defect.status }}</strong>
                                        {% elseif defect.status == 'W TRAKCIE' %}
                                            <strong class=\"font-bold text-yellow-500\">{{ defect.status }}</strong>
                                        {% else %}
                                            <strong class=\"font-bold text-red-600\">{{ defect.status }}</strong>
                                        {% endif %}
                                    </td>
                                    <td class=\"px-6 py-4 whitespace-nowrap\">
                                        {% if defect.status == 'OTWARTE' %}
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_close', {'id': defect.id}) }}\">
                                                <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                            </form>
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_in_process', {'id': defect.id}) }}\">
                                                <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                            </form>
                                        {% elseif defect.status == 'ZAMKNIĘTE' %}
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_open', {'id': defect.id}) }}\">
                                                <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                            </form>
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_in_process', {'id': defect.id}) }}\">
                                                <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                            </form>
                                        {% else %}
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_close', {'id': defect.id}) }}\">
                                                <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                            </form>
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_open', {'id': defect.id}) }}\">
                                                <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                            </form>
                                        {% endif %}
                                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                                            <form method=\"post\" action=\"{{ path('app_list_all_defects_delete', {'id': defect.id}) }}\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zgłoszenie?');\">
                                                <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZGŁOSZENIE</button>
                                            </form>
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
    <script>
        document.querySelectorAll('.show-more-btn').forEach(button => {
            button.addEventListener('click', () => {
                const parent = button.parentElement;
                const shortDescription = parent.querySelector('.short-description');
                const fullDescription = parent.querySelector('.full-description');

                if (fullDescription.style.display === 'none') {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'inline';
                    button.textContent = 'Ukryj opis';
                } else {
                    shortDescription.style.display = 'inline';
                    fullDescription.style.display = 'none';
                    button.textContent = 'Pokaż cały opis';
                }
            });
        });
    </script>
{% endblock %}", "admin-panel/list-all-defects.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\admin-panel\\list-all-defects.html.twig");
    }
}
