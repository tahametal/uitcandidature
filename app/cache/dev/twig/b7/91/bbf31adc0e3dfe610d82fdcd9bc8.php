<?php

/* mqlUITCandidatureBundle:Candidat:new.html.twig */
class __TwigTemplate_b791bbf31adc0e3dfe610d82fdcd9bc8 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " id=\"validation-form\" class=\"form-horizontal\">
  
       <fieldset>
\t<div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nom\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("nom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_prenom\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("prenom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_datenaissance\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "datenaissance"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de Naissance")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "datenaissance"), 'widget');
        echo "
\t</div>
\t</div>
        
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_adresse\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Adresse")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'widget');
        echo "
\t</div>
\t</div>
               
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cin\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cin"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CIN")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cin"), 'widget');
        echo "
\t</div>
\t</div>         
                
              
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cne\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cne"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CNE")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cne"), 'widget');
        echo "
\t</div>
\t</div>  
       
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_email\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Email")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "
\t</div>
\t</div>  
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_telephone\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telephone"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "telephone"), 'widget');
        echo "
\t</div>
\t</div> 
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nationalite\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nationalite"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nationalite")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nationalite"), 'widget');
        echo "
\t</div>
\t</div> 
           
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_ville\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Ville")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
        echo "
\t</div>
\t</div> 
         
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_pays\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Pays")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pays"), 'widget');
        echo "
\t</div>
\t</div>    
             
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_sexe\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Sexe")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget');
        echo "
\t</div>
\t</div>           
                
        </fieldset>
        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <p>
            <button type=\"submit\" class=\"btn btn-large btn-primary\">Enregistrer </button>
        </p>
    </form>

";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
        echo "
<script src=\"";
        // line 113
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
        return array (  238 => 113,  235 => 112,  232 => 111,  221 => 104,  213 => 99,  208 => 97,  200 => 92,  195 => 90,  187 => 85,  182 => 83,  174 => 78,  169 => 76,  161 => 71,  156 => 69,  148 => 64,  143 => 62,  135 => 57,  130 => 55,  121 => 49,  116 => 47,  108 => 42,  103 => 40,  95 => 35,  90 => 33,  83 => 29,  78 => 27,  71 => 23,  66 => 21,  56 => 17,  53 => 14,  47 => 13,  34 => 3,  31 => 2,);
    }
}
