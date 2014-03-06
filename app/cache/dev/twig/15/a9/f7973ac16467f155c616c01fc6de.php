<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_15a9f7973ac16467f155c616c01fc6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  43 => 8,  33 => 4,  30 => 3,  734 => 46,  726 => 499,  722 => 498,  717 => 496,  713 => 495,  709 => 494,  704 => 492,  700 => 491,  638 => 432,  607 => 403,  597 => 399,  593 => 398,  589 => 397,  586 => 396,  582 => 395,  544 => 359,  534 => 355,  530 => 354,  526 => 353,  522 => 352,  516 => 351,  510 => 350,  506 => 349,  502 => 347,  498 => 346,  458 => 308,  448 => 304,  442 => 303,  436 => 302,  432 => 301,  428 => 299,  424 => 298,  379 => 256,  371 => 251,  363 => 246,  355 => 241,  347 => 236,  339 => 231,  331 => 226,  323 => 221,  315 => 216,  307 => 211,  299 => 206,  289 => 199,  249 => 161,  235 => 160,  233 => 159,  226 => 155,  222 => 154,  219 => 153,  201 => 152,  199 => 151,  93 => 47,  91 => 46,  61 => 19,  57 => 12,  53 => 17,  49 => 16,  44 => 14,  40 => 7,  36 => 12,  32 => 11,  20 => 1,);
    }
}
