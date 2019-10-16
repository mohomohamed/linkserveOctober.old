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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/services.htm */
class __TwigTemplate_b060687e2a9d769b6014058cc58d04049f0782e556d0ca7558396adddc9e3424 extends \Twig\Template
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
        // line 1
        echo "<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Our services</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">What We Do</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Page Intro End -->


";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/solutions"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "




<!-- Section CTA Start -->
<section class=\"cta-2\">
\t<div class=\"container\">
\t\t<div class=\"cta-block p-5 rounded\">
\t\t\t<div class=\"row justify-content-center align-items-center \">
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<span class=\"text-color\">For Every type business</span>
\t\t\t\t\t<h2 class=\"mt-2 text-white\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" class=\"btn btn-main btn-round-full float-right\">Contact Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section CTA End -->";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  67 => 23,  63 => 22,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/services.htm", "");
    }
}
