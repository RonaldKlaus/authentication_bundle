<?php

/* AuthLoginBundle:Default:login.html.twig */
class __TwigTemplate_15935c6198f27c64d8d91e7ebed51abb3f0819efb2f85a551d025f75932b348a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AuthLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AuthLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "\t<form class='' method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("auth_login_homepage");
        echo "\">
\t\t<h2>Please sign in</h2>
\t\t<input type='text' placeholder='email' name='loginEmail'>
\t\t<input tpye='password' placeholder='Password' name='loginPassword'>
\t\t<button type='submit'>Sign in</button>
\t</form>

\t<!-- ALERT In Bootstrap it will work -->
\t";
        // line 11
        if (array_key_exists("error", $context)) {
            // line 12
            echo "\t\t<div class='alert-info fade in'> <strong>Login Failed</strong></div>
\t";
        } else {
            // line 14
            echo "\t\t<div class='alert-info fade in'> <strong>Login Success</strong></div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "AuthLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 12,  43 => 11,  31 => 3,  28 => 2,);
    }
}
