<?php

/* default/index.html.twig */
class __TwigTemplate_3f0d0020d6268bd542c1e2605b023798f158fcf915f4171e177e6274aeaad50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6f01a6d657d1ea8c812e714abd16cd6c2183a32ef7c4d3ea207617f58c60daf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f01a6d657d1ea8c812e714abd16cd6c2183a32ef7c4d3ea207617f58c60daf2->enter($__internal_6f01a6d657d1ea8c812e714abd16cd6c2183a32ef7c4d3ea207617f58c60daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_90ae3958769fa1f7ee85a31a658caefbb46655b7826edb4dc46f1ee3c4b86f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ae3958769fa1f7ee85a31a658caefbb46655b7826edb4dc46f1ee3c4b86f40->enter($__internal_90ae3958769fa1f7ee85a31a658caefbb46655b7826edb4dc46f1ee3c4b86f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f01a6d657d1ea8c812e714abd16cd6c2183a32ef7c4d3ea207617f58c60daf2->leave($__internal_6f01a6d657d1ea8c812e714abd16cd6c2183a32ef7c4d3ea207617f58c60daf2_prof);

        
        $__internal_90ae3958769fa1f7ee85a31a658caefbb46655b7826edb4dc46f1ee3c4b86f40->leave($__internal_90ae3958769fa1f7ee85a31a658caefbb46655b7826edb4dc46f1ee3c4b86f40_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_805e8f25b2004d934dee458be634a6a8ee5ac16130a7b24ce14d38d07149065b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805e8f25b2004d934dee458be634a6a8ee5ac16130a7b24ce14d38d07149065b->enter($__internal_805e8f25b2004d934dee458be634a6a8ee5ac16130a7b24ce14d38d07149065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_60108f7dfe8570999828a34030a96cd9d7eb8d4ee53b5e38c0d10a098eea86ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60108f7dfe8570999828a34030a96cd9d7eb8d4ee53b5e38c0d10a098eea86ed->enter($__internal_60108f7dfe8570999828a34030a96cd9d7eb8d4ee53b5e38c0d10a098eea86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <div class=\"page-header\">
        <div class=\"container\"> 
\t\t    <h1>SYSocial - Receita Federal do Brasil</h1>
        </div>
    </div>
";
        
        $__internal_60108f7dfe8570999828a34030a96cd9d7eb8d4ee53b5e38c0d10a098eea86ed->leave($__internal_60108f7dfe8570999828a34030a96cd9d7eb8d4ee53b5e38c0d10a098eea86ed_prof);

        
        $__internal_805e8f25b2004d934dee458be634a6a8ee5ac16130a7b24ce14d38d07149065b->leave($__internal_805e8f25b2004d934dee458be634a6a8ee5ac16130a7b24ce14d38d07149065b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3787b5c46d9ac9bb37d577870c594d48f38faf612254afefa5b7bd47c26ac0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3787b5c46d9ac9bb37d577870c594d48f38faf612254afefa5b7bd47c26ac0ee->enter($__internal_3787b5c46d9ac9bb37d577870c594d48f38faf612254afefa5b7bd47c26ac0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b473c8234198cc4332bb8ed8412ccd222e1c62c633593330e0054079465fa4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b473c8234198cc4332bb8ed8412ccd222e1c62c633593330e0054079465fa4f2->enter($__internal_b473c8234198cc4332bb8ed8412ccd222e1c62c633593330e0054079465fa4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <div class=\"caption\">
                    <h3>Sócios</h3>
                    <form class=\"form-group\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partner_show");
        echo "\" method=\"post\">
                        <label for=\"partner\">CPF:</label>
                        <input type=\"text\" id=\"partnerCPF\" class=\"form-control\" name=\"_partnerCPF\" placeholder=\"CPF do Sócio\" />
                        <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                    </form>
                    <p><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partner_registration");
        echo "\" class=\"btn btn-primary\" role=\"button\">Registrar Sócio</a></p>
                    ";
        // line 24
        if ((isset($context["errorPartner"]) || array_key_exists("errorPartner", $context) ? $context["errorPartner"] : (function () { throw new Twig_Error_Runtime('Variable "errorPartner" does not exist.', 24, $this->getSourceContext()); })())) {
            // line 25
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["errorPartner"]) || array_key_exists("errorPartner", $context) ? $context["errorPartner"] : (function () { throw new Twig_Error_Runtime('Variable "errorPartner" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 27
        echo "                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\"> 
                <div class=\"caption\">
                    <h3>Empresas</h3>
                    <form class=\"form-group\" action=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_show");
        echo "\" method=\"post\">
                        <label for=\"company\">CNPJ:</label>
                        <input type=\"text\" id=\"companyCNPJ\" class=\"form-control\" name=\"_companyCNPJ\" placeholder=\"CNPJ da Empresa\" />
                        <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                    </form>
                    <p><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_registration");
        echo "\" class=\"btn btn-primary\" role=\"button\">Registrar Empresa</a></p>
                    ";
        // line 41
        if ((isset($context["errorCompany"]) || array_key_exists("errorCompany", $context) ? $context["errorCompany"] : (function () { throw new Twig_Error_Runtime('Variable "errorCompany" does not exist.', 41, $this->getSourceContext()); })())) {
            // line 42
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["errorCompany"]) || array_key_exists("errorCompany", $context) ? $context["errorCompany"] : (function () { throw new Twig_Error_Runtime('Variable "errorCompany" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 44
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_b473c8234198cc4332bb8ed8412ccd222e1c62c633593330e0054079465fa4f2->leave($__internal_b473c8234198cc4332bb8ed8412ccd222e1c62c633593330e0054079465fa4f2_prof);

        
        $__internal_3787b5c46d9ac9bb37d577870c594d48f38faf612254afefa5b7bd47c26ac0ee->leave($__internal_3787b5c46d9ac9bb37d577870c594d48f38faf612254afefa5b7bd47c26ac0ee_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  126 => 42,  124 => 41,  120 => 40,  112 => 35,  102 => 27,  96 => 25,  94 => 24,  90 => 23,  82 => 18,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
    <div class=\"page-header\">
        <div class=\"container\"> 
\t\t    <h1>SYSocial - Receita Federal do Brasil</h1>
        </div>
    </div>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <div class=\"caption\">
                    <h3>Sócios</h3>
                    <form class=\"form-group\" action=\"{{ path('partner_show') }}\" method=\"post\">
                        <label for=\"partner\">CPF:</label>
                        <input type=\"text\" id=\"partnerCPF\" class=\"form-control\" name=\"_partnerCPF\" placeholder=\"CPF do Sócio\" />
                        <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                    </form>
                    <p><a href=\"{{ path('partner_registration') }}\" class=\"btn btn-primary\" role=\"button\">Registrar Sócio</a></p>
                    {% if errorPartner %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{errorPartner}}</div>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\"> 
                <div class=\"caption\">
                    <h3>Empresas</h3>
                    <form class=\"form-group\" action=\"{{ path('company_show') }}\" method=\"post\">
                        <label for=\"company\">CNPJ:</label>
                        <input type=\"text\" id=\"companyCNPJ\" class=\"form-control\" name=\"_companyCNPJ\" placeholder=\"CNPJ da Empresa\" />
                        <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                    </form>
                    <p><a href=\"{{ path('company_registration') }}\" class=\"btn btn-primary\" role=\"button\">Registrar Empresa</a></p>
                    {% if errorCompany %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{errorCompany}}</div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "default/index.html.twig", "/home/andrel/workspace/SysSocial/app/Resources/views/default/index.html.twig");
    }
}
