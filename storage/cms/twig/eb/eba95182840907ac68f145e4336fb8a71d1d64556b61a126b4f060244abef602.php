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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/blog.htm */
class __TwigTemplate_be2faaae9c46ddb33a80faa727a492b35ce2f34009af18e7956a8944e40cb537 extends \Twig\Template
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
        echo "<section class=\"section blog-wrap bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/blog.htm", "");
    }
}
