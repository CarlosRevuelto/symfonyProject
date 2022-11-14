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

/* default/register.html.twig */
class __TwigTemplate_8c9688df4bb04e4a5c26993e33b0292a8b8a548c99605c205464700c7fb4d460 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"col-12 position-absolute\">
        <img src=\"https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/60108156208b452d177909ff_6002086f72b727f82801de0c_adaptive-vs-responsive.jpeg\" alt=\"background\" loading=\"lazy\" class=\"img-fluid\"/>
    </div>
    <div class=\"position-absolute top-50 start-50 translate-middle bg-white rounded\" id=\"registerContainer\">
        <form method=\"POST\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createNewUser");
        echo "\">
            
            ";
        // line 11
        if ((((isset($context["errorRegister"]) || array_key_exists("errorRegister", $context))) ? (_twig_default_filter(($context["errorRegister"] ?? $this->getContext($context, "errorRegister")), null)) : (null))) {
            // line 12
            echo "                <h1>aaa</h1>
            ";
        }
        // line 14
        echo "            <div class=\"text-start mt-3 ms-3\">
                <h1 class=\"fw-bold\">Create account</h1>
            </div>
            <div class=\"mt-2 p-3\">
                <i class=\"fa-solid fa-user\" id=\"userRegisterIcon\"></i>
                <input type=\"text\" placeholder=\"username\" name=\"username\" class=\"form-control registerInput\" required/>
            </div>
            <div class=\"mt-2 p-3\">
                <i class=\"fa-solid fa-envelope\" id=\"emailRegisterIcon\"></i>
                <input type=\"email\" placeholder=\"username@google.com\" name=\"email\" class=\"form-control registerInput\" id=\"newUserEmail\" data-href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validateUserEmail");
        echo "\" required/>
            </div>
            <div class=\"mt-2 p-3\">
                <i class=\"fa-solid fa-lock\" id=\"passwordRegisterIcon\"></i>
                <input type=\"password\" placeholder=\"password\" name=\"password\" class=\"form-control registerInput\" required/>
            </div>
            <div class=\"mt-2 p-3\">
                <label class=\"form-label ms-2\" for=\"userRol\">Which Rol do you want to use?</label>
                <i class=\"fa-solid fa-star\" id=\"rolRegisterIcon\"></i>
                <select class=\"form-select\" id=\"rolSelect\" name=\"userRol\">
                    <option value=\"ROL_USER\" selected>User</option>
                    <option value=\"ROL_ADMIN\">Admin</option>
                </select>
            </div>
            <div class=\"text-center\">
                <button class=\"btn btn-primary\" id=\"signUpButton\">Sign Up</button>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/register.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 49
        echo "<style>
    #registerContainer{
        width: 35%;
        height: 55%;
    }

    #signUpButton{

        width: 20%;
        border-radius: 25px !important;    
    }

    #userRegisterIcon{
        position: absolute;
        left: 5%;
        top: 19%;
    }

    #emailRegisterIcon{
        position: absolute;
        left: 5%;
        top: 36%;
    }

    #passwordRegisterIcon{
        position: absolute;
        left: 5%;
        top: 52%;
    }

    #rolRegisterIcon{
        position: absolute;
        left: 5%;
        top: 74%;
    }
    .registerInput, #rolSelect{
        border-radius: 25px !important;
        height: 3em;
        padding: 5px 36px !important;
    }

    #errorRegisterDiv{
        position: absolute;
        margin-left: 38%;
    }
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  129 => 48,  120 => 46,  115 => 45,  109 => 44,  82 => 23,  71 => 14,  67 => 12,  65 => 11,  60 => 9,  53 => 4,  47 => 3,  31 => 1,);
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
    <div class=\"position-absolute top-50 start-50 translate-middle bg-white rounded\" id=\"registerContainer\">
        <form method=\"POST\" action=\"{{path('createNewUser')}}\">
            
            {% if errorRegister|default(null) %}
                <h1>aaa</h1>
            {% endif %}
            <div class=\"text-start mt-3 ms-3\">
                <h1 class=\"fw-bold\">Create account</h1>
            </div>
            <div class=\"mt-2 p-3\">
                <i class=\"fa-solid fa-user\" id=\"userRegisterIcon\"></i>
                <input type=\"text\" placeholder=\"username\" name=\"username\" class=\"form-control registerInput\" required/>
            </div>
            <div class=\"mt-2 p-3\">
                <i class=\"fa-solid fa-envelope\" id=\"emailRegisterIcon\"></i>
                <input type=\"email\" placeholder=\"username@google.com\" name=\"email\" class=\"form-control registerInput\" id=\"newUserEmail\" data-href=\"{{path('validateUserEmail')}}\" required/>
            </div>
            <div class=\"mt-2 p-3\">
                <i class=\"fa-solid fa-lock\" id=\"passwordRegisterIcon\"></i>
                <input type=\"password\" placeholder=\"password\" name=\"password\" class=\"form-control registerInput\" required/>
            </div>
            <div class=\"mt-2 p-3\">
                <label class=\"form-label ms-2\" for=\"userRol\">Which Rol do you want to use?</label>
                <i class=\"fa-solid fa-star\" id=\"rolRegisterIcon\"></i>
                <select class=\"form-select\" id=\"rolSelect\" name=\"userRol\">
                    <option value=\"ROL_USER\" selected>User</option>
                    <option value=\"ROL_ADMIN\">Admin</option>
                </select>
            </div>
            <div class=\"text-center\">
                <button class=\"btn btn-primary\" id=\"signUpButton\">Sign Up</button>
            </div>
        </form>
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('js/register.js')}}\"></script>
{% endblock %}
{% block stylesheets %}
<style>
    #registerContainer{
        width: 35%;
        height: 55%;
    }

    #signUpButton{

        width: 20%;
        border-radius: 25px !important;    
    }

    #userRegisterIcon{
        position: absolute;
        left: 5%;
        top: 19%;
    }

    #emailRegisterIcon{
        position: absolute;
        left: 5%;
        top: 36%;
    }

    #passwordRegisterIcon{
        position: absolute;
        left: 5%;
        top: 52%;
    }

    #rolRegisterIcon{
        position: absolute;
        left: 5%;
        top: 74%;
    }
    .registerInput, #rolSelect{
        border-radius: 25px !important;
        height: 3em;
        padding: 5px 36px !important;
    }

    #errorRegisterDiv{
        position: absolute;
        margin-left: 38%;
    }
</style>

{% endblock %}", "default/register.html.twig", "/var/www/symfonyFinalProject/finalProject/app/Resources/views/default/register.html.twig");
    }
}
