<?php

/* PidevSiteBundle:Default:liste.html.twig */
class __TwigTemplate_9da87741dd3b08fae95d5c403db3b5adb59064c6048d5f55180c9d32dd3fca6a extends Twig_Template
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
        echo "     
                <div class=\"col-md-12\">
                    <!--result-->
                    <div class=\"row\">
                        <div class=\"col-md-12 s_result\">
                            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo7.png"), "html", null, true);
        echo "\" /><div class=\"description_search_results\">
                                <a href=\"liste\" class=\"title\">Pizza rico</a>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                             <div class=\"pults_search\">
                                                 <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundels/PidevSite/img/start.gif"), "html", null, true);
        echo "\" /><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                             </div>
                            </div>
                        </div>
                    </div>
                    <!--/result-->
            

                </div>
           
";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 86,  70 => 31,  167 => 120,  20 => 1,  77 => 33,  104 => 56,  97 => 37,  53 => 18,  23 => 1,  257 => 207,  191 => 144,  174 => 139,  170 => 138,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 112,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 30,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 11,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 142,  171 => 61,  166 => 137,  163 => 62,  158 => 113,  156 => 111,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 46,  62 => 26,  49 => 16,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 11,  47 => 18,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 41,  74 => 14,  66 => 15,  55 => 19,  52 => 21,  50 => 10,  43 => 8,  41 => 11,  35 => 5,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 143,  182 => 66,  176 => 111,  173 => 65,  168 => 72,  164 => 59,  162 => 136,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 76,  130 => 41,  125 => 71,  122 => 43,  116 => 41,  112 => 61,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 22,  57 => 11,  54 => 20,  51 => 18,  48 => 13,  45 => 15,  42 => 10,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
