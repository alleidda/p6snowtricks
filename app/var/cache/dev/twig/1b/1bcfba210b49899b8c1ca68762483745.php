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

/* partials/footer.html.twig */
class __TwigTemplate_af694562c49453ba72c23c3d0f73aae3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer class=\"page-footer font-small bg-dark darken-3\">

    <!-- Footer Elements -->

        <!-- Grid row-->

            <!-- Grid column -->
            <div class=\"col-12 py-5\">
                <div class=\"text-center\">
                    <!-- Twitter -->
                   <!-- <a class=\"tw-ic\" href=\"\">
                        <i class=\"fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
                    </a> -->
                    <!--Linkedin -->
                    <a class=\"li-ic\" href=\"\">
                        <i class=\"fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        <!-- Grid row-->

    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">
        © 2023 Copyright:
        <a href=\"\"></a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"page-footer font-small bg-dark darken-3\">

    <!-- Footer Elements -->

        <!-- Grid row-->

            <!-- Grid column -->
            <div class=\"col-12 py-5\">
                <div class=\"text-center\">
                    <!-- Twitter -->
                   <!-- <a class=\"tw-ic\" href=\"\">
                        <i class=\"fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
                    </a> -->
                    <!--Linkedin -->
                    <a class=\"li-ic\" href=\"\">
                        <i class=\"fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        <!-- Grid row-->

    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">
        © 2023 Copyright:
        <a href=\"\"></a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->", "partials/footer.html.twig", "/var/www/snowtricksapp/templates/partials/footer.html.twig");
    }
}
