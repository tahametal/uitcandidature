<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_58353e5ca3a234dfb75a2eddbd50586e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"account-container stacked\">
\t
\t<div class=\"content clearfix\">
\t\t
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
\t\t
\t\t\t<h1>Identifiez-vous</h1>\t\t
\t\t\t
\t\t\t<div class=\"login-fields\">
\t\t\t\t
\t\t\t\t<p>Connectez-vous en utilisant votre compte :</p>
                                <p style=\"color: red\">";
        // line 17
        if ($this->getContext($context, "error")) {
            // line 18
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 19
        echo "</p>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label for=\"username\">Nom d'utilisateur</label>
                                       
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" placeholder=\" Username\" class=\"login username-field\" />
\t\t\t\t</div> <!-- /field -->
\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label for=\"password\">Mot de passe</label>
                                        <input type=\"password\" id=\"password\" name=\"_password\" value=\"\" required=\"required\" placeholder=\"Password\" class=\"login password-field\" />
\t\t\t\t\t
\t\t\t\t</div> <!-- /password -->
\t\t\t\t
\t\t\t</div> <!-- /login-fields -->
\t\t\t
\t\t\t<div class=\"login-actions\">
\t\t\t\t
\t\t\t\t<span class=\"login-checkbox\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"field login-checkbox\" tabindex=\"4\"/>
\t\t\t\t\t<label class=\"choice\" for=\"Field\">Se souvenir de moi</label>
\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t<button type=\"submit\" id=\"_submit\"  class=\"button btn btn-warning btn-large\" name=\"_submit\">Se connecter</button>
\t\t\t\t
\t\t\t</div> <!-- .actions -->
\t\t\t
\t\t\t<div class=\"login-social\">
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</form>
\t\t
\t</div> <!-- /content -->
\t
</div> <!-- /account-container -->
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 18,  52 => 17,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
