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
          <span class=\"text-white\">Our brands</span>
          <h1 class=\"text-capitalize mb-4 text-lg\">Brands</h1>
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our Brands</a></li>
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

<!-- Start Electrical Components -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Electrical Components</span>
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
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/andeli.png");
        echo "\" alt=\"andeli logo\"></figure>
                <h4 class=\"mb-3\">Andeli</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 353
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hensel.png");
        echo "\" alt=\"hensel logo\"></figure>
                <h4 class=\"mb-3\">Hensel</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 361
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hibox.png");
        echo "\" alt=\"Hibox logo\"></figure>
                <h4 class=\"mb-3\">HiBox</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Electrical Components -->

<!-- Start Firewall Solutionns -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Firewall Solutions</span>
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
        // line 390
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cyberoam.png");
        echo "\" alt=\"cyberoam logo\"></figure>
                <h4 class=\"mb-3\">Cyberoam</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 398
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/cisco.png");
        echo "\" alt=\"cisco logo\"></figure>
                <h4 class=\"mb-3\">Cisco</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 406
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/checkpoint.png");
        echo "\" alt=\"Checkpoint logo\"></figure>
                <h4 class=\"mb-3\">checkpoint</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Firewall Solutions -->

<!-- Start Integrated Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Integrated Solutions</span>
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
        // line 435
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/fametech.png");
        echo "\" alt=\"Fametech logo\"></figure>
                <h4 class=\"mb-3\">Fametech</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 443
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/keplar.png");
        echo "\" alt=\"Keplar logo\"></figure>
                <h4 class=\"mb-3\">Keplar</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 451
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/softqueue.png");
        echo "\" alt=\"Softqueue logo\"></figure>
                <h4 class=\"mb-3\">Softqueue</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Inetgrated Solutions -->

<!-- Start IP Telephony Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">IP Telephony Solutions</span>
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
        // line 480
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/yealink.png");
        echo "\" alt=\"Yelink logo\"></figure>
                <h4 class=\"mb-3\">Yealink</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 488
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/yeastar.png");
        echo "\" alt=\"yeastar logo\"></figure>
                <h4 class=\"mb-3\">Yeastar</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 496
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/polycom.png");
        echo "\" alt=\"Polycom logo\"></figure>
                <h4 class=\"mb-3\">Polycom</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End IP Telephony Solutions -->

<!-- Start Mobile Accessories Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Mobile Accessories Solutions</span>
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
        // line 525
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ugreen.png");
        echo "\" alt=\"Ugreen logo\"></figure>
                <h4 class=\"mb-3\">Ugreen</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 533
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/logitech.png");
        echo "\" alt=\"logitech logo\"></figure>
                <h4 class=\"mb-3\">Logitech</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Mobile Accessories Solutions -->

<!-- Start Network and PC Tools -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Network and PC Tools</span>
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
        // line 562
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/proskit.png");
        echo "\" alt=\"proskit logo\"></figure>
                <h4 class=\"mb-3\">Pro's Kit</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Network and PC Tools -->

<!-- Start Networking Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Network and PC Tools</span>
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
        // line 592
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/netgear.png");
        echo "\" alt=\"netgear logo\"></figure>
                <h4 class=\"mb-3\">Netgear</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 600
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/ubiquiti.png");
        echo "\" alt=\"ubiquiti logo\"></figure>
                <h4 class=\"mb-3\">Ubiquiti</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 608
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/lscables.png");
        echo "\" alt=\"lscables logo\"></figure>
                <h4 class=\"mb-3\">LS Cables</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 616
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/Ruckus.png");
        echo "\" alt=\"ruckus logo\"></figure>
                <h4 class=\"mb-3\">Ruckus</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Networking Solutions -->


<!-- Start Security Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Security Solutions</span>
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
        // line 647
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/hikvision.png");
        echo "\" alt=\"hikvision logo\"></figure>
                <h4 class=\"mb-3\">Hikvision</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 655
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/jvm.png");
        echo "\" alt=\"jvm logo\"></figure>
                <h4 class=\"mb-3\">JVM</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 663
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/zktec.png");
        echo "\" alt=\"zktec logo\"></figure>
                <h4 class=\"mb-3\">ZKTec</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 671
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/zovii.png");
        echo "\" alt=\"zovii logo\"></figure>
                <h4 class=\"mb-3\">Zovii</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 679
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/loghome.png");
        echo "\" alt=\"loghome logo\"></figure>
                <h4 class=\"mb-3\">Log Home</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 687
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/soca.png");
        echo "\" alt=\"soca logo\"></figure>
                <h4 class=\"mb-3\">Soca</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 695
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/pyronix.png");
        echo "\" alt=\"pyronix logo\"></figure>
                <h4 class=\"mb-3\">Pyronix</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 703
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/axis.png");
        echo "\" alt=\"axis logo\"></figure>
                <h4 class=\"mb-3\">Axis Communications</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t
\t\t</div>
\t</div>
</section>

<!-- End Security Solutions -->

<!-- Start Storage Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Storage Solutions</span>
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
        // line 733
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/synology.png");
        echo "\" alt=\"synology logo\"></figure>
                <h4 class=\"mb-3\">Synology</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 741
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/barracuda.png");
        echo "\" alt=\"barracuda logo\"></figure>
                <h4 class=\"mb-3\">Barracuda</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 749
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/commvault.png");
        echo "\" alt=\"commvault logo\"></figure>
                <h4 class=\"mb-3\">Commvault</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 757
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/atempo.png");
        echo "\" alt=\"atempo logo\"></figure>
                <h4 class=\"mb-3\">Atempo</h4>
\t\t    </div>
\t\t</div> 

\t\t</div>
\t</div>
</section>

<!-- End Storage Solutions -->

<!-- Start UPS Solutions -->

<section class=\"section service border-top\">
    <div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">UPS Solutions</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of technological solutions </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row justify-content-center\">
\t\t
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 787
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/maruson.png");
        echo "\" alt=\"maruson logo\"></figure>
                <h4 class=\"mb-3\">Maruson</h4>
\t\t    </div>
\t\t</div>
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 795
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/emerson.png");
        echo "\" alt=\"emerson logo\"></figure>
                <h4 class=\"mb-3\">Emerson</h4>
\t\t    </div>
\t\t</div> 
\t\t
\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t    <div class=\"service-item mb-5\">
             <figure class=\"image brand__image\">
                <img class=\"image__file\" src=\"";
        // line 803
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/apc.png");
        echo "\" alt=\"APC logo\"></figure>
                <h4 class=\"mb-3\">APC</h4>
\t\t    </div>
\t\t</div> 

\t\t</div>
\t</div>
</section>

<!-- End UPS Solutions -->

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
        return array (  979 => 803,  968 => 795,  957 => 787,  924 => 757,  913 => 749,  902 => 741,  891 => 733,  858 => 703,  847 => 695,  836 => 687,  825 => 679,  814 => 671,  803 => 663,  792 => 655,  781 => 647,  747 => 616,  736 => 608,  725 => 600,  714 => 592,  681 => 562,  649 => 533,  638 => 525,  606 => 496,  595 => 488,  584 => 480,  552 => 451,  541 => 443,  530 => 435,  498 => 406,  487 => 398,  476 => 390,  444 => 361,  433 => 353,  422 => 345,  390 => 316,  357 => 286,  325 => 257,  293 => 228,  282 => 220,  250 => 191,  239 => 183,  207 => 154,  196 => 146,  185 => 138,  174 => 130,  163 => 122,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/brands.htm", "");
    }
}
