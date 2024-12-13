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

/* pages/list-all-defects.html.twig */
class __TwigTemplate_b435dcf411847fa8322dc2ac4b4eaca5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-all-defects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/list-all-defects.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/list-all-defects.html.twig", 1);
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
                ";
        // line 40
        if ((isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3 mb-3\">
                            <p><strong class=\"text-green-600\">SZUKANE ZGŁOSZENIE</strong></p>
                            <p><strong>ID: </strong>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            <p><strong>Numer zgłoszenia: </strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 45, $this->source); })()), "defectNumber", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                            <p><strong>Adres e-mail: </strong>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                            <p><strong>Numer telefonu: </strong>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 47, $this->source); })()), "numberPhone", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 48, $this->source); })()), "createdDate", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 0, 50), "html", null, true);
            echo "...</span>
                                <span class=\"full-description\" style=\"display:none;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55) == "OPEN")) {
                // line 56
                echo "                                    <strong class=\"font-bold text-green-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56), "html", null, true);
                echo "</strong>
                                ";
            } else {
                // line 58
                echo "                                    <strong class=\"font-bold text-red-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58), "html", null, true);
                echo "</strong>
                                ";
            }
            // line 60
            echo "                            </p>
                            <p>
                                ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62) == "OPEN")) {
                // line 63
                echo "                            <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\">
                                <strong>Zmień status zgłoszenia: </strong>
                                <button type=\"submit\" class=\"text-red-600 font-bold\">CLOSE</button>
                            </form>
                            ";
            } else {
                // line 68
                echo "                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\">
                                    <strong>Zmień status zgłoszenia: </strong>
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OPEN</button>
                                </form>
                            ";
            }
            // line 73
            echo "                            </p>
                        </div>
                    </div>
                ";
        }
        // line 77
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defects"]) || array_key_exists("defects", $context) ? $context["defects"] : (function () { throw new RuntimeError('Variable "defects" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["defect"]) {
            // line 78
            echo "                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3 mb-3\">
                            <p><strong>ID: </strong>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
                            <p><strong>Numer zgłoszenia: </strong>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "defectNumber", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
                            <p><strong>Adres e-mail: </strong>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "email", [], "any", false, false, false, 82), "html", null, true);
            echo "</p>
                            <p><strong>Numer telefonu: </strong>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "numberPhone", [], "any", false, false, false, 83), "html", null, true);
            echo "</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "createdDate", [], "any", false, false, false, 84), "html", null, true);
            echo "</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "description", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "description", [], "any", false, false, false, 86), 0, 50), "html", null, true);
            echo "...</span>
                                <span class=\"full-description\" style=\"display:none;\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "description", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 91) == "OPEN")) {
                // line 92
                echo "                                    <strong class=\"font-bold text-green-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 92), "html", null, true);
                echo "</strong>
                                ";
            } else {
                // line 94
                echo "                                    <strong class=\"font-bold text-red-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 94), "html", null, true);
                echo "</strong>
                                ";
            }
            // line 96
            echo "                            </p>
                            <p>
                                ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, $context["defect"], "status", [], "any", false, false, false, 98) == "OPEN")) {
                // line 99
                echo "                                    <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">
                                        <strong>Zmień status zgłoszenia: </strong>
                                        <button type=\"submit\" class=\"text-red-600 font-bold\">CLOSE</button>
                                    </form>
                                ";
            } else {
                // line 104
                echo "                                    <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, $context["defect"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\">
                                        <strong>Zmień status zgłoszenia: </strong>
                                        <button type=\"submit\" class=\"text-green-600 font-bold\">OPEN</button>
                                    </form>
                                ";
            }
            // line 109
            echo "                            </p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </div>
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
        return "pages/list-all-defects.html.twig";
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
        return array (  300 => 113,  291 => 109,  282 => 104,  273 => 99,  271 => 98,  267 => 96,  261 => 94,  255 => 92,  253 => 91,  246 => 87,  240 => 86,  235 => 84,  231 => 83,  227 => 82,  223 => 81,  219 => 80,  215 => 78,  210 => 77,  204 => 73,  195 => 68,  186 => 63,  184 => 62,  180 => 60,  174 => 58,  168 => 56,  166 => 55,  159 => 51,  153 => 50,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  132 => 44,  127 => 41,  125 => 40,  103 => 21,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
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
                {% if defect %}
                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3 mb-3\">
                            <p><strong class=\"text-green-600\">SZUKANE ZGŁOSZENIE</strong></p>
                            <p><strong>ID: </strong>{{ defect.id }}</p>
                            <p><strong>Numer zgłoszenia: </strong>{{ defect.defectNumber }}</p>
                            <p><strong>Adres e-mail: </strong>{{ defect.email }}</p>
                            <p><strong>Numer telefonu: </strong>{{ defect.numberPhone }}</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>{{ defect.createdDate }}</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"{{ defect.description }}\">{{ defect.description | slice(0, 50) }}...</span>
                                <span class=\"full-description\" style=\"display:none;\">{{ defect.description }}</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                {% if defect.status == 'OPEN' %}
                                    <strong class=\"font-bold text-green-600\"> {{ defect.status }}</strong>
                                {% else %}
                                    <strong class=\"font-bold text-red-600\"> {{ defect.status }}</strong>
                                {% endif %}
                            </p>
                            <p>
                                {% if defect.status == 'OPEN' %}
                            <form method=\"post\" action=\"{{ path('app_list_all_defects_close', {'id': defect.id}) }}\">
                                <strong>Zmień status zgłoszenia: </strong>
                                <button type=\"submit\" class=\"text-red-600 font-bold\">CLOSE</button>
                            </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('app_list_all_defects_open', {'id': defect.id}) }}\">
                                    <strong>Zmień status zgłoszenia: </strong>
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OPEN</button>
                                </form>
                            {% endif %}
                            </p>
                        </div>
                    </div>
                {% endif %}
                {% for defect in defects %}
                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3 mb-3\">
                            <p><strong>ID: </strong>{{ defect.id }}</p>
                            <p><strong>Numer zgłoszenia: </strong>{{ defect.defectNumber }}</p>
                            <p><strong>Adres e-mail: </strong>{{ defect.email }}</p>
                            <p><strong>Numer telefonu: </strong>{{ defect.numberPhone }}</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>{{ defect.createdDate }}</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"{{ defect.description }}\">{{ defect.description | slice(0, 50) }}...</span>
                                <span class=\"full-description\" style=\"display:none;\">{{ defect.description }}</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                {% if defect.status == 'OPEN' %}
                                    <strong class=\"font-bold text-green-600\"> {{ defect.status }}</strong>
                                {% else %}
                                    <strong class=\"font-bold text-red-600\"> {{ defect.status }}</strong>
                                {% endif %}
                            </p>
                            <p>
                                {% if defect.status == 'OPEN' %}
                                    <form method=\"post\" action=\"{{ path('app_list_all_defects_close', {'id': defect.id}) }}\">
                                        <strong>Zmień status zgłoszenia: </strong>
                                        <button type=\"submit\" class=\"text-red-600 font-bold\">CLOSE</button>
                                    </form>
                                {% else %}
                                    <form method=\"post\" action=\"{{ path('app_list_all_defects_open', {'id': defect.id}) }}\">
                                        <strong>Zmień status zgłoszenia: </strong>
                                        <button type=\"submit\" class=\"text-green-600 font-bold\">OPEN</button>
                                    </form>
                                {% endif %}
                            </p>
                        </div>
                    </div>
                {% endfor %}
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
{% endblock %}", "pages/list-all-defects.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\list-all-defects.html.twig");
    }
}
