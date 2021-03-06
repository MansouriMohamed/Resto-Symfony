<?php

/* PidevSiteBundle:Default:layout.html.twig */
class __TwigTemplate_b680c4928fa7dbc6c79108331f7b44a99c807505a84c36b2d01843a3fa578dd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/jquery.js"), "html", null, true);
        echo "\"></script>
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
                    <a href=\"#\" class=\"btn btn-danger btn-sm\">Sign in</a>
                    <a href=\"#\" class=\"btn btn-primary btn-sm\">Create account</a>
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
    
        <!--Content-->
        <div class=\"col-md-11 general_content_styles index_content\" id=\"cont\">
            <!--Header-->
            <div class=\"row\">
                <div class=\"col-md-12 header\">
                    <div class=\"logo\">
                        <a href=\"#\">
                            <img src=\"";
        // line 84
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
                        <a href=\"liste\" class=\"btn btn-warning col-md-2 btn-sm\">Search</a>
                    </div>
                </div>
            </div>
            <!--/search-->
           
            
            ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "            <!--/places-->
        </div>
        <!--/Content-->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--   <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        // line 113
        echo "            ";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 113,  180 => 112,  171 => 121,  162 => 114,  160 => 112,  129 => 84,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  45 => 15,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
    }
}
