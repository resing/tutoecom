<?php

/* front/index.html.twig */
class __TwigTemplate_5e21adc987ff7ef976fefde69ba5a30c19fe73cf518a22dbd39624bdd9f395ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "front/index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f889430d2c5064752d640e06c8ac4555c23d2c790300fc60633cb5d70278210 = $this->env->getExtension("native_profiler");
        $__internal_7f889430d2c5064752d640e06c8ac4555c23d2c790300fc60633cb5d70278210->enter($__internal_7f889430d2c5064752d640e06c8ac4555c23d2c790300fc60633cb5d70278210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f889430d2c5064752d640e06c8ac4555c23d2c790300fc60633cb5d70278210->leave($__internal_7f889430d2c5064752d640e06c8ac4555c23d2c790300fc60633cb5d70278210_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a59924d16c83ca0278a64b6280eff74388f5f4f6b7a6ccc6e7eb5408ab23382 = $this->env->getExtension("native_profiler");
        $__internal_5a59924d16c83ca0278a64b6280eff74388f5f4f6b7a6ccc6e7eb5408ab23382->enter($__internal_5a59924d16c83ca0278a64b6280eff74388f5f4f6b7a6ccc6e7eb5408ab23382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"banner\"> </div>
<div class=\"content\" id=\"content\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</div>

";
        
        $__internal_5a59924d16c83ca0278a64b6280eff74388f5f4f6b7a6ccc6e7eb5408ab23382->leave($__internal_5a59924d16c83ca0278a64b6280eff74388f5f4f6b7a6ccc6e7eb5408ab23382_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* <div class="banner"> </div>*/
/* <div class="content" id="content">{{name}}</div>*/
/* */
/* {% endblock %}*/
