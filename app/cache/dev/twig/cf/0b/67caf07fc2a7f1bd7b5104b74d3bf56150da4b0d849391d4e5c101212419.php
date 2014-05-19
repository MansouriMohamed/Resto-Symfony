<?php

/* PidevSiteBundle:Plat:show.html.twig */
class __TwigTemplate_cf0b67caf07fc2a7f1bd7b5104b74d3bf56150da4b0d849391d4e5c101212419 extends Twig_Template
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
        echo "    <h1>Plat</h1>
    <img style=\"vertical-align:top;\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PidevSite/img/restaurant.png"), "html", null, true);
        echo "\"/>
    <div style=\"display:inline-block;\">
    <table class=\"record_properties\" style=\" display: inline-block; margin-left: 10px; \">
    

    <table class=\"record_properties\">
        <tbody>
            
            <tr>
                <th>Idrestaurant</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idRestaurant"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomplat</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomPlat"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionplat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descriptionPlat"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixplat</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prixPlat"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

       <br />
        <ul class=\"record_actions\" style=\" width: 140px; display: inline-block;margin-top: 50px; \">
    <li>
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("plat");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plat_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
             </div>
    <div></div>
    <br /><br /><br />
";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Plat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 43,  87 => 39,  79 => 34,  68 => 26,  61 => 22,  54 => 18,  47 => 14,  34 => 4,  31 => 3,  28 => 2,);
    }
}
