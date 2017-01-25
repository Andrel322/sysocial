<?php

/* security/login.html.twig */
class __TwigTemplate_534a7a2286b3dee72732d8206928f61a8a485d4579370db0d861bffc1e8f7bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 2);
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
        $__internal_f7141fb93edd7d1140f0c797fea306fc46d9b0d8a51bc0223897430ce6a7bbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7141fb93edd7d1140f0c797fea306fc46d9b0d8a51bc0223897430ce6a7bbb1->enter($__internal_f7141fb93edd7d1140f0c797fea306fc46d9b0d8a51bc0223897430ce6a7bbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_3f4a376e884b136600fcd0e828bc5a1a03110d8fe8c70670b9d1c201c55d4b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4a376e884b136600fcd0e828bc5a1a03110d8fe8c70670b9d1c201c55d4b50->enter($__internal_3f4a376e884b136600fcd0e828bc5a1a03110d8fe8c70670b9d1c201c55d4b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7141fb93edd7d1140f0c797fea306fc46d9b0d8a51bc0223897430ce6a7bbb1->leave($__internal_f7141fb93edd7d1140f0c797fea306fc46d9b0d8a51bc0223897430ce6a7bbb1_prof);

        
        $__internal_3f4a376e884b136600fcd0e828bc5a1a03110d8fe8c70670b9d1c201c55d4b50->leave($__internal_3f4a376e884b136600fcd0e828bc5a1a03110d8fe8c70670b9d1c201c55d4b50_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0172fe65fd8c4e01bf748f43364a91e072905cf033dd5e54721a5912158fbf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0172fe65fd8c4e01bf748f43364a91e072905cf033dd5e54721a5912158fbf96->enter($__internal_0172fe65fd8c4e01bf748f43364a91e072905cf033dd5e54721a5912158fbf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5efcad8d33448b54bc672c40663c87b5ebeee2732cb4902251c3ff406f60bf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efcad8d33448b54bc672c40663c87b5ebeee2732cb4902251c3ff406f60bf3b->enter($__internal_5efcad8d33448b54bc672c40663c87b5ebeee2732cb4902251c3ff406f60bf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_5efcad8d33448b54bc672c40663c87b5ebeee2732cb4902251c3ff406f60bf3b->leave($__internal_5efcad8d33448b54bc672c40663c87b5ebeee2732cb4902251c3ff406f60bf3b_prof);

        
        $__internal_0172fe65fd8c4e01bf748f43364a91e072905cf033dd5e54721a5912158fbf96->leave($__internal_0172fe65fd8c4e01bf748f43364a91e072905cf033dd5e54721a5912158fbf96_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_bd84c860a3442d243d44a6cc806d190712fa8a6651fbbce4eedfc517a110b434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd84c860a3442d243d44a6cc806d190712fa8a6651fbbce4eedfc517a110b434->enter($__internal_bd84c860a3442d243d44a6cc806d190712fa8a6651fbbce4eedfc517a110b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_75e786271bcbdae8dbf46558821ffcff0deaade42fe6f5188669c4e30c6ced56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e786271bcbdae8dbf46558821ffcff0deaade42fe6f5188669c4e30c6ced56->enter($__internal_75e786271bcbdae8dbf46558821ffcff0deaade42fe6f5188669c4e30c6ced56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "    <div class=\"page-header\">
        <div class=\"container\"> 
\t\t    <h1>SYSocial - Receita Federal do Brasil</h1>
        </div>
    </div>
";
        
        $__internal_75e786271bcbdae8dbf46558821ffcff0deaade42fe6f5188669c4e30c6ced56->leave($__internal_75e786271bcbdae8dbf46558821ffcff0deaade42fe6f5188669c4e30c6ced56_prof);

        
        $__internal_bd84c860a3442d243d44a6cc806d190712fa8a6651fbbce4eedfc517a110b434->leave($__internal_bd84c860a3442d243d44a6cc806d190712fa8a6651fbbce4eedfc517a110b434_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_407262d63ffc48c3b488503448cb0241e2aa8b7e7ad5fa080dd0325cb456f641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407262d63ffc48c3b488503448cb0241e2aa8b7e7ad5fa080dd0325cb456f641->enter($__internal_407262d63ffc48c3b488503448cb0241e2aa8b7e7ad5fa080dd0325cb456f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ef4e0b0e543dd59ae62f7a3b53686197085275ab12c216c93cac7bce7029242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef4e0b0e543dd59ae62f7a3b53686197085275ab12c216c93cac7bce7029242->enter($__internal_3ef4e0b0e543dd59ae62f7a3b53686197085275ab12c216c93cac7bce7029242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
<div class=\"container\">
    <form class=\"form-signin\" action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">Bem-vindo</h2>
        ";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 22, $this->getSourceContext()); })())) {
            // line 23
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 25
        echo "        <label for=\"username\">Usuário:</label>
        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <label for=\"password\">Senha:</label>
    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" />

    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">login</button>
</form>
</div>
";
        
        $__internal_3ef4e0b0e543dd59ae62f7a3b53686197085275ab12c216c93cac7bce7029242->leave($__internal_3ef4e0b0e543dd59ae62f7a3b53686197085275ab12c216c93cac7bce7029242_prof);

        
        $__internal_407262d63ffc48c3b488503448cb0241e2aa8b7e7ad5fa080dd0325cb456f641->leave($__internal_407262d63ffc48c3b488503448cb0241e2aa8b7e7ad5fa080dd0325cb456f641_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  118 => 25,  112 => 23,  110 => 22,  105 => 20,  101 => 18,  92 => 17,  77 => 10,  68 => 9,  56 => 6,  51 => 5,  42 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/security/login.html.twig #}
{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/signin.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block header %}
    <div class=\"page-header\">
        <div class=\"container\"> 
\t\t    <h1>SYSocial - Receita Federal do Brasil</h1>
        </div>
    </div>
{% endblock %}

{% block body %}

<div class=\"container\">
    <form class=\"form-signin\" action=\"{{ path('login') }}\" method=\"post\">
        <h2 class=\"form-signin-heading\">Bem-vindo</h2>
        {% if error %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <label for=\"username\">Usuário:</label>
        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Senha:</label>
    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" />

    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">login</button>
</form>
</div>
{% endblock %}", "security/login.html.twig", "/home/andrel/workspace/SysSocial/app/Resources/views/security/login.html.twig");
    }
}
