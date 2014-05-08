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
        return array (  44 => 11,  37 => 7,  28 => 2,);
    }
}
