<?php

/* PidevSiteBundle:statistique:statistique.html.twig */
class __TwigTemplate_4192e41ee80573443c97a2a30ac463ce1378d1b10ff2d75186b54bbe3405b4fe extends Twig_Template
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
        $context["tunis"] = 0;
        // line 4
        echo "    ";
        $context["ariana"] = 0;
        // line 5
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "restaurants"));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 6
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "restaurant"), "adresse") == "Tunis")) {
                // line 7
                echo "                    ";
                $context["tunis"] = ($this->getContext($context, "tunis") + 1);
                echo " 
                ";
            }
            // line 9
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "restaurant"), "adresse") == "Ariana")) {
                // line 10
                echo "                    ";
                $context["ariana"] = ($this->getContext($context, "ariana") + 1);
                echo " 
                ";
            }
            // line 12
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<!doctype html>

<html>

  <head>
    <title>Statistique</title>
    <meta charset=\"utf-8\" />
 
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pidevsite/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pidevsite/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pidevsite/js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pidevsite/js/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pidevsite/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
  </head>

  <body>
        <h3 style=\"margin:auto;\" >Statistiques des restaurants :</h3>
        <div style=\"margin-top:10px;\">
            <div style=\"vertical-align:middle;display:inline-block;height:20px;width:20px;background-color:rgb(152, 204, 224);\"></div>
            <span style=\"vertical-align:middle;\">Ariana :";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "ariana"), "html", null, true);
        echo "</span>
        </div>
        <div style=\"margin-top:5px;\" >
            <div style=\"vertical-align:middle;display:inline-block;height:20px;width:20px;background-color:rgb(241, 215, 78);\"></div>
            <span style=\"vertical-align:middle;\">Tunis :";
        // line 36
        echo twig_escape_filter($this->env, $this->getContext($context, "tunis"), "html", null, true);
        echo "</span>
        </div>
\t<div id=\"placeholder8\" class=\"flot-placeholder\" style=\"height:300px;width:500px;\"></div>
        <br /><br /><br />
\t<script>
\t\t\$(document).ready(function(){
\t\t\tvar data_pie = [];
            data_pie[0] = {
                label: \"Tunis\",
                data:   ";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "tunis"), "html", null, true);
        echo "
            };
            
            data_pie[1] = {
                label: \"Ariana\",
                data:   ";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "ariana"), "html", null, true);
        echo "
            };
\t\t\t\$.plot('#placeholder8', data_pie, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: \"<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>aaa<br/>25%</div>\",
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            legend: {
                show: false
            }
        });
\t\t});
\t\t
\t</script>
  </body>

</html>

";
    }

    public function getTemplateName()
    {
        return "PidevSiteBundle:statistique:statistique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  120 => 45,  108 => 36,  101 => 32,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  65 => 13,  59 => 12,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  36 => 5,  33 => 4,  31 => 3,  28 => 2,);
    }
}
