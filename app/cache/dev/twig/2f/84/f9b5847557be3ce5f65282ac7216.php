<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2f84f9b5847557be3ce5f65282ac7216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  244 => 97,  223 => 86,  206 => 77,  204 => 76,  159 => 53,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  303 => 128,  300 => 105,  297 => 104,  291 => 102,  265 => 107,  255 => 103,  190 => 68,  113 => 48,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  329 => 154,  327 => 140,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  263 => 95,  249 => 100,  232 => 93,  218 => 83,  179 => 68,  191 => 67,  186 => 9,  180 => 63,  23 => 3,  205 => 78,  188 => 95,  178 => 66,  170 => 89,  160 => 96,  172 => 64,  165 => 60,  134 => 54,  63 => 18,  260 => 148,  256 => 109,  251 => 101,  185 => 66,  153 => 55,  124 => 45,  100 => 24,  77 => 33,  81 => 34,  231 => 89,  228 => 88,  200 => 9,  195 => 90,  174 => 59,  161 => 63,  148 => 46,  292 => 121,  288 => 101,  280 => 170,  250 => 144,  212 => 79,  198 => 105,  175 => 65,  97 => 23,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 32,  76 => 17,  59 => 13,  274 => 97,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 96,  238 => 137,  234 => 112,  225 => 87,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 14,  243 => 92,  240 => 157,  237 => 93,  227 => 109,  215 => 100,  210 => 81,  202 => 77,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 32,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 147,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 131,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 43,  140 => 42,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 30,  38 => 7,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 29,  70 => 15,  67 => 14,  61 => 12,  94 => 34,  89 => 29,  85 => 24,  75 => 19,  68 => 29,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 31,  88 => 20,  78 => 26,  46 => 13,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  196 => 102,  183 => 93,  171 => 58,  166 => 56,  163 => 72,  158 => 62,  156 => 62,  151 => 47,  142 => 51,  138 => 50,  136 => 48,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 20,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 35,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 9,  52 => 12,  50 => 8,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 69,  189 => 73,  187 => 67,  182 => 93,  176 => 79,  173 => 74,  168 => 57,  164 => 97,  162 => 54,  154 => 60,  149 => 75,  147 => 53,  144 => 70,  141 => 75,  133 => 65,  130 => 39,  125 => 42,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 45,  103 => 25,  99 => 40,  95 => 42,  92 => 21,  86 => 28,  82 => 19,  80 => 27,  73 => 16,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 11,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
