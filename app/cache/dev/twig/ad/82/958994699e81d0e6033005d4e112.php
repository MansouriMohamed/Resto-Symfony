<?php

/* PidevSiteBundle:Default:3.html.twig */
class __TwigTemplate_ad82958994699e81d0e6033005d4e112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 101 Template </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/css/whhg.css"), "html", null, true);
        echo "\">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src=\"../../assets/js/html5shiv.js\"></script> <script src=\"../../assets/js/respond.min.js\"></script> <![endif]-->
    <!--Google maps API linl-->
    <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&amp;sensor=false\"></script>
    <!--Your map settings script-->
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/map.js"), "html", null, true);
        echo "\"></script>
    <!--jQuery-->
    <script type=\"text/javascript\" src=\"../ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/pxgradient-1.0.2.jquery.js"), "html", null, true);
        echo "\"></script>
    <!--Script for gradient icon in general menu-->
    <script type=\"text/javascript\">
        \$(function () {
            \$(\".gradientmenu\").pxgradient({
                step: 10,
                colors: [\"#fdfeff\", \"#cfeefa\"],
                dir: \"y\"
            });
        });
\t</script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\"#tabs_point li a\").each(function (i) {
                \$(\"#tabs_point li a:eq(\" + i + \")\").click(function () {
                    var tab_id = i + 1;
                    \$(\"#tabs_point li a\").removeClass(\"active\");
                    \$(\".tabs_block_point .active\").removeClass(\"active\");
                    \$(this).addClass(\"active\");
                    \$(\".tabs_block_point .tab_point_decr\").stop(false, false).hide();
                    \$(\"#point_tab\" + tab_id).stop(false, false).show();
                    return false;
                })
            })
        })
    </script>
    <!--Script for worked profile page-->
    <script type=\"text/javascript\" src=\"js/owl.carousel.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#link_open').on('click', function () {
                if (\$('#link_open').hasClass(\"clooses\")) {
                    \$(\"#open_span\").removeClass(\"close_span\").addClass(\"open_span\");
                    \$(\"#profile\").removeClass(\"profile_closed\");
                    \$(\"#link_open\").removeClass(\"clooses\");
                    \$(\"#cont\").addClass(\"none\");
                }
                else {
                    \$(\"#open_span\").addClass(\"close_span\").removeClass(\"open_span\");
                    \$(\"#profile\").addClass(\"profile_closed\");
                    \$(\"#link_open\").addClass(\"clooses\");
                    \$(\"#cont\").removeClass(\"none\");
                }
            })
              \$('#map_open').on('click', function () {
            \$(\"#cont\").addClass(\"none\");
            \$(\"#Show_cont\").removeClass(\"none\");

        })
        \$('#Show_cont').on('click', function () {
            \$(\"#cont\").removeClass(\"none\");
        })
        });
    </script>
    <script type=\"text/javascript\">
        \$(function () {
            \$(\"#owl-demo, #myguest\").owlCarousel({
                items: 6,
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 6],
                itemsTablet: [600, 2],
                itemsMobile: false
            });

        });
    </script>
    <!--/Script for worked profile page-->
</head>
<body onload=\"initialize()\">
    <!--autorization modal-->
      <a href=\"#\" class=\"btn btn-danger btn-sm btm-zindex none\" id=\"Show_cont\">Show content</a>
    <div class=\"modal fade\" id=\"autorization\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Autorization</h4>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" />
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\" />
                                Check me out
                           
                            </label>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"1.html\" class=\"btn btn-danger btn-sm\">Sign in</a>
                    <a href=\"1.html\" class=\"btn btn-primary btn-sm\">Create account</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!--map-->

    <div id=\"map_canvas\" class=\"map\"></div>
    <!--/map-->
    <div class=\"row site\">
        <div class=\"col-md-1 general_menu inner\">
            <a href=\"#\" class=\"avatar\">
                <img src=\"img/no_ava.png\" /></a>

            <ul>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-chef\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-football-soccer\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-controllerps\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-leaf\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-shopping\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-student-school\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-wine\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-wallet\"></i></a>
                </li>
                <li>
                    <a href=\"2.html\" class=\"gradientmenu\"><i class=\"icon-bus\"></i></a>
                </li>

            </ul>
        </div>
        <!--Profile-->
        <span class=\"close_span\" id=\"open_span\"><a href=\"#\" class=\"close-profile-link clooses\" id=\"link_open\">+</a></span>
        <div class=\"col-md-12 profile profile_closed\" id=\"profile\">
            <!--User info-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"user\">
                        <img src=\"img/ava1.png\" />
                        <div>
                            <h2>Mattew An</h2>
                            <ul>
                                <li>Visited <a href=\"#\">59 places</a></li>
                                <li>He left <a href=\"#\">59 places</a></li>
                                <li>Wants to invite a lady to <a href=\"#\">3 places</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"buttons\">
                        <a href=\"#\" class=\"btn btn-dark btn-sm\"><i class=\"icon-emailalt\"></i><span>1</span></a><a href=\"#\" class=\"btn btn-danger btn-sm\">Sign out</a>
                    </div>
                </div>
            </div>
            <!--/User info-->
            <div class=\"row\">
                <!--about-->
                <div class=\"col-md-7\">
                    <h2>About me</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <!--/about-->
                <!--latest tweet-->
                <div class=\"col-md-5 tweets\">
                    <h2>Latest tweet</h2>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <i></i></span>
                    <div class=\"tweet_link\"><a href=\"#\">@mattew An</a>22.12.2013   23:33</div>
                </div>
                <!--/latest tweet-->
            </div>
            <!--my friends-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>My friends</h2>
                    <div id=\"owl-demo\" class=\"owl-carousel owl-theme\">
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                        <!--friend-->
                        <div class=\"item\">
                            <div class=\"friend\">
                                <img src=\"img/ava1.png\" />
                                <a href=\"#\">David mark</a>
                                <i class=\"icon-map-marker\"></i>Russia
                            </div>
                        </div>
                        <!--/friend-->
                    </div>
                </div>
            </div>
            <!--/my friends-->
            <!--my news-->
            <div class=\"row\">
                <div class=\"col-md-12 my_news\">
                    <div class=\"title_news\">
                        <h2>My news</h2>
                    </div>
                    <!--news-->
                    <div class=\"row news_container\">
                        <div class=\"col-md-8 news\">
                            <span class=\"data\">12.11.2013</span> You friend <a href=\"#\">Mattew An</a> visited restaurant \"<a href=\"4.html\">Pizza larenzo</a>\"
                             <div id=\"map2\" class=\"map_in_news\"></div>
                        </div>
                        <div class=\"col-md-4 news_user_info\">
                            <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/news-->
                    <!--news-->
                    <div class=\"row news_container\">
                        <div class=\"col-md-12 news\">
                            <span class=\"data\">12.11.2013</span> Some people want to become your friends
                             <div id=\"myguest\" class=\"owl-carousel owl-theme\">
                                 <!--friend-->
                                 <div class=\"item\">
                                     <div class=\"friend\">
                                         <img src=\"img/ava1.png\" />
                                         <a href=\"#\">David mark</a>
                                         <i class=\"icon-map-marker\"></i>Russia
                                     </div>
                                 </div>
                                 <!--/friend-->
                                 <!--friend-->
                                 <div class=\"item\">
                                     <div class=\"friend\">
                                         <img src=\"img/ava1.png\" />
                                         <a href=\"#\">David mark</a>
                                         <i class=\"icon-map-marker\"></i>Russia
                                     </div>
                                 </div>
                                 <!--/friend-->
                                 <!--friend-->
                                 <div class=\"item\">
                                     <div class=\"friend\">
                                         <img src=\"img/ava1.png\" />
                                         <a href=\"#\">David mark</a>
                                         <i class=\"icon-map-marker\"></i>Russia
                                     </div>
                                 </div>
                                 <!--/friend-->
                             </div>
                        </div>
                    </div>
                    <!--/news-->
                    <!--news-->
                    <div class=\"row news_container\">
                        <div class=\"col-md-8 news\">
                            <span class=\"data\">12.11.2013</span> You friend <a href=\"#\">Mattew An</a> visited restaurant \"<a href=\"4.html\">Pizza larenzo</a>\"
                             <div id=\"map3\" class=\"map_in_news\"></div>
                        </div>
                        <div class=\"col-md-4 news_user_info\">
                            <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/news-->
                </div>
            </div>
            <!--/my news-->
        </div>
        <!--/Profile-->
        <!--Content-->
        <div class=\"col-md-11 general_content_styles vcard\" id=\"cont\">
            <!--header-->
            <div class=\"row\">
                <div class=\"col-md-12 header\">
                    <div class=\"logo\">
                        <a href=\"start.html\">
                            <img src=\"img/logo.png\" /></a>
                    </div>

                </div>
            </div>
            <!--/header-->
             <!--Map open (for adaptive)-->
            <div class=\"row map_open\">
                <div class=\"col-md-12\">
                    <a href=\"#\" id=\"map_open\">Show map</a>
                </div>
            </div>
              <!--/Map open (for adaptive)-->
            <div class=\"row\">
                <div class=\"col-md-12 point_description\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <img src=\"img/icon/01.png\" class=\"point\" />
                            <h2>Stadion Dinamo</h2>
                        </div>
                        <div class=\"col-md-6 btns\">
                            <a href=\"#\" class=\"btn btn-default btn-sm buttons_head\"><i class=\"icon-user\"></i>Invite a friend</a>
                            <a href=\"#\" class=\"btn btn-danger btn-sm buttons_head\"><i class=\"icon-automobile-car\"></i></a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"descr_text\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
        </span>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 placeholder\">
                            <img src=\"img/placeholder1.png\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
       
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <ul id=\"tabs_point\">
                                <li><a href=\"#\" class=\"active\">Comments <span>(2)</span></a></li>
                                <li><a href=\"#\">Photo <span>(23)</span></a></li>
                                <li><a href=\"#\">Was here <span>(2)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"tabs_block_point\">
                                <div id=\"point_tab1\" class=\"tab_point_decr active\">
                                    <!--Comment-->
                                    <div class=\"row comm\">
                                        <div class=\"col-md-12 comment\">
                                            <img src=\"img/no_ava.png\"><div class=\"infocomment\">
                                                <div><a href=\"#\">Mattew An</a>23.12.2013   13:22</div>
                                                <div class=\"rating\">
                                                    <img src=\"img/start.gif\"><a href=\"#\" class=\"btn-default btn-rouned\">+</a><a href=\"#\" class=\"btn-default btn-rouned\">-</a>
                                                </div>
                                            </div>
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </span>
                                        </div>
                                    </div>
                                    <!--/Comment-->
                                    <!--Comment-->
                                    <div class=\"row comm\">
                                        <div class=\"col-md-12 comment\">
                                            <img src=\"img/no_ava.png\"><div class=\"infocomment\">
                                                <div><a href=\"#\">Mattew An</a>23.12.2013   13:22</div>
                                                <div class=\"rating\">
                                                    <img src=\"img/start.gif\"><a href=\"#\" class=\"btn-default btn-rouned\">+</a><a href=\"#\" class=\"btn-default btn-rouned\">-</a>
                                                </div>
                                            </div>
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </span>
                                        </div>
                                    </div>
                                    <!--/Comment-->
                                    <!--Comment-->
                                    <div class=\"row comm\">
                                        <div class=\"col-md-12 comment\">
                                            <img src=\"img/no_ava.png\"><div class=\"infocomment\">
                                                <div><a href=\"#\">Mattew An</a>23.12.2013   13:22</div>
                                                <div class=\"rating\">
                                                    <img src=\"img/start.gif\"><a href=\"#\" class=\"btn-default btn-rouned\">+</a><a href=\"#\" class=\"btn-default btn-rouned\">-</a>
                                                </div>
                                            </div>
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </span>
                                        </div>
                                    </div>
                                    <!--/Comment-->
                                    <!--Comment-->
                                    <div class=\"row comm\">
                                        <div class=\"col-md-12 comment\">
                                            <img src=\"img/no_ava.png\"><div class=\"infocomment\">
                                                <div><a href=\"#\">Mattew An</a>23.12.2013   13:22</div>
                                                <div class=\"rating\">
                                                    <img src=\"img/start.gif\"><a href=\"#\" class=\"btn-default btn-rouned\">+</a><a href=\"#\" class=\"btn-default btn-rouned\">-</a>
                                                </div>
                                            </div>
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </span>
                                        </div>
                                    </div>
                                    <!--/Comment-->
                                    <!--Comment-->
                                    <div class=\"row comm\">
                                        <div class=\"col-md-12 comment\">
                                            <img src=\"img/no_ava.png\"><div class=\"infocomment\">
                                                <div><a href=\"#\">Mattew An</a>23.12.2013   13:22</div>
                                                <div class=\"rating\">
                                                    <img src=\"img/start.gif\"><a href=\"#\" class=\"btn-default btn-rouned\">+</a><a href=\"#\" class=\"btn-default btn-rouned\">-</a>
                                                </div>
                                            </div>
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </span>
                                        </div>
                                    </div>
                                    <!--/Comment-->
                                    <a href=\"%40.html\" class=\"btn btn-danger btn-sm\">Add comment</a>
                                </div>
                                <div id=\"point_tab2\" class=\"tab_point_decr photo\">
                                    <!--photo-->
                                    <div class=\"row\">
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo7.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo8.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo9.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo10.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo11.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo8.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo7.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                        <!--One photo-->
                                        <div class=\"col-md-3 one_photo\">
                                            <a href=\"#\">
                                                <img src=\"img/demo9.png\"></a>
                                        </div>
                                        <!--/One photo-->
                                    </div>
                                    <!--/photo-->
                                </div>
                                <div id=\"point_tab3\" class=\"tab_point_decr\">
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                    <!--Was here-->
                                    <div class=\"row\">
                                        <div class=\"col-md-12 was_here\">
                                            <div class=\"user-info\">
                                                <img src=\"img/no_ava.png\" /><a href=\"#\">Mattew An</a><span>Been here 21th January 2013</span>
                                            </div>
                                            <div class=\"pults\">
                                                <img src=\"img/start.gif\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Was here-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/Content-->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!--   <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"js/bootstrap.js\"></script>

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Default:3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  54 => 19,  50 => 18,  44 => 15,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
