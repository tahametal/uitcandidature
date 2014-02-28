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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/pages/plans.css"), "html", null, true);
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
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/validate/jquery.validate.js"), "html", null, true);
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
        $this->displayBlock('scripte', $context, $blocks);
        // line 158
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

    // line 157
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
        return array (  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 9,  242 => 158,  238 => 156,  234 => 155,  225 => 152,  221 => 151,  217 => 150,  213 => 149,  194 => 132,  192 => 131,  58 => 18,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 125,  150 => 65,  137 => 58,  118 => 48,  104 => 40,  53 => 16,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 153,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 56,  128 => 49,  119 => 42,  107 => 51,  71 => 22,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 42,  84 => 29,  70 => 20,  67 => 21,  61 => 13,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 16,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  196 => 90,  183 => 82,  171 => 77,  166 => 71,  163 => 72,  158 => 70,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 33,  62 => 19,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 27,  72 => 23,  69 => 25,  47 => 13,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 63,  139 => 50,  131 => 42,  123 => 50,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 35,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 84,  182 => 124,  176 => 79,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 42,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 11,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
