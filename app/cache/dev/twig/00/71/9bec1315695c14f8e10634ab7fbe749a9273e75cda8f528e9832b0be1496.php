<?php

/* AuthLoginBundle:Default:signup.html.twig */
class __TwigTemplate_00719bec1315695c14f8e10634ab7fbe749a9273e75cda8f528e9832b0be1496 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("auth_login_signup");
        echo "\">
\t\t<h2>Please sign in</h2>
\t\t<input type='text' placeholder='firstname' name='signupFirstname'>
\t\t<input type='text' placeholder='lastname' name='signupLastname'>
\t\t<select name='signupGender'>
\t\t\t<option>Title</option>
\t\t\t<option value=\"m\">Herr</option>
\t\t\t<option value='w'>Frau</option>\t\t\t
\t\t</select>
\t\t<input type='text' placeholder='email' name='signupEmail'>
\t\t<input tpye='password' placeholder='Password' name='signupPassword'>
\t\t<button type='submit'>Create Account</button>
\t</form>

\t<!-- ALERT In Bootstrap it will work -->
\t";
        // line 18
        if (array_key_exists("error", $context)) {
            // line 19
            echo "\t\t<div class='alert-info fade in'> <strong>Login Failed</strong></div>
\t";
        } else {
            // line 21
            echo "\t\t<div class='alert-info fade in'> <strong>Login Success</strong></div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "AuthLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  52 => 19,  50 => 18,  31 => 3,  28 => 2,);
    }
}
