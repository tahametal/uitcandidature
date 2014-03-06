<?php

/* mqlUITCandidatureBundle:Candidature:validation.html.twig */
class __TwigTemplate_6e05efa9c88820de49e21e7d20538581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user' => array($this, 'block_user'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Inscription :: Candidature</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" /> 
    
    
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/faq/faq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ui-lightness/jquery-ui-1.10.0.custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base-admin-2-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
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
        // line 46
        $this->displayBlock('user', $context, $blocks);
        // line 47
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
      \t<div class=\"span8\">
      \t\t
      \t\t<div class=\"widget stacked\">
\t\t\t\t\t
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-pushpin\"></i>
\t\t\t\t\t<h3>Resume de candidature</h3>
\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t
\t\t\t
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t
\t\t\t\t\t<ol class=\"faq-list\">
                                            
                                            
<li>
<h4>Candidature</h4>
<p>


<div class=\"widget stacked widget-table action-table\">



<div class=\"widget-content\">

<table class=\"table table-striped table-bordered\">
<thead>
<tr>
<th>Candidature</th>
<th>Choix de candidatures</th>


</tr>
</thead>
<tbody>
";
        // line 151
        $context["counter"] = 0;
        // line 152
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "candidatures"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 153
            echo "            <tr>
                <td><h5>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "filiere"), "html", null, true);
            echo " </h5></td>
                <td>Formation n° ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
               
            
            </tr>
            ";
            // line 159
            $context["counter"] = $this->getAttribute($this->getContext($context, "loop"), "index");
            // line 160
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 161
        echo "</tbody>
</table>

</div> <!-- /widget-content -->

</div> <!-- /widget -->


</p>\t

</li>
 
                                            
                                            
\t\t\t\t\t\t
<li>
<h4>Etat civil</h4>
<p>






<div class=\"widget stacked widget-table action-table\">



<div class=\"widget-content\">

<table class=\"table table-striped table-bordered\">

<tbody>

<tr>

<th>Nom</th>
<th></th>
<td>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>

</tr>

<tr>
<th>Prenom</th>
<th></th>
<td>";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Datenaissance</th>
<th></th>
<td>";
        // line 211
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datenaissance"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Adresse</th>
<th></th>
<td>";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adresse"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Cin</th>
<th></th>
<td>";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cin"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Cne</th>
<th></th>
<td>";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cne"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Email</th>
<th></th>
<td>";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Telephone</th>
<th></th>
<td>";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telephone"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Nationalite</th>
<th></th>
<td>";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nationalite"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Ville</th>
<th></th>
<td>";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Pays</th>
<th></th>
<td>";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pays"), "html", null, true);
        echo "</td>
</tr>
<tr>
<th>Sexe</th>
<th></th>
<td>";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sexe"), "html", null, true);
        echo "</td>
</tr>
</tbody>
</table>

</div> <!-- /widget-content -->

</div> <!-- /widget -->




</p>\t

</li>

\t\t\t\t\t\t
                                                
                                                
                                                \t
<li>
<h4>Experiences</h4>
<p>


    <div class=\"widget stacked widget-table action-table\">



<div class=\"widget-content\">

<table class=\"table table-striped table-bordered\">
<thead>
<tr>

<th>Intitule</th>
<th>Datedebut</th>
<th>Datefin</th>
<th>Description</th>
</tr>
</thead>
<tbody>
";
        // line 298
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "experiences"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 299
            echo "<tr>

<td>";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "intitule"), "html", null, true);
            echo "</td>
<td>";
            // line 302
            if ($this->getAttribute($this->getContext($context, "entity"), "datedebut")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datedebut"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
<td>";
            // line 303
            if ($this->getAttribute($this->getContext($context, "entity"), "datefin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datefin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
<td>";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 308
        echo "</tbody>
</table>

</div> <!-- /widget-content -->

</div> <!-- /widget -->

</p>\t

</li>
\t\t\t\t\t
                                                
                                                
<li>
    
<h4>Formations</h4>
<p>  
    <div class=\"widget stacked widget-table action-table\">



<div class=\"widget-content\">

<table class=\"table table-striped table-bordered\">
<thead>
<tr>

<th>Intitule</th>
<th>Dateinscription</th>
<th>Dateobtention</th>
<th>Note</th>
<th>Mention</th>
<th>Etablissement</th>
<th>Ville</th>

</tr>
</thead>
<tbody>
";
        // line 346
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "formations"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 347
            echo "<tr>

<td>";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "intitule"), "html", null, true);
            echo "</td>
<td>";
            // line 350
            if ($this->getAttribute($this->getContext($context, "entity"), "dateinscription")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateinscription"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
<td>";
            // line 351
            if ($this->getAttribute($this->getContext($context, "entity"), "dateobtention")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateobtention"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
<td>";
            // line 352
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "note"), "html", null, true);
            echo "</td>
<td>";
            // line 353
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mention"), "html", null, true);
            echo "</td>
<td>";
            // line 354
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "etablissement"), "html", null, true);
            echo "</td>
<td>";
            // line 355
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville"), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 359
        echo "</tbody>
</table>

</div> <!-- /widget-content -->

</div> <!-- /widget -->

  
</p>\t

</li> 



<li>
\t\t\t\t\t\t\t<h4>Semestre</h4>
                                                               <p>
                                                                   
                                                                   
<div class=\"widget stacked widget-table action-table\">



<div class=\"widget-content\">

<table class=\"table table-striped table-bordered\">
<thead>
<tr>
<th>Semestre</th>
<th>Note</th>
<th>rattrapage</th>

</tr>
</thead>
<tbody>

";
        // line 395
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "semestres"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 396
            echo "<tr>
<td>Semestre ";
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "semestre"), "html", null, true);
            echo "</td>
<td>";
            // line 398
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "note"), "html", null, true);
            echo "</td>
<td>";
            // line 399
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hasrattrapage"), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 403
        echo "</tbody>
</table>

</div> <!-- /widget-content -->

</div> <!-- /widget -->


                                                              </p>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
                                                
\t\t\t\t\t</ol>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t
\t\t\t
\t    </div> <!-- /span8 -->
\t    
\t    
\t    
\t    <div class=\"span4\">
\t\t\t\t\t
\t\t\t<div class=\"widget widget-plain\">
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_validation"), "html", null, true);
        echo "\" class=\"btn btn-large btn-warning btn-support-ask\">Valider votre Candidature</a>\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-large btn-support-contact\">Retour au modification</a>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->
\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"widget stacked widget-box\">
\t\t\t\t
\t\t\t\t<div class=\"widget-header\">\t
\t\t\t\t\t<h3>notez bien</h3>\t\t\t
\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t
\t\t\t\t\t<p>Apres la validation vous navez pas le droit de modifier les donneés deja saisie .</p>
\t\t\t\t\t
\t\t\t\t</div> <!-- /widget-content -->
\t\t\t\t
\t\t\t</div> <!-- /widget -->
\t\t\t
\t\t</div> <!-- /span4 -->
      \t
      \t
      \t
      </div> <!-- /row -->

    </div> <!-- /container -->
\t    
</div> <!-- /main -->
    
  
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
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Application.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/faq/faq.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/demo/faq.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 46
    public function block_user($context, array $blocks = array())
    {
        echo "MKHAKH Radouane";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidature:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 46,  726 => 499,  722 => 498,  717 => 496,  713 => 495,  709 => 494,  704 => 492,  700 => 491,  638 => 432,  607 => 403,  597 => 399,  593 => 398,  589 => 397,  586 => 396,  582 => 395,  544 => 359,  534 => 355,  530 => 354,  526 => 353,  522 => 352,  516 => 351,  510 => 350,  506 => 349,  502 => 347,  498 => 346,  458 => 308,  448 => 304,  442 => 303,  436 => 302,  432 => 301,  428 => 299,  424 => 298,  379 => 256,  371 => 251,  363 => 246,  355 => 241,  347 => 236,  339 => 231,  331 => 226,  323 => 221,  315 => 216,  307 => 211,  299 => 206,  289 => 199,  249 => 161,  235 => 160,  233 => 159,  226 => 155,  222 => 154,  219 => 153,  201 => 152,  199 => 151,  93 => 47,  91 => 46,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  44 => 14,  40 => 13,  36 => 12,  32 => 11,  20 => 1,);
    }
}
