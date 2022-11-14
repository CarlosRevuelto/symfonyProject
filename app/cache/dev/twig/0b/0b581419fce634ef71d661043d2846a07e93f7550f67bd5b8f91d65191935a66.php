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

/* default/indexApplication.html.twig */
class __TwigTemplate_8dda7530c51f88a441f1c04f45d198c56afb683145c3dd58c9e4347d3b801c1b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/indexApplication.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/indexApplication.html.twig", 1);
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
    ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"text-center mt-5\">
        <div class=\"mt-3\">
            <h1>Select Your Topic Gift</h1>
        </div>
        <div class=\"mt-3\">
            <p>
                Write in the input below which topic do you want to search for
            </p>
        </div>
    </div>
    <div class=\"text-center mt-3 d-flex\">
        <form method=\"POST\" class=\"w-100 d-flex\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Select your topic\" id=\"topicInput\"/>
            <select class=\"form-select\" id=\"selectToStablishLimit\">
                <option value=10 selected>10</option>
                <option value=20>20</option>
                <option value=30>30</option>
            </select>
        </form>
        
    </div>
    <div class=\"row mt-5 justify-content-center\" id=\"rowToWrite\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>

    #topicInput{
        width: 25%;
        margin: 0 auto;
    }

    #selectToStablishLimit{
        width: 5%;
        position: absolute;
        left: 64%;
    }

    #rowToWrite{
        gap: 16px;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/form.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/indexApplication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  127 => 52,  121 => 51,  94 => 32,  88 => 31,  56 => 5,  53 => 4,  47 => 3,  31 => 1,);
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
    
    {{parent()}}
    <div class=\"text-center mt-5\">
        <div class=\"mt-3\">
            <h1>Select Your Topic Gift</h1>
        </div>
        <div class=\"mt-3\">
            <p>
                Write in the input below which topic do you want to search for
            </p>
        </div>
    </div>
    <div class=\"text-center mt-3 d-flex\">
        <form method=\"POST\" class=\"w-100 d-flex\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Select your topic\" id=\"topicInput\"/>
            <select class=\"form-select\" id=\"selectToStablishLimit\">
                <option value=10 selected>10</option>
                <option value=20>20</option>
                <option value=30>30</option>
            </select>
        </form>
        
    </div>
    <div class=\"row mt-5 justify-content-center\" id=\"rowToWrite\">
    </div>
{% endblock %}

{% block stylesheets %}
    {{parent()}}
<style>

    #topicInput{
        width: 25%;
        margin: 0 auto;
    }

    #selectToStablishLimit{
        width: 5%;
        position: absolute;
        left: 64%;
    }

    #rowToWrite{
        gap: 16px;
    }
</style>
{% endblock %}
{% block javascripts %}
{{parent()}}
<script src=\"{{asset('js/form.js')}}\"></script>

{% endblock %}", "default/indexApplication.html.twig", "/var/www/symfonyFinalProject/finalProject/app/Resources/views/default/indexApplication.html.twig");
    }
}
