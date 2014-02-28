<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_df87fc71c6febe46d825c72896f2f0f2 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <style type=\"text/css\">
        ";
            // line 4
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 5
            echo "    </style>
    <div id=\"sfMiniToolbar-";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\"/>
        </a>
    </div>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 322,  346 => 321,  343 => 320,  65 => 24,  20 => 1,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 88,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  244 => 97,  223 => 86,  206 => 77,  204 => 95,  159 => 53,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  303 => 128,  300 => 105,  297 => 277,  291 => 102,  265 => 107,  255 => 103,  190 => 68,  113 => 48,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  329 => 154,  327 => 140,  320 => 149,  313 => 145,  306 => 107,  299 => 278,  263 => 95,  249 => 138,  232 => 93,  218 => 83,  179 => 68,  191 => 67,  186 => 9,  180 => 63,  23 => 3,  205 => 78,  188 => 95,  178 => 87,  170 => 85,  160 => 81,  172 => 64,  165 => 60,  134 => 54,  63 => 21,  260 => 148,  256 => 109,  251 => 101,  185 => 66,  153 => 77,  124 => 45,  100 => 24,  77 => 28,  81 => 29,  231 => 89,  228 => 88,  200 => 9,  195 => 90,  174 => 59,  161 => 63,  148 => 46,  292 => 121,  288 => 101,  280 => 170,  250 => 144,  212 => 79,  198 => 105,  175 => 86,  97 => 23,  146 => 88,  127 => 60,  110 => 22,  102 => 43,  90 => 42,  76 => 27,  59 => 13,  274 => 97,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 96,  238 => 137,  234 => 112,  225 => 87,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 18,  243 => 92,  240 => 157,  237 => 93,  227 => 109,  215 => 100,  210 => 81,  202 => 77,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 32,  53 => 15,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 332,  355 => 106,  341 => 147,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 131,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 43,  140 => 42,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 23,  38 => 12,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 35,  70 => 26,  67 => 22,  61 => 12,  94 => 38,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  87 => 32,  21 => 2,  26 => 6,  93 => 31,  88 => 20,  78 => 18,  46 => 12,  27 => 4,  44 => 11,  31 => 8,  28 => 3,  196 => 102,  183 => 93,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 51,  138 => 50,  136 => 71,  121 => 50,  117 => 39,  105 => 18,  91 => 37,  62 => 27,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 34,  96 => 39,  83 => 31,  74 => 27,  66 => 19,  55 => 15,  52 => 12,  50 => 18,  43 => 11,  41 => 19,  35 => 9,  32 => 6,  29 => 5,  209 => 78,  203 => 78,  199 => 73,  193 => 92,  189 => 73,  187 => 89,  182 => 93,  176 => 79,  173 => 74,  168 => 84,  164 => 97,  162 => 54,  154 => 60,  149 => 75,  147 => 75,  144 => 70,  141 => 73,  133 => 65,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 47,  106 => 51,  103 => 25,  99 => 40,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 27,  73 => 27,  64 => 21,  60 => 16,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
