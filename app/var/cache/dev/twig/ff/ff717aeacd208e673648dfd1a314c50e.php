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

/* home/index.html.twig */
class __TwigTemplate_fe19c9f495d20f076c3a801e1d41d6f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "HomePage";
        
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
        echo "
    <div class=\"home-bg bg\">  
        <div><img class=\"img-fluid card-img-top\" src=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/homeimage.jpg"), "html", null, true);
        echo " alt=\"\"></div>
         <a href=\"#tricks-title\" class=\"home-link-top\" title=\"Aller en bas de la page\">
            <i class=\"fas fa-chevron-down fa-3x chevron-down\"></i>
        </a>
    </div>

    <div class=\"container\">
    


        <div class=\"row\" id=\"tricks-title\">
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src=";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tricks2.jpg"), "html", null, true);
        echo " alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
          
        </div>
        
        <div class=\"row d-flex justify-content-center\">
            <div class=\"btn btn-info\" id=\"loadMoreTrick\" ></div>
            <div class=\"btn btn-info\" id=\"loadLessTrick\" style=\"display:none\" >-</div>
        </div>
        <a href=\"#tricks-title\" class=\"home-link-bottom\" title=\"Aller en haut de la page\">
            <i class=\"fas fa-chevron-up fa-3x chevron-up\"></i>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "    <script>
     
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 230,  351 => 229,  309 => 197,  284 => 175,  259 => 153,  234 => 131,  209 => 109,  184 => 87,  159 => 65,  134 => 43,  109 => 21,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}HomePage{% endblock %}

{% block body %}

    <div class=\"home-bg bg\">  
        <div><img class=\"img-fluid card-img-top\" src={{ asset('img/homeimage.jpg') }} alt=\"\"></div>
         <a href=\"#tricks-title\" class=\"home-link-top\" title=\"Aller en bas de la page\">
            <i class=\"fas fa-chevron-down fa-3x chevron-down\"></i>
        </a>
    </div>

    <div class=\"container\">
    


        <div class=\"row\" id=\"tricks-title\">
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
         <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 trick\">
                    <div class=\"card card-tricks mb-3 hidden-tricks\" style=\"\">
                        <img class=\"img-fluid card-img-top\" src={{ asset('img/tricks2.jpg') }} alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-link text-center\">
                                <a  class=\"btn btn-outline-primary mt-3\" href=\"\" >Trick's name</a>
                            </div>
    
                                <div class=\"mt-1 text-center\">
                                    <a href=\"\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <a href=\"\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </div>
                                
                          
                        </div>
                    </div>
                    
                </div>
          
        </div>
        
        <div class=\"row d-flex justify-content-center\">
            <div class=\"btn btn-info\" id=\"loadMoreTrick\" ></div>
            <div class=\"btn btn-info\" id=\"loadLessTrick\" style=\"display:none\" >-</div>
        </div>
        <a href=\"#tricks-title\" class=\"home-link-bottom\" title=\"Aller en haut de la page\">
            <i class=\"fas fa-chevron-up fa-3x chevron-up\"></i>
        </a>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
     
    </script>
{% endblock %}", "home/index.html.twig", "/home/addiella/Documents/Projects/symfony6-app/op/snowtricks/templates/home/index.html.twig");
    }
}
