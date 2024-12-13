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

/* admin-panel/defects-show.html.twig */
class __TwigTemplate_7804dfbcde6dfb6daafdbf4da1e8657b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/defects-show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-panel/defects-show.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "admin-panel/defects-show.html.twig", 1);
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

        echo "Zgłoszenie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 3, $this->source); })()), "defectNumber", [], "any", false, false, false, 3), "html", null, true);
        
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
                    Zgłoszenie ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 11, $this->source); })()), "defectNumber", [], "any", false, false, false, 11), "html", null, true);
        echo "
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz szczegóły wybranego zgłoszenia.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            ID
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer zgłoszenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 32, $this->source); })()), "defectNumber", [], "any", false, false, false, 32), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres e-mail
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer telefonu
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 48, $this->source); })()), "numberPhone", [], "any", false, false, false, 48), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Data utworzenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 56, $this->source); })()), "createdDate", [], "any", false, false, false, 56), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Treść zgłoszenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), "html", null, true);
        echo "
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status zgłoszenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72) == "OTWARTE")) {
            // line 73
            echo "                                <strong class=\"font-bold text-green-600\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 73, $this->source); })()), "status", [], "any", false, false, false, 73), "html", null, true);
            echo "</strong>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 74, $this->source); })()), "status", [], "any", false, false, false, 74) == "W TRAKCIE")) {
            // line 75
            echo "                                <strong class=\"font-bold text-yellow-500\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 75, $this->source); })()), "status", [], "any", false, false, false, 75), "html", null, true);
            echo "</strong>
                            ";
        } else {
            // line 77
            echo "                                <strong class=\"font-bold text-red-600\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77), "html", null, true);
            echo "</strong>
                            ";
        }
        // line 79
        echo "                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Akcje
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 86, $this->source); })()), "status", [], "any", false, false, false, 86) == "OTWARTE")) {
            // line 87
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                </form>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 93
(isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93) == "ZAMKNIĘTE")) {
            // line 94
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_in_process", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-yellow-500 font-bold\">W TRAKCIE</button>
                                </form>
                            ";
        } else {
            // line 101
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_close", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold\">ZAMKNIJ</button>
                                </form>
                                <form method=\"post\" action=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_open", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"text-green-600 font-bold\">OTWÓRZ</button>
                                </form>
                            ";
        }
        // line 108
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 109
            echo "                                <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_all_defects_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["defect"]) || array_key_exists("defect", $context) ? $context["defect"] : (function () { throw new RuntimeError('Variable "defect" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Czy na pewno chcesz usunąć te zgłoszenie?');\">
                                    <button type=\"submit\" class=\"text-red-600 font-bold mt-2\">USUŃ ZGŁOSZENIE</button>
                                </form>
                            ";
        }
        // line 113
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
        return "admin-panel/defects-show.html.twig";
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
        return array (  263 => 113,  255 => 109,  252 => 108,  245 => 104,  238 => 101,  231 => 97,  224 => 94,  222 => 93,  216 => 90,  209 => 87,  207 => 86,  198 => 79,  192 => 77,  186 => 75,  184 => 74,  179 => 73,  177 => 72,  166 => 64,  155 => 56,  144 => 48,  133 => 40,  122 => 32,  111 => 24,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Zgłoszenie {{ defect.defectNumber }}{% endblock %}


{% block content %}
    <div id=\"\" class=\"container my-24 mx-auto md:px-6 w-full text-white rounded-lg\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg border\">
            <div class=\"px-4 py-5 sm:px-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                    Zgłoszenie {{ defect.defectNumber }}
                </h3>
                <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                    Poniżej znajdziesz szczegóły wybranego zgłoszenia.
                </p>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-5 sm:p-0\">
                <dl class=\"sm:divide-y sm:divide-gray-200\">
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            ID
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ defect.id }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer zgłoszenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ defect.defectNumber }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Adres e-mail
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ defect.email }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Numer telefonu
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ defect.numberPhone }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Data utworzenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ defect.createdDate }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Treść zgłoszenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {{ defect.description }}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Status zgłoszenia
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                            {% if defect.status == 'OTWARTE' %}
                                <strong class=\"font-bold text-green-600\">{{ defect.status }}</strong>
                            {% elseif defect.status == 'W TRAKCIE' %}
                                <strong class=\"font-bold text-yellow-500\">{{ defect.status }}</strong>
                            {% else %}
                                <strong class=\"font-bold text-red-600\">{{ defect.status }}</strong>
                            {% endif %}
                        </dd>
                    </div>
                    <div class=\"py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                        <dt class=\"text-sm font-medium text-gray-500\">
                            Akcje
                        </dt>
                        <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
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
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
{% endblock %}
", "admin-panel/defects-show.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\admin-panel\\defects-show.html.twig");
    }
}
