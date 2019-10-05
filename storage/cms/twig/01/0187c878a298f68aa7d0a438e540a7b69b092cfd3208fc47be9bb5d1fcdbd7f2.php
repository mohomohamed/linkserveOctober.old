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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm */
class __TwigTemplate_e0102a3bab50d3a99e047b554e9720c501fad88a61aabd7135d4efe6daa9df0f extends \Twig\Template
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
        echo "<!-- Section Page Ingro Start -->
<section class=\"page-title bg-1\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Latest works</span>
          <h1 class=\"text-capitalize mb-4 text-lg\">Portfolio</h1>
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Latest works</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Page Intro End -->

<style>
.brands{
    text-align:center;
}

</style>

<section class=\"brands\">
  <div class=\"\">




  </br>


  <h2>Antivirus Solutions</h2>
  <br>
  <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sophos.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/carbonblack.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/kaspersky.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/eset.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/mcafee.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Firewall Solutions</h2>
    <br>
    <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/checkpoint.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Integrated Solutions</h2>
  <br>
  <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/keplar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/softqueue.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Switches</h2>
  <br>
  <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/huawei.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hp.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>PABX Solutions</h2>
  <br>
  <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/yeastar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/3cx.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/polycom.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Uninterruptible Power</h2>
  <br>
  <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/maruson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/apc.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/emerson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Security Solutions</h2>
  <br>
  <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hikvision.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/axis.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/pyronix.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Software Solutions</h2>
  <br>
  <img src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/autodesk.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/adobe.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/corel.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Storage and Backup Solutions</h2>
  <br>
  <img src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/commvault.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/synology.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/barracuda.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/atempo.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Wireless Networking Solutions</h2>
  <br>
  <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ruckus.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ruckus.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>







  <style media=\"screen\">
  #brands {

    width:150px;
  }
</style>




</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 98,  231 => 97,  224 => 93,  220 => 92,  216 => 91,  212 => 90,  205 => 86,  201 => 85,  197 => 84,  190 => 80,  186 => 79,  182 => 78,  175 => 74,  171 => 73,  167 => 72,  160 => 68,  156 => 67,  152 => 66,  145 => 62,  141 => 61,  137 => 60,  130 => 56,  126 => 55,  122 => 54,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  80 => 39,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm", "");
    }
}
