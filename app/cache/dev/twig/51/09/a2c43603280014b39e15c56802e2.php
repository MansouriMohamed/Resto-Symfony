<?php

/* PidevSiteBundle:Default:index.html.twig */
class __TwigTemplate_5109a2c43603280014b39e15c56802e2 extends Twig_Template
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
        \$(document).ready(function () {
            \$('#map_open a').on('click', function () {
                    \$(\"#cont\").addClass(\"close_span\");
                }
                )}
            </script>






</head>
<body onload=\"initialize()\">
    <!--autorization modal-->
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
    <!--    <div class=\"col-md-1 general_menu startpage\">
            <ul>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-chef\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-football-soccer\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-controllerps\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-leaf\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-shopping\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-student-school\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-wine\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-wallet\"></i></a>
                </li>
                <li>
                    <a href=\"#\" class=\"gradientmenu\"><i class=\"icon-bus\"></i></a>
                </li>
            </ul>
        </div> -->
        <!--Content-->
        <div class=\"col-md-11 general_content_styles index_content\" id=\"cont\">
            <!--Header-->
            <div class=\"row\">
                <div class=\"col-md-12 header\">
                    <div class=\"logo\">
                        <a href=\"#\">
                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/logo_1.png"), "html", null, true);
        echo "\" /></a>
                    </div>
                    <div class=\"autorization_btn\"><a data-toggle=\"modal\" href=\"#autorization\" class=\"btn btn-danger btn-sm\">Create account</a></div>
                </div>
            </div>
            <!--/Header-->
                 <!--Map open (for adaptive)-->
            <div class=\"row map_open\">
                <div class=\"col-md-12\">
                    <a href=\"#\" id=\"map_open\">Open map</a>
                </div>
            </div>
              <!--/Map open (for adaptive)-->
            <!--search-->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"row search_block\">
                        <div class=\"text_in_search\">With this form you can find where to spend time</div>
                        <div class=\"search\">
                            <input type=\"text\" class=\"form-control  input-sm\" id=\"exampleInputEmail2\" placeholder=\"Enter email\" />
                        </div>
                        <a href=\"4.html\" class=\"btn btn-warning col-md-2 btn-sm\">Search</a>
                    </div>
                </div>
            </div>
            <!--/search-->
            <!--Features-->
            <div class=\"row features\">
                <div class=\"col-md-6\">
                    <h4><i class=\"icon-groups-friends\"></i>Find out where your friends</h4>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                </div>
                <div class=\"col-md-6\">
                    <h4><i class=\"icon-thumbs-up\"></i>Find out where your friends</h4>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                </div>
                <div class=\"col-md-6\">
                    <h4><i class=\"icon-automobile-car\"></i>Find out where your friends</h4>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                </div>
                <div class=\"col-md-6\">
                    <h4><i class=\"icon-addfriend\"></i>Find out where your friends</h4>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                </div>
            </div>
            <!--/Features-->
            <!--tooltip-->
            <div class=\"jumbotron\">
                <div class=\"container\">
                    <h2>There are already over 1 000 000 users</h2>
                    <p><a class=\"btn btn-danger btn-sm\">Learn more</a></p>
                </div>
            </div>
            <!--/tooltip-->
            <!--places-->
            <h3>Best of the day places to stay</h3>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo01.png"), "html", null, true);
        echo "\" />
                                <div class=\"caption\">
                                    <a href=\"3.html\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"3.html\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo2.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"3.html\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"3.html\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo3.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"3.html\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"3.html\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo4.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"3.html\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"3.html\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo5.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"3.html\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"3.html\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo6.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"3.html\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"img/start.gif\" />
                                        <a href=\"3.html\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                    </div>
                </div>
            </div>
            <!--/places-->
        </div>
        <!--/Content-->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--   <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 272,  324 => 250,  311 => 240,  303 => 235,  290 => 225,  282 => 220,  269 => 210,  261 => 205,  248 => 195,  240 => 190,  227 => 180,  219 => 175,  154 => 113,  58 => 20,  54 => 19,  50 => 18,  44 => 15,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}