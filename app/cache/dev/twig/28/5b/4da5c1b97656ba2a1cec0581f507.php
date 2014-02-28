<?php

/* mqlUITCandidatureBundle:Candidat:show.html.twig */
class __TwigTemplate_285b4da5c1b97656ba2a1cec0581f507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Candidat</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissance</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datenaissance"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cne</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cne"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationalite</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nationalite"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexe"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
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
        return array (  81 => 34,  231 => 111,  228 => 110,  200 => 92,  195 => 90,  174 => 78,  161 => 71,  148 => 64,  292 => 173,  288 => 172,  280 => 170,  250 => 144,  212 => 114,  198 => 105,  175 => 84,  97 => 34,  146 => 58,  127 => 47,  110 => 39,  102 => 46,  90 => 33,  76 => 31,  59 => 27,  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 9,  242 => 158,  238 => 137,  234 => 112,  225 => 152,  221 => 151,  217 => 150,  213 => 99,  194 => 132,  192 => 131,  58 => 18,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 125,  150 => 65,  137 => 58,  118 => 48,  104 => 40,  53 => 18,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 171,  278 => 86,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 153,  224 => 71,  220 => 70,  214 => 69,  208 => 97,  177 => 65,  169 => 76,  143 => 62,  140 => 55,  132 => 56,  128 => 49,  119 => 42,  107 => 51,  71 => 23,  38 => 6,  155 => 58,  135 => 57,  126 => 45,  114 => 40,  84 => 29,  70 => 20,  67 => 26,  61 => 13,  94 => 35,  89 => 32,  85 => 31,  75 => 23,  68 => 29,  56 => 17,  87 => 20,  21 => 2,  26 => 6,  93 => 33,  88 => 38,  78 => 27,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 77,  166 => 81,  163 => 72,  158 => 79,  156 => 69,  151 => 77,  142 => 59,  138 => 57,  136 => 56,  121 => 49,  117 => 44,  105 => 50,  91 => 33,  62 => 28,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 27,  72 => 30,  69 => 25,  47 => 13,  40 => 8,  37 => 4,  22 => 2,  246 => 32,  157 => 56,  145 => 63,  139 => 53,  131 => 42,  123 => 58,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 32,  98 => 36,  96 => 35,  83 => 29,  74 => 30,  66 => 21,  55 => 26,  52 => 21,  50 => 10,  43 => 8,  41 => 5,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 85,  182 => 83,  176 => 79,  173 => 74,  168 => 72,  164 => 59,  162 => 80,  154 => 77,  149 => 75,  147 => 76,  144 => 53,  141 => 70,  133 => 65,  130 => 55,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 37,  103 => 40,  99 => 30,  95 => 42,  92 => 33,  86 => 33,  82 => 30,  80 => 19,  73 => 19,  64 => 17,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 11,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
