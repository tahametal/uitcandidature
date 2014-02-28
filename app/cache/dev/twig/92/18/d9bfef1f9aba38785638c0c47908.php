<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_9218d9bfef1f9aba38785638c0c47908 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 88,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  244 => 97,  223 => 86,  206 => 77,  204 => 95,  159 => 53,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  303 => 128,  300 => 105,  297 => 104,  291 => 102,  265 => 107,  255 => 103,  190 => 68,  113 => 48,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  329 => 154,  327 => 140,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  263 => 95,  249 => 138,  232 => 93,  218 => 83,  179 => 68,  191 => 67,  186 => 9,  180 => 63,  23 => 3,  205 => 78,  188 => 95,  178 => 87,  170 => 85,  160 => 81,  172 => 64,  165 => 60,  134 => 54,  63 => 18,  260 => 148,  256 => 109,  251 => 101,  185 => 66,  153 => 77,  124 => 45,  100 => 24,  77 => 33,  81 => 34,  231 => 89,  228 => 88,  200 => 9,  195 => 90,  174 => 59,  161 => 63,  148 => 46,  292 => 121,  288 => 101,  280 => 170,  250 => 144,  212 => 79,  198 => 105,  175 => 86,  97 => 23,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 42,  76 => 34,  59 => 13,  274 => 97,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 96,  238 => 137,  234 => 112,  225 => 87,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 25,  243 => 92,  240 => 157,  237 => 93,  227 => 109,  215 => 100,  210 => 81,  202 => 77,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 32,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 147,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 131,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 43,  140 => 42,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 30,  38 => 18,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 40,  70 => 15,  67 => 14,  61 => 12,  94 => 34,  89 => 29,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 9,  93 => 31,  88 => 20,  78 => 26,  46 => 12,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  196 => 102,  183 => 93,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 51,  138 => 50,  136 => 71,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 27,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 15,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 92,  189 => 73,  187 => 89,  182 => 93,  176 => 79,  173 => 74,  168 => 84,  164 => 97,  162 => 54,  154 => 60,  149 => 75,  147 => 75,  144 => 70,  141 => 73,  133 => 65,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 25,  99 => 40,  95 => 42,  92 => 43,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
