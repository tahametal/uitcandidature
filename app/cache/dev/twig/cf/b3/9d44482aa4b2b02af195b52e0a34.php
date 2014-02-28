<?php

/* mqlUITCandidatureBundle:Candidat:new.html.twig */
class __TwigTemplate_cfb39d44482aa4b2b02af195b52e0a34 extends Twig_Template
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
        echo "<style>
        #mqluit_candidaturebundle_candidattype_datenaissance_day{
        width: 60px;
        }
         #mqluit_candidaturebundle_candidattype_datenaissance_year,#mqluit_candidaturebundle_candidattype_datenaissance_month{
        width: 80px;
        }
</style>

";
    }

    // line 13
    public function block_titreP($context, array $blocks = array())
    {
        echo "Profile ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " id=\"validation-form\" class=\"form-horizontal\">
  
       <fieldset>
\t<div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nom\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("nom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_prenom\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("prenom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_datenaissance\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de Naissance")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance"), 'widget');
        echo "
\t</div>
\t</div>
        
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_adresse\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Adresse")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'widget');
        echo "
\t</div>
\t</div>
               
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cin\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CIN")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin"), 'widget');
        echo "
\t</div>
\t</div>         
                
              
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cne\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cne"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CNE")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cne"), 'widget');
        echo "
\t</div>
\t</div>  
       
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_email\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Email")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
\t</div>
\t</div>  
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_telephone\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget');
        echo "
\t</div>
\t</div> 
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nationalite\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationalite"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nationalite")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationalite"), 'widget');
        echo "
\t</div>
\t</div> 
           
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_ville\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Ville")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget');
        echo "
\t</div>
\t</div> 
         
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_pays\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Pays")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays"), 'widget');
        echo "
\t</div>
\t</div>    
             
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_sexe\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Sexe")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
        echo "
\t</div>
\t</div>           
                
        </fieldset>
        <p>
            <button type=\"submit\" class=\"btn btn-large btn-primary\">Enregistrer </button>
        </p>
    </form>

";
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 111
        echo "
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/demo/validation.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidat:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 111,  228 => 110,  200 => 92,  195 => 90,  174 => 78,  161 => 71,  148 => 64,  292 => 173,  288 => 172,  280 => 170,  250 => 144,  212 => 114,  198 => 105,  175 => 84,  97 => 34,  146 => 58,  127 => 47,  110 => 39,  102 => 37,  90 => 33,  76 => 31,  59 => 27,  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 9,  242 => 158,  238 => 137,  234 => 112,  225 => 152,  221 => 151,  217 => 150,  213 => 99,  194 => 132,  192 => 131,  58 => 18,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 125,  150 => 65,  137 => 58,  118 => 48,  104 => 40,  53 => 14,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 171,  278 => 86,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 153,  224 => 71,  220 => 70,  214 => 69,  208 => 97,  177 => 65,  169 => 76,  143 => 62,  140 => 55,  132 => 56,  128 => 49,  119 => 42,  107 => 51,  71 => 23,  38 => 6,  155 => 58,  135 => 57,  126 => 45,  114 => 40,  84 => 29,  70 => 20,  67 => 21,  61 => 13,  94 => 35,  89 => 32,  85 => 31,  75 => 23,  68 => 29,  56 => 17,  87 => 20,  21 => 2,  26 => 6,  93 => 33,  88 => 6,  78 => 27,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  196 => 90,  183 => 82,  171 => 77,  166 => 81,  163 => 72,  158 => 79,  156 => 69,  151 => 77,  142 => 59,  138 => 57,  136 => 56,  121 => 49,  117 => 44,  105 => 50,  91 => 33,  62 => 28,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 27,  72 => 30,  69 => 25,  47 => 13,  40 => 8,  37 => 4,  22 => 2,  246 => 32,  157 => 56,  145 => 63,  139 => 53,  131 => 42,  123 => 50,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 32,  98 => 36,  96 => 35,  83 => 29,  74 => 14,  66 => 21,  55 => 26,  52 => 21,  50 => 10,  43 => 8,  41 => 5,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 85,  182 => 83,  176 => 79,  173 => 74,  168 => 72,  164 => 59,  162 => 80,  154 => 78,  149 => 51,  147 => 76,  144 => 53,  141 => 51,  133 => 55,  130 => 55,  125 => 44,  122 => 43,  116 => 47,  112 => 42,  109 => 42,  106 => 37,  103 => 40,  99 => 30,  95 => 35,  92 => 33,  86 => 33,  82 => 30,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 11,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
