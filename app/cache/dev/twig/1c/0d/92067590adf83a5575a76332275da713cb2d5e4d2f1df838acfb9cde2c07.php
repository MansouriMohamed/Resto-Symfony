<?php

/* PidevSiteBundle:Default:details.html.twig */
class __TwigTemplate_1c0d92067590adf83a5575a76332275da713cb2d5e4d2f1df838acfb9cde2c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PidevSiteBundle:Default:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevSiteBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "                    <div class=\"row\">
                        <div class=\"col-md-12 placeholder\">
                            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/placeholder1.png"), "html", null, true);
        echo "\">
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
                                            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/no_ava.png"), "html", null, true);
        echo "\"><div class=\"infocomment\">
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
 ";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  104 => 42,  97 => 37,  53 => 18,  23 => 1,  257 => 207,  191 => 144,  174 => 139,  170 => 138,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 141,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 30,  59 => 6,  38 => 6,  94 => 28,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 11,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 142,  171 => 61,  166 => 137,  163 => 62,  158 => 135,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 11,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 143,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 136,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 22,  57 => 11,  54 => 20,  51 => 19,  48 => 13,  45 => 17,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
