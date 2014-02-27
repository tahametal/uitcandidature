<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_13de567d2720fb0614c5f388c5789051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 9,  180 => 103,  23 => 3,  205 => 81,  200 => 9,  194 => 97,  192 => 96,  188 => 95,  178 => 102,  174 => 101,  170 => 89,  160 => 96,  150 => 78,  161 => 81,  137 => 66,  172 => 66,  165 => 61,  153 => 55,  134 => 79,  124 => 45,  100 => 40,  63 => 31,  58 => 19,  77 => 33,  81 => 34,  53 => 11,  146 => 88,  127 => 28,  110 => 22,  102 => 17,  90 => 32,  76 => 17,  59 => 13,  263 => 156,  253 => 124,  242 => 9,  236 => 157,  234 => 156,  230 => 155,  225 => 153,  216 => 150,  212 => 96,  191 => 79,  181 => 124,  104 => 37,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 131,  252 => 80,  247 => 50,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 151,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 57,  107 => 36,  71 => 30,  38 => 6,  155 => 58,  135 => 47,  126 => 45,  114 => 43,  84 => 29,  70 => 25,  67 => 26,  61 => 12,  94 => 34,  89 => 36,  85 => 38,  75 => 27,  68 => 29,  56 => 11,  87 => 29,  21 => 2,  26 => 9,  93 => 43,  88 => 31,  78 => 26,  46 => 14,  27 => 4,  44 => 13,  31 => 3,  28 => 3,  196 => 102,  183 => 93,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 95,  151 => 74,  142 => 59,  138 => 48,  136 => 80,  121 => 44,  117 => 19,  105 => 18,  91 => 41,  62 => 20,  49 => 10,  24 => 6,  25 => 3,  19 => 1,  79 => 27,  72 => 33,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 46,  139 => 53,  131 => 73,  123 => 58,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 37,  98 => 45,  96 => 47,  83 => 28,  74 => 30,  66 => 32,  55 => 18,  52 => 10,  50 => 8,  43 => 7,  41 => 5,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 132,  189 => 71,  187 => 84,  182 => 93,  176 => 64,  173 => 74,  168 => 72,  164 => 97,  162 => 83,  154 => 77,  149 => 75,  147 => 52,  144 => 70,  141 => 75,  133 => 65,  130 => 62,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 54,  103 => 37,  99 => 40,  95 => 42,  92 => 38,  86 => 39,  82 => 28,  80 => 35,  73 => 16,  64 => 13,  60 => 19,  57 => 12,  54 => 18,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
