<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/login.html.twig */
class __TwigTemplate_0db69d2674a8ed781ba1c893d1c15691e68f02313d04528689db0da9f69f0ca0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-12 position-absolute\">
        <img src=\"https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/60108156208b452d177909ff_6002086f72b727f82801de0c_adaptive-vs-responsive.jpeg\" alt=\"background\" loading=\"lazy\" class=\"img-fluid\"/>
    </div>
    <div class=\"position-absolute top-50 start-50 translate-middle bg-white rounded\" id=\"loginContainer\">
        <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_login_check");
        echo "\">
            ";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "            <div class=\"alert alert-danger\" id=\"errorLoginDiv\">
                Invalid Credentials
            </div>
            ";
        }
        // line 14
        echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
            <div class=\"text-start mt-3 ms-3\">
                <h1 class=\"fw-bold\">Log in</h1>
            </div>
            <div class=\"mt-3 p-3\">
                <i class=\"fa-solid fa-envelope\" id=\"emailIcon\"></i>
                <input type=\"email\" placeholder=\"username@google.com\" name=\"_username\" class=\"form-control loginInputs\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter(($context["last_username"] ?? $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\"required/>
            </div>
            <div class=\"mt-1 p-3\">
                <i class=\"fa-solid fa-lock\" id=\"passwordIcon\"></i>
                <input type=\"password\" placeholder=\"password\" name=\"_password\" class=\"form-control loginInputs\" required/>
            </div>
            <div class=\"text-center\">
                <button class=\"rounded btn btn-primary\" id=\"signInButton\">Sign in</button>
            </div>
        </form>
        <div class=\"text-center mt-3\">
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerAction");
        echo "\">Sign up</a>
        </div>
    </div>
    
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "<style>
    #loginContainer{
        width: 30%;
        height: 35%;
    }

    #signInButton{
        width: 20%;
        border-radius: 25px !important;      
    }

    .loginInputs{
        border-radius: 25px !important;
        height: 3em;
        padding: 5px 40px !important;
    }

    #emailIcon{
        position: absolute;
        left: 6%;
        top: 33%;    
    }

    #passwordIcon{
        position: absolute;
        left: 6%;
        top: 57%;    
    }

    #errorLoginDiv{
        position: absolute;
        margin-left: 38%;
    }
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 78,  162 => 77,  156 => 76,  114 => 39,  108 => 38,  95 => 31,  81 => 20,  71 => 14,  65 => 10,  63 => 9,  59 => 8,  53 => 4,  47 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"col-12 position-absolute\">
        <img src=\"https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/60108156208b452d177909ff_6002086f72b727f82801de0c_adaptive-vs-responsive.jpeg\" alt=\"background\" loading=\"lazy\" class=\"img-fluid\"/>
    </div>
    <div class=\"position-absolute top-50 start-50 translate-middle bg-white rounded\" id=\"loginContainer\">
        <form method=\"POST\" action=\"{{path('usuario_login_check')}}\">
            {% if error %}
            <div class=\"alert alert-danger\" id=\"errorLoginDiv\">
                Invalid Credentials
            </div>
            {% endif %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{csrf_token('authenticate')}}\"/>
            <div class=\"text-start mt-3 ms-3\">
                <h1 class=\"fw-bold\">Log in</h1>
            </div>
            <div class=\"mt-3 p-3\">
                <i class=\"fa-solid fa-envelope\" id=\"emailIcon\"></i>
                <input type=\"email\" placeholder=\"username@google.com\" name=\"_username\" class=\"form-control loginInputs\" value=\"{{ last_username | default('') }}\"required/>
            </div>
            <div class=\"mt-1 p-3\">
                <i class=\"fa-solid fa-lock\" id=\"passwordIcon\"></i>
                <input type=\"password\" placeholder=\"password\" name=\"_password\" class=\"form-control loginInputs\" required/>
            </div>
            <div class=\"text-center\">
                <button class=\"rounded btn btn-primary\" id=\"signInButton\">Sign in</button>
            </div>
        </form>
        <div class=\"text-center mt-3\">
            <a href=\"{{path('registerAction')}}\">Sign up</a>
        </div>
    </div>
    
    
{% endblock %}

{% block stylesheets %}
<style>
    #loginContainer{
        width: 30%;
        height: 35%;
    }

    #signInButton{
        width: 20%;
        border-radius: 25px !important;      
    }

    .loginInputs{
        border-radius: 25px !important;
        height: 3em;
        padding: 5px 40px !important;
    }

    #emailIcon{
        position: absolute;
        left: 6%;
        top: 33%;    
    }

    #passwordIcon{
        position: absolute;
        left: 6%;
        top: 57%;    
    }

    #errorLoginDiv{
        position: absolute;
        margin-left: 38%;
    }
</style>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('js/login.js')}}\"></script>

{% endblock %}", "default/login.html.twig", "/var/www/symfonyFinalProject/finalProject/app/Resources/views/default/login.html.twig");
    }
}
