<?php

/* PidevSiteBundle:Reservation:show.html.twig */
class __TwigTemplate_83b035c3e65523f42a766bc080cd4e5a461ac6c00150c53f8492e305583b2834 extends Twig_Template
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
        echo "    <h1>Reservation</h1>

    <img style=\"vertical-align:top;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PidevSite/img/restaurant.png"), "html", null, true);
        echo "\"/>
    <div style=\"display:inline-block;\">
    <table class=\"record_properties\" style=\" display: inline-block; margin-left: 10px; \">
        <tbody>
           
            <tr>
                <th>Date</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idclient</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idClient"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idrestaurant</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idRestaurant"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idrestaurateur</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idRestaurateur"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            <br />
        <ul class=\"record_actions\" style=\" width: 140px; display: inline-block;margin-top: 50px; \">
    <li>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("reservation");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:Reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  84 => 36,  76 => 31,  66 => 24,  59 => 20,  52 => 16,  45 => 12,  35 => 5,  31 => 3,  28 => 2,);
    }
}
