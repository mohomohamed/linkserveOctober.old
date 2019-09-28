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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/genericform/default.htm */
class __TwigTemplate_76f6b216ea2cb5a6ceaedca6bd372dc54bfffd5464a08cfd86093cd72d6d613b extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"alert alert-success contact__msg\" style=\"display: none\" role=\"alert\" id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
        </div>
    </div>

    <div class=\"form-group\">
        <input id=\"megakitname\" name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Your Name\" required>
    </div>
    <div class=\"form-group\">
        <input id=\"megakitemail\" name=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Email Address\" required>
    </div>

    <div class=\"form-group-2 mb-4\">
        <textarea id=\"megakitmessage\" name=\"message\" class=\"form-control\" rows=\"4\" placeholder=\"Your Message\" required></textarea>
    </div>

    <div class=\"mt40\">
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("genericForm/recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "    </div>

    <div>
        <button id=\"simpleContactSubmitButton\" class=\"btn btn-main\" name=\"submit\" type=\"submit\">Send Message</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/genericform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  69 => 24,  50 => 8,  43 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/genericform/default.htm", "");
    }
}
