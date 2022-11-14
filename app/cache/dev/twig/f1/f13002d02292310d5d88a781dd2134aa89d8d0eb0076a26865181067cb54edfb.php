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

/* base.html.twig */
class __TwigTemplate_2c00f528d5b8dd504bd963926c68aca52a861a182508041d1b35ba64054793d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css\" integrity=\"sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js\" integrity=\"sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
        
        
    </head>
    <body>
        
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        
        ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <style>
                #header{
                    display: block !important;
                }

                #header>:nth-child(1)
                {
                    top: 5%;
                    left: 1%;
                }
                #userICon{
                    position: absolute;
                    margin-top: 0.60%;
                    padding-left: 0.5%;
                }

                #dropdownList{
                    right: 0 !important;
                    width: 10%;
                    left: auto !important;
                }

                #dropdownButtonApplication{
                    width: 7%;
                }

                .active,.dropdown-item:hover{
                    background: lightgrey !important;
                    color: black !important;
                }

                #indexLink>a{
                    text-decoration: none;
                    color: white !important;
                }
            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "            <div class=\"navbar navbar-dark bg-dark shadow-sm text-end\" id=\"header\">
                <div class=\"position-absolute text-start\">
                    <h1 class=\"text-light\" id=\"indexLink\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getIndexApplication");
        echo "\">Index</a></h1>
                </div>
                <div class=\"dropdown me-3\">
                    <i class=\"fa-solid fa-user\" id=\"userICon\"></i>
                    <button class=\"btn btn-secondary dropdown-toggle ps-1\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" id=\"dropdownButtonApplication\">
                        Profile
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-secondary bg-secondary\" id=\"dropdownList\">
                        <li><a class=\"dropdown-item active\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateUserInfo");
        echo "\">Update</a></li>
                        <li><a class=\"dropdown-item text-light\" data-href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteUser");
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteUser");
        echo "\" id=\"deletePath\">Delete</a></li>
                        <li><a class=\"dropdown-item text-light\" href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_logout");
        echo "\">Log Out</a></li>
                    </ul>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/delete.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 80,  194 => 79,  188 => 78,  176 => 72,  170 => 71,  166 => 70,  155 => 62,  151 => 60,  145 => 59,  102 => 7,  96 => 6,  84 => 5,  75 => 82,  73 => 78,  70 => 77,  68 => 59,  49 => 44,  47 => 6,  43 => 5,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <style>
                #header{
                    display: block !important;
                }

                #header>:nth-child(1)
                {
                    top: 5%;
                    left: 1%;
                }
                #userICon{
                    position: absolute;
                    margin-top: 0.60%;
                    padding-left: 0.5%;
                }

                #dropdownList{
                    right: 0 !important;
                    width: 10%;
                    left: auto !important;
                }

                #dropdownButtonApplication{
                    width: 7%;
                }

                .active,.dropdown-item:hover{
                    background: lightgrey !important;
                    color: black !important;
                }

                #indexLink>a{
                    text-decoration: none;
                    color: white !important;
                }
            </style>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- CSS only -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css\" integrity=\"sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        
        <!-- JavaScript Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js\" integrity=\"sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
        
        
    </head>
    <body>
        
        {% block body %}
            <div class=\"navbar navbar-dark bg-dark shadow-sm text-end\" id=\"header\">
                <div class=\"position-absolute text-start\">
                    <h1 class=\"text-light\" id=\"indexLink\"><a href=\"{{path('getIndexApplication')}}\">Index</a></h1>
                </div>
                <div class=\"dropdown me-3\">
                    <i class=\"fa-solid fa-user\" id=\"userICon\"></i>
                    <button class=\"btn btn-secondary dropdown-toggle ps-1\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" id=\"dropdownButtonApplication\">
                        Profile
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-secondary bg-secondary\" id=\"dropdownList\">
                        <li><a class=\"dropdown-item active\" href=\"{{path('updateUserInfo')}}\">Update</a></li>
                        <li><a class=\"dropdown-item text-light\" data-href=\"{{path('deleteUser')}}\" href=\"{{path('deleteUser')}}\" id=\"deletePath\">Delete</a></li>
                        <li><a class=\"dropdown-item text-light\" href=\"{{path('usuario_logout')}}\">Log Out</a></li>
                    </ul>
                </div>
            </div>
        {% endblock %}
        
        {% block javascripts %}
            <script src=\"{{asset('js/jquery.js')}}\"></script>
            <script src=\"{{asset('js/delete.js')}}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfonyFinalProject/finalProject/app/Resources/views/base.html.twig");
    }
}
