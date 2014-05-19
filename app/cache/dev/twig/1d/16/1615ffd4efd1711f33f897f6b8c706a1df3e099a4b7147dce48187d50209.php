<?php

/* PidevSiteBundle:Restaurant:show.html.twig */
class __TwigTemplate_1d161615ffd4efd1711f33f897f6b8c706a1df3e099a4b7147dce48187d50209 extends Twig_Template
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
        echo "    <h1>Restaurant</h1>
    <img style=\"vertical-align:top;\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PidevSite/img/restaurant.png"), "html", null, true);
        echo "\"/>
    <div style=\"display:inline-block;\">
    <table class=\"record_properties\" style=\" display: inline-block; margin-left: 10px; \">
        <tbody>
            
            <tr>
                <th>Nom</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adresse"), "html", null, true);
        echo "
                    <input type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adresse"), "html", null, true);
        echo "\" id=\"destination\" />
                    <div qtyle=\"display:none;\" is=\"panel\"></div>
                </td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numero"), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>
        <br />
        <ul class=\"record_actions\" style=\" width: 140px; display: inline-block;margin-top: 50px; \">
    <li>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("restaurant");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("restaurant_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
        </div>
    <div></div>
    <br /><br /><br />
    
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/PidevSite/js/functions.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Restaurant:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 46,  91 => 40,  84 => 36,  76 => 31,  65 => 23,  56 => 17,  52 => 16,  44 => 11,  34 => 4,  31 => 3,  28 => 2,);
    }
}
