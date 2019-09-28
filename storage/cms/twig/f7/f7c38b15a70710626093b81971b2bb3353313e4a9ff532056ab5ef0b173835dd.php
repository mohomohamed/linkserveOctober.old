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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/site/header.htm */
class __TwigTemplate_404ef876bcc447e4b94f30115d038a8d154814526d368b30aa389f54a74e6806 extends \Twig\Template
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
        echo "<header class=\"navigation\">
\t<div class=\"header-top \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t<div class=\"col-lg-2 col-md-4\">
\t\t\t\t\t<div class=\"header-top-socials text-center text-lg-left text-md-left\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com/linkservemv\" target=\"_blank\"><i class=\"ti-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"https://twitter.com/linkservemv\" target=\"_blank\"><i class=\"ti-twitter\"></i></a>
\t\t\t        \t<a href=\"https://instagram.com/linkservemv\" target=\"_blank\"><i class=\"ti-instagram\"></i></a>

<!--                         <a href=\"https://github.com//\" target=\"_blank\"><i class=\"ti-github\"></i></a>
 -->\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10 col-md-8 text-center text-lg-right text-md-right\">
\t\t\t\t\t<div class=\"header-top-info\">
\t\t\t\t\t\t<a href=\"tel:+960-300-3000\">Call Us : <span>+960-300-3000</span></a>
\t\t\t\t\t\t<a href=\"mailto:sales@linkserve.com.mv\" ><i class=\"fa fa-envelope mr-2\"></i><span>sales@linkserve.com.mv</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" style=\"color:#f75757\">
\t\t  \tLink<span>Serve</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("management");
        echo "\">Our management</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Solutions</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("brands");
        echo "\">Brands</a></li>
<!--                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
 -->\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" class=\"btn btn-solid-border btn-round-full\">Get a Quote</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  89 => 44,  85 => 43,  77 => 38,  63 => 27,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/partials/site/header.htm", "");
    }
}
