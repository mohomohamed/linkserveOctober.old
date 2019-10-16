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

<!-- Start Battery Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Battery Products</span>
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
        // line 286
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/pkcell.png");
        echo "\" alt=\"pkcell logo\"></figure>
                <h4 class=\"mb-3\">PKCell</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Battery Solutions -->


<!-- Start Data Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Data Products</span>
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
        // line 316
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/adata.png");
        echo "\" alt=\"adata logo\"></figure>
                <h4 class=\"mb-3\">Adata</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Data Solutions -->



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
        // line 348
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/sophos.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 349
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/carbonblack.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 350
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/kaspersky.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 351
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/eset.png");
        echo "\" alt=\"\" id=\"brands\"></br><p></p>
  <img src=\"";
        // line 352
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/mcafee.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Firewall Solutions</h2>
    <br>
    <img src=\"";
        // line 356
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 357
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 358
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/checkpoint.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
    <img src=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Integrated Solutions</h2>
  <br>
  <img src=\"";
        // line 363
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/keplar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 364
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/softqueue.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Switches</h2>
  <br>
  <img src=\"";
        // line 369
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/huawei.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hp.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 371
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>PABX Solutions</h2>
  <br>
  <img src=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/yeastar.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 376
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/3cx.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 377
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/polycom.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Uninterruptible Power</h2>
  <br>
  <img src=\"";
        // line 381
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/maruson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 382
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/apc.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 383
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/emerson.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Security Solutions</h2>
  <br>
  <img src=\"";
        // line 387
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hikvision.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 388
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/axis.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 389
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/pyronix.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Software Solutions</h2>
  <br>
  <img src=\"";
        // line 393
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/autodesk.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 394
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/adobe.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 395
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/corel.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Storage and Backup Solutions</h2>
  <br>
  <img src=\"";
        // line 399
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/commvault.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 400
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/synology.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 401
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/barracuda.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 402
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/atempo.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>

  <h2>Wireless Networking Solutions</h2>
  <br>
  <img src=\"";
        // line 406
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ruckus.png");
        echo "\" alt=\"\" id=\"brands\"><br><p></p>
  <img src=\"";
        // line 407
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
        return array (  580 => 407,  576 => 406,  569 => 402,  565 => 401,  561 => 400,  557 => 399,  550 => 395,  546 => 394,  542 => 393,  535 => 389,  531 => 388,  527 => 387,  520 => 383,  516 => 382,  512 => 381,  505 => 377,  501 => 376,  497 => 375,  490 => 371,  486 => 370,  482 => 369,  475 => 365,  471 => 364,  467 => 363,  460 => 359,  456 => 358,  452 => 357,  448 => 356,  441 => 352,  437 => 351,  433 => 350,  429 => 349,  425 => 348,  390 => 316,  357 => 286,  325 => 257,  293 => 228,  282 => 220,  250 => 191,  239 => 183,  207 => 154,  196 => 146,  185 => 138,  174 => 130,  163 => 122,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm", "");
    }
}
