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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/plugins/serenitynow/subscribe/components/signup/default.htm */
class __TwigTemplate_54ca9b622d39293748d728f48cb5d5e1ad2c8b7d5610ad74643e5bcc5d1203f3 extends \Twig\Template
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
        echo "<form method=\"post\" class=\"form-inline\" id=\"signup\">
    <div class=\"form-group\">                
        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"you@email.com\">    
        <button type=\"button\" class=\"btn btn-success\"
                title=\"Subscribe!\"
                data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSignup\"
                data-request-success=\"alert('Thank you! Please confirm your subscription by clicking on the confirmation link in your email.'); document.getElementById('signup').reset();\"
        >Subscribe</button>
    </div>
</form> 

";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/plugins/serenitynow/subscribe/components/signup/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/plugins/serenitynow/subscribe/components/signup/default.htm", "");
    }
}
