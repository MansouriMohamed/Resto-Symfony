<?php

/* PidevSiteBundle:Default:index.html.twig */
class __TwigTemplate_e989ef72ae327fb58d6c571e13fadd835129aa3366f1fd948e1510d830bcb725 extends Twig_Template
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
<!--places-->
            <h3>Best of the day places to stay</h3>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo01.png"), "html", null, true);
        echo "\" />
                                <div class=\"caption\">
                                    <a href=\"details\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"details\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo2.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"details\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"details\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo3.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"details\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"details\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo4.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"details\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"details\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo5.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"details\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/start.gif"), "html", null, true);
        echo "\" />
                                        <a href=\"details\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                        <!--place-->
                        <div class=\"col-sm-6 col-md-4 places\">
                            <div class=\"thumbnail\">
                                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/img/demo6.png"), "html", null, true);
        echo "\" alt=\"...\" />
                                <div class=\"caption\">
                                    <a href=\"details\">Thumbnail label</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                                    <p>
                                        <img src=\"img/start.gif\" />
                                        <a href=\"details\" class=\"btn btn-default btn-xs\"><i class=\"icon-user\"></i>87</a><a href=\"#\" class=\"btn btn-default btn-xs\"><i class=\"icon-commentround\"></i>12</a><a href=\"#\" class=\"btn btn-default btn-xs ping\"><i class=\"icon-map-marker\"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/place-->
                    </div>
                </div>
            </div>
            <!--/places-->
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
        return array (  146 => 86,  133 => 76,  125 => 71,  112 => 61,  104 => 56,  91 => 46,  83 => 41,  70 => 31,  62 => 26,  49 => 16,  41 => 11,  28 => 2,);
    }
}
