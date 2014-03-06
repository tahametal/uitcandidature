<?php

/* mqlUITCandidatureBundle:Candidat:show.html.twig */
class __TwigTemplate_cfb592b4759fd16e428de52d5e03b656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'titreP' => array($this, 'block_titreP'),
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
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
        th{
        font-size :15px;
        font-weight :bold;
        }
          #mqluit_candidaturebundle_candidattype_datenaissance_day{
        width: 60px;
        }
         #mqluit_candidaturebundle_candidattype_datenaissance_year,#mqluit_candidaturebundle_candidattype_datenaissance_month{
        width: 80px;
        }
</style>
<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />  
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\"  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-image-gallery.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

";
    }

    // line 20
    public function block_titreP($context, array $blocks = array())
    {
        echo "Profile ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"span6\">
  \t\t\t\t
  \t\t\t\t<div class=\"widget stacked widget-table\">
\t
\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tbody>
                                          

            <tr>
                <th class=\"description\">Nom</th>
                <td class=\"value\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Prenom</th>
                <td class=\"value\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Datenaissance</th>
                <td class=\"value\">";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datenaissance"), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Adresse</th>
                <td class=\"value\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adresse"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Cin</th>
                <td class=\"value\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cin"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Cne</th>
                <td class=\"value\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cne"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Email</th>
                <td class=\"value\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Telephone</th>
                <td class=\"value\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telephone"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Nationalite</th>
                <td class=\"value\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nationalite"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Ville</th>
                <td class=\"value\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Pays</th>
                <td class=\"value\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pays"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"description\">Sexe</th>
                <td class=\"value\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sexe"), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                 <th class=\"description\" colspan=\"2\">
                 
   <a data-toggle=\"modal\" href=\"#editform\" class=\"btn btn-small btn-warning\" href=\"javascript:;\" style=\"float: left;\">
        Modifier</a>
   <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_inscription2"), "html", null, true);
        echo "\" class=\"btn btn-small btn-warning\" style=\"float: right;\">Continue >>></a>
              
                 </th>
                 
             
            </tr>
\t\t\t\t\t\t
\t\t\t\t\t</tbody></table>
\t\t\t\t\t\t
\t\t\t\t\t</div> <!-- .widget-content -->
\t\t\t\t\t
\t\t\t\t</div>
  \t\t\t\t
  \t\t\t</div> <!-- /span4 -->


<div id=\"editform\" class=\"modal hide fade\" tabindex=\"-1\" style=\"overflow-y: auto;height:600px;\">
      <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Modifier Profil</h3>
    </div>
";
        // line 116
        $this->env->loadTemplate("mqlUITCandidatureBundle:Candidat:edit.html.twig")->display($context);
        // line 117
        echo "</div>
    
";
    }

    // line 120
    public function block_test($context, array $blocks = array())
    {
        // line 121
        echo "

";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Candidat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 121,  204 => 120,  198 => 117,  196 => 116,  172 => 95,  162 => 88,  155 => 84,  148 => 80,  141 => 76,  134 => 72,  127 => 68,  120 => 64,  113 => 60,  106 => 56,  99 => 52,  92 => 48,  85 => 44,  69 => 30,  66 => 21,  60 => 20,  53 => 17,  49 => 16,  34 => 3,  31 => 2,);
    }
}
