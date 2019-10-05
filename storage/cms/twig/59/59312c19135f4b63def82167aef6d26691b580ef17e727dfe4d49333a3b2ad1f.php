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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/home/intro.htm */
class __TwigTemplate_8cc8df31ea1c18aeffef9c5004aa4b5d3db2abf855d486c062cbb481f2cc5a08 extends \Twig\Template
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
        // line 3
        echo "<section class=\"section intro\">
\t<div class=\"container\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color \">We are creative & expert people</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title\">We work with business & provide solution to client with their business problem </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-12\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0\"> 
\t\t\t\t\t<i class=\"ti-desktop color-one\"></i>
\t\t\t\t\t<h4 class=\"mt-4 mb-3\">Modern & Responsive design</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-medall color-one\"></i> 
\t\t\t\t\t<h4 class=\"mt-4 mb-3\">Awarded licensed company</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"intro-item\">
\t\t\t\t\t<i class=\"ti-layers-alt color-one\"></i>
\t\t\t\t\t<h4 class=\"mt-4 mb-3\">Build your website Professionally</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t</div> 
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/home/intro.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/home/intro.htm", "");
    }
}