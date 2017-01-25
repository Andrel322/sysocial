<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c23156d038b356cf220c19cf6e0ecfc92b9007a75f2b641fdaa56c05dfb2ccd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db00c5d0228fac527f122e1d6cfd84f8957d1615395f1d808ff66a348125c672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db00c5d0228fac527f122e1d6cfd84f8957d1615395f1d808ff66a348125c672->enter($__internal_db00c5d0228fac527f122e1d6cfd84f8957d1615395f1d808ff66a348125c672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ab4d0665b772bd37203645ad449dd9be43e7ddad25f4732ede3061e8d65f5848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4d0665b772bd37203645ad449dd9be43e7ddad25f4732ede3061e8d65f5848->enter($__internal_ab4d0665b772bd37203645ad449dd9be43e7ddad25f4732ede3061e8d65f5848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db00c5d0228fac527f122e1d6cfd84f8957d1615395f1d808ff66a348125c672->leave($__internal_db00c5d0228fac527f122e1d6cfd84f8957d1615395f1d808ff66a348125c672_prof);

        
        $__internal_ab4d0665b772bd37203645ad449dd9be43e7ddad25f4732ede3061e8d65f5848->leave($__internal_ab4d0665b772bd37203645ad449dd9be43e7ddad25f4732ede3061e8d65f5848_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ded0880a70bde282f5fc2ad2d9e4de6a6430e63be98bb9afd477451fc6a05b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ded0880a70bde282f5fc2ad2d9e4de6a6430e63be98bb9afd477451fc6a05b8->enter($__internal_0ded0880a70bde282f5fc2ad2d9e4de6a6430e63be98bb9afd477451fc6a05b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ade4f61de99c86b84dbf4a75ae578e33f958082c83fa9076767d6ac0ebb88d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade4f61de99c86b84dbf4a75ae578e33f958082c83fa9076767d6ac0ebb88d87->enter($__internal_ade4f61de99c86b84dbf4a75ae578e33f958082c83fa9076767d6ac0ebb88d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ade4f61de99c86b84dbf4a75ae578e33f958082c83fa9076767d6ac0ebb88d87->leave($__internal_ade4f61de99c86b84dbf4a75ae578e33f958082c83fa9076767d6ac0ebb88d87_prof);

        
        $__internal_0ded0880a70bde282f5fc2ad2d9e4de6a6430e63be98bb9afd477451fc6a05b8->leave($__internal_0ded0880a70bde282f5fc2ad2d9e4de6a6430e63be98bb9afd477451fc6a05b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c5053c397795e567216f115240de0f56b23213cd9f470c48d89472aa63c6ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5053c397795e567216f115240de0f56b23213cd9f470c48d89472aa63c6ec6->enter($__internal_5c5053c397795e567216f115240de0f56b23213cd9f470c48d89472aa63c6ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f236da21d91fef0b7ca74dfe82e1f352bc54591e09e5c9858fa5ece73099f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f236da21d91fef0b7ca74dfe82e1f352bc54591e09e5c9858fa5ece73099f42->enter($__internal_4f236da21d91fef0b7ca74dfe82e1f352bc54591e09e5c9858fa5ece73099f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4f236da21d91fef0b7ca74dfe82e1f352bc54591e09e5c9858fa5ece73099f42->leave($__internal_4f236da21d91fef0b7ca74dfe82e1f352bc54591e09e5c9858fa5ece73099f42_prof);

        
        $__internal_5c5053c397795e567216f115240de0f56b23213cd9f470c48d89472aa63c6ec6->leave($__internal_5c5053c397795e567216f115240de0f56b23213cd9f470c48d89472aa63c6ec6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e6170f2ec6ad834f9e4daecff53f075a6fc09d16b64e5a4a6ad5b00f1fbeabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6170f2ec6ad834f9e4daecff53f075a6fc09d16b64e5a4a6ad5b00f1fbeabd->enter($__internal_8e6170f2ec6ad834f9e4daecff53f075a6fc09d16b64e5a4a6ad5b00f1fbeabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d639a9d21c5b2b918f698bd894b32fa10811e5dfa49f032574a09f1ae3d163d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d639a9d21c5b2b918f698bd894b32fa10811e5dfa49f032574a09f1ae3d163d5->enter($__internal_d639a9d21c5b2b918f698bd894b32fa10811e5dfa49f032574a09f1ae3d163d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d639a9d21c5b2b918f698bd894b32fa10811e5dfa49f032574a09f1ae3d163d5->leave($__internal_d639a9d21c5b2b918f698bd894b32fa10811e5dfa49f032574a09f1ae3d163d5_prof);

        
        $__internal_8e6170f2ec6ad834f9e4daecff53f075a6fc09d16b64e5a4a6ad5b00f1fbeabd->leave($__internal_8e6170f2ec6ad834f9e4daecff53f075a6fc09d16b64e5a4a6ad5b00f1fbeabd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/andrel/workspace/SysSocial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
