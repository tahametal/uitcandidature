<?php

/* mqlUITCandidatureBundle:Candidature:ins3.html.twig */
class __TwigTemplate_e310f9904694bf05dbb5ae47da394413 extends Twig_Template
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />  
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-image-gallery.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 9
    public function block_titreP($context, array $blocks = array())
    {
        echo "Etape 3 - Candidature";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"span11\">

      \t\t<div class=\"widget stacked\">
\t\t\t\t\t
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-check\"></i>
\t\t\t\t\tCandidature
\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
                                     <table class=\"table table-bordered table-striped table-highlight\">
                                        <thead>
            <tr>
                <th>Candidature</th>
                <th>Choix de candidatures</th>
                <th>Annulation</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context["counter"] = 0;
        // line 32
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) ? $context["candidatures"] : $this->getContext($context, "candidatures")));
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
            // line 33
            echo "            <tr>
                <td><h5>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "filiere"), "html", null, true);
            echo " </h5></td>
                <td>Formation n° ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                   
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_deletef", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small\">
\t\t\t<i class=\"btn-icon-only icon-remove\"></i>\t\t\t\t\t\t\t\t\t\t
\t\t\t</a>
                    
                    
                </ul>
                </td>
            </tr>
            ";
            // line 47
            $context["counter"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index");
            // line 48
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
        // line 49
        echo "        </tbody>
                                    </table>
                                    
                                    ";
        // line 52
        if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) < 3)) {
            // line 53
            echo "\t\t\t\t<a data-toggle=\"modal\" href=\"#modal-candidature\" class=\"btn btn-small btn-success\" href=\"javascript:;\" style=\"float: right;\">

                                    Ajouter une Candidature

        </a>
\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t
\t\t\t\t\t
                                </div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t\t
</div>
   
   
   
   
   
   
   
   
   <div id=\"modal-candidature\" class=\"modal hide fade\" tabindex=\"-1\">
        <form action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formcand"]) ? $context["formcand"] : $this->getContext($context, "formcand")), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une Candidature</h3>
    </div>
    <div class=\"modal-body\">
      
        
        <p>
          ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formcand"]) ? $context["formcand"] : $this->getContext($context, "formcand")), 'widget');
        echo "
        </p>
    </div>
        
        
    <div class=\"modal-footer\">
         
        <table><tr><td ><button class=\"btn btn-success\"  type=\"submit\">Ajouter Candidature</button> </td>
                <td> 
                      
            
           
          
 
      </td></tr></table>
      
      
        
      
    </div>
       </form> 
</div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        // line 146
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/load-image.min.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js\"></script>
       
       

";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidature:ins3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 148,  256 => 147,  251 => 146,  185 => 84,  153 => 59,  124 => 48,  100 => 34,  77 => 31,  81 => 34,  231 => 111,  228 => 110,  200 => 92,  195 => 90,  174 => 78,  161 => 71,  148 => 64,  292 => 173,  288 => 172,  280 => 170,  250 => 144,  212 => 114,  198 => 105,  175 => 84,  97 => 33,  146 => 58,  127 => 47,  110 => 39,  102 => 46,  90 => 33,  76 => 31,  59 => 27,  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 158,  238 => 137,  234 => 112,  225 => 152,  221 => 151,  217 => 150,  213 => 99,  194 => 132,  192 => 131,  58 => 18,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 125,  150 => 65,  137 => 58,  118 => 48,  104 => 35,  53 => 11,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 171,  278 => 86,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 153,  224 => 71,  220 => 70,  214 => 69,  208 => 97,  177 => 65,  169 => 76,  143 => 52,  140 => 55,  132 => 56,  128 => 49,  119 => 42,  107 => 51,  71 => 23,  38 => 6,  155 => 58,  135 => 57,  126 => 45,  114 => 40,  84 => 29,  70 => 25,  67 => 26,  61 => 21,  94 => 35,  89 => 36,  85 => 31,  75 => 23,  68 => 29,  56 => 12,  87 => 20,  21 => 2,  26 => 6,  93 => 33,  88 => 38,  78 => 27,  46 => 14,  27 => 4,  44 => 15,  31 => 3,  28 => 3,  196 => 90,  183 => 82,  171 => 75,  166 => 81,  163 => 72,  158 => 79,  156 => 69,  151 => 77,  142 => 59,  138 => 49,  136 => 56,  121 => 49,  117 => 44,  105 => 50,  91 => 33,  62 => 28,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 32,  72 => 30,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 53,  139 => 53,  131 => 42,  123 => 58,  120 => 40,  115 => 43,  111 => 39,  108 => 42,  101 => 32,  98 => 36,  96 => 35,  83 => 29,  74 => 30,  66 => 23,  55 => 26,  52 => 21,  50 => 10,  43 => 8,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 85,  182 => 83,  176 => 79,  173 => 74,  168 => 72,  164 => 59,  162 => 80,  154 => 77,  149 => 75,  147 => 76,  144 => 53,  141 => 70,  133 => 65,  130 => 55,  125 => 44,  122 => 47,  116 => 54,  112 => 42,  109 => 50,  106 => 37,  103 => 40,  99 => 30,  95 => 42,  92 => 33,  86 => 33,  82 => 31,  80 => 19,  73 => 19,  64 => 22,  60 => 22,  57 => 18,  54 => 10,  51 => 17,  48 => 16,  45 => 17,  42 => 8,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
