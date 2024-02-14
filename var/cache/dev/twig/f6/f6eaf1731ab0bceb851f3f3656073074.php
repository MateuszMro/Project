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

/* pages/offer.html.twig */
class __TwigTemplate_8bb1d1c9c964f4acb56f907b54b0498d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/offer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/offer.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/offer.html.twig", 1);
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

        echo "Oferty";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"offer\" class=\"container my-24 mx-auto md:px-6\">
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1>fronty / blaty / <b>laminove.</b></h1>
                <p>Fronty laminowanie stanowią świetną alternatywę dla materiałów takich jak drewno, kamień
                    czy metal. Są łatwe w pielęgnacji i naturalne w swoim wyglądzie. Ich powierzchnia pokryta jest
                    dekorem zaimpregnowanym żywicą melaminową dzięki czemu fronty laminove są trwałe i odporne
                    na zabrudzenia.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1>fronty <b>akrylove</b></h1>
                <p>Gładkie, przyjemne w dotyku fronty pokryte warstwą akrylu.
                    Charakteryzują się wysoką odpornością na zarysowania i uszkodzenia
                    mechaniczne. Łatwe do utrzymania w czystości i odporne na promienie UV.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1>fronty <b>frezove</b></h1>
                <p>Fronty frezowane to klasyka w nowym wydaniu. Matowe wykończenie oraz
                oryginalny wygląd dodadzą wnętrzu charakteru. Charakteryzują się wysoką na uszkodzenia i plamy.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1><b>korpusy.</b></h1>
                <p>Korpusy to podstawa i szkielet każdej kuchni - nie są widoczne na pierwszy rzut oka, ale na
                drugi już tak, dlatego oferujemy dwa kolory płyt korpusowych, które skomponują się
                dobrze zarówno z kuchniami w jasnych jak i ciemnych odcieniach.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1><b>uchwyty.</b></h1>
                <p>Piękno w każdym calu - odkryj naszą kolekcję uchwytów. To idealne połączenie wygody i dobrego
                designu.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
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
        return "pages/offer.html.twig";
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
        return array (  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pages/home.html.twig' %}

{% block title %}Oferty{% endblock %}




{% block content %}
    <div id=\"offer\" class=\"container my-24 mx-auto md:px-6\">
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1>fronty / blaty / <b>laminove.</b></h1>
                <p>Fronty laminowanie stanowią świetną alternatywę dla materiałów takich jak drewno, kamień
                    czy metal. Są łatwe w pielęgnacji i naturalne w swoim wyglądzie. Ich powierzchnia pokryta jest
                    dekorem zaimpregnowanym żywicą melaminową dzięki czemu fronty laminove są trwałe i odporne
                    na zabrudzenia.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1>fronty <b>akrylove</b></h1>
                <p>Gładkie, przyjemne w dotyku fronty pokryte warstwą akrylu.
                    Charakteryzują się wysoką odpornością na zarysowania i uszkodzenia
                    mechaniczne. Łatwe do utrzymania w czystości i odporne na promienie UV.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1>fronty <b>frezove</b></h1>
                <p>Fronty frezowane to klasyka w nowym wydaniu. Matowe wykończenie oraz
                oryginalny wygląd dodadzą wnętrzu charakteru. Charakteryzują się wysoką na uszkodzenia i plamy.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1><b>korpusy.</b></h1>
                <p>Korpusy to podstawa i szkielet każdej kuchni - nie są widoczne na pierwszy rzut oka, ale na
                drugi już tak, dlatego oferujemy dwa kolory płyt korpusowych, które skomponują się
                dobrze zarówno z kuchniami w jasnych jak i ciemnych odcieniach.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"offer_1\">
            <div class=\"offer_content\">
                <h1><b>uchwyty.</b></h1>
                <p>Piękno w każdym calu - odkryj naszą kolekcję uchwytów. To idealne połączenie wygody i dobrego
                designu.</p>
            </div>
            <br>
            <div class=\"flex justify-center gap-5\">
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
                <div>
                    <img
                            width=\"50px\"
                            height=\"50px\"
                            alt=\"gallery\"
                            class=\"block h-full w-full rounded-lg object-cover object-center\"
                            src=\"https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp\" />
                </div>
            </div>
        </div>


    </div>
{% endblock %}", "pages/offer.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\offer.html.twig");
    }
}
