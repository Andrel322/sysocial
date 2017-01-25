<?php

/* show/partnerShow.html.twig */
class __TwigTemplate_35c55a44a5302ae447d9c26bec63820cceed9b19b77be9dc850d1fd8ff56d96d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "show/partnerShow.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f31ffe94b9301deb93ec5d49f3d5d18ccf29a92353ac4c6faa92b90c4af4cda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31ffe94b9301deb93ec5d49f3d5d18ccf29a92353ac4c6faa92b90c4af4cda3->enter($__internal_f31ffe94b9301deb93ec5d49f3d5d18ccf29a92353ac4c6faa92b90c4af4cda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "show/partnerShow.html.twig"));

        $__internal_16b7d371c7cf000e346c69fac393d32008ea291eb7d88fc14ba846b45b9d3525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b7d371c7cf000e346c69fac393d32008ea291eb7d88fc14ba846b45b9d3525->enter($__internal_16b7d371c7cf000e346c69fac393d32008ea291eb7d88fc14ba846b45b9d3525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "show/partnerShow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31ffe94b9301deb93ec5d49f3d5d18ccf29a92353ac4c6faa92b90c4af4cda3->leave($__internal_f31ffe94b9301deb93ec5d49f3d5d18ccf29a92353ac4c6faa92b90c4af4cda3_prof);

        
        $__internal_16b7d371c7cf000e346c69fac393d32008ea291eb7d88fc14ba846b45b9d3525->leave($__internal_16b7d371c7cf000e346c69fac393d32008ea291eb7d88fc14ba846b45b9d3525_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_417e5204fb14bbbd57cf76769a7fe32a20e173bebbad9e423651bac481b32fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417e5204fb14bbbd57cf76769a7fe32a20e173bebbad9e423651bac481b32fcd->enter($__internal_417e5204fb14bbbd57cf76769a7fe32a20e173bebbad9e423651bac481b32fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6e6006c9702a35160ab4a3a73d2ae15daf26f1739877879da89ddbeb8528075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e6006c9702a35160ab4a3a73d2ae15daf26f1739877879da89ddbeb8528075->enter($__internal_f6e6006c9702a35160ab4a3a73d2ae15daf26f1739877879da89ddbeb8528075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/show.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_f6e6006c9702a35160ab4a3a73d2ae15daf26f1739877879da89ddbeb8528075->leave($__internal_f6e6006c9702a35160ab4a3a73d2ae15daf26f1739877879da89ddbeb8528075_prof);

        
        $__internal_417e5204fb14bbbd57cf76769a7fe32a20e173bebbad9e423651bac481b32fcd->leave($__internal_417e5204fb14bbbd57cf76769a7fe32a20e173bebbad9e423651bac481b32fcd_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_314120b03f7a689482cbcf2a917fa9353ad3ba365f83db9dfc3bc3c7ea430a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314120b03f7a689482cbcf2a917fa9353ad3ba365f83db9dfc3bc3c7ea430a3b->enter($__internal_314120b03f7a689482cbcf2a917fa9353ad3ba365f83db9dfc3bc3c7ea430a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fa5524a49c9120eace55482afc6c247b1aaab5acf0517e700da0c23e544dc9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5524a49c9120eace55482afc6c247b1aaab5acf0517e700da0c23e544dc9be->enter($__internal_fa5524a49c9120eace55482afc6c247b1aaab5acf0517e700da0c23e544dc9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <div class=\"page-header\">
        <div class=\"container\"> 
            <h1>Sócio - ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 11, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h1>
        </div>
    </div>
";
        
        $__internal_fa5524a49c9120eace55482afc6c247b1aaab5acf0517e700da0c23e544dc9be->leave($__internal_fa5524a49c9120eace55482afc6c247b1aaab5acf0517e700da0c23e544dc9be_prof);

        
        $__internal_314120b03f7a689482cbcf2a917fa9353ad3ba365f83db9dfc3bc3c7ea430a3b->leave($__internal_314120b03f7a689482cbcf2a917fa9353ad3ba365f83db9dfc3bc3c7ea430a3b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb628e8b12f69505c13dae9e241b3e1af5ec6807c7885467d45ab8e69f51900e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb628e8b12f69505c13dae9e241b3e1af5ec6807c7885467d45ab8e69f51900e->enter($__internal_eb628e8b12f69505c13dae9e241b3e1af5ec6807c7885467d45ab8e69f51900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60d940cc38c85647c8edafd32c9f88711e69d18dbeb75a637436c44460fad741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d940cc38c85647c8edafd32c9f88711e69d18dbeb75a637436c44460fad741->enter($__internal_60d940cc38c85647c8edafd32c9f88711e69d18dbeb75a637436c44460fad741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<div class=\"container\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Nome: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 20, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
      </div>
      <div class=\"panel-body\">
        <p>ID: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 23, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</p>
        <p>CPF: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 24, $this->getSourceContext()); })()), "cpf", array()), "html", null, true);
        echo "</p>
        <p>EMAIL: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 25, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
        <p>ANO DE NASCIMENTO: ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 26, $this->getSourceContext()); })()), "date", array()), "d-m-Y"), "html", null, true);
        echo "
        <p><a href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partner_update", array("page" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo " class=\"btn btn-primary\" role=\"button\">Editar</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partner_delete", array("page" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new Twig_Error_Runtime('Variable "partner" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\" role=\"button\">Deletar</a>
        <a href=";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo " class=\"btn btn-default\" role=\"button\">Voltar</a></p>
        </div>
    </div>
</div>
";
        
        $__internal_60d940cc38c85647c8edafd32c9f88711e69d18dbeb75a637436c44460fad741->leave($__internal_60d940cc38c85647c8edafd32c9f88711e69d18dbeb75a637436c44460fad741_prof);

        
        $__internal_eb628e8b12f69505c13dae9e241b3e1af5ec6807c7885467d45ab8e69f51900e->leave($__internal_eb628e8b12f69505c13dae9e241b3e1af5ec6807c7885467d45ab8e69f51900e_prof);

    }

    public function getTemplateName()
    {
        return "show/partnerShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  109 => 20,  104 => 17,  95 => 16,  81 => 11,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/show.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block header %}
    <div class=\"page-header\">
        <div class=\"container\"> 
            <h1>Sócio - {{partner.name}}</h1>
        </div>
    </div>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Nome: {{partner.name}}</h2>
      </div>
      <div class=\"panel-body\">
        <p>ID: {{partner.id}}</p>
        <p>CPF: {{partner.cpf}}</p>
        <p>EMAIL: {{partner.email}}</p>
        <p>ANO DE NASCIMENTO: {{partner.date|date('d-m-Y')}}
        <p><a href={{path(\"partner_update\", {'page':partner.id}) }} class=\"btn btn-primary\" role=\"button\">Editar</a> <a href=\"{{path(\"partner_delete\", {'page':partner.id}) }}\" class=\"btn btn-default\" role=\"button\">Deletar</a>
        <a href={{path (\"homepage\")}} class=\"btn btn-default\" role=\"button\">Voltar</a></p>
        </div>
    </div>
</div>
{% endblock %}", "show/partnerShow.html.twig", "/home/andrel/workspace/SysSocial/app/Resources/views/show/partnerShow.html.twig");
    }
}
