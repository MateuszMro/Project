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

/* pages/home.html.twig */
class __TwigTemplate_431133476b7312916c8c0e286a80279a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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

        echo "Meble";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 6
        echo "    <script type=\"module\" src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<body class=\"flex flex-col min-h-screen z-5\">

        ";
        // line 12
        $this->displayBlock('sidebar', $context, $blocks);
        // line 215
        echo "
    <div id=\"content\" class=\"flex-1 container mx-auto md:px-6 sticky\">
        ";
        // line 217
        $this->displayBlock('content', $context, $blocks);
        // line 421
        echo "    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 13
        echo "            <!-- Navbar -->
            <nav id=\"navbar\" class=\"bg-gray-800 py-4 top-0 left-0 w-full z-10 backdrop-blur bg-opacity-90\">
                <div class=\"flex flex-wrap justify-between items-start mx-auto max-w-screen-xl\">
                    <div class=\"flex items-center md:ml-10\">
                        <img src=\"https://flowbite.com/docs/images/logo.svg\" class=\"h-8\" alt=\"Flowbite Logo\" />
                        <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white ml-2\">Logo</span>
                    </div>
                    <div class=\"flex items-center\">
                        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                            <!-- Dropdown -->
                            <div class=\"relative md:mr-10\">
                                <button id=\"user-dropdown-btn\" class=\"text-white focus:outline-none px-5\">
                                    <summary class=\"flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer\">
                                    <span class=\"flex gap-2\">
                                        <img class=\"w-10 h-10 rounded-full\" src=\"https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c\" alt=\"\">
                                        <span class=\"flex items-center\">
                                            ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "login", [], "any", false, false, false, 29), "html", null, true);
            echo "
                                        </span>
                                    </span>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                                        </svg>
                                    </summary>
                                </button>

                                <div id=\"user-dropdown-menu\" class=\"absolute top-full left-0 right-0 bg-white shadow-md rounded-lg mt-2 hidden px-2 pb-4 min-w-full\">
                                    <ul class=\"flex flex-col gap-4 pl-2 mt-4 \">
                                        <li class=\"flex gap-2 \">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
                                                 stroke=\"currentColor\" class=\"w-6 h-6\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z\">
                                                </path>
                                            </svg>
                                            <a href=\"/my-profile\" class=\"ease-in-out hover:scale-110\">
                                                Panel klienta
                                            </a>
                                        </li>
                                        <hr>
                                        ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 52
                echo "                                            <li class=\"flex gap-2 \">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
                                                     stroke=\"currentColor\" class=\"w-6 h-6\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z\">
                                                    </path>
                                                </svg>
                                                <a href=\"/admin-panel\" class=\"ease-in-out hover:scale-110\">
                                                    Aministrator
                                                </a>
                                            </li>
                                            <hr>
                                        ";
            }
            // line 64
            echo "
";
            // line 70
            echo "
";
            // line 76
            echo "
";
            // line 89
            echo "
                                        <li class=\"flex gap-2\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z\" />
                                            </svg>
                                            <a href=\"/logout\" class=\"ease-in-out hover:scale-110\">Wyloguj</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        ";
        } else {
            // line 100
            echo "                            <div>
                                <a href=\"/register\" class=\"flex hover:text-blue-300
                                    cursor-pointer transition-colors duration-300
                                    font-semibold text-white float-left mr-12\">

                                        <svg class=\"fill-current h-5 w-5 mr-2 mt-0.5\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" width=\"24\" height=\"24\"
                                             viewBox=\"0 0 24 24\">
                                            <path d=\"M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z\" />
                                        </svg>
                                        <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                        before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                        before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                        after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ease-in-out hover:scale-110\">
                                    Rejestracja
                                    </span>
                                </a>
                                <a href=\"/login\" class=\"flex hover:text-blue-300
                                    cursor-pointer transition-colors duration-300
                                    font-semibold text-white\">

                                        <svg class=\"fill-current h-5 w-5 mr-2 mt-0.5\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" width=\"24\" height=\"24\"
                                             viewBox=\"0 0 24 24\">
                                            <path d=\"M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z\" />
                                        </svg>
                                        <span class=\" md:mr-10 relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                        before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                        before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                        after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ease-in-out hover:scale-110\">
                                        Logowanie
                                     </span>
                                </a>
                            </div>
                        ";
        }
        // line 135
        echo "                    </div>
                </div>
                <div class=\"lg:hidden flex justify-start w-auto block md:ml-10 mt-0 md:mt-4\">
                    <button id=\"menu-toggle\"
                            class=\"flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white\">
                        <svg class=\"fill-current h-6 w-6\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>Menu</title>
                            <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/>
                        </svg>
                    </button>
                </div>
                <div class=\"container mx-auto flex justify-center items-center\">
                    <!-- Links -->
                    <div id=\"menu\" class=\"flex justify-center hidden space-x-8 lg:flex lg:items-center lg:w-auto\">
                        <a href=\"/\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Strona główna
                            </span>
                        </a>
                        <a href=\"/gallery\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Galeria
                            </span>
                        </a>
                        <a href=\"/offer\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Oferty
                            </span>
                        </a>
                        <a href=\"/contact\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Kontakt
                            </span>
                        </a>
";
        // line 211
        echo "                    </div>
                </div>
            </nav>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 217
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 218
        echo "            <!-- Container - slider -->
            <div class=\"container my-24 mx-auto md:px-6 w-full\">
                <div id=\"default-carousel\" class=\"relative overflow-hidden\" data-carousel=\"static\">
                    <!-- Carousel wrapper -->
                    <div class=\"overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96\">
                        <!-- Item 1 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-1\"/>
                        </div>
                        <!-- Item 2 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-2\">
                        </div>
                        <!-- Item 3 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-3\">
                        </div>
                        <!-- Item 4 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-4\">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class=\"flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2\">
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 1\"
                                data-carousel-slide-to=\"0\">
                        </button>
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 2\"
                                data-carousel-slide-to=\"1\">
                        </button>
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 3\"
                                data-carousel-slide-to=\"2\">
                        </button>
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 4\"
                                data-carousel-slide-to=\"3\">
                        </button>
                    </div>
                    <!-- Slider controls -->
                    <button type=\"button\"
                            class=\"flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none\"
                            data-carousel-prev>
                            <span class=\"inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30
                                group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70
                                group-focus:outline-none\">
                                <svg class=\"w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800\" fill=\"none\" stroke=\"currentColor\"
                                    viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"></path>
                                </svg>
                                <span class=\"hidden\">Previous</span>
                            </span>
                    </button>
                    <button type=\"button\"
                            class=\"flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none\"
                            data-carousel-next>
                            <span class=\"inline-flex justify-center items-center w-8 h-8 rounded-full
                                sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60
                                group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none\">
                                <svg class=\"w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800\" fill=\"none\" stroke=\"currentColor\"
                                     viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"></path>
                                </svg>
                            <span class=\"hidden\">Next</span>
                            </span>
                    </button>
                </div>
            </div>
            <!-- Container for last projects -->
            <div class=\"container my-24 mx-auto md:px-6\">
                <!-- Section: Design Block -->
                <section class=\"mb-32 text-center\">
                    <h2 id=\"lastProjects\" class=\"mb-12 pb-4 text-center text-3xl font-bold\">
                        Ostatnie projekty
                    </h2>

                    <div class=\"grid gap-6 lg:grid-cols-3 xl:gap-x-12\">
                        <div class=\"mb-6 lg:mb-0\">
                            <div class=\"relative block rounded-lg bg-neutral-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]\">
                                <div class=\"flex \">
                                    <div class=\"relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20\"
                                            data-te-ripple-init data-te-ripple-color=\"light\">
                                        <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp\" class=\"w-full\" />
                                        <a href=\"#!\">
                                            <div class=\"absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]\">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"p-6\">
                                    <h5 class=\"mb-3 text-lg font-bold\">Nazwa projektu</h5>
                                    <p class=\"mb-4 text-neutral-500\">
                                        <small>Projekt by Imię Nazwisko</small>
                                    </p>
                                    <p id=\"description1\" class=\"mb-4 pb-2 h-20 overflow-hidden\">
                                        Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.
                                        Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.
                                    </p>
                                    <button id=\"showMoreBtn1\" onclick=\"showMore(1)\" data-te-ripple-init data-te-ripple-color=\"light\"
                                       class=\"inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white
                                       shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
                                       hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600
                                       focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none
                                       focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                                       dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                                       dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]\">
                                        Pokaż wiecęj
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-6 lg:mb-0\">
                            <div class=\"relative block rounded-lg bg-neutral-300 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]\">
                                <div class=\"flex\">
                                    <div class=\"relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20\"
                                            data-te-ripple-init data-te-ripple-color=\"light\">
                                        <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp\" class=\"w-full\" />
                                        <a href=\"#!\">
                                            <div class=\"absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]\">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"p-6\">
                                    <h5 class=\"mb-3 text-lg font-bold\">Nazwa projektu</h5>
                                    <p class=\"mb-4 text-neutral-500\">
                                        <small>Projekt by Imię Nazwisko</small>
                                    </p>
                                    <p id=\"description2\" class=\"mb-4 pb-2 h-20 overflow-hidden\">
                                        Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.
                                    </p>
                                    <button id=\"showMoreBtn2\" onclick=\"showMore(2)\" data-te-ripple-init data-te-ripple-color=\"light\"
                                            class=\"inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white
                                       shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
                                       hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600
                                       focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none
                                       focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                                       dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                                       dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]\">
                                        Pokaż wiecęj
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-0\">
                            <div class=\"relative block rounded-lg bg-neutral-300 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]\">
                                <div class=\"flex\">
                                    <div class=\"relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20\"
                                            data-te-ripple-init data-te-ripple-color=\"light\">
                                        <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp\" class=\"w-full\" />
                                        <a href=\"#!\">
                                            <div class=\"absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]\">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"p-6\">
                                    <h5 class=\"mb-3 text-lg font-bold\">Nazwa projektu</h5>
                                    <p class=\"mb-4 text-neutral-500\">
                                        <small>Projekt by Imię Nazwisko</small>
                                    </p>
                                    <p id=\"description3\" class=\"mb-4 pb-2 h-20 overflow-hidden\">
                                        Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.
                                    </p>
                                    <button id=\"showMoreBtn3\" onclick=\"showMore(3)\" data-te-ripple-init data-te-ripple-color=\"light\"
                                            class=\"inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white
                                       shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
                                       hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600
                                       focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none
                                       focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                                       dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                                       dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]\">
                                        Pokaż wiecęj
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
            </div>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 424
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 425
        echo "    <!-- Footer container -->
    <footer class=\"bg-gray-800 text-center text-neutral-600 lg:text-left py-4 bottom-0 w-full\">
        <!-- Main container div: holds the entire content of the footer, including four sections (TW elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
        <div class=\"mx-10 py-10 text-center md:text-left\">
            <div class=\"grid-1 grid gap-4 md:grid-cols-3 lg:grid-cols-5\">
                <!-- TW elements section -->
                <div class=\"\">
                    <h6 class=\"mb-4 flex items-center justify-center font-semibold uppercase md:justify-start text-neutral-200\">
                        Zobacz nas
                    </h6>
                    <div class=\"flex\">
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-4 w-4\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z\" />
                            </svg>
                        </a>
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-4 w-4\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\" />
                            </svg>
                        </a>
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-5 w-5\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z\"
                                      fill-rule=\"evenodd\"
                                      clip-rule=\"evenodd\" />
                            </svg>
                        </a>
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-4 w-4\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\" />
                            </svg>
                        </a>
";
        // line 492
        echo "                    </div>
                </div>
                <div class=\"\">
                    <h6 class=\"mb-4 flex items-center justify-center font-semibold uppercase md:justify-start text-neutral-200\">
                        O nas
                    </h6>
                    <p class=\"text-neutral-200\">
                        Opis...
                    </p>
                </div>
                <!-- Products section -->
                <div class=\"text-neutral-200\">
                    <h6 class=\"mb-4 flex justify-center font-semibold uppercase md:justify-start \">
                        Produkty
                    </h6>
                    <p class=\"mb-4\">
                        <a href=\"/gallery\" class=\"text-neutral-200\"
                        >Galeria</a>
                    </p>
                    <p class=\"mb-4\">
                        <a href=\"/offer\" class=\"text-neutral-200\"
                        >Oferty</a>
                    </p>

                </div>
                <!-- Useful links section -->
                <div class=\"text-neutral-200\">
                    <h6 class=\"mb-4 flex justify-center font-semibold uppercase md:justify-start\">
                        Przydatne linki
                    </h6>
                    <p class=\"mb-4\">
                        <a href=\"/contact\" class=\"text-neutral-200\"
                        >Kontakt</a>
                    </p>

                    <p class=\"mb-4\">
                        <a href=\"/";
        // line 528
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 528, $this->source); })()), "user", [], "any", false, false, false, 528)) ? ("") : ("login"));
        echo "\" class=\"text-neutral-200\"
                        >";
        // line 529
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 529, $this->source); })()), "user", [], "any", false, false, false, 529)) ? ("") : ("Logowanie"));
        echo "</a>
                    </p>
                    <p class=\"mb-4\">
                        <a href=\"/";
        // line 532
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 532, $this->source); })()), "user", [], "any", false, false, false, 532)) ? ("") : ("register"));
        echo "\" class=\"text-neutral-200\"
                        >";
        // line 533
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 533, $this->source); })()), "user", [], "any", false, false, false, 533)) ? ("") : ("Rejestracja"));
        echo "</a>
                    </p>
                    <p class=\"mb-4\">
                        <a href=\"/";
        // line 536
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 536, $this->source); })()), "user", [], "any", false, false, false, 536)) ? ("") : ("reset-password"));
        echo "\" class=\"text-neutral-200\"
                        >";
        // line 537
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 537, $this->source); })()), "user", [], "any", false, false, false, 537)) ? ("") : ("Resetuj hasło"));
        echo "</a>
                    </p>
                </div>
                <!-- Contact section -->
                <div class=\"text-neutral-200\">
                    <h6 class=\"mb-4 flex justify-center font-semibold uppercase md:justify-start\">
                        Kontakt
                    </h6>
                    <p class=\"mb-4 flex items-center justify-center md:justify-start\">
                        <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                viewBox=\"0 0 24 24\"
                                fill=\"currentColor\"
                                class=\"mr-3 h-5 w-5\">
                            <path
                                    d=\"M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z\" />
                            <path
                                    d=\"M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z\" />
                        </svg>
                        Słupsk, ul. Przykładowa 10c
                    </p>
                    <p class=\"mb-4 flex items-center justify-center md:justify-start\">
                        <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                viewBox=\"0 0 24 24\"
                                fill=\"currentColor\"
                                class=\"mr-3 h-5 w-5\">
                            <path
                                    d=\"M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z\" />
                            <path
                                    d=\"M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z\" />
                        </svg>
                        pomoc.meble@wp.pl
                    </p>
                    <p class=\"mb-4 flex items-center justify-center md:justify-start\">
                        <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                viewBox=\"0 0 24 24\"
                                fill=\"currentColor\"
                                class=\"mr-3 h-5 w-5\">
                            <path
                                    fill-rule=\"evenodd\"
                                    d=\"M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z\"
                                    clip-rule=\"evenodd\" />
                        </svg>
                        + 48 687 045 555
                    </p>
                </div>
            </div>
        </div>

        <!--Copyright section-->
        <div class=\"bg-gray-900 p-6 text-center\">
            <span>© 2024 Copyright:</span>
            <a class=\"font-semibold text-neutral-400\" href=\"\">Mateusz Mroczkowski</a>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/home.html.twig";
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
        return array (  676 => 537,  672 => 536,  666 => 533,  662 => 532,  656 => 529,  652 => 528,  614 => 492,  563 => 425,  553 => 424,  341 => 218,  331 => 217,  318 => 211,  270 => 135,  233 => 100,  220 => 89,  217 => 76,  214 => 70,  211 => 64,  197 => 52,  195 => 51,  170 => 29,  161 => 22,  159 => 21,  149 => 13,  139 => 12,  127 => 421,  125 => 217,  121 => 215,  119 => 12,  115 => 10,  105 => 9,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Meble{% endblock %}

{% block javascript %}
    <script type=\"module\" src={{ asset('js/home.js') }}></script>
{% endblock %}

{% block body %}
<body class=\"flex flex-col min-h-screen z-5\">

        {% block sidebar %}
            <!-- Navbar -->
            <nav id=\"navbar\" class=\"bg-gray-800 py-4 top-0 left-0 w-full z-10 backdrop-blur bg-opacity-90\">
                <div class=\"flex flex-wrap justify-between items-start mx-auto max-w-screen-xl\">
                    <div class=\"flex items-center md:ml-10\">
                        <img src=\"https://flowbite.com/docs/images/logo.svg\" class=\"h-8\" alt=\"Flowbite Logo\" />
                        <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white ml-2\">Logo</span>
                    </div>
                    <div class=\"flex items-center\">
                        {% if app.user %}
                            <!-- Dropdown -->
                            <div class=\"relative md:mr-10\">
                                <button id=\"user-dropdown-btn\" class=\"text-white focus:outline-none px-5\">
                                    <summary class=\"flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer\">
                                    <span class=\"flex gap-2\">
                                        <img class=\"w-10 h-10 rounded-full\" src=\"https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c\" alt=\"\">
                                        <span class=\"flex items-center\">
                                            {{ app.user.login }}
                                        </span>
                                    </span>
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                                        </svg>
                                    </summary>
                                </button>

                                <div id=\"user-dropdown-menu\" class=\"absolute top-full left-0 right-0 bg-white shadow-md rounded-lg mt-2 hidden px-2 pb-4 min-w-full\">
                                    <ul class=\"flex flex-col gap-4 pl-2 mt-4 \">
                                        <li class=\"flex gap-2 \">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
                                                 stroke=\"currentColor\" class=\"w-6 h-6\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z\">
                                                </path>
                                            </svg>
                                            <a href=\"/my-profile\" class=\"ease-in-out hover:scale-110\">
                                                Panel klienta
                                            </a>
                                        </li>
                                        <hr>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <li class=\"flex gap-2 \">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
                                                     stroke=\"currentColor\" class=\"w-6 h-6\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z\">
                                                    </path>
                                                </svg>
                                                <a href=\"/admin-panel\" class=\"ease-in-out hover:scale-110\">
                                                    Aministrator
                                                </a>
                                            </li>
                                            <hr>
                                        {% endif %}

{#                                        <li class=\"flex gap-2\">#}
{#                                            <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 50 50\" stroke-width=\"1.5\"#}
{#                                                 stroke=\"currentColor\" class=\"w-6 h-6\">#}
{#                                                <path d=\"M 25 3 C 18.363281 3 13 8.363281 13 15 L 13 20 L 9 20 C 7.355469 20 6 21.355469 6 23 L 6 47 C 6 48.644531 7.355469 50 9 50 L 41 50 C 42.644531 50 44 48.644531 44 47 L 44 23 C 44 21.355469 42.644531 20 41 20 L 37 20 L 37 15 C 37 8.363281 31.636719 3 25 3 Z M 25 5 C 30.566406 5 35 9.433594 35 15 L 35 20 L 15 20 L 15 15 C 15 9.433594 19.433594 5 25 5 Z M 9 22 L 41 22 C 41.554688 22 42 22.445313 42 23 L 42 47 C 42 47.554688 41.554688 48 41 48 L 9 48 C 8.445313 48 8 47.554688 8 47 L 8 23 C 8 22.445313 8.445313 22 9 22 Z M 25 30 C 23.300781 30 22 31.300781 22 33 C 22 33.898438 22.398438 34.6875 23 35.1875 L 23 38 C 23 39.101563 23.898438 40 25 40 C 26.101563 40 27 39.101563 27 38 L 27 35.1875 C 27.601563 34.6875 28 33.898438 28 33 C 28 31.300781 26.699219 30 25 30 Z\"></path>#}
{#                                            </svg>#}

{#                                            <a href=\"/change-password\" class=\"ease-in-out hover:scale-110\">#}
{#                                                Zmień hasło#}
{#                                            </a>#}
{#                                        </li>#}
{#                                        <hr>#}

{#                                        <li class=\"flex gap-2\">#}
{#                                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">#}
{#                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z\">#}
{#                                                </path>#}
{#                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\">#}
{#                                                </path>#}
{#                                            </svg>#}
{#                                            <a href=\"\" class=\"ease-in-out hover:scale-110\">#}
{#                                                Settings#}
{#                                            </a>#}
{#                                        </li>#}
{#                                        <hr>#}

                                        <li class=\"flex gap-2\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z\" />
                                            </svg>
                                            <a href=\"/logout\" class=\"ease-in-out hover:scale-110\">Wyloguj</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        {% else %}
                            <div>
                                <a href=\"/register\" class=\"flex hover:text-blue-300
                                    cursor-pointer transition-colors duration-300
                                    font-semibold text-white float-left mr-12\">

                                        <svg class=\"fill-current h-5 w-5 mr-2 mt-0.5\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" width=\"24\" height=\"24\"
                                             viewBox=\"0 0 24 24\">
                                            <path d=\"M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z\" />
                                        </svg>
                                        <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                        before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                        before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                        after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ease-in-out hover:scale-110\">
                                    Rejestracja
                                    </span>
                                </a>
                                <a href=\"/login\" class=\"flex hover:text-blue-300
                                    cursor-pointer transition-colors duration-300
                                    font-semibold text-white\">

                                        <svg class=\"fill-current h-5 w-5 mr-2 mt-0.5\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" width=\"24\" height=\"24\"
                                             viewBox=\"0 0 24 24\">
                                            <path d=\"M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z\" />
                                        </svg>
                                        <span class=\" md:mr-10 relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                        before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                        before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                        after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] ease-in-out hover:scale-110\">
                                        Logowanie
                                     </span>
                                </a>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"lg:hidden flex justify-start w-auto block md:ml-10 mt-0 md:mt-4\">
                    <button id=\"menu-toggle\"
                            class=\"flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white\">
                        <svg class=\"fill-current h-6 w-6\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                            <title>Menu</title>
                            <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"/>
                        </svg>
                    </button>
                </div>
                <div class=\"container mx-auto flex justify-center items-center\">
                    <!-- Links -->
                    <div id=\"menu\" class=\"flex justify-center hidden space-x-8 lg:flex lg:items-center lg:w-auto\">
                        <a href=\"/\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Strona główna
                            </span>
                        </a>
                        <a href=\"/gallery\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Galeria
                            </span>
                        </a>
                        <a href=\"/offer\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Oferty
                            </span>
                        </a>
                        <a href=\"/contact\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">
                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]
                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]
                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center
                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">
                                Kontakt
                            </span>
                        </a>
{#                        {% if app.user %}#}
{#                            <a href=\"/defects\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">#}
{#                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]#}
{#                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]#}
{#                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center#}
{#                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">#}
{#                                Zgłoszenia#}
{#                            </span>#}
{#                            </a>#}
{#                            <a href=\"/order/my-order\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">#}
{#                            <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]#}
{#                                         before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]#}
{#                                         before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center#}
{#                                         after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">#}
{#                                Lista zamówień#}
{#                            </span>#}
{#                            </a>#}
{#                        {% endif %}#}
{#                        {% if app.user %}#}
{#                            {% if is_granted('ROLE_ADMIN') %}#}
{#                                <a href=\"/admin-panel\" class=\"flex cursor-pointer transition-colors duration-300 font-semibold ease-in-out hover:scale-110\">#}
{#                                <span class=\"relative text-white hover:text-blue-300 cursor-pointer transition-all ease-in-out before:transition-[width]#}
{#                                             before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%]#}
{#                                             before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center#}
{#                                             after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]\">#}
{#                                    Panel zarządzania#}
{#                                </span>#}
{#                                </a>#}
{#                            {% endif %}#}
{#                        {% endif %}#}
                    </div>
                </div>
            </nav>
        {% endblock %}

    <div id=\"content\" class=\"flex-1 container mx-auto md:px-6 sticky\">
        {% block content %}
            <!-- Container - slider -->
            <div class=\"container my-24 mx-auto md:px-6 w-full\">
                <div id=\"default-carousel\" class=\"relative overflow-hidden\" data-carousel=\"static\">
                    <!-- Carousel wrapper -->
                    <div class=\"overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96\">
                        <!-- Item 1 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-1\"/>
                        </div>
                        <!-- Item 2 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-2\">
                        </div>
                        <!-- Item 3 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-3\">
                        </div>
                        <!-- Item 4 -->
                        <div class=\"hidden ease-in-out transition-opacity duration-1000\" data-carousel-item>
                            <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp\"
                                 class=\"block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2\" alt=\"Image-4\">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class=\"flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2\">
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 1\"
                                data-carousel-slide-to=\"0\">
                        </button>
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 2\"
                                data-carousel-slide-to=\"1\">
                        </button>
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 3\"
                                data-carousel-slide-to=\"2\">
                        </button>
                        <button type=\"button\" class=\"w-3 h-3 rounded-full\" aria-current=\"false\" aria-label=\"Slide 4\"
                                data-carousel-slide-to=\"3\">
                        </button>
                    </div>
                    <!-- Slider controls -->
                    <button type=\"button\"
                            class=\"flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none\"
                            data-carousel-prev>
                            <span class=\"inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30
                                group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70
                                group-focus:outline-none\">
                                <svg class=\"w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800\" fill=\"none\" stroke=\"currentColor\"
                                    viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"></path>
                                </svg>
                                <span class=\"hidden\">Previous</span>
                            </span>
                    </button>
                    <button type=\"button\"
                            class=\"flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none\"
                            data-carousel-next>
                            <span class=\"inline-flex justify-center items-center w-8 h-8 rounded-full
                                sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60
                                group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none\">
                                <svg class=\"w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800\" fill=\"none\" stroke=\"currentColor\"
                                     viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"></path>
                                </svg>
                            <span class=\"hidden\">Next</span>
                            </span>
                    </button>
                </div>
            </div>
            <!-- Container for last projects -->
            <div class=\"container my-24 mx-auto md:px-6\">
                <!-- Section: Design Block -->
                <section class=\"mb-32 text-center\">
                    <h2 id=\"lastProjects\" class=\"mb-12 pb-4 text-center text-3xl font-bold\">
                        Ostatnie projekty
                    </h2>

                    <div class=\"grid gap-6 lg:grid-cols-3 xl:gap-x-12\">
                        <div class=\"mb-6 lg:mb-0\">
                            <div class=\"relative block rounded-lg bg-neutral-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]\">
                                <div class=\"flex \">
                                    <div class=\"relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20\"
                                            data-te-ripple-init data-te-ripple-color=\"light\">
                                        <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp\" class=\"w-full\" />
                                        <a href=\"#!\">
                                            <div class=\"absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]\">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"p-6\">
                                    <h5 class=\"mb-3 text-lg font-bold\">Nazwa projektu</h5>
                                    <p class=\"mb-4 text-neutral-500\">
                                        <small>Projekt by Imię Nazwisko</small>
                                    </p>
                                    <p id=\"description1\" class=\"mb-4 pb-2 h-20 overflow-hidden\">
                                        Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.
                                        Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.
                                    </p>
                                    <button id=\"showMoreBtn1\" onclick=\"showMore(1)\" data-te-ripple-init data-te-ripple-color=\"light\"
                                       class=\"inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white
                                       shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
                                       hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600
                                       focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none
                                       focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                                       dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                                       dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]\">
                                        Pokaż wiecęj
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-6 lg:mb-0\">
                            <div class=\"relative block rounded-lg bg-neutral-300 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]\">
                                <div class=\"flex\">
                                    <div class=\"relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20\"
                                            data-te-ripple-init data-te-ripple-color=\"light\">
                                        <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp\" class=\"w-full\" />
                                        <a href=\"#!\">
                                            <div class=\"absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]\">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"p-6\">
                                    <h5 class=\"mb-3 text-lg font-bold\">Nazwa projektu</h5>
                                    <p class=\"mb-4 text-neutral-500\">
                                        <small>Projekt by Imię Nazwisko</small>
                                    </p>
                                    <p id=\"description2\" class=\"mb-4 pb-2 h-20 overflow-hidden\">
                                        Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.
                                    </p>
                                    <button id=\"showMoreBtn2\" onclick=\"showMore(2)\" data-te-ripple-init data-te-ripple-color=\"light\"
                                            class=\"inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white
                                       shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
                                       hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600
                                       focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none
                                       focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                                       dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                                       dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]\">
                                        Pokaż wiecęj
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-0\">
                            <div class=\"relative block rounded-lg bg-neutral-300 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]\">
                                <div class=\"flex\">
                                    <div class=\"relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20\"
                                            data-te-ripple-init data-te-ripple-color=\"light\">
                                        <img src=\"https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp\" class=\"w-full\" />
                                        <a href=\"#!\">
                                            <div class=\"absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]\">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"p-6\">
                                    <h5 class=\"mb-3 text-lg font-bold\">Nazwa projektu</h5>
                                    <p class=\"mb-4 text-neutral-500\">
                                        <small>Projekt by Imię Nazwisko</small>
                                    </p>
                                    <p id=\"description3\" class=\"mb-4 pb-2 h-20 overflow-hidden\">
                                        Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.
                                    </p>
                                    <button id=\"showMoreBtn3\" onclick=\"showMore(3)\" data-te-ripple-init data-te-ripple-color=\"light\"
                                            class=\"inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white
                                       shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
                                       hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600
                                       focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none
                                       focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                                       dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                                       dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]\">
                                        Pokaż wiecęj
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
            </div>

        {% endblock %}
    </div>
</body>
{% endblock %}
{% block footer %}
    <!-- Footer container -->
    <footer class=\"bg-gray-800 text-center text-neutral-600 lg:text-left py-4 bottom-0 w-full\">
        <!-- Main container div: holds the entire content of the footer, including four sections (TW elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
        <div class=\"mx-10 py-10 text-center md:text-left\">
            <div class=\"grid-1 grid gap-4 md:grid-cols-3 lg:grid-cols-5\">
                <!-- TW elements section -->
                <div class=\"\">
                    <h6 class=\"mb-4 flex items-center justify-center font-semibold uppercase md:justify-start text-neutral-200\">
                        Zobacz nas
                    </h6>
                    <div class=\"flex\">
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-4 w-4\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z\" />
                            </svg>
                        </a>
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-4 w-4\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z\" />
                            </svg>
                        </a>
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-5 w-5\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z\"
                                      fill-rule=\"evenodd\"
                                      clip-rule=\"evenodd\" />
                            </svg>
                        </a>
                        <a href=\"#!\" class=\"mr-6 text-neutral-200\">
                            <svg
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"h-4 w-4\"
                                    fill=\"currentColor\"
                                    viewBox=\"0 0 24 24\">
                                <path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z\" />
                            </svg>
                        </a>
{#                        <a href=\"#!\" class=\"mr-6 text-neutral-600 dark:text-neutral-200\">#}
{#                            <svg#}
{#                                    xmlns=\"http://www.w3.org/2000/svg\"#}
{#                                    class=\"h-4 w-4\"#}
{#                                    fill=\"currentColor\"#}
{#                                    viewBox=\"0 0 24 24\">#}
{#                                <path d=\"M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z\" />#}
{#                            </svg>#}
{#                        </a>#}
{#                        <a href=\"#!\" class=\"text-neutral-600 dark:text-neutral-200\">#}
{#                            <svg#}
{#                                    xmlns=\"http://www.w3.org/2000/svg\"#}
{#                                    class=\"h-4 w-4\"#}
{#                                    fill=\"currentColor\"#}
{#                                    viewBox=\"0 0 24 24\">#}
{#                                <path d=\"M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z\" />#}
{#                            </svg>#}
{#                        </a>#}
                    </div>
                </div>
                <div class=\"\">
                    <h6 class=\"mb-4 flex items-center justify-center font-semibold uppercase md:justify-start text-neutral-200\">
                        O nas
                    </h6>
                    <p class=\"text-neutral-200\">
                        Opis...
                    </p>
                </div>
                <!-- Products section -->
                <div class=\"text-neutral-200\">
                    <h6 class=\"mb-4 flex justify-center font-semibold uppercase md:justify-start \">
                        Produkty
                    </h6>
                    <p class=\"mb-4\">
                        <a href=\"/gallery\" class=\"text-neutral-200\"
                        >Galeria</a>
                    </p>
                    <p class=\"mb-4\">
                        <a href=\"/offer\" class=\"text-neutral-200\"
                        >Oferty</a>
                    </p>

                </div>
                <!-- Useful links section -->
                <div class=\"text-neutral-200\">
                    <h6 class=\"mb-4 flex justify-center font-semibold uppercase md:justify-start\">
                        Przydatne linki
                    </h6>
                    <p class=\"mb-4\">
                        <a href=\"/contact\" class=\"text-neutral-200\"
                        >Kontakt</a>
                    </p>

                    <p class=\"mb-4\">
                        <a href=\"/{{ app.user ? '' : 'login' }}\" class=\"text-neutral-200\"
                        >{{ app.user ? '' : 'Logowanie'  }}</a>
                    </p>
                    <p class=\"mb-4\">
                        <a href=\"/{{ app.user ? '' : 'register' }}\" class=\"text-neutral-200\"
                        >{{ app.user ? '' : 'Rejestracja' }}</a>
                    </p>
                    <p class=\"mb-4\">
                        <a href=\"/{{ app.user ? '' : 'reset-password' }}\" class=\"text-neutral-200\"
                        >{{ app.user ? '' : 'Resetuj hasło'}}</a>
                    </p>
                </div>
                <!-- Contact section -->
                <div class=\"text-neutral-200\">
                    <h6 class=\"mb-4 flex justify-center font-semibold uppercase md:justify-start\">
                        Kontakt
                    </h6>
                    <p class=\"mb-4 flex items-center justify-center md:justify-start\">
                        <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                viewBox=\"0 0 24 24\"
                                fill=\"currentColor\"
                                class=\"mr-3 h-5 w-5\">
                            <path
                                    d=\"M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z\" />
                            <path
                                    d=\"M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z\" />
                        </svg>
                        Słupsk, ul. Przykładowa 10c
                    </p>
                    <p class=\"mb-4 flex items-center justify-center md:justify-start\">
                        <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                viewBox=\"0 0 24 24\"
                                fill=\"currentColor\"
                                class=\"mr-3 h-5 w-5\">
                            <path
                                    d=\"M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z\" />
                            <path
                                    d=\"M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z\" />
                        </svg>
                        pomoc.meble@wp.pl
                    </p>
                    <p class=\"mb-4 flex items-center justify-center md:justify-start\">
                        <svg
                                xmlns=\"http://www.w3.org/2000/svg\"
                                viewBox=\"0 0 24 24\"
                                fill=\"currentColor\"
                                class=\"mr-3 h-5 w-5\">
                            <path
                                    fill-rule=\"evenodd\"
                                    d=\"M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z\"
                                    clip-rule=\"evenodd\" />
                        </svg>
                        + 48 687 045 555
                    </p>
                </div>
            </div>
        </div>

        <!--Copyright section-->
        <div class=\"bg-gray-900 p-6 text-center\">
            <span>© 2024 Copyright:</span>
            <a class=\"font-semibold text-neutral-400\" href=\"\">Mateusz Mroczkowski</a>
        </div>
    </footer>
{% endblock %}", "pages/home.html.twig", "C:\\Users\\1\\PhpstormPojects\\Project\\templates\\pages\\home.html.twig");
    }
}