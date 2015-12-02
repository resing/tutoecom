<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_84209df37b218dfbc65f3b9d6bb728578f74f32f2301f6867db15c5a3fd5a105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78943973310d43ec821e81b6ffa1b0569fdec7045c0dc26c8b53748a1f0aad26 = $this->env->getExtension("native_profiler");
        $__internal_78943973310d43ec821e81b6ffa1b0569fdec7045c0dc26c8b53748a1f0aad26->enter($__internal_78943973310d43ec821e81b6ffa1b0569fdec7045c0dc26c8b53748a1f0aad26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78943973310d43ec821e81b6ffa1b0569fdec7045c0dc26c8b53748a1f0aad26->leave($__internal_78943973310d43ec821e81b6ffa1b0569fdec7045c0dc26c8b53748a1f0aad26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4753c12d5fca9aab8a9633c955e66c70e9f5e2eb4abc50e1570de3c661a6e509 = $this->env->getExtension("native_profiler");
        $__internal_4753c12d5fca9aab8a9633c955e66c70e9f5e2eb4abc50e1570de3c661a6e509->enter($__internal_4753c12d5fca9aab8a9633c955e66c70e9f5e2eb4abc50e1570de3c661a6e509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4753c12d5fca9aab8a9633c955e66c70e9f5e2eb4abc50e1570de3c661a6e509->leave($__internal_4753c12d5fca9aab8a9633c955e66c70e9f5e2eb4abc50e1570de3c661a6e509_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3904bf36a799e5a0ff2869649a621cd227e9b756d9c933497c13619349612e43 = $this->env->getExtension("native_profiler");
        $__internal_3904bf36a799e5a0ff2869649a621cd227e9b756d9c933497c13619349612e43->enter($__internal_3904bf36a799e5a0ff2869649a621cd227e9b756d9c933497c13619349612e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3904bf36a799e5a0ff2869649a621cd227e9b756d9c933497c13619349612e43->leave($__internal_3904bf36a799e5a0ff2869649a621cd227e9b756d9c933497c13619349612e43_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1233f38f3350077dd157a88acdcaecec6b87d273c946c14fecb534d668cb5b1b = $this->env->getExtension("native_profiler");
        $__internal_1233f38f3350077dd157a88acdcaecec6b87d273c946c14fecb534d668cb5b1b->enter($__internal_1233f38f3350077dd157a88acdcaecec6b87d273c946c14fecb534d668cb5b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1233f38f3350077dd157a88acdcaecec6b87d273c946c14fecb534d668cb5b1b->leave($__internal_1233f38f3350077dd157a88acdcaecec6b87d273c946c14fecb534d668cb5b1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
