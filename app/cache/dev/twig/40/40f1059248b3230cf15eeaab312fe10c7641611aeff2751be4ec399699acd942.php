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
        $__internal_004a464e22d6c598214032b62072c0b669bc8ef3b04bc84523c08bba14b0ad37 = $this->env->getExtension("native_profiler");
        $__internal_004a464e22d6c598214032b62072c0b669bc8ef3b04bc84523c08bba14b0ad37->enter($__internal_004a464e22d6c598214032b62072c0b669bc8ef3b04bc84523c08bba14b0ad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004a464e22d6c598214032b62072c0b669bc8ef3b04bc84523c08bba14b0ad37->leave($__internal_004a464e22d6c598214032b62072c0b669bc8ef3b04bc84523c08bba14b0ad37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bad4501574e650b8a5eac70a1110f349f475bb9bde39720a0292ec9fd329a6de = $this->env->getExtension("native_profiler");
        $__internal_bad4501574e650b8a5eac70a1110f349f475bb9bde39720a0292ec9fd329a6de->enter($__internal_bad4501574e650b8a5eac70a1110f349f475bb9bde39720a0292ec9fd329a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"banner\"> 
  <div class=\"container\">\t
    <h1>Our clothing , your comfort</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
<div class=\"content\" id=\"content\"></div>
";
        
        $__internal_bad4501574e650b8a5eac70a1110f349f475bb9bde39720a0292ec9fd329a6de->leave($__internal_bad4501574e650b8a5eac70a1110f349f475bb9bde39720a0292ec9fd329a6de_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* <div class="banner"> */
/*   <div class="container">	*/
/*     <h1>Our clothing , your comfort</h1>*/
/*     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/*   </div>*/
/* </div>*/
/* <div class="content" id="content"></div>*/
/* {% endblock %}*/
