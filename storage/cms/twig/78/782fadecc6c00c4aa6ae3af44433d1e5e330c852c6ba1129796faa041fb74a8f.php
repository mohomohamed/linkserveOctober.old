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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/pages/blog/post.htm */
class __TwigTemplate_e898bbd4ff966d8ccd7798f2c2e2ea1895040fec5e00006d2c2acb2593ad236d extends \Twig\Template
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
        echo "<section class=\"section blog-wrap bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/blogPost"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/categories"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  51 => 9,  47 => 7,  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<section class=\"section blog-wrap bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                {% partial 'blog/blogPost' %}
            </div>
            <div class=\"col-md-4\">
                {% partial 'blog/categories' %}
            </div>
        </div>
    </div>
</section>", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/pages/blog/post.htm", "");
    }
}
