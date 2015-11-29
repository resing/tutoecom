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
        $__internal_2bffe06ea7fe3ca37f622ca9162b02ed51caa074dca364d70d8284b7a9ca66ef = $this->env->getExtension("native_profiler");
        $__internal_2bffe06ea7fe3ca37f622ca9162b02ed51caa074dca364d70d8284b7a9ca66ef->enter($__internal_2bffe06ea7fe3ca37f622ca9162b02ed51caa074dca364d70d8284b7a9ca66ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bffe06ea7fe3ca37f622ca9162b02ed51caa074dca364d70d8284b7a9ca66ef->leave($__internal_2bffe06ea7fe3ca37f622ca9162b02ed51caa074dca364d70d8284b7a9ca66ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2097933f79142441722244cd046a056acf1f1c973ad7fd8a1d8c5734066755d1 = $this->env->getExtension("native_profiler");
        $__internal_2097933f79142441722244cd046a056acf1f1c973ad7fd8a1d8c5734066755d1->enter($__internal_2097933f79142441722244cd046a056acf1f1c973ad7fd8a1d8c5734066755d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2097933f79142441722244cd046a056acf1f1c973ad7fd8a1d8c5734066755d1->leave($__internal_2097933f79142441722244cd046a056acf1f1c973ad7fd8a1d8c5734066755d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cfa7686fe1e0ad6efeff04ed77a0eb57e41486a552d9768e19f637111f5d74b = $this->env->getExtension("native_profiler");
        $__internal_1cfa7686fe1e0ad6efeff04ed77a0eb57e41486a552d9768e19f637111f5d74b->enter($__internal_1cfa7686fe1e0ad6efeff04ed77a0eb57e41486a552d9768e19f637111f5d74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cfa7686fe1e0ad6efeff04ed77a0eb57e41486a552d9768e19f637111f5d74b->leave($__internal_1cfa7686fe1e0ad6efeff04ed77a0eb57e41486a552d9768e19f637111f5d74b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2be911eb16c51d762f70592e56682661a02f9c0579be0b34ef3652c09a4612 = $this->env->getExtension("native_profiler");
        $__internal_be2be911eb16c51d762f70592e56682661a02f9c0579be0b34ef3652c09a4612->enter($__internal_be2be911eb16c51d762f70592e56682661a02f9c0579be0b34ef3652c09a4612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_be2be911eb16c51d762f70592e56682661a02f9c0579be0b34ef3652c09a4612->leave($__internal_be2be911eb16c51d762f70592e56682661a02f9c0579be0b34ef3652c09a4612_prof);

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
