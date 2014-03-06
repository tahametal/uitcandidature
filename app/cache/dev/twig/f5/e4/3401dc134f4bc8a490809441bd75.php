<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_f5e43401dc134f4bc8a490809441bd75 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  39 => 6,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 5,  30 => 3,  734 => 46,  726 => 499,  722 => 498,  717 => 496,  713 => 495,  709 => 494,  704 => 492,  700 => 491,  638 => 432,  607 => 403,  597 => 399,  593 => 398,  589 => 397,  586 => 396,  582 => 395,  544 => 359,  534 => 355,  530 => 354,  526 => 353,  522 => 352,  516 => 351,  510 => 350,  506 => 349,  502 => 347,  498 => 346,  458 => 308,  448 => 304,  442 => 303,  436 => 302,  432 => 301,  428 => 299,  424 => 298,  379 => 256,  371 => 251,  363 => 246,  355 => 241,  347 => 236,  339 => 231,  331 => 226,  323 => 221,  315 => 216,  307 => 211,  299 => 206,  289 => 199,  249 => 161,  235 => 160,  233 => 159,  226 => 155,  222 => 154,  219 => 153,  201 => 152,  199 => 151,  93 => 9,  91 => 31,  61 => 19,  57 => 14,  53 => 17,  49 => 19,  44 => 10,  40 => 8,  36 => 7,  32 => 12,  20 => 1,);
    }
}
