<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_aad30e193f71daeeca8648970982c93b extends Twig_Template
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
        echo "<h1>Nouvelle candidature</h1>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
         <button class=\"button btn btn-primary btn-large\" type=\"submit\">Create</button>

    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  187 => 102,  182 => 79,  177 => 9,  171 => 103,  169 => 102,  165 => 101,  160 => 99,  155 => 97,  151 => 96,  147 => 95,  130 => 80,  128 => 79,  69 => 23,  64 => 21,  59 => 19,  55 => 18,  50 => 16,  44 => 13,  39 => 11,  34 => 10,  32 => 9,  22 => 2,  31 => 4,  28 => 3,);
    }
}
