<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_da4319c78ed0dbbe92c893c4965704c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style type=\"text/css\">
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  351 => 164,  347 => 163,  344 => 162,  339 => 161,  329 => 154,  327 => 153,  320 => 149,  313 => 145,  306 => 141,  299 => 137,  263 => 113,  249 => 105,  232 => 93,  218 => 85,  179 => 68,  191 => 67,  186 => 9,  180 => 103,  23 => 3,  205 => 78,  188 => 95,  178 => 66,  170 => 89,  160 => 96,  172 => 64,  165 => 60,  134 => 54,  63 => 18,  260 => 148,  256 => 109,  251 => 146,  185 => 84,  153 => 55,  124 => 45,  100 => 39,  77 => 33,  81 => 34,  231 => 111,  228 => 110,  200 => 9,  195 => 90,  174 => 101,  161 => 63,  148 => 64,  292 => 133,  288 => 172,  280 => 170,  250 => 144,  212 => 96,  198 => 105,  175 => 65,  97 => 41,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 32,  76 => 25,  59 => 13,  274 => 157,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 101,  238 => 137,  234 => 112,  225 => 152,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 17,  243 => 117,  240 => 157,  237 => 115,  227 => 109,  215 => 100,  210 => 81,  202 => 93,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 36,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 105,  337 => 160,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 129,  283 => 171,  278 => 125,  268 => 85,  264 => 131,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 92,  224 => 71,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 52,  140 => 58,  132 => 48,  128 => 49,  119 => 57,  107 => 51,  71 => 30,  38 => 6,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 29,  70 => 25,  67 => 20,  61 => 17,  94 => 34,  89 => 29,  85 => 32,  75 => 23,  68 => 29,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 31,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 13,  31 => 3,  28 => 3,  196 => 102,  183 => 93,  171 => 75,  166 => 81,  163 => 72,  158 => 62,  156 => 95,  151 => 59,  142 => 51,  138 => 50,  136 => 80,  121 => 50,  117 => 43,  105 => 18,  91 => 33,  62 => 20,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 27,  72 => 22,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 53,  139 => 63,  131 => 61,  123 => 45,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 13,  52 => 12,  50 => 8,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 73,  187 => 85,  182 => 93,  176 => 79,  173 => 74,  168 => 72,  164 => 97,  162 => 83,  154 => 60,  149 => 75,  147 => 53,  144 => 70,  141 => 75,  133 => 65,  130 => 62,  125 => 51,  122 => 47,  116 => 54,  112 => 42,  109 => 50,  106 => 45,  103 => 40,  99 => 40,  95 => 42,  92 => 38,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
