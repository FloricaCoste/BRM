<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_06abc2f06373b70bd11c6b7a6e2e6b4b57c6379f760ce4f74b9e8911b4384d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff81b46d262777e0a8b472837019a3b55c328cb0dd7db9c0b5970e5412de91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff81b46d262777e0a8b472837019a3b55c328cb0dd7db9c0b5970e5412de91e->enter($__internal_9ff81b46d262777e0a8b472837019a3b55c328cb0dd7db9c0b5970e5412de91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_01159d28e949928a188e631e376fbda6c6f77d804de86cd9f7f0e563a2320c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01159d28e949928a188e631e376fbda6c6f77d804de86cd9f7f0e563a2320c18->enter($__internal_01159d28e949928a188e631e376fbda6c6f77d804de86cd9f7f0e563a2320c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff81b46d262777e0a8b472837019a3b55c328cb0dd7db9c0b5970e5412de91e->leave($__internal_9ff81b46d262777e0a8b472837019a3b55c328cb0dd7db9c0b5970e5412de91e_prof);

        
        $__internal_01159d28e949928a188e631e376fbda6c6f77d804de86cd9f7f0e563a2320c18->leave($__internal_01159d28e949928a188e631e376fbda6c6f77d804de86cd9f7f0e563a2320c18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_526e91cd87f878e72ab6e9ea33f42f5d12c309827c84a08fda1748b2c0eff2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526e91cd87f878e72ab6e9ea33f42f5d12c309827c84a08fda1748b2c0eff2bf->enter($__internal_526e91cd87f878e72ab6e9ea33f42f5d12c309827c84a08fda1748b2c0eff2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06b36df19f7ab4cadf73909c3c933e8dbb8244beae1f2818e91a06a9d39a2d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b36df19f7ab4cadf73909c3c933e8dbb8244beae1f2818e91a06a9d39a2d80->enter($__internal_06b36df19f7ab4cadf73909c3c933e8dbb8244beae1f2818e91a06a9d39a2d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_06b36df19f7ab4cadf73909c3c933e8dbb8244beae1f2818e91a06a9d39a2d80->leave($__internal_06b36df19f7ab4cadf73909c3c933e8dbb8244beae1f2818e91a06a9d39a2d80_prof);

        
        $__internal_526e91cd87f878e72ab6e9ea33f42f5d12c309827c84a08fda1748b2c0eff2bf->leave($__internal_526e91cd87f878e72ab6e9ea33f42f5d12c309827c84a08fda1748b2c0eff2bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff5bb3080deb81bfd710c1f1b2a9e222198714f236be7702c57ab16281bae888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5bb3080deb81bfd710c1f1b2a9e222198714f236be7702c57ab16281bae888->enter($__internal_ff5bb3080deb81bfd710c1f1b2a9e222198714f236be7702c57ab16281bae888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4082ba0d46881e75fba477c01643a1bc620f0955643cad7b17d3c509395143af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4082ba0d46881e75fba477c01643a1bc620f0955643cad7b17d3c509395143af->enter($__internal_4082ba0d46881e75fba477c01643a1bc620f0955643cad7b17d3c509395143af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4082ba0d46881e75fba477c01643a1bc620f0955643cad7b17d3c509395143af->leave($__internal_4082ba0d46881e75fba477c01643a1bc620f0955643cad7b17d3c509395143af_prof);

        
        $__internal_ff5bb3080deb81bfd710c1f1b2a9e222198714f236be7702c57ab16281bae888->leave($__internal_ff5bb3080deb81bfd710c1f1b2a9e222198714f236be7702c57ab16281bae888_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
