<?php

/* mqlUITCandidatureBundle:Userfos:new.html.twig */
class __TwigTemplate_a7477b4c87b75c3a3f6bab5deaa77025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Nouvelle candidature</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userfos_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            
            <button class=\"button btn btn-primary btn-large\" type=\"submit\">Create</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    
</ul>
";
    }

    public function getTemplateName()
    {
        return "mqlUITCandidatureBundle:Userfos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 66,  165 => 61,  153 => 55,  134 => 47,  124 => 45,  100 => 40,  63 => 31,  58 => 19,  77 => 33,  81 => 34,  53 => 16,  146 => 58,  127 => 47,  110 => 42,  102 => 46,  90 => 34,  76 => 34,  59 => 30,  263 => 156,  253 => 124,  242 => 9,  236 => 157,  234 => 156,  230 => 155,  225 => 153,  216 => 150,  212 => 149,  191 => 131,  181 => 124,  104 => 37,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 131,  252 => 80,  247 => 50,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 151,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 57,  107 => 36,  71 => 30,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 43,  84 => 36,  70 => 25,  67 => 22,  61 => 21,  94 => 38,  89 => 36,  85 => 38,  75 => 27,  68 => 29,  56 => 21,  87 => 29,  21 => 2,  26 => 6,  93 => 43,  88 => 37,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  196 => 90,  183 => 125,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  121 => 44,  117 => 44,  105 => 40,  91 => 41,  62 => 20,  49 => 17,  24 => 1,  25 => 3,  19 => 1,  79 => 27,  72 => 33,  69 => 24,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 53,  131 => 42,  123 => 48,  120 => 44,  115 => 43,  111 => 37,  108 => 42,  101 => 37,  98 => 45,  96 => 39,  83 => 28,  74 => 26,  66 => 32,  55 => 26,  52 => 15,  50 => 18,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 132,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 72,  164 => 59,  162 => 57,  154 => 77,  149 => 75,  147 => 52,  144 => 53,  141 => 70,  133 => 65,  130 => 46,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 50,  106 => 41,  103 => 37,  99 => 40,  95 => 42,  92 => 38,  86 => 39,  82 => 31,  80 => 35,  73 => 26,  64 => 26,  60 => 22,  57 => 18,  54 => 20,  51 => 17,  48 => 16,  45 => 16,  42 => 8,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
