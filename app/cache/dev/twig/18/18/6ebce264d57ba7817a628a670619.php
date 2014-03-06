<?php

/* mqlUITCandidatureBundle:Candidature:ins3.html.twig */
class __TwigTemplate_18186ebce264d57ba7817a628a670619 extends Twig_Template
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
        // line 15
        echo "<table class=\"table table-bordered table-striped table-highlight\">
                                        <thead>
            <tr>
                <th>Candidature</th>
                <th>Choix de candidatures</th>
                <th>Annulation</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context["counter"] = 0;
        // line 25
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
            // line 26
            echo "            <tr>
                <td><h5>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "filiere"), "html", null, true);
            echo " </h5></td>
                <td>Formation n° ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                   
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_deletef", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small\">
\t\t\t<i class=\"btn-icon-only icon-remove\"></i>\t\t\t\t\t\t\t\t\t\t
\t\t\t</a>
                    
                    
                </ul>
                </td>
            </tr>
            ";
            // line 40
            $context["counter"] = $this->getAttribute($this->getContext($context, "loop"), "index");
            // line 41
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
        // line 42
        echo "        </tbody>
                                    </table>
                                    
                                    ";
        // line 45
        if (($this->getContext($context, "counter") < 3)) {
            // line 46
            echo "\t\t\t\t<a data-toggle=\"modal\" href=\"#modal-candidature\" class=\"btn btn-small btn-success\" href=\"javascript:;\" style=\"float: right;\">

                                    Ajouter une Candidature

        </a>
\t\t";
        }
        // line 52
        if (($this->getContext($context, "counter") >= 1)) {
            // line 53
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_inscription2"), "html", null, true);
            echo "\" class=\"btn btn-large btn-primary\">Retour</a>
<strong>        </strong>
<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_validationshow"), "html", null, true);
            echo "\" class=\"btn btn-large btn-primary\">Continue</a>\t\t\t
";
        }
        // line 56
        echo "\t\t\t\t\t
\t\t\t\t

   <div id=\"modal-candidature\" class=\"modal hide fade\" tabindex=\"-1\">
        <form action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formcand"), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une Candidature</h3>
    </div>
    <div class=\"modal-body\">
      
        
        <p>
          ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formcand"), 'widget');
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

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
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
        return array (  251 => 133,  247 => 132,  242 => 131,  239 => 130,  176 => 69,  162 => 60,  156 => 56,  151 => 55,  145 => 53,  143 => 52,  135 => 46,  133 => 45,  128 => 42,  114 => 41,  112 => 40,  101 => 32,  94 => 28,  90 => 27,  87 => 26,  69 => 25,  67 => 24,  56 => 15,  53 => 11,  47 => 9,  41 => 6,  37 => 5,  34 => 4,  31 => 3,);
    }
}
