<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_5d811e8c8101cd2926624e0355696834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"search import clearfix\" id=\"adminBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADo0lEQVR42u2XS0hUURjHD5njA1oYbXQ2MqCmIu2iEEISUREEEURxFB8ovt+DEsLgaxBRQQeUxnQ0ZRYSQasgiDaFqxAy2jUtCjdCoEjFwHj6/+F+dbvN6PQAN37wm++c7/z/35x7uPcOo7TW58rFBs59A7GGQ51XBAIBlZmZuYOhE1zm/A/4PxvY3NwMO53OYEJCgp+nccqXXQc94D54boAxalyLNayNtra2NJmbmzvOyMj4cRqoKYK4AsZzc3Nft7e3f5qZmTnCpk8Ix6xxjRpDGzmkUU5Ozuu2trZP09PTR+vr6ycbGxtaWFtbC9fU1AQTExPdmNNzLSUlZXt4ePhANNGghlp6lDWkkcvlOsCX6LNYXV0N8BTS0tK2cDJfWIsFaumhV0lIIxzXl5WVFX0aPp8vhDwJbMnJyc6JiYkji8YP7oI4YowfmDX00KskOHG73UfLy8vahB/cBXFSW1pa2kPOA7RdqqysfGtaCyOXA2VGgmvUiJ5e9lD8qKioeOv1ejVZXFwMI5eLEWOFWgh5Etg4J0lJSTdwYiHxLSwseFi3Yg5qRE8veyh+TE1Nhebn5zWZnZ31mE2okTxmM6WlpS7xeDyeQ2Qb61bMQQ214mMPVVxc7MJuNBkfHz9EtplNmEcET4JPfL29va+i6azR19f3UnzV1dUrqqqqyocT0KSzs/OV1YB6ROrr67fF19TU9DSazhp1dXXPxdfS0vJQNTY2+sfGxjSpra19YTWgHhHs/pn40OhRNJ0lLuON+kF8ra2tY9yAe3R0VBMc6wfr84n6b1BDrfiam5snImgczObAq7ylv7//q/hGRkbuqMHBwTt4Q2nS3d39jSKzCfXfoKarq+ur+NhD1owLcNrt9h3OTXGrqKgoKJ6hoaFD5DhuIA43xiGyJoWFhUGKxYXaL3CNGtH39PR8Zg9jzREfH+8vKCgI4krDRu0GcGVnZ78ZGBg4ER/Wf+4OVzOMRhrwFE6ysrLe0EQzaopII65RI3p478lVp6am7uDmPJY11F44HI7dsrKyfc5Nnj1km5Lo6Oiw4cdnD1kLJSUl++np6btsQjhmzayB5x29uGp3fn5+EPMw66eBX8b3yHZlDdyRdtzN75F1LED7kR6gMA7E6HsMrqpogbv5KngM9Bk8MbTKwAYmQSiCdhd4wW0VazQ0NNwEXrALNDHGS+A2UFHIA3smj/rX4JvrT7GBSRDi/J8Db8e/JY/5jLj4Y3KxgfPfwHc53iL+IQDMOgAAAABJRU5ErkJggg==\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 88,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  244 => 97,  223 => 86,  206 => 77,  204 => 95,  159 => 53,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  303 => 128,  300 => 105,  297 => 104,  291 => 102,  265 => 107,  255 => 103,  190 => 68,  113 => 48,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  329 => 154,  327 => 140,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  263 => 95,  249 => 138,  232 => 93,  218 => 83,  179 => 68,  191 => 67,  186 => 9,  180 => 63,  23 => 3,  205 => 78,  188 => 95,  178 => 87,  170 => 85,  160 => 81,  172 => 64,  165 => 60,  134 => 54,  63 => 18,  260 => 148,  256 => 109,  251 => 101,  185 => 66,  153 => 77,  124 => 45,  100 => 24,  77 => 33,  81 => 34,  231 => 89,  228 => 88,  200 => 9,  195 => 90,  174 => 59,  161 => 63,  148 => 46,  292 => 121,  288 => 101,  280 => 170,  250 => 144,  212 => 79,  198 => 105,  175 => 86,  97 => 23,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 42,  76 => 34,  59 => 13,  274 => 97,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 96,  238 => 137,  234 => 112,  225 => 87,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 25,  243 => 92,  240 => 157,  237 => 93,  227 => 109,  215 => 100,  210 => 81,  202 => 77,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 32,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 147,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 131,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 43,  140 => 42,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 30,  38 => 18,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 40,  70 => 15,  67 => 14,  61 => 12,  94 => 34,  89 => 29,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 9,  93 => 31,  88 => 20,  78 => 26,  46 => 13,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  196 => 102,  183 => 93,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 51,  138 => 50,  136 => 71,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 27,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 92,  189 => 73,  187 => 89,  182 => 93,  176 => 79,  173 => 74,  168 => 84,  164 => 97,  162 => 54,  154 => 60,  149 => 75,  147 => 75,  144 => 70,  141 => 73,  133 => 65,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 25,  99 => 40,  95 => 42,  92 => 43,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 16,  45 => 9,  42 => 13,  39 => 6,  36 => 10,  33 => 9,  30 => 5,);
    }
}
