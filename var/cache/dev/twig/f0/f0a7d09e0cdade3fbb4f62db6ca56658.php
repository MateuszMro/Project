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

/* pages/search_defects.html.twig */
class __TwigTemplate_1e9b02b92d31ae307298c99884e08d16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/search_defects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/search_defects.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/search_defects.html.twig", 1);
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
                    Szukaj zgłoszenia
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Wprowadź poniżej numer szukanego zgłoszenia.
                </p>
                <div class=\"mb-3\">
                    <form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_search_defects");
        echo "\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"number-defects\"
                                name=\"number-defects\"
                                type=\"text\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj\"
                                aria-label=\"Search\"
                                aria-describedby=\"button-addon3\" />

                        <!--Search button-->
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
        // line 38
        if ((isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                    <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0 text-gray-900\">
                        <div class=\"mt-3 mb-3\">
                            <p><strong>ID: </strong>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                            <p><strong>Numer zgłoszenia: </strong>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 42, $this->source); })()), "defectNumber", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                            <p><strong>Adres e-mail: </strong>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                            <p><strong>Numer telefonu: </strong>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 44, $this->source); })()), "numberPhone", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                            <p><strong>Data utworzenia zgłoszenia: </strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 45, $this->source); })()), "createdDate", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                            <p><strong>Treść zgłoszenia: </strong>
                                <span class=\"short-description\" data-full-description=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 0, 50), "html", null, true);
            echo "...</span>
                                <span class=\"full-description\" style=\"display:none;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                            </p>
                            <button class=\"show-more-btn text-sm text-blue-500\">Pokaż cały opis</button>
                            <p><strong>Status zgłoszenia: </strong>
                                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52) == "OPEN")) {
                // line 53
                echo "                                    <strong class=\"font-bold text-green-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53), "html", null, true);
                echo "</strong>
                                ";
            } else {
                // line 55
                echo "                                    <strong class=\"font-bold text-red-600\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "html", null, true);
                echo "</strong>
                                ";
            }
            // line 57
            echo "                            </p>
                            <p>
                                ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59) == "OPEN")) {
                // line 60
                echo "                            <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\">
                                <strong>Zmień status zgłoszenia: </strong>
                                <button type=\"submit\" class=\"text-red-600 font-bold\">CLOSE</button>
                            </form>
                            ";
            } else {
                // line 65
                echo "                                <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\">
                                    <strong>Zmień status zgłoszenia: </strong>
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OPEN</button>
                                </form>
                            ";
            }
            // line 70
            echo "                            </p>
                        </div>
                    </div>
                ";
        }
        // line 74
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
        return "pages/search_defects.html.twig";
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
        return array (  207 => 74,  201 => 70,  192 => 65,  183 => 60,  181 => 59,  177 => 57,  171 => 55,  165 => 53,  163 => 52,  156 => 48,  150 => 47,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 39,  123 => 38,  100 => 18,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
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
                    Szukaj zgłoszenia
                </h1>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Wprowadź poniżej numer szukanego zgłoszenia.
                </p>
                <div class=\"mb-3\">
                    <form action=\"{{ path('app_list_search_defects') }}\" method=\"get\" class=\"w-[450px] flex\">
                        <input
                                id=\"number-defects\"
                                name=\"number-defects\"
                                type=\"text\"
                                class=\"relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary\"
                                placeholder=\"Szukaj\"
                                aria-label=\"Search\"
                                aria-describedby=\"button-addon3\" />

                        <!--Search button-->
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
{% endblock %}", "pages/search_defects.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\search_defects.html.twig");
    }
}
