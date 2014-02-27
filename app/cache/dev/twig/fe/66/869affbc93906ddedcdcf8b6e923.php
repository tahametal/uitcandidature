<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_fe66869affbc93906ddedcdcf8b6e923 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  118 => 49,  113 => 48,  351 => 164,  347 => 163,  344 => 162,  339 => 161,  329 => 154,  327 => 153,  320 => 149,  313 => 145,  306 => 141,  299 => 137,  292 => 133,  256 => 109,  249 => 105,  232 => 93,  221 => 86,  218 => 85,  213 => 82,  210 => 81,  179 => 68,  97 => 41,  186 => 9,  180 => 103,  23 => 3,  205 => 78,  200 => 9,  194 => 97,  192 => 96,  188 => 95,  178 => 66,  174 => 101,  170 => 89,  160 => 96,  150 => 78,  161 => 63,  137 => 66,  172 => 64,  165 => 60,  153 => 55,  134 => 54,  124 => 45,  100 => 39,  63 => 19,  58 => 17,  77 => 33,  81 => 34,  53 => 11,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 32,  76 => 31,  59 => 13,  263 => 113,  253 => 124,  242 => 101,  236 => 157,  234 => 156,  230 => 155,  225 => 153,  216 => 150,  212 => 96,  191 => 67,  181 => 124,  104 => 36,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 105,  337 => 160,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 129,  283 => 88,  278 => 125,  268 => 85,  264 => 84,  258 => 131,  252 => 80,  247 => 50,  241 => 77,  235 => 74,  229 => 92,  224 => 71,  220 => 151,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 56,  140 => 58,  132 => 48,  128 => 49,  119 => 57,  107 => 36,  71 => 30,  38 => 6,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 29,  70 => 25,  67 => 24,  61 => 12,  94 => 34,  89 => 29,  85 => 32,  75 => 23,  68 => 29,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 31,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 13,  31 => 3,  28 => 3,  196 => 102,  183 => 93,  171 => 61,  166 => 71,  163 => 70,  158 => 62,  156 => 95,  151 => 59,  142 => 51,  138 => 50,  136 => 80,  121 => 50,  117 => 43,  105 => 18,  91 => 41,  62 => 20,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 27,  72 => 22,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 45,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 16,  52 => 14,  50 => 8,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 76,  193 => 132,  189 => 73,  187 => 84,  182 => 93,  176 => 64,  173 => 74,  168 => 72,  164 => 97,  162 => 83,  154 => 60,  149 => 75,  147 => 53,  144 => 70,  141 => 75,  133 => 65,  130 => 62,  125 => 51,  122 => 43,  116 => 54,  112 => 42,  109 => 50,  106 => 45,  103 => 37,  99 => 40,  95 => 42,  92 => 38,  86 => 28,  82 => 28,  80 => 32,  73 => 16,  64 => 23,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
