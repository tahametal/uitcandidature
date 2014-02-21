<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_31e556bcab6592c5bdfb4f4a1bc69add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/allo15/css/templatemo_style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/allo15/css/ddsmoothmenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/allo15/css/jquery.dualSlider.0.2.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />


<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/allo15/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/allo15/js/ddsmoothmenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


</script>

<script language=\"javascript\" type=\"text/javascript\">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type=\"text/javascript\">

ddsmoothmenu.init({
\tmainmenuid: \"top_nav\", //menu DIV id
\torientation: 'h', //Horizontal or vertical menu: Set to \"h\" or \"v\"
\tclassname: 'ddsmoothmenu', //class added to menu's outer DIV
\t//customtheme: [\"#1c5a80\", \"#18374a\"],
\tcontentsource: \"markup\" //\"markup\" or [\"container_id\", \"path_to_menu_file\"]
})



</script>

<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/allo15/css/huraga-red.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />


<style>
        input {
         display: block;    
        }
        #_submit{
            margin-left: 100px;
            margin-top: 20px;
        color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5f8a1d;
  background-image: -moz-linear-gradient(top, #6b9b20, #4e7117);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6b9b20), to(#4e7117));
  background-image: -webkit-linear-gradient(top, #6b9b20, #4e7117);
  background-image: -o-linear-gradient(top, #6b9b20, #4e7117);
  background-image: linear-gradient(to bottom, #6b9b20, #4e7117);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff6b9b20', endColorstr='#ff4e7117', GradientType=0);
  border-color: #4e7117 #4e7117 #22310a;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #4e7117;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
 -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15) inset, 0 1px 2px rgba(0, 0, 0, 0.05);

        }
    
</style>
<script type=\"text/javascript\">
        \$(document).ready(function() {
\$('#_submit').addClass('btn-success');
        
    });
</script>

</head>

<body>

<!-- Main page container -->
\t\t<section class=\"container login\" role=\"main\">
\t\t\t
\t\t\t
\t\t\t<div class=\"data-block\">
        \t
           
     
        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 98
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 99
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">
                    ";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 103
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "
        <div>
            ";
        // line 106
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 108
        echo "        </div>

      
                            
        </div> 
                    
                    
        <div class=\"cleaner\"></div>
    </section>
    
 
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Allo 15";
    }

    // line 106
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 107
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 107,  200 => 106,  194 => 5,  175 => 108,  173 => 106,  169 => 104,  163 => 103,  154 => 100,  149 => 99,  144 => 98,  140 => 97,  85 => 45,  55 => 18,  50 => 16,  44 => 13,  39 => 11,  34 => 9,  27 => 5,  21 => 1,);
    }
}
