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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/contact-us.htm */
class __TwigTemplate_a8f1888d1cd91be606c309e5488c9a09f4ead249d5281b941a299477ef92baaa extends \Twig\Template
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
        echo "<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Contact Us</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">Get in Touch</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Page Intro End -->
<!-- Contact Form Start -->
<section class=\"contact-form-wrap section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 col-sm-12\">
                 ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "            </div>

            <div class=\"col-lg-5 col-sm-12\">
                <div class=\"contact-content pl-lg-5 mt-5 mt-lg-0\">
                    <span class=\"text-muted\">We are Professionals</span>
                    
                    <p>Link Serve owns 05 outlets 02 located in Male’, 01 in Hulhumale, 01 at Addu City and 01 in Hdh. Kulhudhuffishi. Across all the chains of Link Serve we maintain our relationship as ONE FAMILY Shaping Technology in Maldives.</p>
                    <h2 class=\"mb-5 mt-2\">Don’t Hesitate to contact with us for any kind of information</h2>

                    <ul class=\"address-block list-unstyled\">
                        <li>
                            <i class=\"ti-direction mr-3\"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class=\"ti-email mr-3\"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class=\"ti-mobile mr-3\"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>

                    <ul class=\"social-icons list-inline mt-5\">
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-facebook-f\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-twitter\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->

<section class=\"wrapper style5\">
\t\t\t\t\t\t\t<div class=\"inner\" style=\"text-align:center\">

\t\t\t\t\t\t\t\t<style>

\t\t\t\t\t\t\t\t.shopavatar{
\t\t\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\t\t\twidth: 250px;
\t\t\t\t\t\t\t\t\theight: 250px;
\t\t\t\t\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t</style>

\t\t\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t\t\t<h2>Goodness Shop - Male'</h2> <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/locations/outside-goodness.jpg");
        echo "\" alt=\"goodness\" class=\"shopavatar\">
\t\t\t\t\t\t\t\t\t<p>M. Goodness, Kanbaa Aisaarani Hingun, Male', Maldives<br>
\t\t\t\t\t\t\t\t\t\tsales@linkserve.com.mv<br>
\t\t\t\t\t\t\t\t\t\t+960 300 3000</p>
\t\t\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h2>Service Centre Male'</h2><img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/locations/outside-servicecenter.jpg");
        echo "\" alt=\"servicecenter\" class=\"shopavatar\">
\t\t\t\t\t\t\t\t<p>H.Buruneege Dhekunuge, 1st Floor, Apartment A/B <br> Hadheebee Magu, Male' (20084)<br>
\t\t\t\t\t\t\t\tservicecenter@linkserve.com.mv<br>
\t\t\t\t\t\t\t\t+960 334 4555</p>
\t\t\t\t\t\t\t\t<hr>


\t\t\t\t\t\t\t\t<h2>Shop 2 - Male'</h2> <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/locations/outside-shop2.jpg");
        echo "\" alt=\"shop2\" class=\"shopavatar\">
\t\t\t\t\t\t\t\t<p>M. Goodness, Kanbaa Aisaarani Hingun, Male', Maldives<br>
\t\t\t\t\t\t\t\tsales@linkserve.com.mv<br>
\t\t\t\t\t\t\t\t+960 300 3000</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h2>Linkserve Plus - Hulhumale Shop</h2><img src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/locations/outside-linkserveplus.jpg");
        echo "\" alt=\"hulhumaleshop\" class=\"shopavatar\">
\t\t\t\t\t\t\t\t<p>Maavaharu-8, Nirolhu Magu -08 Goalhi<br>
\t\t\t\t\t\t\t\tsales@linkserve.com.mv<br>
\t\t\t\t\t\t\t\t+960 335 2000</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h2>Hdh. Kulhudhuffishi Shop</h2><img src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/locations/outside-kulhudhufushi.jpg");
        echo "\" alt=\"Kulhudhuffishishop\" class=\"shopavatar\">
\t\t\t\t\t\t\t\t<p>Hdh. Kulhudhufushi<br>
\t\t\t\t\t\t\t\tsales@linkserve.com.mv<br>
\t\t\t\t\t\t\t\t+960 300 3000</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h2>Linkserve Plus - Addu City</h2><img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/locations/outside-adducity.jpg");
        echo "\" alt=\"addushop\" class=\"shopavatar\">
\t\t\t\t\t\t\t\t<p>Cocade, Lily Magu, S.Hithadhoo<br>
\t\t\t\t\t\t\t\tsales@linkserve.com.mv<br>
\t\t\t\t\t\t\t\t+960 688 3000</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>




<!-- Google Map Start -->
<!-- <div class=\"google-map\">
    <div id=\"map\"></div>
</div> -->
<!-- Google Map End -->

";
        // line 130
        echo "<!-- <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script> -->";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 130,  172 => 111,  163 => 105,  154 => 99,  145 => 93,  135 => 86,  126 => 80,  70 => 26,  66 => 25,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/contact-us.htm", "");
    }
}
