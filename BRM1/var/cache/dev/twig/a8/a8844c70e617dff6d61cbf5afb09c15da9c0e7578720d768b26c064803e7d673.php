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
        $__internal_791d754ee556dab737a69636d214413c0b86d2a8d07597c3c454181fc65ffa47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791d754ee556dab737a69636d214413c0b86d2a8d07597c3c454181fc65ffa47->enter($__internal_791d754ee556dab737a69636d214413c0b86d2a8d07597c3c454181fc65ffa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8213a731184fd2373e731f471612681837bd697a8b72bbf4cd97f30fc9327609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8213a731184fd2373e731f471612681837bd697a8b72bbf4cd97f30fc9327609->enter($__internal_8213a731184fd2373e731f471612681837bd697a8b72bbf4cd97f30fc9327609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791d754ee556dab737a69636d214413c0b86d2a8d07597c3c454181fc65ffa47->leave($__internal_791d754ee556dab737a69636d214413c0b86d2a8d07597c3c454181fc65ffa47_prof);

        
        $__internal_8213a731184fd2373e731f471612681837bd697a8b72bbf4cd97f30fc9327609->leave($__internal_8213a731184fd2373e731f471612681837bd697a8b72bbf4cd97f30fc9327609_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_863f0c563a97bc0e0d1a838f8a646537e4c027f270017be97f40c66c9df91140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863f0c563a97bc0e0d1a838f8a646537e4c027f270017be97f40c66c9df91140->enter($__internal_863f0c563a97bc0e0d1a838f8a646537e4c027f270017be97f40c66c9df91140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1b2d21ae9e7137d917fac2a954c7990fc33965ad7ce93dc627a6df20948f84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b2d21ae9e7137d917fac2a954c7990fc33965ad7ce93dc627a6df20948f84d->enter($__internal_d1b2d21ae9e7137d917fac2a954c7990fc33965ad7ce93dc627a6df20948f84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d1b2d21ae9e7137d917fac2a954c7990fc33965ad7ce93dc627a6df20948f84d->leave($__internal_d1b2d21ae9e7137d917fac2a954c7990fc33965ad7ce93dc627a6df20948f84d_prof);

        
        $__internal_863f0c563a97bc0e0d1a838f8a646537e4c027f270017be97f40c66c9df91140->leave($__internal_863f0c563a97bc0e0d1a838f8a646537e4c027f270017be97f40c66c9df91140_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc53bf5122f154a664518e7227d898a181c2f4ff63c160f753afe43570184494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc53bf5122f154a664518e7227d898a181c2f4ff63c160f753afe43570184494->enter($__internal_cc53bf5122f154a664518e7227d898a181c2f4ff63c160f753afe43570184494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d8ce216516d215e663cfc39ade69c0557432b64dc9306732337188bbad0947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d8ce216516d215e663cfc39ade69c0557432b64dc9306732337188bbad0947->enter($__internal_74d8ce216516d215e663cfc39ade69c0557432b64dc9306732337188bbad0947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74d8ce216516d215e663cfc39ade69c0557432b64dc9306732337188bbad0947->leave($__internal_74d8ce216516d215e663cfc39ade69c0557432b64dc9306732337188bbad0947_prof);

        
        $__internal_cc53bf5122f154a664518e7227d898a181c2f4ff63c160f753afe43570184494->leave($__internal_cc53bf5122f154a664518e7227d898a181c2f4ff63c160f753afe43570184494_prof);

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
