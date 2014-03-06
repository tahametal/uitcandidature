<?php

/* ::base.html.twig */
class __TwigTemplate_bcb4dfeefd403edb3bc753ac0f929fdf extends Twig_Template
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
            'scripte' => array($this, 'block_scripte'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Candidature</title>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/pages/plans.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/msgbox/jquery.msgbox.css"), "html", null, true);
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
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"javascript:;\">Déconnexion</a></li>
\t\t\t\t\t</ul>
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
        // line 121
        $this->displayBlock('titreP', $context, $blocks);
        // line 122
        echo "\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t
\t\t\t\t\t";
        // line 128
        $this->displayBlock('body', $context, $blocks);
        // line 129
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
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Application.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/msgbox/jquery.msgbox.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 155
        $this->displayBlock('scripte', $context, $blocks);
        // line 156
        echo "    
<div class=\"footer\">
\t\t
\t<div class=\"container\">
\t\t
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div id=\"footer-copyright\" class=\"span6\">
\t\t\t\t&copy; 2014-15 MQL
\t\t\t</div> <!-- /span6 -->
\t\t\t
\t\t\t<div id=\"footer-terms\" class=\"span6\">
\t\t\t\tTheme by Redone
\t\t\t</div> <!-- /.span6 -->
\t\t\t
\t\t</div> <!-- /row -->
\t\t
\t</div> <!-- /container -->
\t
</div> 
</body>
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

    // line 121
    public function block_titreP($context, array $blocks = array())
    {
    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 155
    public function block_scripte($context, array $blocks = array())
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
        return array (  295 => 155,  290 => 154,  285 => 128,  280 => 121,  274 => 50,  269 => 9,  243 => 156,  241 => 155,  239 => 154,  234 => 152,  230 => 151,  226 => 150,  222 => 149,  217 => 147,  194 => 129,  192 => 128,  184 => 122,  110 => 51,  79 => 24,  75 => 23,  67 => 21,  62 => 19,  58 => 18,  42 => 11,  37 => 10,  35 => 9,  25 => 1,  238 => 113,  235 => 112,  232 => 111,  221 => 104,  213 => 146,  208 => 97,  200 => 92,  195 => 90,  187 => 85,  182 => 121,  174 => 78,  169 => 76,  161 => 71,  156 => 69,  148 => 64,  143 => 62,  135 => 57,  130 => 55,  121 => 49,  116 => 47,  108 => 50,  103 => 40,  95 => 35,  90 => 33,  83 => 29,  78 => 27,  71 => 22,  66 => 21,  56 => 17,  53 => 16,  47 => 13,  34 => 3,  31 => 2,);
    }
}
