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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/management.htm */
class __TwigTemplate_644f39e399817cb19f3e6759e701ebec78f1c0d229cf98c57dfed9f98b8d3304 extends \Twig\Template
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
                            <span class=\"text-white\">The management team leads the day-to-day work of Linkserve. <br>It consists of a Managing Director, Directors and Head of Departments</span>

          <h1 class=\"text-capitalize mb-4 text-lg\">Our Management</h1>

          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our pricing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Page Intro End -->

<section class=\"section intro\">
\t<div class=\"container\">
\t
\t<div class=\"inner\">

\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t.avatar{
\t\t\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\t\t\twidth: 250px;
\t\t\t\t\t\t\t\t\theight: 250px;
\t\t\t\t\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t.inner{
\t\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</style>

\t\t\t\t\t\t\t\t<h2>Ibrahim Faiz</h2>
\t\t\t\t\t\t\t\t<h4>Managing Director</h4>
\t\t\t\t\t\t\t\t<img src=\"http://www.linkserve.com.mv/web/public/images/ibrahim.jpg\" alt=\"ibrahimfaiz\" class=\"avatar\">
\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h3>Ali Shifau</h3>
\t\t\t\t\t\t\t\t<h4>Head of Sales</h4>
\t\t\t\t\t\t\t\t<img src=\"http://www.linkserve.com.mv/web/public/images/shifau.jpg\" alt=\"alishifau\" class=\"avatar\">
\t\t\t\t\t\t\t\t<p>Mr.Ali Shifau , incharge of catering retail and wholesale clients, in addition, looks after inventory, from replenishing to storekeeping operations. He has expertise in sales sector for over 10+ years.</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h3>Ahmed Shaufaan Rasheed</h3>
\t\t\t\t\t\t\t\t<h4>Head of Human Resource and Training</h4>
\t\t\t\t\t\t\t\t<img src=\"http://www.linkserve.com.mv/web/public/images/shaufaan.jpg\" alt=\"ahmedshaufaan\" class=\"avatar\">
\t\t\t\t\t\t\t\t<p>Mr.Ahmed Shaufaan Rasheed, brings over 16 years of management experience. He expertise includes talent management, organizational development , management &amp;  leadership and a life coach Additionally coming from a background in ICT. He was awarded among the Top 50 HR leaders in Maldives in 2017 and 2018.</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h3>Mohamed Munawwar Luthfee</h3>
\t\t\t\t\t\t\t\t<h4>Head of Business Development and Public Relations</h4>
\t\t\t\t\t\t\t\t<img src=\"http://www.linkserve.com.mv/web/public/images/moho.jpg\" alt=\"moho\" class=\"avatar\">
\t\t\t\t\t\t\t\t<p>Mr.Mohamed Munawwar Luthfee, incharge of business Development and public relations that help the company attract visitors and convert leads though online and public media. Additionally communicates to suppliers and venturs new business oppotunities. He gratuated from Open University Malaysia, Bachelors Degree in Information Technology with Honors. Specializes in Social Media Marketing, and has a background in Data Science and Business Analytics.</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h3>Hassan Ikram</h3>
\t\t\t\t\t\t\t\t<h4>Head of Projects and Enterprise Solutions</h4>
\t\t\t\t\t\t\t\t<img src=\"http://www.linkserve.com.mv/web/public/images/ikram.jpg\" alt=\"ikram\" class=\"avatar\">
\t\t\t\t\t\t\t\t<p>Mr. Hassan Ikram, Head of Projects &amp; Enterprise Solution. 6+ years sales experience with an exceptional track record of client service and revenue generation. A highly motivated sales professional that strives to help a wide variety of organizations overcome their ICT challenges. He is an energetic, resourceful and enthusiastic all-around performer with sales, marketing skills gained largely in the corporate world.</p>
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<h3>Rimaah Ahmed</h3>
\t\t\t\t\t\t\t\t<h4>Assistant Manager - Sales</h4>
\t\t\t\t\t\t\t\t<img src=\"http://www.linkserve.com.mv/web/public/images/rimaah.jpg\" alt=\"rimaah\" class=\"avatar\">
\t\t\t\t\t\t\t\t<p>Mr. Rimaah has over 5 years of experience in the IT and networking industry. As the Assistant Manager of Sales Division, in addition to that, he is handling shipment ordering and dealing with suppliers. </p>

\t\t\t\t\t\t\t</div>
\t
\t</div>

</section>

<!-- Section Intro Start -->
<!-- <section class=\"section intro\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-5\">
                <div class=\"section-title pt-5\">
                    <span class=\"h6 text-color \">We are creative</span>
                    <h2 class=\"mt-3\">We provide best solution to client with their business problem </h2>
                </div>
            </div>

            <div class=\"col-lg-6 ml-auto\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"intro-item mb-4 mb-lg-0\">
                            <i class=\"ti-wand text-color\"></i>
                            <h4 class=\"mt-4\">Modern & Responsive design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, aspernatur.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"intro-item mb-4 mb-lg-0\">
                            <i class=\"ti-medall text-color\"></i>
                            <h4 class=\"mt-4\">Awarded licensed company</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, aspernatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Section Intro END -->
<!-- Section Pricing Start -->
<!-- <section class=\"section pricing bg-gray position-relative\">
    <div class=\"hero-img bg-overlay h70\"></div>
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <div class=\"section-title\">
                        <span class=\"h6 text-white\">Our Pricing</span>
                        <h2 class=\"mt-3 content-title text-white\">No hidden Charges.Choose Your Perfect Plan</h2>
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Free</h5>
                                <h1>\$0</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Up to 1 User</li>
                                <li>- Max 100 Item</li>
                                <li>- 500 Queries</li>
                                <li>- Basic Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-solid-border mt-3 btn-round-full\">Download Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Basic</h5>
                                <h1>\$12</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Up to 5 User</li>
                                <li>- Max 1000 Item</li>
                                <li>- 5000 Queries</li>
                                <li>- Standard Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-main mt-3 btn-round-full\">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card text-center mb-md-0 mb-3\">
                        <div class=\"card-body py-5\">
                            <div class=\"pricing-header mb-5\">
                                <h5 class=\"font-weight-normal mb-3\">Premium</h5>
                                <h1>\$39</h1>
                                <p class=\"text-muted\">Per User / Month</p>
                            </div>
                            <strong>Includes:</strong>
                            <ul class=\"list-unstyled lh-45 mt-3 text-black\">
                                <li>- Unlimited User</li>
                                <li>- Unlimited Item</li>
                                <li>- Unlimited Queries</li>
                                <li>- Full Statistics</li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-small btn-solid-border mt-3 btn-round-full\">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class=\"container\">
        <div class=\"cta-block mt-5 p-5 rounded\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 text-white\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right float-md-right float-sm-right\">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Section Pricing End -->";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/management.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/management.htm", "");
    }
}
