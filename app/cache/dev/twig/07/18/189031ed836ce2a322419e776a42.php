<?php

/* PidevSiteBundle:Default:details.html.twig */
class __TwigTemplate_0718189031ed836ce2a322419e776a42 extends Twig_Template
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
        return array (  63 => 30,  35 => 5,  31 => 3,  28 => 2,);
    }
}
