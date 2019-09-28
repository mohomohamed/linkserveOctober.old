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

/* /Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/contacthome.htm */
class __TwigTemplate_f0e1f66aad96fce9620037ad3c41563e39b4f1471a0b488fcf4374cd28ac3a00 extends \Twig\Template
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
        // line 2
        echo "<section class=\"mt-70 position-relative\">
\t<div class=\"container\">
        <div class=\"cta-block-2 bg-gray p-5 rounded border-1\">
            <div class=\"row justify-content-center align-items-center \">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 mb-4 mb-lg-0\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" class=\"btn btn-main btn-round-full float-lg-right \">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/contacthome.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<section class=\"mt-70 position-relative\">
\t<div class=\"container\">
        <div class=\"cta-block-2 bg-gray p-5 rounded border-1\">
            <div class=\"row justify-content-center align-items-center \">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 mb-4 mb-lg-0\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"{{ \"contact-us\"|page }}\" class=\"btn btn-main btn-round-full float-lg-right \">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/contacthome.htm", "");
    }
}