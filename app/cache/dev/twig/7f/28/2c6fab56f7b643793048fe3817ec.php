<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_7f282c6fab56f7b643793048fe3817ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 116,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  265 => 96,  255 => 93,  190 => 76,  113 => 48,  351 => 164,  347 => 163,  344 => 119,  339 => 161,  329 => 154,  327 => 114,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  263 => 95,  249 => 105,  232 => 93,  218 => 85,  179 => 68,  191 => 67,  186 => 9,  180 => 103,  23 => 3,  205 => 78,  188 => 95,  178 => 66,  170 => 89,  160 => 96,  172 => 64,  165 => 60,  134 => 54,  63 => 18,  260 => 148,  256 => 109,  251 => 146,  185 => 74,  153 => 55,  124 => 45,  100 => 39,  77 => 33,  81 => 34,  231 => 83,  228 => 110,  200 => 9,  195 => 90,  174 => 65,  161 => 63,  148 => 64,  292 => 133,  288 => 101,  280 => 170,  250 => 144,  212 => 78,  198 => 105,  175 => 65,  97 => 41,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 32,  76 => 25,  59 => 13,  274 => 97,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 101,  238 => 137,  234 => 112,  225 => 152,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 14,  243 => 92,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 81,  202 => 77,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 32,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 118,  337 => 160,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 131,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 51,  140 => 58,  132 => 48,  128 => 49,  119 => 40,  107 => 51,  71 => 30,  38 => 7,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 29,  70 => 25,  67 => 20,  61 => 15,  94 => 34,  89 => 29,  85 => 24,  75 => 19,  68 => 29,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 31,  88 => 25,  78 => 26,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  196 => 102,  183 => 93,  171 => 75,  166 => 81,  163 => 72,  158 => 62,  156 => 62,  151 => 59,  142 => 51,  138 => 50,  136 => 48,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 20,  49 => 11,  24 => 6,  25 => 35,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 45,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 13,  52 => 12,  50 => 8,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 73,  187 => 75,  182 => 93,  176 => 79,  173 => 74,  168 => 72,  164 => 97,  162 => 83,  154 => 60,  149 => 75,  147 => 53,  144 => 70,  141 => 75,  133 => 65,  130 => 62,  125 => 42,  122 => 41,  116 => 54,  112 => 36,  109 => 35,  106 => 45,  103 => 40,  99 => 40,  95 => 42,  92 => 27,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
