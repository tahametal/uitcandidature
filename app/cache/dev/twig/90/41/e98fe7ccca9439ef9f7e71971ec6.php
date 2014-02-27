<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9041e98fe7ccca9439ef9f7e71971ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Login :: Candidature</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" /> 
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\" />
    
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ui-lightness/jquery-ui-1.10.0.custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    
    
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base-admin-2-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/pages/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

<body>
\t
\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t
\t<div class=\"navbar-inner\">
\t\t
\t\t<div class=\"container\">
\t\t\t
\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t<i class=\"icon-cog\"></i>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"brand\" href=\"index.html\">
\t\t\t\tCandidature <sup>EN Ligne</sup>\t\t\t\t
\t\t\t</a>\t\t
\t\t\t
\t\t\t<div class=\"nav-collapse\">
\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t
\t\t\t\t\t<li class=\"\">\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" class=\"\">
\t\t\t\t\t\t\tNouvelle candidature
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"\">\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\" class=\"\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\t\t\t\t\tRetour à l'accueil
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div><!--/.nav-collapse -->\t
\t
\t\t</div> <!-- /container -->
\t\t
\t</div> <!-- /navbar-inner -->
\t
</div> <!-- /navbar -->

    

        ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 73
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 78
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 79
        echo "
        <div>
            ";
        // line 81
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 83
        echo "        </div>
  

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Application.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/signin.js"), "html", null, true);
        echo "\"></script>
";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "</body>
</html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 81
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 82
        echo "            ";
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  212 => 96,  208 => 82,  205 => 81,  200 => 9,  194 => 97,  192 => 96,  188 => 95,  183 => 93,  178 => 91,  174 => 90,  170 => 89,  162 => 83,  160 => 81,  156 => 79,  150 => 78,  141 => 75,  136 => 74,  131 => 73,  127 => 72,  106 => 54,  96 => 47,  69 => 23,  64 => 21,  59 => 19,  55 => 18,  50 => 16,  44 => 13,  39 => 11,  34 => 10,  32 => 9,  22 => 1,  60 => 19,  54 => 18,  52 => 17,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
