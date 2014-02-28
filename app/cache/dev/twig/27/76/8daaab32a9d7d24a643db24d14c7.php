<?php

/* mqlUITCandidatureBundle:Candidat:inscription2.html.twig */
class __TwigTemplate_27768daaab32a9d7d24a643db24d14c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'titreP' => array($this, 'block_titreP'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />  
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
   <link rel=\"stylesheet\"  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-image-gallery.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_titreP($context, array $blocks = array())
    {
        echo "Etape 2 - Expériences et Formation";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"span11\">

      \t\t<div class=\"widget stacked\">
\t\t\t\t\t
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-check\"></i>
\t\t\t\t\tExpériences
\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
                                     <table class=\"table table-bordered table-striped table-highlight\">
                                        <thead>
                                        <tr>
                                            <th>Intitulé</th>
                                            <th>Date Début</th>
                                            <th>Date Fin</th>
                                            <th>Type</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) ? $context["experiences"] : $this->getContext($context, "experiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 30
            echo "                                            <tr>
                                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exp"]) ? $context["exp"] : $this->getContext($context, "exp")), "intitule"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exp"]) ? $context["exp"] : $this->getContext($context, "exp")), "datedebut"), "Y-m-d "), "html", null, true);
            echo "</td>
                                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exp"]) ? $context["exp"] : $this->getContext($context, "exp")), "datefin"), "Y-m-d"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["exp"]) ? $context["exp"] : $this->getContext($context, "exp")), "type"), "type"), "html", null, true);
            echo "</td>
                                            </tr>           
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "
                                           
                                            

                                        </tbody>
                                    </table>
\t\t\t\t<a data-toggle=\"modal\" href=\"#modal-exp\" class=\"btn btn-small btn-success\" href=\"javascript:;\" style=\"float: right;\">

                                    Ajouter une Experience

        </a>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
                                </div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t\t
</div>
<div class=\"span11\">

      \t\t<div class=\"widget stacked\">
\t\t\t\t\t
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-check\"></i>
\t\t\t\t\tFormations
\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
                                     <table class=\"table table-bordered table-striped table-highlight\">
                                        <thead>
                                        <tr>
                                            <th>Intitulé</th>
                                            <th>Date obtention</th>
                                            <th>Etablisement</th>
                                            <th>Type Diplome</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diplomes"]) ? $context["diplomes"] : $this->getContext($context, "diplomes")));
        foreach ($context['_seq'] as $context["_key"] => $context["dip"]) {
            // line 77
            echo "                                            <tr>
                                                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dip"]) ? $context["dip"] : $this->getContext($context, "dip")), "intitule"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dip"]) ? $context["dip"] : $this->getContext($context, "dip")), "dateobtention"), "Y-m-d "), "html", null, true);
            echo "</td>
                                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dip"]) ? $context["dip"] : $this->getContext($context, "dip")), "etablissement"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dip"]) ? $context["dip"] : $this->getContext($context, "dip")), "diplometype"), "type"), "html", null, true);
            echo "</td>
                                            </tr>           
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dip'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 84
        echo "                                           
                                            

                                        </tbody>
                                    </table>
\t\t\t\t<a data-toggle=\"modal\" href=\"#modal-dip\" class=\"btn btn-small btn-success\" href=\"javascript:;\" style=\"float: right;\">

                                    Ajouter une Experience

        </a>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
                                </div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t\t
</div>
    

<div id=\"modal-exp\" class=\"modal hide fade\" tabindex=\"-1\">
      <form action=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("experience_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formexp"]) ? $context["formexp"] : $this->getContext($context, "formexp")), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une experience</h3>
    </div>
    <div class=\"modal-body\">
      
        
        <p>
          ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formexp"]) ? $context["formexp"] : $this->getContext($context, "formexp")), 'widget');
        echo "
        </p>
    </div>
        
        
    <div class=\"modal-footer\">
         
        <table><tr><td ><button class=\"btn btn-success\"  type=\"submit\">Ajouter Expérience</button> </td>
                <td> 
                      
            
           
          
 
      </td></tr></table>
      
      
        
      
    </div>
       </form> 
</div>
<div id=\"modal-dip\" class=\"modal hide fade\" tabindex=\"-1\">
  <form action=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diplome_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formdip"]) ? $context["formdip"] : $this->getContext($context, "formdip")), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une Formation</h3>
    </div>
    <div class=\"modal-body\">
      
        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formdip"]) ? $context["formdip"] : $this->getContext($context, "formdip")), 'widget');
        echo "
        <p>
          
        </p>
    </div>
        
        
    <div class=\"modal-footer\">
         
        <table><tr><td >    <button class=\"btn btn-success\" type=\"submit\">Ajouter Diplome</button></td>
                <td> 
            
           
          
 
      </td></tr></table>
      
      
        
      
    </div>
        </form>
</div>

    
";
    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        // line 171
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/load-image.min.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js\"></script>
       
         <script>
            \$(\"form input.date\").datepicker();
        </script>

";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidat:inscription2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 173,  288 => 172,  280 => 170,  250 => 144,  212 => 114,  198 => 105,  175 => 84,  97 => 34,  146 => 58,  127 => 47,  110 => 39,  102 => 37,  90 => 34,  76 => 31,  59 => 27,  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 9,  242 => 158,  238 => 137,  234 => 155,  225 => 152,  221 => 151,  217 => 150,  213 => 149,  194 => 132,  192 => 131,  58 => 18,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 125,  150 => 65,  137 => 58,  118 => 48,  104 => 40,  53 => 8,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 171,  278 => 86,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 153,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 56,  128 => 49,  119 => 42,  107 => 51,  71 => 22,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 40,  84 => 29,  70 => 20,  67 => 21,  61 => 13,  94 => 35,  89 => 32,  85 => 31,  75 => 23,  68 => 29,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 33,  88 => 6,  78 => 29,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  196 => 90,  183 => 82,  171 => 77,  166 => 81,  163 => 72,  158 => 79,  156 => 66,  151 => 77,  142 => 59,  138 => 57,  136 => 56,  121 => 44,  117 => 44,  105 => 50,  91 => 33,  62 => 28,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 27,  72 => 30,  69 => 25,  47 => 7,  40 => 8,  37 => 4,  22 => 2,  246 => 32,  157 => 56,  145 => 63,  139 => 53,  131 => 42,  123 => 50,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 36,  96 => 35,  83 => 25,  74 => 14,  66 => 15,  55 => 26,  52 => 21,  50 => 10,  43 => 8,  41 => 5,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 84,  182 => 124,  176 => 79,  173 => 74,  168 => 72,  164 => 59,  162 => 80,  154 => 78,  149 => 51,  147 => 76,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 42,  106 => 37,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 33,  82 => 30,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 11,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
