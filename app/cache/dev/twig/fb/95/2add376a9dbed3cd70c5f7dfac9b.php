<?php

/* ::base.html.twig */
class __TwigTemplate_fb952add376a9dbed3cd70c5f7dfac9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'user' => array($this, 'block_user'),
            'titreP' => array($this, 'block_titreP'),
            'body' => array($this, 'block_body'),
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/pages/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
\t
\t<div class=\"navbar-inner\">
\t\t
\t\t<div class=\"container\">
\t\t\t
\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t<i class=\"icon-cog\"></i>
\t\t\t</a>
\t\t\t
\t\t\t<a class=\"brand\" href=\"./index.html\">
\t\t\t\tCandidature <sup>EN Ligne</sup>\t\t\t\t
\t\t\t</a>\t\t
\t\t\t
\t\t\t<div class=\"nav-collapse\">
\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t
\t\t\t
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"icon-user\"></i> 
\t\t\t\t\t\t\t";
        // line 50
        $this->displayBlock('user', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Mon Profil</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t
\t\t\t\t<form class=\"navbar-search pull-right\" />
\t\t\t\t\t<input type=\"text\" class=\"search-query\" placeholder=\"Search\" />
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div><!--/.nav-collapse -->\t
\t
\t\t</div> <!-- /container -->
\t\t
\t</div> <!-- /navbar-inner -->
\t
</div> <!-- /navbar -->
\t


    
<div class=\"subnavbar\">

\t<div class=\"subnavbar-inner\">
\t
\t\t<div class=\"container\">

\t\t\t<a class=\"btn-subnavbar collapsed\" data-toggle=\"collapse\" data-target=\".subnav-collapse\">
\t\t\t\t<i class=\"icon-reorder\"></i>
\t\t\t</a>

\t\t\t<div class=\"subnav-collapse collapse\">
\t\t\t\t<ul class=\"mainnav\">
\t\t\t\t
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t<span>Candidature</span>
\t\t\t\t\t\t</a>\t    \t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div> <!-- /.subnav-collapse -->

\t\t</div> <!-- /container -->
\t
\t</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->





<div class=\"main\">

    <div class=\"container\">

      <div class=\"row\">
      \t
      \t<div class=\"span12\">
      \t\t
      \t\t<div class=\"widget stacked\">
\t\t\t\t\t
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-check\"></i>
\t\t\t\t\t";
        // line 124
        $this->displayBlock('titreP', $context, $blocks);
        // line 125
        echo "\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t
\t\t\t\t\t";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "\t\t\t\t</div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t\t
\t    </div> <!-- /span12 -->     \t
      \t
      \t
      </div> <!-- /row -->

    </div> <!-- /container -->
    
</div> <!-- /main -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Application.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/signin.js"), "html", null, true);
        echo "\"></script>
";
        // line 156
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
        echo "</body>
</html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 50
    public function block_user($context, array $blocks = array())
    {
        echo "MKHAKH Radouane";
    }

    // line 124
    public function block_titreP($context, array $blocks = array())
    {
    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
    }

    // line 156
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 156,  258 => 131,  253 => 124,  247 => 50,  242 => 9,  236 => 157,  234 => 156,  230 => 155,  225 => 153,  220 => 151,  216 => 150,  212 => 149,  193 => 132,  191 => 131,  183 => 125,  181 => 124,  106 => 51,  104 => 50,  74 => 23,  70 => 22,  66 => 21,  61 => 19,  57 => 18,  52 => 16,  46 => 13,  41 => 11,  36 => 10,  34 => 9,  24 => 1,  56 => 15,  45 => 7,  38 => 6,  35 => 3,  29 => 2,);
    }
}
