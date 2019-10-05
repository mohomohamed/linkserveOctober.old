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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/site/blogsinglepostheader.htm */
class __TwigTemplate_7013db75b8b76ec77fd562ba4ffb9a8bad56501f27d45ca931f9fe3b537fb475 extends \Twig\Template
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
        echo "<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">News details</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">Blog Single</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">News details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/site/blogsinglepostheader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/site/blogsinglepostheader.htm", "");
    }
}
