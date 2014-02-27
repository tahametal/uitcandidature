<?php

/* mqlUITCandidatureBundle:Candidat:new.html.twig */
class __TwigTemplate_cfb39d44482aa4b2b02af195b52e0a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titreP' => array($this, 'block_titreP'),
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

    // line 2
    public function block_titreP($context, array $blocks = array())
    {
        echo "Profile ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn btn-large btn-primary\">Enregistrer </button>
        </p>
    </form>

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
        return array (  146 => 58,  127 => 47,  110 => 39,  102 => 37,  90 => 34,  76 => 31,  59 => 27,  263 => 156,  253 => 124,  242 => 9,  236 => 157,  234 => 156,  230 => 155,  225 => 153,  216 => 150,  212 => 149,  191 => 131,  181 => 124,  104 => 50,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 131,  252 => 80,  247 => 50,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 151,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 40,  84 => 28,  70 => 22,  67 => 15,  61 => 19,  94 => 35,  89 => 20,  85 => 25,  75 => 23,  68 => 29,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 13,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 125,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 44,  117 => 44,  105 => 40,  91 => 31,  62 => 28,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 30,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 53,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 36,  96 => 31,  83 => 25,  74 => 23,  66 => 21,  55 => 26,  52 => 16,  50 => 10,  43 => 8,  41 => 11,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 132,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 38,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 33,  82 => 32,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 18,  54 => 10,  51 => 14,  48 => 13,  45 => 7,  42 => 7,  39 => 9,  36 => 10,  33 => 4,  30 => 7,);
    }
}
