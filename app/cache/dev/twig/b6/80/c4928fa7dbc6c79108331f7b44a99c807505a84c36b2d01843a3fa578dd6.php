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
        // line 83
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
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "            <!--/places-->
        </div>
        <!--/Content-->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--   <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        // line 112
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
        return array (  167 => 120,  20 => 1,  77 => 33,  104 => 42,  97 => 37,  53 => 18,  23 => 1,  257 => 207,  191 => 144,  174 => 139,  170 => 138,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 112,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 30,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 11,  31 => 3,  28 => 7,  201 => 92,  196 => 90,  183 => 142,  171 => 61,  166 => 137,  163 => 62,  158 => 113,  156 => 111,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 11,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 19,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 143,  182 => 66,  176 => 111,  173 => 65,  168 => 72,  164 => 59,  162 => 136,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 83,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 22,  57 => 11,  54 => 20,  51 => 18,  48 => 13,  45 => 15,  42 => 10,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
