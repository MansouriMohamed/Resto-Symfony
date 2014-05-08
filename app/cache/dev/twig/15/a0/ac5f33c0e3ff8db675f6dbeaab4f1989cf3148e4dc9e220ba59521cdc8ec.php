<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_15a0ac5f33c0e3ff8db675f6dbeaab4f1989cf3148e4dc9e220ba59521cdc8ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  25 => 3,  21 => 2,  42 => 14,  38 => 13,  24 => 4,  46 => 7,  35 => 4,  26 => 5,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 39,  91 => 31,  86 => 28,  69 => 25,  66 => 24,  62 => 23,  51 => 15,  49 => 19,  39 => 16,  32 => 12,  19 => 1,  57 => 16,  54 => 21,  43 => 8,  40 => 7,  33 => 10,  30 => 3,);
    }
}
