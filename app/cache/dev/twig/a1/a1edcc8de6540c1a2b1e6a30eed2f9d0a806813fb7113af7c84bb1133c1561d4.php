<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e6bf2715da0ab28b71cd760d8ad4ef7c1316b81a915f70252b20700f3b42c027 extends Twig_Template
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
        $__internal_da86b0a7266e2a8c8b4d9b1e8ee687bad93207c857c06de508cf2a55a1698afe = $this->env->getExtension("native_profiler");
        $__internal_da86b0a7266e2a8c8b4d9b1e8ee687bad93207c857c06de508cf2a55a1698afe->enter($__internal_da86b0a7266e2a8c8b4d9b1e8ee687bad93207c857c06de508cf2a55a1698afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_da86b0a7266e2a8c8b4d9b1e8ee687bad93207c857c06de508cf2a55a1698afe->leave($__internal_da86b0a7266e2a8c8b4d9b1e8ee687bad93207c857c06de508cf2a55a1698afe_prof);

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
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
