<?php

/* mqlUITCandidatureBundle:Candidat:edit.html.twig */
class __TwigTemplate_1ca586f65fe4cf1bd9416be6d528b4ff extends Twig_Template
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
        echo "Modifier Profile ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo " id=\"validation-form\" class=\"form-horizontal\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        
  \t<fieldset>
\t<div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nom\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("nom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_prenom\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("prenom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_datenaissance\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de Naissance")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datenaissance"), 'widget');
        echo "
\t</div>
\t</div>
        
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_adresse\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Adresse")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse"), 'widget');
        echo "
\t</div>
\t</div>
                
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cin\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CIN")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin"), 'widget');
        echo "
\t</div>
\t</div>         
                
              
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cne\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cne"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CNE")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cne"), 'widget');
        echo "
\t</div>
\t</div>  
       
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_email\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Email")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "
\t</div>
\t</div>  
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_telephone\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone"), 'widget');
        echo "
\t</div>
\t</div> 
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nationalite\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nationalite"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nationalite")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nationalite"), 'widget');
        echo "
\t</div>
\t</div> 
           
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_ville\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Ville")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville"), 'widget');
        echo "
\t</div>
\t</div> 
         
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_pays\">";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Pays")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays"), 'widget');
        echo "
\t</div>
\t</div>    
             
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_sexe\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexe"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Sexe")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexe"), 'widget');
        echo "
\t</div>
\t</div>           
                
        </fieldset>
        
        <p>
            <br/> 
            <button type=\"submit\" class=\"btn btn-large btn-primary\">Modifier</button>
            <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat"), "html", null, true);
        echo "\" class=\"btn btn-large btn-primary\">Continue</a>
        </p>
    </form>


";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/demo/validation.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 117,  240 => 116,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 84,  150 => 65,  137 => 58,  118 => 48,  104 => 40,  53 => 14,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 56,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 42,  84 => 29,  70 => 20,  67 => 21,  61 => 13,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 16,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 3,  196 => 90,  183 => 82,  171 => 77,  166 => 71,  163 => 72,  158 => 70,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 33,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 25,  47 => 13,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 63,  139 => 50,  131 => 42,  123 => 50,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 35,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 84,  182 => 66,  176 => 79,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 42,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
