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

/* /Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/about.htm */
class __TwigTemplate_f16c1ca0fc146d36d4ff72f682be463aa0b8d2d554cd675863771db7309065c5 extends \Twig\Template
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
        echo "<!-- Section About Start -->
<section class=\"section about-2 position-relative\">
\t<div class=\"container\">
<!--         <div class=\"row\">
 -->\t\t\t<div class=\"col-lg-12 col-md-12\">
\t\t\t\t<div class=\"about-item pr-3 mb-5 mb-lg-0\">
\t\t\t\t\t<span class=\"h1 text-color\">Who we are</span>
<!--                     <h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
 -->\t\t\t\t\t
<!--                     <p class=\"mb-5\">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>
 -->\t\t\t\t\t
                    <p class=\"mb-5\" style=\"text-align:center\">Link Serve Private Limited, the leading IT based company in the Maldives has been serving the nation since the year 2002. With world renowned brands ranging from tools to major enterprise solutions of software and hardware, Link Serve brings Maldives closer to the growing innovations and technological advances in the world today. Being the leading service provider for Security Solutions Link Serve has been educating and creating awareness among the community for a safer tomorrow.
\t\t\t        \tWith an enthusiastic dedicated team of more than 85+ professionals we have grown our reach and network both within the capital city Male’ and across key regions in the Maldives. Currently, Link Serve owns 05 outlets 02 located in Male’, 01 in Hulhumale, 01 at Addu City and 01 in Hdh. Kulhudhuffishi. Across all the chains of Link Serve we maintain our relationship as ONE FAMILY Shaping Technology in Maldives.</p>
\t\t\t\t
<!--                     <a href=\"#\" class=\"btn btn-main btn-round-full\">Get started</a>
 -->\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"\" style=\"text-align:center\">
<!--                     <h4>OUR VISION</h4>
<p>To Be The <strong>FIRST CHOICE</strong> In The Technological Industry In Maldives</p>

<hr>

<h4>OUR MISSION</h4>
<p>We Are <strong>ONE FAMILY</strong> Shaping Technology In Maldives</p>

<hr>

 -->

\t\t\t\t\t<h4 class=\"text-color\">OUR CORE VALUES</h4>


\t\t\t\t\t<img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-page/caring.png");
        echo "\" alt=\"CARING\">

\t\t\t\t\t<h5 class=\"icon-box-title\">CARING</h5>
\t\t\t\t\t<p class=\"icon-box-content\">To maintain respectful relation with employees, customers, partners, suppliers and community.</p>

\t\t\t\t\t<img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-page/innovative.png");
        echo "\" alt=\"INNOVATIVE\">

\t\t\t\t\t<h5 class=\"icon-box-title\">INNOVATIVE</h5>
\t\t\t\t\t<p class=\"icon-box-content\">To translate an idea of invention in to goods or services that creates value to our customers.</p>

\t\t\t\t\t<img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-page/integrity.png");
        echo "\" alt=\"INTEGRITY\">

\t\t\t\t\t<h5 class=\"icon-box-title\">INTEGRITY</h5>
\t\t\t\t\t<p class=\"icon-box-content\">To hold oneself to practice moral, ethics and religious standards.</p>

\t\t\t\t\t<img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-page/honesty.png");
        echo "\" alt=\"HONESTY\">

\t\t\t\t\t<h5 class=\"icon-box-title\">HONESTY</h5>
\t\t\t\t\t<p class=\"icon-box-content\">Company will bear honest at any cost for the goodwill of our customers.</p>

\t\t\t\t\t<img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-page/reliability.png");
        echo "\" alt=\"RELIABILITY\">

\t\t\t\t\t<h5 class=\"icon-box-title\">RELIABILITY</h5>
\t\t\t\t\t<p class=\"icon-box-content\">To constantly perform our mission without failure to meet our customer demands.</p>


\t\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t<!-- <div class=\"col-lg-6 col-md-6\">
\t\t\t    <div class=\"about-item-img\">
\t\t\t        <img src=\"https://placehold.it/540x350\" alt=\"\" class=\"img-fluid\">
\t\t\t    </div>
\t\t\t</div> -->
\t<!--     </div> -->
\t</div>
</section>
<!-- Section About End -->
<!-- Section About Info Start -->
<section class=\"about-info section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md \">01.</span>Our Mission</h3>
<!--                     <p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
 -->\t\t\t\t\t<p>We Are <strong>ONE FAMILY</strong> Shaping Technology In Maldives</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md\">02.</span>Vision</h3>
<!--                     <p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
 -->\t\t\t\t\t<p>To Be The <strong>FIRST CHOICE</strong> In The Technological Industry In Maldives</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md\">03.</span>Our Approach</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About Info End -->

<!-- Section Count About Start -->
<!-- section Counter Start -->
<!-- <section class=\"section counter bg-counter\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item text-center mb-5 mb-lg-0\">
                    <i class=\"ti-check color-one text-md\"></i>
                    <h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">1730</span> +</h3>
                    <p class=\"text-white-50\">Project Done</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item text-center mb-5 mb-lg-0\">
                    <i class=\"ti-flag color-one text-md\"></i>
                    <h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">125 </span>M </h3>
                    <p class=\"text-white-50\">User Worldwide</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item text-center mb-5 mb-lg-0\">
                    <i class=\"ti-layers color-one text-md\"></i>
                    <h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">39</span></h3>
                    <p class=\"text-white-50\">Availble Country</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                <div class=\"counter-item text-center\">
                    <i class=\"ti-medall color-one  text-md\"></i>
                    <h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">14</span></h3>
                    <p class=\"text-white-50\">Award Winner </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Section About Counter End -->

<!--  Section Services Start -->
<!-- <section class=\"section team\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <span class=\"h6 text-color\">Our Team</span>
                    <h2 class=\"mt-3 content-title\">Expert Team member to get best service</h2>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"team-item-wrap mb-5\">
                    <div class=\"team-item position-relative\">
                        <img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
                        <div class=\"team-img-hover\">
                            <ul class=\"team-social list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-item-content\">
                        <h4 class=\"mt-3 mb-0 text-capitalize\">Justin hammer</h4>
                        <p>Digital Marketer</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"team-item-wrap mb-5\">
                    <div class=\"team-item position-relative\">
                        <img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
                        <div class=\"team-img-hover\">
                            <ul class=\"team-social list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-item-content\">
                        <h4 class=\"mt-3 mb-0 text-capitalize\">Jason roy</h4>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"team-item-wrap mb-5 \">
                    <div class=\"team-item position-relative\">
                        <img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
                        <div class=\"team-img-hover\">
                            <ul class=\"team-social list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-item-content\">
                        <h4 class=\"mt-3 mb-0 text-capitalize\">Henry oswald</h4>
                        <p>Developer</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"team-item-wrap mb-5 mb-lg-0\">
                    <div class=\"team-item position-relative\">
                        <img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
                        <div class=\"team-img-hover\">
                            <ul class=\"team-social list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-item-content\">
                        <h4 class=\"mt-3 mb-0 text-capitalize\">David Williams</h4>
                        <p>Senior Marketer</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"team-item-wrap mb-5 mb-lg-0\">
                    <div class=\"team-item position-relative\">
                        <img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
                        <div class=\"team-img-hover\">
                            <ul class=\"team-social list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-item-content\">
                        <h4 class=\"mt-3 mb-0 text-capitalize\">Peter Odin</h4>
                        <p>App Developer</p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"team-item-wrap mb-5 mb-lg-0 \">
                    <div class=\"team-item position-relative\">
                        <img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
                        <div class=\"team-img-hover\">
                            <ul class=\"team-social list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"team-item-content\">
                        <h4 class=\"mt-3 mb-0 text-capitalize\">David Spensor</h4>
                        <p>Project Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--  Section Services End -->
<!-- Section Testimonial Start -->
<section class=\"section testimonial bg-gray\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Clients testimonial</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title\">Check what's our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"testimonial-wrap\">
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Thomas Johnson</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Mickel hussy</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">James Watson</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Mickel hussy</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Testimonial End -->

<!-- section department  Start-->
<section class=\"section testimonial bg-gray\">
\t<div class=\"container\">

<h1 class=\"text-color\">OUR KEY FUNCTIONS</h1>
                <h2>SALES</h2>
\t\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>
\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Our sales outlets are state-of-the-art showrooms, showcasing the widest range of IT based products in the Maldives. With over 4000+ products we have an option to all our clients in the SME quadrant. We have 05 outlets across Maldives and we carry some of the world’s best known tech brands and solutions to meet our customer demands. Our main showroom has an area of 4000SQFT and is located in the capital city Male’. We have an additional Showroom in Galolhu opened specifically for the night shoppers. One in Addu City, Hithadhoo, One in Hdh. Kulhudhufushi and One in Hulhumale’ the Youth City of the Maldives. With a very dedicated Sales Team we ensure that our customers enjoy their best shopping experience at our sales outlets.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<h2>PROJECTS &amp; SERVICES</h2>
\t\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>
\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">With fully trained professionals in surveying, installations and after-sales support, our Projects &amp; Services teams dedicates in delivering the different security and IT based enterprise solutions to our customers. We have dedicated installation teams who are well trained to handle the technical aspects of the wide range of products which we carry. Our Services team utilizes the best practice in delivering after-sales support on both ad-hoc and Service Level Agreement basis with automated fault logging and ticketing services. Most importantly we have Project Managers guiding and overseeing all the sites as Account Managers to ensure that our clients receive the best installation and services in the industry. Furthermore, we also have outsourced teams of professionals who plays a major role in delivering the solutions based projects alongside our installation teams ensuring that our clients receive the results they need.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<h2>ENTERPRISE SOLUTIONS</h2>
\t\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>
\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">With evolving technology, the Enterprise or the LAR accounts entrust their technical aspects on world renowned enterprise brands to ensure that they are utilizing the best of solutions in the market today. Cybercrime syndicates, Small-time cons, Hacktivists, Intellectual property theft and corporate espionage, Malware mercenaries, Botnets as a service, All-in-one malware, the increasingly compromised web, Cyber warfare and Ransomware attacks are namely the biggest threats of Information Technology. Today each and every IT professional asks questions seeking answers how to overcome these challenges. With that in mind our Enterprise Portfolio carries solutions ranging from Server &amp; Networking Infrastructure Management to Data Security &amp; ERP Solutions. Renowned brands such as CheckPoint, HP, Microsoft, CISCO, Sophos, Kaspersky, McAfee, Ruckus &amp; Ubiquity etc… are among some of the most excelling enterprise brands that we carry today. We have an enthusiastic team of Product Managers who constantly trains, informs and executes product and solutions orientations assisting our clients to acquaint in to the enterprise solutions that we deliver.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<h2>BUSINESS DEVELOPMENT</h2>
\t\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>
\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">In order to shape technology in Maldives we believe that we are entrusted by the nation to deliver the much needed technological advances to the community of the Maldives. In doing so we focus very much towards developing local based products and solutions by either investing, carry along or providing them with expert opinions, support and resources to introduce their products and solutions to the market. We also closely survey the market need in terms of onboarding solutions and products from the tech market leaders across the world. We believe that a growth of a nation is strongly rooted with technology and that we stay as the FIRST CHOICE being ONE FAMILY shaping technology in Maldives.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t\t</div>
</section>

<!-- section department  End-->";
    }

    public function getTemplateName()
    {
        return "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 56,  98 => 51,  90 => 46,  82 => 41,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/mohomohamed/Documents/GitHub/linkserveoctober/themes/demo/pages/about.htm", "");
    }
}
