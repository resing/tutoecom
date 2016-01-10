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
        $__internal_f5c30dc429ab23e0d65bf7b305c9453c34cec5ddaaf04620828309c3ca6a706a = $this->env->getExtension("native_profiler");
        $__internal_f5c30dc429ab23e0d65bf7b305c9453c34cec5ddaaf04620828309c3ca6a706a->enter($__internal_f5c30dc429ab23e0d65bf7b305c9453c34cec5ddaaf04620828309c3ca6a706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c30dc429ab23e0d65bf7b305c9453c34cec5ddaaf04620828309c3ca6a706a->leave($__internal_f5c30dc429ab23e0d65bf7b305c9453c34cec5ddaaf04620828309c3ca6a706a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e9ba115101c26371881a0c26f33408929c0250378860e73a7d1efdaf7f22e68 = $this->env->getExtension("native_profiler");
        $__internal_3e9ba115101c26371881a0c26f33408929c0250378860e73a7d1efdaf7f22e68->enter($__internal_3e9ba115101c26371881a0c26f33408929c0250378860e73a7d1efdaf7f22e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e9ba115101c26371881a0c26f33408929c0250378860e73a7d1efdaf7f22e68->leave($__internal_3e9ba115101c26371881a0c26f33408929c0250378860e73a7d1efdaf7f22e68_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f519b9c0f51726b414444415a138d8a696cda4c01993f1d7a1b41014c132755 = $this->env->getExtension("native_profiler");
        $__internal_6f519b9c0f51726b414444415a138d8a696cda4c01993f1d7a1b41014c132755->enter($__internal_6f519b9c0f51726b414444415a138d8a696cda4c01993f1d7a1b41014c132755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f519b9c0f51726b414444415a138d8a696cda4c01993f1d7a1b41014c132755->leave($__internal_6f519b9c0f51726b414444415a138d8a696cda4c01993f1d7a1b41014c132755_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_91098c5319debdcfb10c24dadc25ddd3eb5d24b482a54c18f5af8593eb0222d1 = $this->env->getExtension("native_profiler");
        $__internal_91098c5319debdcfb10c24dadc25ddd3eb5d24b482a54c18f5af8593eb0222d1->enter($__internal_91098c5319debdcfb10c24dadc25ddd3eb5d24b482a54c18f5af8593eb0222d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_91098c5319debdcfb10c24dadc25ddd3eb5d24b482a54c18f5af8593eb0222d1->leave($__internal_91098c5319debdcfb10c24dadc25ddd3eb5d24b482a54c18f5af8593eb0222d1_prof);

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
