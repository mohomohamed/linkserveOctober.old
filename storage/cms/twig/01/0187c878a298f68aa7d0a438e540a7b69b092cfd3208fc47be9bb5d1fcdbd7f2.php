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




<!-- section testing area -->

<style>
.brand__image .image__file {
    display: block;
    width: 70%;
    border-radius: 50%;
    box-shadow: 0 0.15rem 0.35rem rgba(0, 0, 0, 0.2);
    margin-left:15%;

}

.formatted-text {
    width: 150px;
    max-width: 40rem;
    margin-right: auto;
    margin-left: auto;
}

.brand__headline {
    flex-basis: 100%;
    margin-bottom: 0.625rem;
    color: #003da7;
    font-weight: 600;
    font-size: 14px;
    font-size: 0.875rem;
    line-height: 18px;
    line-height: 1.125rem;
}

    .brand__description {
    flex-basis: 100%;
    font-size: 11px;
    font-size: 0.6875rem;
    line-height: 14px;
    line-height: 0.875rem;

}



.brand__image {
    margin-bottom: 0.625rem;
    text-align:center;
}

figcaption, figure, main {
    display: block;
}

figure {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 40px;
    margin-inline-end: 40px;
}


.grid-container {
  display: grid;
  grid-template-columns: minmax(170px, 30%)  minmax(170px, 30%);
    justify-content: space-evenly;
  grid-gap: 2%;
  padding: 10%;
}

.grid-container > div {
  text-align: center;
  padding: 5px 0;
  font-size: 20px;
}
</style>


<div class=\"grid-container\">


<!-- brandicon -->
<div>
<h4 class=\"brand__headline\">Sophos</h4>

<figure class=\"image brand__image\">
<img class=\"image__file\" src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sophos.png");
        echo "\" alt=\"sophos logo\">
</figure>
<p class=\"formatted-text  brand__description\"><p>Data Security</p>
</p>
</div>
<!-- end brandicon -->

<!-- brandicon -->
<div>
<h4 class=\"brand__headline\">Carbon Black</h4>

<figure class=\"image brand__image\">
<img class=\"image__file\" src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/carbonblack.png");
        echo "\" alt=\"carbon black logo\">
</figure>
<p class=\"formatted-text  brand__description\"><p>Data Security</p>
</p>
</div>
<!-- end brandicon -->

<!-- brandicon -->
<div>
<h4 class=\"brand__headline\">Kaspersky</h4>

<figure class=\"image brand__image\">
<img class=\"image__file\" src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/kaspersky.png");
        echo "\" alt=\"kaspersky logo\">
</figure>
<p class=\"formatted-text  brand__description\"><p>Data Security</p>
</p>
</div>
<!-- end brandicon -->


<!-- brandicon -->
<div>
<h4 class=\"brand__headline\">ESET</h4>

<figure class=\"image brand__image\">
<img class=\"image__file\" src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/eset.png");
        echo "\" alt=\"ESET logo\">
</figure>
<p class=\"formatted-text  brand__description\"><p>Data Security</p>
</p>
</div>
<!-- end brandicon -->




</div>


<!-- end section testing area -->
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
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sophos.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/carbonblack.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/kaspersky.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/eset.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/mcafee.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Firewall Solutions</h2>
    <br>
    <img src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/checkpoint.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Integrated Solutions</h2>
  <br>
  <img src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/keplar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/softqueue.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Switches</h2>
  <br>
  <img src=\"";
        // line 197
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/huawei.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hp.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>PABX Solutions</h2>
  <br>
  <img src=\"";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/yeastar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/3cx.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 205
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/polycom.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Uninterruptible Power</h2>
  <br>
  <img src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/maruson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 210
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/apc.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 211
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/emerson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Security Solutions</h2>
  <br>
  <img src=\"";
        // line 215
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hikvision.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 216
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/axis.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/pyronix.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Software Solutions</h2>
  <br>
  <img src=\"";
        // line 221
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/autodesk.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 222
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/adobe.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/corel.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Storage and Backup Solutions</h2>
  <br>
  <img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/commvault.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 228
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/synology.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 229
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/barracuda.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/atempo.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Wireless Networking Solutions</h2>
  <br>
  <img src=\"";
        // line 234
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ruckus.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 235
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
        return array (  384 => 235,  380 => 234,  373 => 230,  369 => 229,  365 => 228,  361 => 227,  354 => 223,  350 => 222,  346 => 221,  339 => 217,  335 => 216,  331 => 215,  324 => 211,  320 => 210,  316 => 209,  309 => 205,  305 => 204,  301 => 203,  294 => 199,  290 => 198,  286 => 197,  279 => 193,  275 => 192,  271 => 191,  264 => 187,  260 => 186,  256 => 185,  252 => 184,  245 => 180,  241 => 179,  237 => 178,  233 => 177,  229 => 176,  194 => 144,  178 => 131,  163 => 119,  148 => 107,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm", "");
    }
}
