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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/pages/home.htm */
class __TwigTemplate_2ef0645b425e873aa89493399c7636211badca05253f41e2711dfe4061cc65cb extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "<!-- ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/counter"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " -->
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/solutions"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/cta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/contacthome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  60 => 6,  56 => 5,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'home/slider' %}
{% partial 'home/intro' %}
{% partial 'home/about' %}
<!-- {% partial 'home/counter' %} -->
{% partial 'home/solutions' %}
{% partial 'home/cta' %}
{% partial 'home/contacthome' %}", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/pages/home.htm", "");
    }
}
