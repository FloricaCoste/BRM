<?php

/* index.html.twig */
class __TwigTemplate_59580c6c1442119656e67de3e4835d0bf097e909992b510b84c14b248973c62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb5bde54dcee394d378f9089a8e46fed91933f278b3ceef8aa7d6e8dc29d6453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5bde54dcee394d378f9089a8e46fed91933f278b3ceef8aa7d6e8dc29d6453->enter($__internal_eb5bde54dcee394d378f9089a8e46fed91933f278b3ceef8aa7d6e8dc29d6453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_ad60b1c958e507f868676fcb308e6369dabda2ef100b8c48c17352ccedee3edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad60b1c958e507f868676fcb308e6369dabda2ef100b8c48c17352ccedee3edc->enter($__internal_ad60b1c958e507f868676fcb308e6369dabda2ef100b8c48c17352ccedee3edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5bde54dcee394d378f9089a8e46fed91933f278b3ceef8aa7d6e8dc29d6453->leave($__internal_eb5bde54dcee394d378f9089a8e46fed91933f278b3ceef8aa7d6e8dc29d6453_prof);

        
        $__internal_ad60b1c958e507f868676fcb308e6369dabda2ef100b8c48c17352ccedee3edc->leave($__internal_ad60b1c958e507f868676fcb308e6369dabda2ef100b8c48c17352ccedee3edc_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b7eb666df1feab4aea8c2036d14382ed9d8563dab01b7bcfab1f06d4dd9e558e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7eb666df1feab4aea8c2036d14382ed9d8563dab01b7bcfab1f06d4dd9e558e->enter($__internal_b7eb666df1feab4aea8c2036d14382ed9d8563dab01b7bcfab1f06d4dd9e558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6119d40e574513ca20bd631d686781631833822f672f85e87cbb0046fcddbae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6119d40e574513ca20bd631d686781631833822f672f85e87cbb0046fcddbae0->enter($__internal_6119d40e574513ca20bd631d686781631833822f672f85e87cbb0046fcddbae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "home page";
        
        $__internal_6119d40e574513ca20bd631d686781631833822f672f85e87cbb0046fcddbae0->leave($__internal_6119d40e574513ca20bd631d686781631833822f672f85e87cbb0046fcddbae0_prof);

        
        $__internal_b7eb666df1feab4aea8c2036d14382ed9d8563dab01b7bcfab1f06d4dd9e558e->leave($__internal_b7eb666df1feab4aea8c2036d14382ed9d8563dab01b7bcfab1f06d4dd9e558e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19f764aba16bb88054d868336bd185cc84c50ba603400208e0f8c801c78ef1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f764aba16bb88054d868336bd185cc84c50ba603400208e0f8c801c78ef1ca->enter($__internal_19f764aba16bb88054d868336bd185cc84c50ba603400208e0f8c801c78ef1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dab0a3f362c70ceba0ffff789b1696a37bfd4a99261eb87fc0ad7c4dabbcb8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab0a3f362c70ceba0ffff789b1696a37bfd4a99261eb87fc0ad7c4dabbcb8a7->enter($__internal_dab0a3f362c70ceba0ffff789b1696a37bfd4a99261eb87fc0ad7c4dabbcb8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>welcome to home page</h1>

    <hr>
    <ul>

        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">back to home page</a>
        </li>

        <li>
            <a hrer=\"http://symfony.com/doc/current/page_creation.html\">getting started (on the Symfony website)</a>
        </li>
    </ul>



    <p>
        I am the home page ...

    </p>

    <hr>

    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_dab0a3f362c70ceba0ffff789b1696a37bfd4a99261eb87fc0ad7c4dabbcb8a7->leave($__internal_dab0a3f362c70ceba0ffff789b1696a37bfd4a99261eb87fc0ad7c4dabbcb8a7_prof);

        
        $__internal_19f764aba16bb88054d868336bd185cc84c50ba603400208e0f8c801c78ef1ca->leave($__internal_19f764aba16bb88054d868336bd185cc84c50ba603400208e0f8c801c78ef1ca_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block pageTitle %}home page{% endblock %}

{% block body %}

    <h1>welcome to home page</h1>

    <hr>
    <ul>

        <li>
            <a href=\"{{ path('homepage') }}\">back to home page</a>
        </li>

        <li>
            <a hrer=\"http://symfony.com/doc/current/page_creation.html\">getting started (on the Symfony website)</a>
        </li>
    </ul>



    <p>
        I am the home page ...

    </p>

    <hr>

    {{ dump() }}
{% endblock %}", "index.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\index.html.twig");
    }
}
