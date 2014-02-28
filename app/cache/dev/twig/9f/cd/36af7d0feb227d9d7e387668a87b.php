<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_9fcd36af7d0feb227d9d7e387668a87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 79,  186 => 9,  180 => 103,  23 => 3,  205 => 81,  188 => 95,  178 => 102,  170 => 89,  160 => 96,  172 => 66,  165 => 61,  134 => 79,  63 => 31,  260 => 148,  256 => 147,  251 => 146,  185 => 84,  153 => 55,  124 => 45,  100 => 40,  77 => 33,  81 => 34,  231 => 111,  228 => 110,  200 => 9,  195 => 90,  174 => 101,  161 => 81,  148 => 64,  292 => 173,  288 => 172,  280 => 170,  250 => 144,  212 => 96,  198 => 105,  175 => 84,  97 => 33,  146 => 88,  127 => 28,  110 => 22,  102 => 17,  90 => 32,  76 => 17,  59 => 13,  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 158,  238 => 137,  234 => 112,  225 => 152,  221 => 151,  217 => 150,  213 => 99,  194 => 97,  192 => 96,  58 => 19,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 98,  202 => 93,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 48,  104 => 37,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 171,  278 => 86,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 153,  224 => 71,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 52,  140 => 55,  132 => 56,  128 => 49,  119 => 57,  107 => 51,  71 => 30,  38 => 6,  155 => 58,  135 => 57,  126 => 45,  114 => 43,  84 => 29,  70 => 25,  67 => 26,  61 => 12,  94 => 34,  89 => 36,  85 => 38,  75 => 27,  68 => 29,  56 => 11,  87 => 29,  21 => 2,  26 => 11,  93 => 43,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 13,  31 => 3,  28 => 3,  196 => 102,  183 => 93,  171 => 75,  166 => 81,  163 => 72,  158 => 79,  156 => 95,  151 => 74,  142 => 59,  138 => 48,  136 => 80,  121 => 49,  117 => 19,  105 => 18,  91 => 41,  62 => 20,  49 => 10,  24 => 6,  25 => 3,  19 => 1,  79 => 27,  72 => 33,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 53,  139 => 53,  131 => 73,  123 => 58,  120 => 20,  115 => 43,  111 => 39,  108 => 19,  101 => 37,  98 => 45,  96 => 47,  83 => 28,  74 => 30,  66 => 32,  55 => 18,  52 => 10,  50 => 8,  43 => 7,  41 => 5,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 86,  187 => 85,  182 => 93,  176 => 79,  173 => 74,  168 => 72,  164 => 97,  162 => 83,  154 => 77,  149 => 75,  147 => 52,  144 => 70,  141 => 75,  133 => 65,  130 => 62,  125 => 44,  122 => 47,  116 => 54,  112 => 42,  109 => 50,  106 => 54,  103 => 40,  99 => 40,  95 => 42,  92 => 38,  86 => 39,  82 => 28,  80 => 35,  73 => 16,  64 => 13,  60 => 19,  57 => 12,  54 => 18,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
