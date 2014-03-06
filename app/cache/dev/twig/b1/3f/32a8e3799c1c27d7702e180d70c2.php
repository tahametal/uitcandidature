<?php

/* mqlUITCandidatureBundle:Candidat:edit.html.twig */
class __TwigTemplate_b13f32a8e3799c1c27d7702e180d70c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
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
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<br>
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo " id=\"validation-form\" class=\"form-horizontal\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        
  \t<fieldset>
\t<div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nom\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("nom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_prenom\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "prenom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("prenom")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "prenom"), 'widget');
        echo "
\t</div>
\t</div>
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_datenaissance\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "datenaissance"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de Naissance")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "datenaissance"), 'widget');
        echo "
\t</div>
\t</div>
        
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_adresse\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "adresse"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Adresse")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "adresse"), 'widget');
        echo "
\t</div>
\t</div>
                
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cin\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cin"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CIN")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cin"), 'widget');
        echo "
\t</div>
\t</div>         
                
              
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_cne\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cne"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("CNE")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cne"), 'widget');
        echo "
\t</div>
\t</div>  
       
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_email\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Email")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
\t</div>
\t</div>  
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_telephone\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telephone"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telephone"), 'widget');
        echo "
\t</div>
\t</div> 
                
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_nationalite\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nationalite"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nationalite")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nationalite"), 'widget');
        echo "
\t</div>
\t</div> 
           
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_ville\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ville"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Ville")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ville"), 'widget');
        echo "
\t</div>
\t</div> 
         
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_pays\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "pays"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Pays")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "pays"), 'widget');
        echo "
\t</div>
\t</div>    
             
        <div class=\"control-group\">
\t<label class=\"control-label\" for=\"mqluit_candidaturebundle_candidattype_sexe\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "sexe"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Sexe")) ? array() : array("label" => $_label_)));
        echo "</label>
\t<div class=\"controls\">
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "sexe"), 'widget');
        echo "
\t</div>
\t</div>           
                
        </fieldset>
";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'rest');
        echo "
           
   <div class=\"modal-footer\">
         <button type=\"submit\" class=\"btn btn-small btn-success\" style=\"float: right; margin-right: 50px;\">Modifier</button>
    </div>
            
    </form>


";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/demo/validation.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidat:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 116,  239 => 115,  236 => 114,  222 => 104,  214 => 99,  209 => 97,  201 => 92,  188 => 85,  183 => 83,  175 => 78,  170 => 76,  157 => 69,  149 => 64,  144 => 62,  136 => 57,  131 => 55,  122 => 49,  117 => 47,  108 => 41,  103 => 39,  95 => 34,  90 => 32,  83 => 28,  78 => 26,  71 => 22,  56 => 15,  50 => 13,  37 => 2,  29 => 114,  27 => 13,  24 => 12,  22 => 1,  207 => 121,  204 => 120,  198 => 117,  196 => 90,  172 => 95,  162 => 71,  155 => 84,  148 => 80,  141 => 76,  134 => 72,  127 => 68,  120 => 64,  113 => 60,  106 => 56,  99 => 52,  92 => 48,  85 => 44,  69 => 30,  66 => 20,  60 => 20,  53 => 14,  49 => 16,  34 => 1,  31 => 2,);
    }
}
