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

/* /Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/slider.htm */
class __TwigTemplate_068190da4a7908d8a21542918f6d03b0faa7bf7db7f200103ed41cd923392ecf extends \Twig\Template
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
        echo "<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-9 col-md-10\">
\t\t\t\t<div class=\"block\">
<!--                     <span class=\"d-block mb-3 text-white text-capitalize\">Linkserve</span>
 -->\t\t\t\t<h1 class=\"animated fadeInUp mb-1\">Linkserve</h1>
 
                    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkserve-logo.png");
        echo "\">

\t\t\t\t\t<img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkserve-logo.png");
        echo "\" alt=\"\" style=\"width:200px\">
\t\t\t\t\t
\t\t\t\t\t<h1 class=\"animated fadeInUp mb-5\">Stay Safe. <br> Stay Connected.</h1>
<!--                     <a href=\"#\" target=\"_blank\" class=\"btn btn-main animated fadeInUp btn-round-full\" >Get started<i class=\"btn-icon fa fa-angle-right ml-2\"></i></a>
 -->\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  47 => 11,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Slider Start #}
<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-9 col-md-10\">
\t\t\t\t<div class=\"block\">
<!--                     <span class=\"d-block mb-3 text-white text-capitalize\">Linkserve</span>
 -->\t\t\t\t<h1 class=\"animated fadeInUp mb-1\">Linkserve</h1>
 
                    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/linkserve-logo.png'|theme }}\">

\t\t\t\t\t<img src=\"{{ 'assets/images/linkserve-logo.png' |theme}}\" alt=\"\" style=\"width:200px\">
\t\t\t\t\t
\t\t\t\t\t<h1 class=\"animated fadeInUp mb-5\">Stay Safe. <br> Stay Connected.</h1>
<!--                     <a href=\"#\" target=\"_blank\" class=\"btn btn-main animated fadeInUp btn-round-full\" >Get started<i class=\"btn-icon fa fa-angle-right ml-2\"></i></a>
 -->\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Slider End #}", "/Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/slider.htm", "");
    }
}
