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




<!-- section testing 2.e -->

<style>

h4 {
    text-align: center;
}


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

<!-- Antivirus Products -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Antivirus Products</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of technological solutions </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row justify-content-center\">
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/kaspersky.png");
        echo "\" alt=\"Kaspersky logo\"></figure>
                <h4 class=\"mb-3\">Kaspersky</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sophos.png");
        echo "\" alt=\"Sophos logo\"></figure>
                <h4 class=\"mb-3\">Sophos</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/eset.png");
        echo "\" alt=\"Nod32 logo\"></figure>
                <h4 class=\"mb-3\">ESET NOD32</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/carbonblack.png");
        echo "\" alt=\"Carbon Black logo\"></figure>
                <h4 class=\"mb-3\">Carbon Black</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/mcafee.png");
        echo "\" alt=\"McAfee logo\"></figure>
                <h4 class=\"mb-3\">McAfee</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Antivirus Products -->

<!-- Start Automation Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Automation Products</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of technological solutions </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row justify-content-center\">
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/orvibo.png");
        echo "\" alt=\"Orvibo logo\"></figure>
                <h4 class=\"mb-3\">Orvibo</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sonoff.png");
        echo "\" alt=\"Sonoff logo\"></figure>
                <h4 class=\"mb-3\">Sonoff</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Automation Solutions -->

<!-- Start AV Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">AV Products</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of technological solutions </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row justify-content-center\">
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 220
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/Lumi.png");
        echo "\" alt=\"Lumi logo\"></figure>
                <h4 class=\"mb-3\">Lumi</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 228
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/superior.png");
        echo "\" alt=\"Superior logo\"></figure>
                <h4 class=\"mb-3\">Superior</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t</div>
\t</div>
</section>

<!-- End AV Solutions -->

<!-- Start Computer & Parts -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Computer and Parts Products</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of technological solutions </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row justify-content-center\">
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/msi.png");
        echo "\" alt=\"msi logo\"></figure>
                <h4 class=\"mb-3\">MSI</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Computer & Parts -->


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
        // line 288
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sophos.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 289
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/carbonblack.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 290
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/kaspersky.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/eset.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 292
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/mcafee.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Firewall Solutions</h2>
    <br>
    <img src=\"";
        // line 296
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 297
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 298
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/checkpoint.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Integrated Solutions</h2>
  <br>
  <img src=\"";
        // line 303
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/keplar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 304
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 305
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/softqueue.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Switches</h2>
  <br>
  <img src=\"";
        // line 309
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/huawei.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 310
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hp.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 311
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>PABX Solutions</h2>
  <br>
  <img src=\"";
        // line 315
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/yeastar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 316
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/3cx.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 317
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/polycom.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Uninterruptible Power</h2>
  <br>
  <img src=\"";
        // line 321
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/maruson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 322
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/apc.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 323
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/emerson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Security Solutions</h2>
  <br>
  <img src=\"";
        // line 327
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hikvision.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 328
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/axis.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 329
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/pyronix.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Software Solutions</h2>
  <br>
  <img src=\"";
        // line 333
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/autodesk.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 334
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/adobe.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 335
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/corel.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Storage and Backup Solutions</h2>
  <br>
  <img src=\"";
        // line 339
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/commvault.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 340
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/synology.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/barracuda.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 342
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/atempo.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Wireless Networking Solutions</h2>
  <br>
  <img src=\"";
        // line 346
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ruckus.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 347
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
        return array (  514 => 347,  510 => 346,  503 => 342,  499 => 341,  495 => 340,  491 => 339,  484 => 335,  480 => 334,  476 => 333,  469 => 329,  465 => 328,  461 => 327,  454 => 323,  450 => 322,  446 => 321,  439 => 317,  435 => 316,  431 => 315,  424 => 311,  420 => 310,  416 => 309,  409 => 305,  405 => 304,  401 => 303,  394 => 299,  390 => 298,  386 => 297,  382 => 296,  375 => 292,  371 => 291,  367 => 290,  363 => 289,  359 => 288,  325 => 257,  293 => 228,  282 => 220,  250 => 191,  239 => 183,  207 => 154,  196 => 146,  185 => 138,  174 => 130,  163 => 122,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm", "");
    }
}
