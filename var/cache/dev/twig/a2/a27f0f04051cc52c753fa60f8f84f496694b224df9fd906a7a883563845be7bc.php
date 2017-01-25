<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a61ffd34cde83a72eeb806ad8fae1babd6d4ebdd1dc3f34743114d032127743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3a4938260f2e5a4c884cdd6f8cea75788963edaddd80aab8d5ca1dfcf9436abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4938260f2e5a4c884cdd6f8cea75788963edaddd80aab8d5ca1dfcf9436abd->enter($__internal_3a4938260f2e5a4c884cdd6f8cea75788963edaddd80aab8d5ca1dfcf9436abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_819034c3e8ed03498ed73c294c523cdc438ed1fd00297259a7c711fedcda3d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819034c3e8ed03498ed73c294c523cdc438ed1fd00297259a7c711fedcda3d1a->enter($__internal_819034c3e8ed03498ed73c294c523cdc438ed1fd00297259a7c711fedcda3d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a4938260f2e5a4c884cdd6f8cea75788963edaddd80aab8d5ca1dfcf9436abd->leave($__internal_3a4938260f2e5a4c884cdd6f8cea75788963edaddd80aab8d5ca1dfcf9436abd_prof);

        
        $__internal_819034c3e8ed03498ed73c294c523cdc438ed1fd00297259a7c711fedcda3d1a->leave($__internal_819034c3e8ed03498ed73c294c523cdc438ed1fd00297259a7c711fedcda3d1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a00109faf25d1cb285260ccb1be33011de249584187d5b129d4d9df68784f9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00109faf25d1cb285260ccb1be33011de249584187d5b129d4d9df68784f9d5->enter($__internal_a00109faf25d1cb285260ccb1be33011de249584187d5b129d4d9df68784f9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab0b7f65a01feca83ec7ec7a8c22036dc98c05b7ff62cfa4217878ecc036cc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0b7f65a01feca83ec7ec7a8c22036dc98c05b7ff62cfa4217878ecc036cc40->enter($__internal_ab0b7f65a01feca83ec7ec7a8c22036dc98c05b7ff62cfa4217878ecc036cc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab0b7f65a01feca83ec7ec7a8c22036dc98c05b7ff62cfa4217878ecc036cc40->leave($__internal_ab0b7f65a01feca83ec7ec7a8c22036dc98c05b7ff62cfa4217878ecc036cc40_prof);

        
        $__internal_a00109faf25d1cb285260ccb1be33011de249584187d5b129d4d9df68784f9d5->leave($__internal_a00109faf25d1cb285260ccb1be33011de249584187d5b129d4d9df68784f9d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35180b22af5e2ab0a0312b1af6c5e2ebf296c3581a39edb31e9846d35a2be2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35180b22af5e2ab0a0312b1af6c5e2ebf296c3581a39edb31e9846d35a2be2c9->enter($__internal_35180b22af5e2ab0a0312b1af6c5e2ebf296c3581a39edb31e9846d35a2be2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e96608e753bfafb41b503431de58c6ddce83d34bcd0adbd250666121b7e558e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96608e753bfafb41b503431de58c6ddce83d34bcd0adbd250666121b7e558e9->enter($__internal_e96608e753bfafb41b503431de58c6ddce83d34bcd0adbd250666121b7e558e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e96608e753bfafb41b503431de58c6ddce83d34bcd0adbd250666121b7e558e9->leave($__internal_e96608e753bfafb41b503431de58c6ddce83d34bcd0adbd250666121b7e558e9_prof);

        
        $__internal_35180b22af5e2ab0a0312b1af6c5e2ebf296c3581a39edb31e9846d35a2be2c9->leave($__internal_35180b22af5e2ab0a0312b1af6c5e2ebf296c3581a39edb31e9846d35a2be2c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17198ad9adabea14f0e2ff7b4035108cdcc0217ce7c87af2f63482e28b0a4673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17198ad9adabea14f0e2ff7b4035108cdcc0217ce7c87af2f63482e28b0a4673->enter($__internal_17198ad9adabea14f0e2ff7b4035108cdcc0217ce7c87af2f63482e28b0a4673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26f43f88e5c808eca9e01d704df260c136fda29a8d65b3c32f42ea97e9189038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f43f88e5c808eca9e01d704df260c136fda29a8d65b3c32f42ea97e9189038->enter($__internal_26f43f88e5c808eca9e01d704df260c136fda29a8d65b3c32f42ea97e9189038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_26f43f88e5c808eca9e01d704df260c136fda29a8d65b3c32f42ea97e9189038->leave($__internal_26f43f88e5c808eca9e01d704df260c136fda29a8d65b3c32f42ea97e9189038_prof);

        
        $__internal_17198ad9adabea14f0e2ff7b4035108cdcc0217ce7c87af2f63482e28b0a4673->leave($__internal_17198ad9adabea14f0e2ff7b4035108cdcc0217ce7c87af2f63482e28b0a4673_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/andrel/workspace/SysSocial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
