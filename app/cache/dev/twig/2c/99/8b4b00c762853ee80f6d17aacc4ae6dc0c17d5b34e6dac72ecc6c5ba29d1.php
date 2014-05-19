<?php

/* PidevSiteBundle:Restaurant:new.html.twig */
class __TwigTemplate_2c998b4b00c762853ee80f6d17aacc4ae6dc0c17d5b34e6dac72ecc6c5ba29d1 extends Twig_Template
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
        echo "

    <h1>Restaurant creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("restaurant");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>

    ";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Restaurant:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  37 => 7,  31 => 3,  28 => 2,);
    }
}
