<?php

/* PidevSiteBundle:Commentaire:show.html.twig */
class __TwigTemplate_d539d88601aa19de86231d9b715ee80fe21c5f001a14f1cce06c2de96f07337b extends Twig_Template
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
        echo "    <h1>Commentaire</h1>

    <img style=\"vertical-align:top;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PidevSite/img/restaurant.png"), "html", null, true);
        echo "\"/>
    <div style=\"display:inline-block;\">
    <table class=\"record_properties\" style=\" display: inline-block; margin-left: 10px; \">
        <tbody>
            
            <tr>
                <th>Contenu</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "html", null, true);
        echo "</td>
            </tr>
            
            
        </tbody>
    </table>

         <ul class=\"record_actions\" style=\" width: 140px; display: inline-block;margin-top: 50px; \">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("commentaire");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
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
        return "PidevSiteBundle:Commentaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 34,  72 => 30,  64 => 25,  52 => 16,  45 => 12,  35 => 5,  31 => 3,  28 => 2,);
    }
}
