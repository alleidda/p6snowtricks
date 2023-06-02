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

/* partials/header.html.twig */
class __TwigTemplate_5ff3beda554db29534a5b01068d7f7f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand pt-0\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <i class=\"fas fa-home\"></i>
                    Accueil</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_all");
        echo "\">
                    <i class=\"fas fa-list\"></i>
                    Liste des tricks</a>
            </li>
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "           
                <li class=\"nav-item\">
                    <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks_add");
            echo "\" class=\"nav-link\">
                        <i class=\"fas fa-plus\"></i>
                        Ajouter un trick</a>
                </li>
                
                    <li class=\"nav-item\">
                        <a href=\"\" class=\"nav-link\">
                            <i class=\"fas fa-chart-line\"></i>
                            Admin Dashboard</a>
                    </li>
                    ";
        }
        // line 35
        echo "              
        </ul>

            <ul class=\"navbar-nav\">
            
                    
               ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"\" alt=\"\" class=\"profile-micro\">
                            Mon compte
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"\">
                                <i class=\"fas fa-user\"></i>
                                Mon profil</a>
                            <a class=\"dropdown-item\" href=\"\">
                                <i class=\"fas fa-lock\"></i>
                                Modifier mon mot de passe</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\"  href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                <i class=\"fas fa-sign-out-alt\"></i>
                                Se déconnecter</a>
                        </div>
                    </li>
                    ";
        } else {
            // line 61
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\"  href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                            Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a  href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-link\">
                            <i class=\"fas fa-user-plus\"></i>
                            Inscription</a>
                    </li>
                    ";
        }
        // line 72
        echo "              
            </ul>
        </ul>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  142 => 67,  134 => 62,  131 => 61,  122 => 55,  107 => 42,  105 => 41,  97 => 35,  83 => 24,  79 => 22,  77 => 21,  70 => 17,  62 => 12,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand pt-0\" href=\"{{ path('home') }}\">
        <img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"home\") }}\">
                    <i class=\"fas fa-home\"></i>
                    Accueil</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"tricks_all\") }}\">
                    <i class=\"fas fa-list\"></i>
                    Liste des tricks</a>
            </li>
                {% if app.user %}
           
                <li class=\"nav-item\">
                    <a href=\"{{ path(\"tricks_add\") }}\" class=\"nav-link\">
                        <i class=\"fas fa-plus\"></i>
                        Ajouter un trick</a>
                </li>
                
                    <li class=\"nav-item\">
                        <a href=\"\" class=\"nav-link\">
                            <i class=\"fas fa-chart-line\"></i>
                            Admin Dashboard</a>
                    </li>
                    {% endif %}
              
        </ul>

            <ul class=\"navbar-nav\">
            
                    
               {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"\" alt=\"\" class=\"profile-micro\">
                            Mon compte
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"\">
                                <i class=\"fas fa-user\"></i>
                                Mon profil</a>
                            <a class=\"dropdown-item\" href=\"\">
                                <i class=\"fas fa-lock\"></i>
                                Modifier mon mot de passe</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\"  href=\"{{ path('app_logout') }}\">
                                <i class=\"fas fa-sign-out-alt\"></i>
                                Se déconnecter</a>
                        </div>
                    </li>
                    {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"  href=\"{{ path('app_login') }}\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                            Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a  href=\"{{ path('app_register') }}\" class=\"nav-link\">
                            <i class=\"fas fa-user-plus\"></i>
                            Inscription</a>
                    </li>
                    {% endif %}
              
            </ul>
        </ul>
    </div>
</nav>", "partials/header.html.twig", "/var/www/snowtricksapp/templates/partials/header.html.twig");
    }
}
