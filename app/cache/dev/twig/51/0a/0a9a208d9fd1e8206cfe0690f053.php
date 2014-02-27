<?php

/* mqlUITCandidatureBundle:Semestre:index.html.twig */
class __TwigTemplate_510a0a9a208d9fd1e8206cfe0690f053 extends Twig_Template
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
        echo "<h1>Semestre list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Semestre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "semestre"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestre_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semestre_new"), "html", null, true);
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Semestre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  58 => 19,  77 => 33,  81 => 34,  53 => 16,  146 => 58,  127 => 47,  110 => 39,  102 => 46,  90 => 34,  76 => 24,  59 => 20,  263 => 156,  253 => 124,  242 => 9,  236 => 157,  234 => 156,  230 => 155,  225 => 153,  216 => 150,  212 => 149,  191 => 131,  181 => 124,  104 => 37,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 131,  252 => 80,  247 => 50,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 151,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 57,  107 => 36,  71 => 30,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 55,  84 => 37,  70 => 25,  67 => 22,  61 => 21,  94 => 38,  89 => 36,  85 => 38,  75 => 27,  68 => 29,  56 => 21,  87 => 29,  21 => 2,  26 => 6,  93 => 43,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  196 => 90,  183 => 125,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 44,  117 => 44,  105 => 40,  91 => 41,  62 => 20,  49 => 17,  24 => 1,  25 => 3,  19 => 1,  79 => 27,  72 => 31,  69 => 24,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 53,  131 => 42,  123 => 48,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 37,  98 => 45,  96 => 31,  83 => 28,  74 => 26,  66 => 23,  55 => 26,  52 => 15,  50 => 18,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 132,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 75,  147 => 58,  144 => 53,  141 => 70,  133 => 65,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 50,  106 => 50,  103 => 37,  99 => 40,  95 => 42,  92 => 35,  86 => 39,  82 => 31,  80 => 29,  73 => 26,  64 => 22,  60 => 22,  57 => 18,  54 => 20,  51 => 17,  48 => 16,  45 => 16,  42 => 8,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
