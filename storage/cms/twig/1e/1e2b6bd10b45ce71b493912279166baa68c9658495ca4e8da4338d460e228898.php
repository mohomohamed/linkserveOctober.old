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

/* /Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/cta.htm */
class __TwigTemplate_c6f9a6ce00821f0fc02ff67b8cf726dd1190cc6c17ca30977120f79604ad1d06 extends \Twig\Template
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
        echo "<section class=\"section cta\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"cta-item  bg-white p-5 rounded\">
\t\t\t\t\t<span class=\"h6 text-color\">We create solutions for you</span>
\t\t\t\t\t<h2 class=\"mt-2 mb-4\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t\t<p class=\"lead mb-4\">Have any project on mind? For immidiate support :</p>
\t\t\t\t\t<h3><i class=\"ti-mobile mr-3 text-color\"></i>+960-300-3000</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/cta.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section CTA Start #}
<section class=\"section cta\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"cta-item  bg-white p-5 rounded\">
\t\t\t\t\t<span class=\"h6 text-color\">We create solutions for you</span>
\t\t\t\t\t<h2 class=\"mt-2 mb-4\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t\t<p class=\"lead mb-4\">Have any project on mind? For immidiate support :</p>
\t\t\t\t\t<h3><i class=\"ti-mobile mr-3 text-color\"></i>+960-300-3000</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section CTA End #}", "/Users/mohomohamed/Documents/GitHub/linkserveOctober/themes/demo/partials/home/cta.htm", "");
    }
}
