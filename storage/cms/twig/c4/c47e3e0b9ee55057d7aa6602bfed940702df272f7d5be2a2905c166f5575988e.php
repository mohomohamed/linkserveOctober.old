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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/partials/site/scripts.htm */
class __TwigTemplate_27d1d1deddd1a6aa4e53f1ec7e45aef9ecd7d75f73146e85efd7eb701369526e extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/plugins/jquery/jquery.js", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/plugins/bootstrap/js/popper.js", 4 => "assets/plugins/bootstrap/js/bootstrap.min.js", 5 => "assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js", 6 => "assets/plugins/slick-carousel/slick/slick.min.js", 7 => "assets/plugins/counterup/jquery.waypoints.min.js", 8 => "assets/plugins/counterup/jquery.counterup.min.js", 9 => "assets/plugins/google-map/map.js", 10 => "assets/js/script.js"]);
        // line 14
        echo "\"></script>

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c80df7f3341d22d9ce7ce61/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<script src=\"{{ [
    'assets/plugins/jquery/jquery.js',
    '@framework',
    '@framework.extras',
    'assets/plugins/bootstrap/js/popper.js',
    'assets/plugins/bootstrap/js/bootstrap.min.js',
    'assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js',
    'assets/plugins/slick-carousel/slick/slick.min.js',
    'assets/plugins/counterup/jquery.waypoints.min.js',
    'assets/plugins/counterup/jquery.counterup.min.js',
    'assets/plugins/google-map/map.js',
    'assets/js/script.js'
]|theme }}\"></script>

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c80df7f3341d22d9ce7ce61/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/mehedi-megakit/partials/site/scripts.htm", "");
    }
}
