<?php

/* mqlUITCandidatureBundle:Candidat:inscription2.html.twig */
class __TwigTemplate_fcb4ddfa89ff066aadefe889521f71e8 extends Twig_Template
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
        $context["counter2"] = 0;
        // line 10
        echo "   <div class=\"span11\">

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
                                            <th>Modifer</th>
                                            <th>Supprimer</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "experiences"));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 33
            echo "                                            <tr>
                                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exp"), "intitule"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "exp"), "datedebut"), "Y-m-d "), "html", null, true);
            echo "</td>
                                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "exp"), "datefin"), "Y-m-d"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "exp"), "type"), "type"), "html", null, true);
            echo "</td>
                                                <td><a  data-toggle=\"modal\" class=\"open-exp\" href=\"#modal-exp2\"
                                                        data-id=\"";
            // line 39
            echo twig_escape_filter($this->env, (((((((((($this->getAttribute($this->getContext($context, "exp"), "id") . ";") . $this->getAttribute($this->getContext($context, "exp"), "intitule")) . ";") . twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "exp"), "datedebut"), "Y-m-d ")) . ";") . twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "exp"), "datefin"), "Y-m-d ")) . ";") . $this->getAttribute($this->getContext($context, "exp"), "description")) . ";") . $this->getAttribute($this->getAttribute($this->getContext($context, "exp"), "type"), "type")), "html", null, true);
            echo "\">Détails</a></td>
                                                        <td><a class=\"btn btn-small\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("experience_supprimer", array("id" => $this->getAttribute($this->getContext($context, "exp"), "id"))), "html", null, true);
            echo "\"> <i class=\"btn-icon-only icon-remove\"></i></a></td>
                                            </tr>   
                                            </tr>           
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
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
                                            <th>Modifer</th>
                                             <th>Supprimer</th>
                                          
                                        </tr>
                                        </thead>
                                        <tbody>
                                             ";
        // line 92
        $context["counter1"] = 0;
        // line 93
        echo "                                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "diplomes"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["dip"]) {
            // line 94
            echo "                                            <tr>
                                                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dip"), "intitule"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "dip"), "dateobtention"), "Y-m-d "), "html", null, true);
            echo "</td>
                                                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dip"), "etablissement"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "dip"), "diplometype"), "type"), "html", null, true);
            echo "</td>
                                                <td><a 
                                                    ";
            // line 100
            $context["counter1"] = ($this->getAttribute($this->getContext($context, "loop"), "index") + 1);
            echo "    
                                                        data-toggle=\"modal\" class=\"open-dip\" href=\"#modal-dip2\"
                                                        data-id=\"";
            // line 102
            echo twig_escape_filter($this->env, (((((((((((((((($this->getAttribute($this->getContext($context, "dip"), "id") . ";") . $this->getAttribute($this->getContext($context, "dip"), "intitule")) . ";") . twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "dip"), "dateinscription"), "Y-m-d ")) . ";") . twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "dip"), "dateobtention"), "Y-m-d ")) . ";") . $this->getAttribute($this->getContext($context, "dip"), "note")) . ";") . $this->getAttribute($this->getContext($context, "dip"), "mention")) . ";") . $this->getAttribute($this->getContext($context, "dip"), "etablissement")) . ";") . $this->getAttribute($this->getContext($context, "dip"), "ville")) . ";") . $this->getAttribute($this->getAttribute($this->getContext($context, "dip"), "diplometype"), "type")), "html", null, true);
            echo "\">Détails</a></td>
                                                        <td><a class=\"btn btn-small\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diplome_supprimer", array("id" => $this->getAttribute($this->getContext($context, "dip"), "id"))), "html", null, true);
            echo "\"> <i class=\"btn-icon-only icon-remove\"></i></a></td>
                                            </tr> 
                                           
                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dip'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 107
        echo "                                           
                                            

                                        </tbody>
                                    </table>
                                          ";
        // line 112
        if (($this->getContext($context, "counter1") < 3)) {
            // line 113
            echo "\t\t\t\t<a data-toggle=\"modal\" href=\"#modal-dip\" class=\"btn btn-small btn-success\" href=\"javascript:;\" style=\"float: right;\"> Ajouter une Formation  </a>
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t
                                </div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t\t
</div>


";
        // line 124
        if (($this->getContext($context, "counter1") > 0)) {
            // line 125
            echo "
<div class=\"span11\">

      \t\t<div class=\"widget stacked\">
\t\t\t\t\t
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<i class=\"icon-check\"></i>
\t\t\t\t\tNote Semestre
\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t
\t\t\t\t<div class=\"widget-content\">
                                     <table class=\"table table-bordered table-striped table-highlight\">
                                        <thead>
                                        <tr>
                                            <th>Semestre</th>
                                            <th>Note</th>
                                            <th>Rattrapage</th>
                                            <th>Détails</th>
                                            <th>Supprimer</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                             
                                               
                                            ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notes"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 151
                echo "                                            <tr>
                                                
                                                <td>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "note"), "semestre"), "semestre"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "note"), "note"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "note"), "hasrattrapage"), "html", null, true);
                echo "</td>
                                                
                                                <td><a  data-toggle=\"modal\" class=\"open-exp\" href=\"#modal-exp2\"
                                                        data-id=\"";
                // line 158
                echo twig_escape_filter($this->env, (((((($this->getAttribute($this->getContext($context, "note"), "id") . ";") . $this->getAttribute($this->getAttribute($this->getContext($context, "note"), "semestre"), "semestre")) . ";") . $this->getAttribute($this->getContext($context, "note"), "note")) . ";") . $this->getAttribute($this->getContext($context, "note"), "hasrattrapage")), "html", null, true);
                echo "\">Détails</a></td>
                                                        
                                                        <td>";
                // line 160
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == twig_length_filter($this->env, $this->getContext($context, "notes")))) {
                    echo "<a class=\"btn btn-small\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailsemestre_supprimer", array("id" => $this->getAttribute($this->getContext($context, "note"), "id"))), "html", null, true);
                    echo "\"> <i class=\"btn-icon-only icon-remove\"></i></a>";
                }
                echo "</td>
                                            </tr>   
                                            </tr>  
                                            ";
                // line 163
                $context["counter2"] = $this->getAttribute($this->getContext($context, "loop"), "index");
                // line 164
                echo "                                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 165
            echo "
                                           
                                            

                                        </tbody>
                                    </table>
                                   ";
            // line 171
            if (($this->getContext($context, "counter2") < 6)) {
                // line 172
                echo "\t\t\t\t<a data-toggle=\"modal\" href=\"#modal-note\" class=\"btn btn-small btn-success\" href=\"javascript:;\" style=\"float: right;\">
                                Ajouter une Note Semetre</a>
\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t
\t\t\t\t\t
                                </div> <!-- /widget-content -->
\t\t\t\t\t
\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t\t
</div>
";
        }
        // line 183
        echo "    

<div id=\"modal-exp\" class=\"modal hide fade\" tabindex=\"-1\">
      <form action=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("experience_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formexp"), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une experience</h3>
    </div>
    <div class=\"modal-body\">
      
        
        <p>
          ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formexp"), 'widget');
        echo "
        </p>
    </div>
        
        
    <div class=\"modal-footer\">
         
        <table><tr><td ><button class=\"btn btn-success\"  type=\"submit\">Ajouter Expérience</button> </td>
               </tr></table>
     </div>
       </form> 
</div>




<div id=\"modal-dip\" class=\"modal hide fade\" tabindex=\"-1\">
  <form action=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("diplome_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formdip"), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une Formation</h3>
    </div>
    <div class=\"modal-body\">
      
        ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formdip"), 'widget');
        echo "
        <p>
          
        </p>
    </div>
     
    <div class=\"modal-footer\">
         
        <table><tr><td><button class=\"btn btn-success\" type=\"submit\">Ajouter Diplome</button></td></tr></table> 
    </div>
   </form>
</div>
<div id=\"modal-note\" class=\"modal hide fade\" tabindex=\"-1\">
      <form action=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailsemestre_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formnote"), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Ajouter une note semestre</h3>
    </div>
    <div class=\"modal-body\">
      
        
        <p>
          ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formnote"), 'widget');
        echo "
        </p>
    </div>
        
        
    <div class=\"modal-footer\">
         
        <table><tr><td ><button class=\"btn btn-success\"  type=\"submit\">Ajouter une note</button> </td>
               </tr></table>
     </div>
       </form> 
</div>

<div id=\"modal-dip2\" class=\"modal hide fade\" tabindex=\"-1\">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Détails Diplome</h3>
    </div>
    <div class=\"modal-body\">
  <center>

     <table class=\"modal-form\">
        
        <tbody>
                <th >Intitulé:</th>
                <td id=\"dip_int\"></td>
            </tr>
            <tr>
                <th>Date Inscription:</th>
                <td id=\"dip_din\"></td>
            </tr>
            <tr>
                <th>Date Obtention:</th>
                <td id=\"dip_dob\"></td>
            </tr>
            <tr>
                <th>Note:</th>
                <td id=\"dip_note\"></td>
            </tr>
            <tr>
                <th>Mention:</th>
                <td id=\"dip_men\"></td>
            </tr>
            <tr>
                <th>Etablissement:</th>
                <td id=\"dip_eta\"></td>
            </tr>
            
            <tr>
                <th>Ville :</th>
                <td id=\"dip_ville\"></td>
            </tr>
            <tr>
                <th>Type Diplome :</th>
                <td id=\"dip_type\"></td>
            </tr>
            
            
            
       
        </tbody>
    </table>
   </center>
    </div>
</div>


<div id=\"modal-exp2\" class=\"modal hide fade\" tabindex=\"-1\">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\">Détails Experience</h3>
    </div>
    <div class=\"modal-body\">

     <table class=\"modal-form\">
        
        <tbody>
                <th >Intitulé:</th>
                <td id=\"exp_int\"></td>
            </tr>
            <tr>
                <th>Date Début:</th>
                <td id=\"exp_dd\"></td>
            </tr>
            <tr>
                <th>Date Fin:</th>
                <td id=\"exp_df\"></td>
            </tr>
            <tr>
                <th>Description:</th>
                <td id=\"exp_des\"></td>
            </tr>
            <tr>
                <th>Type:</th>
                <td id=\"exp_typ\"></td>
            </tr>
            
            
            
            
       
        </tbody>
    </table>
   </center>
    </div>
    <div class=\"modal-footer\">
         
        <table><tr><td><a id=\"btn_modif_exp\" class=\"btn btn-success\" type=\"submit\">Modifier les données</a></td></tr></table> 
    </div>

</div>
        

  <p>
            <br/> 
           <a href=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_show", array("id" => $this->getContext($context, "candidat_id"))), "html", null, true);
        echo "\" class=\"btn btn-small btn-warning\" style=\"float: left;\" ><<< Modifier les données personnelle</a>
        
 ";
        // line 358
        if (($this->getContext($context, "counter2") == 6)) {
            // line 359
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_ins3"), "html", null, true);
            echo "\" class=\"btn btn-small btn-warning\" style=\"float: right;\">Candidature Pour des Master >>> </a>
           ";
        } elseif (($this->getContext($context, "counter2") == 4)) {
            // line 361
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidature_ins3"), "html", null, true);
            echo "\" class=\"btn btn-small btn-warning\" style=\"float: right;\">Candidature pour Licence >>> </a>
           ";
        }
        // line 363
        echo "  </p>


    
";
    }

    // line 368
    public function block_javascripts($context, array $blocks = array())
    {
        // line 369
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-image-gallery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/load-image.min.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js\"></script>
       
         <script>
            //\$(\"form input.date\").datepicker();
            \$(\"form input.date\").datepicker({ dateFormat: 'yy-mm-dd' });
            
        </script>
  <script type=\"text/javascript\">
       \$(document).on(\"click\", \".open-dip\", function (e) {
           e.preventDefault();
     var myBookId = \$(this).data('id');
   //  \$(\".modal-body #bookId\").val( myBookId );
     
     var myArray = myBookId.toString().split(';');
     
     
     
     //traitement
   //  \$('#img_etd').attr('style','float: left;border-radius:5px;');
     //\$('#img_etd').attr('src','/TrombinoEtudiant/web/image/' + myArray[6]);
     //\$('#prenom_etd').append(myArray[2]);
     \$('#dip_int').removeData();
     \$('#dip_din').removeData();
     \$('#dip_dop').removeData();
     \$('#dip_note').removeData();
     \$('#dip_men').removeData();
     \$('#dip_eta').removeData();
     \$('#dip_ville').removeData();
     \$('#dip_type').removeData();
      
     \$('#dip_int').text(myArray[1]);
     \$('#dip_din').text(myArray[2]);
     \$('#dip_dob').text(myArray[3]);
     \$('#dip_note').text(myArray[4]);
     \$('#dip_men').text(myArray[5]);
     \$('#dip_eta').text(myArray[6]);
     \$('#dip_ville').text(myArray[7]);
     \$('#dip_type').text(myArray[8]);
     
     
     \$('#btn_modif_dip').attr('href','../diplome/' + myArray[0] +'/edit');
      \$('#btn_modif_dip').text('modifier les infos du ' + myArray[1]);


    //  \$('#btn_modif').text('modifier les infos de ' + myArray[1] + ' ' +myArray[2]);



     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // \$('#addBookDialog').modal('show');
});

\$(document).on(\"click\", \".open-exp\", function (e) {
           e.preventDefault();
     var myBookId2 = \$(this).data('id');
   //  \$(\".modal-body #bookId\").val( myBookId );
     
     var myArray2 = myBookId2.toString().split(';');
     
     
     
     //traitement
   //  \$('#img_etd').attr('style','float: left;border-radius:5px;');
     //\$('#img_etd').attr('src','/TrombinoEtudiant/web/image/' + myArray[6]);
     //\$('#prenom_etd').append(myArray[2]);
     \$('#exp_int').removeData();
     \$('#exp_dd').removeData();
     \$('#exp_df').removeData();
     \$('#exp_des').removeData();
     \$('#exp_typ').removeData();
    
      
     \$('#exp_int').text(myArray2[1]);
     \$('#exp_dd').text(myArray2[2]);
     \$('#exp_df').text(myArray2[3]);
     \$('#exp_des').text(myArray2[4]);
     \$('#exp_typ').text(myArray2[5]);
    
     
     
     \$('#btn_modif_exp').attr('href','../experience/' + myArray2[0] +'/edit');
      \$('#btn_modif_exp').text('modifier les infos du ' + myArray2[1]);


    //  \$('#btn_modif').text('modifier les infos de ' + myArray[1] + ' ' +myArray[2]);



     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // \$('#addBookDialog').modal('show');
});
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
        return array (  619 => 371,  615 => 370,  610 => 369,  607 => 368,  599 => 363,  593 => 361,  587 => 359,  585 => 358,  580 => 356,  462 => 241,  448 => 232,  432 => 219,  420 => 212,  400 => 195,  386 => 186,  381 => 183,  371 => 175,  366 => 172,  364 => 171,  356 => 165,  342 => 164,  340 => 163,  330 => 160,  325 => 158,  319 => 155,  315 => 154,  311 => 153,  307 => 151,  290 => 150,  263 => 125,  261 => 124,  251 => 116,  246 => 113,  244 => 112,  237 => 107,  219 => 103,  215 => 102,  210 => 100,  205 => 98,  201 => 97,  197 => 96,  193 => 95,  190 => 94,  172 => 93,  170 => 92,  120 => 44,  110 => 40,  106 => 39,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  86 => 33,  82 => 32,  58 => 10,  56 => 9,  53 => 8,  47 => 7,  41 => 5,  37 => 4,  34 => 3,  31 => 2,);
    }
}
