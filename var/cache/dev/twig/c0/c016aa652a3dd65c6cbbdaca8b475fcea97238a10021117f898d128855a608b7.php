<?php

/* base.html.twig */
class __TwigTemplate_942e818a2097eda360a6f09d09cde0ddd9d44299fc1232d2c0b32effcb7f89db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73a909f9046dc4e8bc66a2500a63ce98ea6ab8823700a8237834e6570a6dd2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a909f9046dc4e8bc66a2500a63ce98ea6ab8823700a8237834e6570a6dd2af->enter($__internal_73a909f9046dc4e8bc66a2500a63ce98ea6ab8823700a8237834e6570a6dd2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_345c166ef9a9cb874107a86aa43b10dc07ca0613693d52840f890cd7230b1c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345c166ef9a9cb874107a86aa43b10dc07ca0613693d52840f890cd7230b1c0c->enter($__internal_345c166ef9a9cb874107a86aa43b10dc07ca0613693d52840f890cd7230b1c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <header>
\t\t";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "    </header>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_73a909f9046dc4e8bc66a2500a63ce98ea6ab8823700a8237834e6570a6dd2af->leave($__internal_73a909f9046dc4e8bc66a2500a63ce98ea6ab8823700a8237834e6570a6dd2af_prof);

        
        $__internal_345c166ef9a9cb874107a86aa43b10dc07ca0613693d52840f890cd7230b1c0c->leave($__internal_345c166ef9a9cb874107a86aa43b10dc07ca0613693d52840f890cd7230b1c0c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_221a3f77f9499ce46b228f06db71e7be36e5ae4778a8fa7787ee7b7d244acc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a3f77f9499ce46b228f06db71e7be36e5ae4778a8fa7787ee7b7d244acc19->enter($__internal_221a3f77f9499ce46b228f06db71e7be36e5ae4778a8fa7787ee7b7d244acc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d466069fc8afc941d1537c5bceae47e299deca34f18a97c382d1fdb573e340ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d466069fc8afc941d1537c5bceae47e299deca34f18a97c382d1fdb573e340ab->enter($__internal_d466069fc8afc941d1537c5bceae47e299deca34f18a97c382d1fdb573e340ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SYSocial";
        
        $__internal_d466069fc8afc941d1537c5bceae47e299deca34f18a97c382d1fdb573e340ab->leave($__internal_d466069fc8afc941d1537c5bceae47e299deca34f18a97c382d1fdb573e340ab_prof);

        
        $__internal_221a3f77f9499ce46b228f06db71e7be36e5ae4778a8fa7787ee7b7d244acc19->leave($__internal_221a3f77f9499ce46b228f06db71e7be36e5ae4778a8fa7787ee7b7d244acc19_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e0d69a7fe7913be1faff77f8bc87df13b91160470b60c1d4c8d1ed5027a9c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0d69a7fe7913be1faff77f8bc87df13b91160470b60c1d4c8d1ed5027a9c95->enter($__internal_0e0d69a7fe7913be1faff77f8bc87df13b91160470b60c1d4c8d1ed5027a9c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a329ada62ede4cf20fa2f3936957de6394763232b9dea0469fe894eefe20482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a329ada62ede4cf20fa2f3936957de6394763232b9dea0469fe894eefe20482->enter($__internal_5a329ada62ede4cf20fa2f3936957de6394763232b9dea0469fe894eefe20482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_5a329ada62ede4cf20fa2f3936957de6394763232b9dea0469fe894eefe20482->leave($__internal_5a329ada62ede4cf20fa2f3936957de6394763232b9dea0469fe894eefe20482_prof);

        
        $__internal_0e0d69a7fe7913be1faff77f8bc87df13b91160470b60c1d4c8d1ed5027a9c95->leave($__internal_0e0d69a7fe7913be1faff77f8bc87df13b91160470b60c1d4c8d1ed5027a9c95_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_70bc0f14cb734cfbb92e89f73d2cea9d53c2225504490821100bda901979f9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bc0f14cb734cfbb92e89f73d2cea9d53c2225504490821100bda901979f9ed->enter($__internal_70bc0f14cb734cfbb92e89f73d2cea9d53c2225504490821100bda901979f9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_355ed34c40b5e7abf88f9fc53c825de6a8e04658af03dc5dc7a7cfd011c82012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355ed34c40b5e7abf88f9fc53c825de6a8e04658af03dc5dc7a7cfd011c82012->enter($__internal_355ed34c40b5e7abf88f9fc53c825de6a8e04658af03dc5dc7a7cfd011c82012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "\t\t";
        
        $__internal_355ed34c40b5e7abf88f9fc53c825de6a8e04658af03dc5dc7a7cfd011c82012->leave($__internal_355ed34c40b5e7abf88f9fc53c825de6a8e04658af03dc5dc7a7cfd011c82012_prof);

        
        $__internal_70bc0f14cb734cfbb92e89f73d2cea9d53c2225504490821100bda901979f9ed->leave($__internal_70bc0f14cb734cfbb92e89f73d2cea9d53c2225504490821100bda901979f9ed_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fc03d431cbb1fad2ef89f108da7317aa160ec07fef4e4031f60902aabf70a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc03d431cbb1fad2ef89f108da7317aa160ec07fef4e4031f60902aabf70a11->enter($__internal_6fc03d431cbb1fad2ef89f108da7317aa160ec07fef4e4031f60902aabf70a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_225671163126193bed87a1d91fc0904000117185ea91bb1c92b60485ae4e8d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225671163126193bed87a1d91fc0904000117185ea91bb1c92b60485ae4e8d72->enter($__internal_225671163126193bed87a1d91fc0904000117185ea91bb1c92b60485ae4e8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_225671163126193bed87a1d91fc0904000117185ea91bb1c92b60485ae4e8d72->leave($__internal_225671163126193bed87a1d91fc0904000117185ea91bb1c92b60485ae4e8d72_prof);

        
        $__internal_6fc03d431cbb1fad2ef89f108da7317aa160ec07fef4e4031f60902aabf70a11->leave($__internal_6fc03d431cbb1fad2ef89f108da7317aa160ec07fef4e4031f60902aabf70a11_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92c4a923b55f390aeea0dff21cdc606a16fe822da529ba25720948c6b6725978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c4a923b55f390aeea0dff21cdc606a16fe822da529ba25720948c6b6725978->enter($__internal_92c4a923b55f390aeea0dff21cdc606a16fe822da529ba25720948c6b6725978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bacd17153bc7b5f5cc74329e2601a1cb404411b9facb7804fbc43da4e0015ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacd17153bc7b5f5cc74329e2601a1cb404411b9facb7804fbc43da4e0015ce7->enter($__internal_bacd17153bc7b5f5cc74329e2601a1cb404411b9facb7804fbc43da4e0015ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/npm.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bacd17153bc7b5f5cc74329e2601a1cb404411b9facb7804fbc43da4e0015ce7->leave($__internal_bacd17153bc7b5f5cc74329e2601a1cb404411b9facb7804fbc43da4e0015ce7_prof);

        
        $__internal_92c4a923b55f390aeea0dff21cdc606a16fe822da529ba25720948c6b6725978->leave($__internal_92c4a923b55f390aeea0dff21cdc606a16fe822da529ba25720948c6b6725978_prof);

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
        return array (  174 => 23,  170 => 22,  167 => 21,  158 => 20,  141 => 19,  131 => 16,  122 => 15,  110 => 10,  106 => 9,  102 => 8,  91 => 7,  73 => 6,  61 => 25,  58 => 20,  56 => 19,  52 => 17,  50 => 15,  43 => 12,  41 => 7,  37 => 6,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}SYSocial{% endblock %}</title>
        {% block stylesheets %} 
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/bootstrap-theme.min.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <header>
\t\t{% block header %}
\t\t{% endblock %}
    </header>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/npm.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/andrel/workspace/SysSocial/app/Resources/views/base.html.twig");
    }
}
