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

/* pages/gallery.html.twig */
class __TwigTemplate_8e711ada1842cb47c5c86c92e2f3a5d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/gallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/gallery.html.twig"));

        $this->parent = $this->loadTemplate("pages/home.html.twig", "pages/gallery.html.twig", 1);
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

        echo "Galeria";
        
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
        echo "    <div id=\"gallery\" class=\"container my-24 mx-auto md:px-6\">
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10010</h1></strong>
                <b>fronty akrylove.</b> antracyt metalik<br>
                <b>uchwyty.</b> folt / czarny <br>
                <b>blat.</b> marmur NERO <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10020</h1></strong>
                <b>fronty frezove.</b> modern biały / szałwia<br>
                <b>uchwyty.</b> modern / czarny <br>
                <b>blat.</b> marmur LUMI <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10030</h1></strong>
                <b>fronty laminove.</b> dąb ciemny<br>
                <b>uchwyty.</b> globo / czarny <br>
                <b>blat.</b> dąb ciemny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10040</h1></strong>
                <b>fronty frezove.</b> retro biały<br>
                <b>uchwyty.</b> globo / czarny <br>
                <b>blat.</b> marmur LUMI <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10050</h1></strong>
                <b>fronty laminove.</b> dąb naturalny<br>
                <b>uchwyty.</b> slim / biały <br>
                <b>blat.</b> dąb naturalny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10060</h1></strong>
                <b>fronty akrylove.</b> biały mat<br>
                <b>uchwyty.</b> paris / złoty <br>
                <b>blat.</b> dąb ciemny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10070</h1></strong>
                <b>fronty laminove.</b> marmur NERO<br>
                <b>uchwyty.</b> modern / czarny <br>
                <b>blat.</b> marmur NERO <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10080</h1></strong>
                <b>fronty akrylove.</b> kubanik metalik mat<br>
                <b>uchwyty.</b> lux / złoty <br>
                <b>blat.</b> dąb ciemny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10090</h1></strong>
                <b>fronty akrylove.</b> biały mat<br>
                <b>uchwyty.</b> slim / srebrny <br>
                <b>blat.</b> beton strukturalny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        return "pages/gallery.html.twig";
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

{% block title %}Galeria{% endblock %}



{% block content %}
    <div id=\"gallery\" class=\"container my-24 mx-auto md:px-6\">
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10010</h1></strong>
                <b>fronty akrylove.</b> antracyt metalik<br>
                <b>uchwyty.</b> folt / czarny <br>
                <b>blat.</b> marmur NERO <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10020</h1></strong>
                <b>fronty frezove.</b> modern biały / szałwia<br>
                <b>uchwyty.</b> modern / czarny <br>
                <b>blat.</b> marmur LUMI <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10030</h1></strong>
                <b>fronty laminove.</b> dąb ciemny<br>
                <b>uchwyty.</b> globo / czarny <br>
                <b>blat.</b> dąb ciemny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10040</h1></strong>
                <b>fronty frezove.</b> retro biały<br>
                <b>uchwyty.</b> globo / czarny <br>
                <b>blat.</b> marmur LUMI <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10050</h1></strong>
                <b>fronty laminove.</b> dąb naturalny<br>
                <b>uchwyty.</b> slim / biały <br>
                <b>blat.</b> dąb naturalny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10060</h1></strong>
                <b>fronty akrylove.</b> biały mat<br>
                <b>uchwyty.</b> paris / złoty <br>
                <b>blat.</b> dąb ciemny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10070</h1></strong>
                <b>fronty laminove.</b> marmur NERO<br>
                <b>uchwyty.</b> modern / czarny <br>
                <b>blat.</b> marmur NERO <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10080</h1></strong>
                <b>fronty akrylove.</b> kubanik metalik mat<br>
                <b>uchwyty.</b> lux / złoty <br>
                <b>blat.</b> dąb ciemny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
        <div class=\"kitchen_1\">
            <div class=\"number_kitchen\">
                <strong><h1>Kuchnia: 10090</h1></strong>
                <b>fronty akrylove.</b> biały mat<br>
                <b>uchwyty.</b> slim / srebrny <br>
                <b>blat.</b> beton strukturalny <br>
                <b style=\"font-size: 12px\" class=\"font-bold\">Jeśli jesteś zainteresowany/a podobną kuchnią, <br> zamów wizytę specjalisty celem wykonania dokładnych pomiarów</b>
                <br>
                <b style=\"font-size: 10px\">Cena zawiera koszt: szafek, blatów, frontów oraz uchwytów, nie zawiera montażu.</b><br>
            </div>
            <div class=\"kitchen_images\">
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
{% endblock %}", "pages/gallery.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\gallery.html.twig");
    }
}
