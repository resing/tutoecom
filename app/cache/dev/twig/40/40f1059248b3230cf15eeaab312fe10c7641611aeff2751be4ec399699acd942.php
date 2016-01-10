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
        $__internal_e9277430b7aca0278e4e92814fd502b478c4d2962c234c2bf67f7b08e9fd330e = $this->env->getExtension("native_profiler");
        $__internal_e9277430b7aca0278e4e92814fd502b478c4d2962c234c2bf67f7b08e9fd330e->enter($__internal_e9277430b7aca0278e4e92814fd502b478c4d2962c234c2bf67f7b08e9fd330e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9277430b7aca0278e4e92814fd502b478c4d2962c234c2bf67f7b08e9fd330e->leave($__internal_e9277430b7aca0278e4e92814fd502b478c4d2962c234c2bf67f7b08e9fd330e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_757a855196175df5ef09b93d95b3a0ba91eeae2830f7af52cf34f289f225c1d1 = $this->env->getExtension("native_profiler");
        $__internal_757a855196175df5ef09b93d95b3a0ba91eeae2830f7af52cf34f289f225c1d1->enter($__internal_757a855196175df5ef09b93d95b3a0ba91eeae2830f7af52cf34f289f225c1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"banner\"> 
  <div class=\"container\">\t
    <h1>Our clothing , your comfort</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
<div class=\"content\" id=\"content\"></div>
";
        
        $__internal_757a855196175df5ef09b93d95b3a0ba91eeae2830f7af52cf34f289f225c1d1->leave($__internal_757a855196175df5ef09b93d95b3a0ba91eeae2830f7af52cf34f289f225c1d1_prof);

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
