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

/* tricks/display.html.twig */
class __TwigTemplate_5b594da6338a9a7bec74ead286e24f2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/display.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/display.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tricks/display.html.twig", 1);
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

        echo "Tricks's name";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-md-offset-1 mb-4\">

                <div class=\"card mt-5\">
                    <img class=\"display-top img-fluid\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-body\">

                        <ul class=\"list-inline trick-data\">
                            <li class=\"list-inline-item\">
                                Par : <a target=\"\" href=\"\">Ajouté par : nom auteur</a>
                            </li> |
                            <li class=\"list-inline-item\">
                                Ajouté le 17/02/2023 (<small>Mise à jour le : 18/02/2023 </small>)
                            </li> |
                            <li class=\"list-inline-item\">
                                Catégorie : tricks category
                            </li> |
                            <li class=\"list-inline-item\">
                                <a href=\"#comments-block\"> commentaires</a>
                            </li>
                        </ul>
                        <hr>
                        <!-- Start Carousel -->
                       
                                      ";
        // line 73
        echo "                        <!-- End Carousel -->
                        <hr>
                        <h4 class=\"card-title\"><strong> tricks name </strong></h4>
                        <p class=\"card-text\"></p>
                        <hr>
                        <hr>
                        <p class=\"card-text text-justify\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"

 </p>
                    </div>
                </div>




                <!-- Start Comment Add Form -->
              
              
                    <div class=\"col-md-12 px-0 mb-3\">
                        <div class=\"comments text-center p-3\">
                            <p><a href=\"\">Inscrivez-vous</a> ou <a href=\"\">connectez vous</a> pour commenter cet article</p>
                        </div>
                    </div>
            
                <!-- Start Comment Add Form -->

                <!-- Start Comments -->
             
                <!-- End Comments -->
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 108
        echo "    <link href =\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" rel = \"stylesheet\" crossorigin=\"anonymous\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    <script src = \"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js\" crossorigin=\"anonymous\"></script>

    <script>
        \$(document).on(\"click\", '[data-toggle=\"lightbox\"]', function(event) {
            event.preventDefault();
            \$(this).ekkoLightbox();
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tricks/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 112,  183 => 111,  172 => 108,  162 => 107,  120 => 73,  97 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Tricks's name{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-md-offset-1 mb-4\">

                <div class=\"card mt-5\">
                    <img class=\"display-top img-fluid\" src=\"{{ asset('img/tricks7.jpg') }}\" alt=\"\">
                    <div class=\"card-body\">

                        <ul class=\"list-inline trick-data\">
                            <li class=\"list-inline-item\">
                                Par : <a target=\"\" href=\"\">Ajouté par : nom auteur</a>
                            </li> |
                            <li class=\"list-inline-item\">
                                Ajouté le 17/02/2023 (<small>Mise à jour le : 18/02/2023 </small>)
                            </li> |
                            <li class=\"list-inline-item\">
                                Catégorie : tricks category
                            </li> |
                            <li class=\"list-inline-item\">
                                <a href=\"#comments-block\"> commentaires</a>
                            </li>
                        </ul>
                        <hr>
                        <!-- Start Carousel -->
                       
                                      {#  {% for image in tricks.images %}
                                            <li data-target=\".carousel\" data-slide-to=\"{{ loop.index - 1 }}\"  {% if loop.index == 0 %}class=\"active\" {% endif %}></li>
                                        {% endfor %}
                                    </ol>
                                    <div class=\"carousel-inner enlarge\">
                                        {% for image in tricks.images %}
                                            <div class=\"carousel-item {% if loop.index == 1 %} active {% endif %}\">
                                                <img class=\"d-block\" src=\"{{ asset(image.path) }}\" alt=\"Backflip-image-8\">
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <a class=\"carousel-control-prev\" href=\"#carousel_image\" data-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\"></span>
                                    </a>
                                    <a class=\"carousel-control-next\" href=\"#carousel_image\" data-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-lg-6 col-md-12\">
                                <div id=\"carousel_video\" class=\"carousel slide mt-3 mb-2\" data-ride=\"carousel\">
                                    <ol class=\"carousel-indicators\">
                                        {% for video in tricks.videos %}
                                            <li data-target=\".carousel\" data-slide-to=\"{{ loop.index - 1 }}\"  {% if loop.index == 0 %}class=\"active\" {% endif %}></li>
                                        {% endfor %}
                                    </ol>
                                    <div class=\"carousel-inner enlarge\">
                                        {% for video in tricks.videos %}
                                            <div class=\"carousel-item {% if loop.index == 1 %} active {% endif %}\">
                                                <iframe src=\"{{ video.video }}\" allowfullscreen=\"\"></iframe>
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <a class=\"carousel-control-prev\" href=\"#carousel_video\" data-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\"></span>
                                    </a>
                                    <a class=\"carousel-control-next\" href=\"#carousel_video\" data-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>#}
                        <!-- End Carousel -->
                        <hr>
                        <h4 class=\"card-title\"><strong> tricks name </strong></h4>
                        <p class=\"card-text\"></p>
                        <hr>
                        <hr>
                        <p class=\"card-text text-justify\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"

 </p>
                    </div>
                </div>




                <!-- Start Comment Add Form -->
              
              
                    <div class=\"col-md-12 px-0 mb-3\">
                        <div class=\"comments text-center p-3\">
                            <p><a href=\"\">Inscrivez-vous</a> ou <a href=\"\">connectez vous</a> pour commenter cet article</p>
                        </div>
                    </div>
            
                <!-- Start Comment Add Form -->

                <!-- Start Comments -->
             
                <!-- End Comments -->
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link href =\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" rel = \"stylesheet\" crossorigin=\"anonymous\">
{% endblock %}

{% block javascripts %}
    <script src = \"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js\" crossorigin=\"anonymous\"></script>

    <script>
        \$(document).on(\"click\", '[data-toggle=\"lightbox\"]', function(event) {
            event.preventDefault();
            \$(this).ekkoLightbox();
        });
    </script>

{% endblock %}", "tricks/display.html.twig", "/var/www/snowtricksapp/templates/tricks/display.html.twig");
    }
}
