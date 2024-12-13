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

/* info-pages/confirm-error.html.twig */
class __TwigTemplate_001a596da015430ac9341b1748f89e29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "info-pages/confirm-error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "info-pages/confirm-error.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "info-pages/confirm-error.html.twig", 1);
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

        echo "Rejestracja";
        
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
        echo "    <section class=\"bg-gray-50 dark:bg-gray-900\">
        <div class=\"fixed z-10 inset-0 overflow-y-auto\">
            <div class=\"flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0\">
                <div class=\"fixed inset-0 transition-opacity\">
                    <div class=\"absolute inset-0 bg-gray-500 opacity-75\"></div>
                </div>
                <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\"></span>
                <div class=\"inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all
                            sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6\">
                    <div class=\"sm:flex sm:items-start\">
                        <div class=\"mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-600 sm:mx-0 sm:h-10 sm:w-10\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-white cursor-pointer\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                            </svg>
                        </div>
                        <div class=\"mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left\">
                            <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                                Rejestracja nieudana!
                            </h3>
                            <div class=\"mt-2\">
                                <p class=\"text-sm leading-5 text-gray-500\">
                                    Konto nie zostało aktywowane. W razie problemów skontaktuj się z działem pomocy technicznej <strong><a href=\"/contact\">klikając w ten link</a></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-5 sm:mt-4 sm:flex sm:flex-row-reverse\">
                <span class=\"flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto\">
                    <button type=\"button\" class=\"inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base
                    leading-6 font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:shadow-outline-green transition ease-in-out duration-150
                    sm:text-sm sm:leading-5\">
                        <a href=\"/\">OK</a>
                    </button>
                </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "info-pages/confirm-error.html.twig";
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
        return array (  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Rejestracja{% endblock %}



{% block content %}
    <section class=\"bg-gray-50 dark:bg-gray-900\">
        <div class=\"fixed z-10 inset-0 overflow-y-auto\">
            <div class=\"flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0\">
                <div class=\"fixed inset-0 transition-opacity\">
                    <div class=\"absolute inset-0 bg-gray-500 opacity-75\"></div>
                </div>
                <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\"></span>
                <div class=\"inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all
                            sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6\">
                    <div class=\"sm:flex sm:items-start\">
                        <div class=\"mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-600 sm:mx-0 sm:h-10 sm:w-10\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-white cursor-pointer\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                            </svg>
                        </div>
                        <div class=\"mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left\">
                            <h3 class=\"text-lg leading-6 font-medium text-gray-900\">
                                Rejestracja nieudana!
                            </h3>
                            <div class=\"mt-2\">
                                <p class=\"text-sm leading-5 text-gray-500\">
                                    Konto nie zostało aktywowane. W razie problemów skontaktuj się z działem pomocy technicznej <strong><a href=\"/contact\">klikając w ten link</a></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-5 sm:mt-4 sm:flex sm:flex-row-reverse\">
                <span class=\"flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto\">
                    <button type=\"button\" class=\"inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base
                    leading-6 font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:shadow-outline-green transition ease-in-out duration-150
                    sm:text-sm sm:leading-5\">
                        <a href=\"/\">OK</a>
                    </button>
                </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "info-pages/confirm-error.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\info-pages\\confirm-error.html.twig");
    }
}
