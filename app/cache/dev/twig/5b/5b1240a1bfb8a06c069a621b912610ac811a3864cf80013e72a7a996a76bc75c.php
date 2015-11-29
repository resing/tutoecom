<?php

/* layout.html.twig */
class __TwigTemplate_517c59bb437e6e6488b22c34e39d5d5ae88d541eb362272e2005c09609f8b71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc2cf0b8c20f986dde96edbfc5bd21e2755a89b70c7945be6766a694f34284cd = $this->env->getExtension("native_profiler");
        $__internal_fc2cf0b8c20f986dde96edbfc5bd21e2755a89b70c7945be6766a694f34284cd->enter($__internal_fc2cf0b8c20f986dde96edbfc5bd21e2755a89b70c7945be6766a694f34284cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "<html>
<head>
<title>Trekking a Ecommerce Category Flat Bootstrap Responsive Website Template | Home</title>

";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "<!--//theme-style-->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "<script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
                \$(\".scroll\").click(function(event){\t\t
                        event.preventDefault();
                        \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
                });
        });
</script>
<!--//slider-script-->
<script>\$(document).ready(function(c) {
\t\$('.alert-close').on('click', function(c){
\t\t\$('.message').fadeOut('slow', function(c){
\t  \t\t\$('.message').remove();
\t\t});
\t});\t  
});
</script>
<script>\$(document).ready(function(c) {
\t\$('.alert-close1').on('click', function(c){
\t\t\$('.message1').fadeOut('slow', function(c){
\t  \t\t\$('.message1').remove();
\t\t});
\t});\t  
});
</script>
</head>
<div class=\"header\">
\t\t<div class=\"container\">
\t\t<div class=\"header-top\">\t\t
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t</div>
\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t<span class=\"menu\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/menu.png"), "html", null, true);
        echo "\" alt=\"\"> </span>
\t\t\t\t\t<ul class=\"icon1 sub-icon1\">
\t\t\t\t\t\t<li  ><a href=\"index.html\" >Home</a></li>
\t\t\t\t\t\t<li><a href=\"products.html\" > Products</a></li>
\t\t\t\t\t\t<li><a href=\"products.html\" > Promotions</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i></i></a>
\t\t\t\t\t\t<ul class=\"sub-icon1 list\">
\t\t\t\t\t\t  <h3>Recently added items(2)</h3>
\t\t\t\t\t\t  <div class=\"shopping_cart\">
\t\t\t\t\t\t\t  <div class=\"cart_box\">
\t\t\t\t\t\t\t   \t <div class=\"message\">
\t\t\t\t\t\t\t   \t     <div class=\"alert-close\"> </div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"list_img\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/15.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list_desc\"><h4><a href=\"#\">velit esse molestie</a></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aliquam dignissim porttitor tortor </p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"offer\">1 offer applied</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t                              <div class=\"clearfix\"></div>
\t                              </div>
\t                            </div>
\t                           <div class=\"cart_box\">
\t\t\t\t\t\t\t   \t <div class=\"message1\">
\t\t\t\t\t\t\t   \t     <div class=\"alert-close1\"> </div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"list_img\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/16.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"list_desc\"><h4><a href=\"#\">velit esse molestie</a></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aliquam dignissim porttitor tortor </p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"offer\">1 offer applied</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t                              <div class=\"clearfix\"></div>
\t                              </div>
\t                            </div>
\t                        </div>
\t\t\t\t\t\t\t  <div class=\"check_button\"><a href=\"cart.html\">View Cart</a></div>
\t\t\t\t\t      <div class=\"clearfix\"></div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!--script-->
\t\t\t\t<script>
\t\t\t\t\t\$(\"span.menu\").click(function(){
\t\t\t\t\t\t\$(\".top-nav ul\").slideToggle(500, function(){
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t</script>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "<div class=\"footer\">
\t\t\t
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-bottom-at\">
\t\t\t\t\t<div class=\"col-md-6 footer-grid\">
\t\t\t\t\t\t<h3>Trekking</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 footer-grid-in\">
\t\t\t\t\t<ul class=\"footer-nav\">
\t\t\t\t\t\t<li><a href=\"404.html\" >credits </a>|</li>
\t\t\t\t\t\t<li><a href=\"privacy.html\" > Privacy</a>|</li>
\t\t\t\t\t\t<li><a href=\"about.html\" > about</a>|</li>
\t\t\t\t\t\t<li><a href=\"contact.html\" > contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p class=\"footer-class\">&copy; 2015 Trekking. All rights reserved | Template by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t/*
\t\t\t\t\t\t\tvar defaults = {
\t\t\t\t\t  \t\t\tcontainerID: 'toTop', // fading element id
\t\t\t\t\t\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\t\t\t\t\t\tscrollSpeed: 1200,
\t\t\t\t\t\t\t\teasingType: 'linear' 
\t\t\t\t\t \t\t};
\t\t\t\t\t\t\t*/
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t\t\t\t\t
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t<a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>


\t\t</div>
</body>
</html>";
        
        $__internal_fc2cf0b8c20f986dde96edbfc5bd21e2755a89b70c7945be6766a694f34284cd->leave($__internal_fc2cf0b8c20f986dde96edbfc5bd21e2755a89b70c7945be6766a694f34284cd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c7515ace1465296c7d0d2ba6ce08a757ae28949971ddb35df5c6db3c3f4e432 = $this->env->getExtension("native_profiler");
        $__internal_7c7515ace1465296c7d0d2ba6ce08a757ae28949971ddb35df5c6db3c3f4e432->enter($__internal_7c7515ace1465296c7d0d2ba6ce08a757ae28949971ddb35df5c6db3c3f4e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b48cb7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b48cb7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap_1.css");
            // line 12
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "8b48cb7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b48cb7_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_style_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "8b48cb7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b48cb7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
        
        $__internal_7c7515ace1465296c7d0d2ba6ce08a757ae28949971ddb35df5c6db3c3f4e432->leave($__internal_7c7515ace1465296c7d0d2ba6ce08a757ae28949971ddb35df5c6db3c3f4e432_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_680f93af885da52864feeeb09293c5e42169ff01a56a97ed5cf93ba177aaf132 = $this->env->getExtension("native_profiler");
        $__internal_680f93af885da52864feeeb09293c5e42169ff01a56a97ed5cf93ba177aaf132->enter($__internal_680f93af885da52864feeeb09293c5e42169ff01a56a97ed5cf93ba177aaf132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2943e37_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2943e37_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_jquery.min_1.js");
            // line 28
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "2943e37_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2943e37_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_move-top_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "2943e37_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2943e37_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_easing_3.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2943e37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2943e37") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 30
        echo " ";
        
        $__internal_680f93af885da52864feeeb09293c5e42169ff01a56a97ed5cf93ba177aaf132->leave($__internal_680f93af885da52864feeeb09293c5e42169ff01a56a97ed5cf93ba177aaf132_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7b036aa27a9ae3f5eceaf3c8fbde772210edca5d994da1a494b7a16f150ecac = $this->env->getExtension("native_profiler");
        $__internal_e7b036aa27a9ae3f5eceaf3c8fbde772210edca5d994da1a494b7a16f150ecac->enter($__internal_e7b036aa27a9ae3f5eceaf3c8fbde772210edca5d994da1a494b7a16f150ecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7b036aa27a9ae3f5eceaf3c8fbde772210edca5d994da1a494b7a16f150ecac->leave($__internal_e7b036aa27a9ae3f5eceaf3c8fbde772210edca5d994da1a494b7a16f150ecac_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 113,  268 => 30,  242 => 28,  237 => 23,  231 => 22,  224 => 14,  204 => 12,  200 => 8,  197 => 7,  191 => 6,  142 => 115,  140 => 113,  111 => 87,  97 => 76,  82 => 64,  76 => 61,  44 => 31,  42 => 22,  33 => 15,  31 => 6,  25 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <html>*/
/* <head>*/
/* <title>Trekking a Ecommerce Category Flat Bootstrap Responsive Website Template | Home</title>*/
/* */
/* {% block stylesheets %}*/
/* */
/*             {% stylesheets filter="cssrewrite" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/css/bootstrap.css"*/
/*                 "%kernel.root_dir%/Resources/assets/css/style.css"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/* <!--//theme-style-->*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/* <!--fonts-->*/
/* <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>*/
/* {% block javascripts %}*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/move-top.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/easing.js"*/
/*                  %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*  {% endblock %}*/
/* <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*                 $(".scroll").click(function(event){		*/
/*                         event.preventDefault();*/
/*                         $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);*/
/*                 });*/
/*         });*/
/* </script>*/
/* <!--//slider-script-->*/
/* <script>$(document).ready(function(c) {*/
/* 	$('.alert-close').on('click', function(c){*/
/* 		$('.message').fadeOut('slow', function(c){*/
/* 	  		$('.message').remove();*/
/* 		});*/
/* 	});	  */
/* });*/
/* </script>*/
/* <script>$(document).ready(function(c) {*/
/* 	$('.alert-close1').on('click', function(c){*/
/* 		$('.message1').fadeOut('slow', function(c){*/
/* 	  		$('.message1').remove();*/
/* 		});*/
/* 	});	  */
/* });*/
/* </script>*/
/* </head>*/
/* <div class="header">*/
/* 		<div class="container">*/
/* 		<div class="header-top">		*/
/* 			<div class="logo">*/
/* 				<a href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a>*/
/* 			</div>*/
/* 				<div class="top-nav">*/
/* 					<span class="menu"><img src="{{ asset('images/menu.png')}}" alt=""> </span>*/
/* 					<ul class="icon1 sub-icon1">*/
/* 						<li  ><a href="index.html" >Home</a></li>*/
/* 						<li><a href="products.html" > Products</a></li>*/
/* 						<li><a href="products.html" > Promotions</a></li>*/
/* 						<li><a href="#"><i></i></a>*/
/* 						<ul class="sub-icon1 list">*/
/* 						  <h3>Recently added items(2)</h3>*/
/* 						  <div class="shopping_cart">*/
/* 							  <div class="cart_box">*/
/* 							   	 <div class="message">*/
/* 							   	     <div class="alert-close"> </div> */
/* 										<div class="list_img"><img src="{{ asset('images/15.jpg') }}" class="img-responsive" alt=""></div>*/
/* 										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>*/
/* 										<p>Aliquam dignissim porttitor tortor </p>*/
/* 										<a href="#" class="offer">1 offer applied</a>*/
/* 										</div>*/
/* 		                              <div class="clearfix"></div>*/
/* 	                              </div>*/
/* 	                            </div>*/
/* 	                           <div class="cart_box">*/
/* 							   	 <div class="message1">*/
/* 							   	     <div class="alert-close1"> </div> */
/* 										<div class="list_img"><img src="{{ asset('images/16.jpg') }}" class="img-responsive" alt=""></div>*/
/* 										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>*/
/* 										<p>Aliquam dignissim porttitor tortor </p>*/
/* 										<a href="#" class="offer">1 offer applied</a>*/
/* 										</div>*/
/* 		                              <div class="clearfix"></div>*/
/* 	                              </div>*/
/* 	                            </div>*/
/* 	                        </div>*/
/* 							  <div class="check_button"><a href="cart.html">View Cart</a></div>*/
/* 					      <div class="clearfix"></div>*/
/* 						</ul>*/
/* 					</li>*/
/* 					</ul>*/
/* 					<!--script-->*/
/* 				<script>*/
/* 					$("span.menu").click(function(){*/
/* 						$(".top-nav ul").slideToggle(500, function(){*/
/* 						});*/
/* 					});*/
/* 			</script>*/
/* 				</div>*/
/* 				<div class="clearfix"> </div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% block body %}*/
/* {% endblock %}*/
/* <div class="footer">*/
/* 			*/
/* 			<div class="footer-bottom">*/
/* 				<div class="container">*/
/* 				<div class="footer-bottom-at">*/
/* 					<div class="col-md-6 footer-grid">*/
/* 						<h3>Trekking</h3>*/
/* 						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>*/
/* 					</div>*/
/* 					<div class="col-md-6 footer-grid-in">*/
/* 					<ul class="footer-nav">*/
/* 						<li><a href="404.html" >credits </a>|</li>*/
/* 						<li><a href="privacy.html" > Privacy</a>|</li>*/
/* 						<li><a href="about.html" > about</a>|</li>*/
/* 						<li><a href="contact.html" > contact</a></li>*/
/* 					</ul>*/
/* 					<p class="footer-class">&copy; 2015 Trekking. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>*/
/* 					</div>*/
/* 					<div class="clearfix"> </div>*/
/* 				</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<script type="text/javascript">*/
/* 						$(document).ready(function() {*/
/* 							/**/
/* 							var defaults = {*/
/* 					  			containerID: 'toTop', // fading element id*/
/* 								containerHoverID: 'toTopHover', // fading element hover id*/
/* 								scrollSpeed: 1200,*/
/* 								easingType: 'linear' */
/* 					 		};*/
/* 							*//* */
/* 							*/
/* 							$().UItoTop({ easingType: 'easeOutQuart' });*/
/* 							*/
/* 						});*/
/* 					</script>*/
/* 				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>*/
/* */
/* */
/* 		</div>*/
/* </body>*/
/* </html>*/
