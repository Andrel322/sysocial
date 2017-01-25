<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c6f6b081c27c748d5b7c5f7294fcc133133bfcb24fb9f379679b8ecb992bd1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6757b6397bfe27a5681abe263a6e06ce6fe9f5873e57f1324529d59a99a26130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6757b6397bfe27a5681abe263a6e06ce6fe9f5873e57f1324529d59a99a26130->enter($__internal_6757b6397bfe27a5681abe263a6e06ce6fe9f5873e57f1324529d59a99a26130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_451051770ff3646b0bf752c0e925baa5b8cc5ac2273b0d52a107547d6d0f80ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451051770ff3646b0bf752c0e925baa5b8cc5ac2273b0d52a107547d6d0f80ce->enter($__internal_451051770ff3646b0bf752c0e925baa5b8cc5ac2273b0d52a107547d6d0f80ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6757b6397bfe27a5681abe263a6e06ce6fe9f5873e57f1324529d59a99a26130->leave($__internal_6757b6397bfe27a5681abe263a6e06ce6fe9f5873e57f1324529d59a99a26130_prof);

        
        $__internal_451051770ff3646b0bf752c0e925baa5b8cc5ac2273b0d52a107547d6d0f80ce->leave($__internal_451051770ff3646b0bf752c0e925baa5b8cc5ac2273b0d52a107547d6d0f80ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35cc0ac5ea429d104737a6e9ce28e197078268d7154ed3e5020511d9ec6f47b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cc0ac5ea429d104737a6e9ce28e197078268d7154ed3e5020511d9ec6f47b4->enter($__internal_35cc0ac5ea429d104737a6e9ce28e197078268d7154ed3e5020511d9ec6f47b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e083ee9b5c2a02e5b3063b902d22c088dc2761406b9ecfdf193d3e93646f4dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e083ee9b5c2a02e5b3063b902d22c088dc2761406b9ecfdf193d3e93646f4dac->enter($__internal_e083ee9b5c2a02e5b3063b902d22c088dc2761406b9ecfdf193d3e93646f4dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e083ee9b5c2a02e5b3063b902d22c088dc2761406b9ecfdf193d3e93646f4dac->leave($__internal_e083ee9b5c2a02e5b3063b902d22c088dc2761406b9ecfdf193d3e93646f4dac_prof);

        
        $__internal_35cc0ac5ea429d104737a6e9ce28e197078268d7154ed3e5020511d9ec6f47b4->leave($__internal_35cc0ac5ea429d104737a6e9ce28e197078268d7154ed3e5020511d9ec6f47b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/andrel/workspace/SysSocial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
