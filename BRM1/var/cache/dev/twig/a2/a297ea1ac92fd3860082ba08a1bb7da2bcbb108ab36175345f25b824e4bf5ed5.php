<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_480e38016fd026d2ec6707f4ec2c252e8e78f923c3be8381de07c74124c926ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_301ce47c5885e78ddd982fe8040db08bc10cea773e4964bbe5aa8e51e0fcf481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301ce47c5885e78ddd982fe8040db08bc10cea773e4964bbe5aa8e51e0fcf481->enter($__internal_301ce47c5885e78ddd982fe8040db08bc10cea773e4964bbe5aa8e51e0fcf481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5ed3dbeb22d274af1885ee7a3e7a04bcfe63164500fa464c5f9197884de5d25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed3dbeb22d274af1885ee7a3e7a04bcfe63164500fa464c5f9197884de5d25d->enter($__internal_5ed3dbeb22d274af1885ee7a3e7a04bcfe63164500fa464c5f9197884de5d25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301ce47c5885e78ddd982fe8040db08bc10cea773e4964bbe5aa8e51e0fcf481->leave($__internal_301ce47c5885e78ddd982fe8040db08bc10cea773e4964bbe5aa8e51e0fcf481_prof);

        
        $__internal_5ed3dbeb22d274af1885ee7a3e7a04bcfe63164500fa464c5f9197884de5d25d->leave($__internal_5ed3dbeb22d274af1885ee7a3e7a04bcfe63164500fa464c5f9197884de5d25d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93103a5808b4d02d0885c7fc1272f65add2121e7b5b4306c373c42fe1748ad89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93103a5808b4d02d0885c7fc1272f65add2121e7b5b4306c373c42fe1748ad89->enter($__internal_93103a5808b4d02d0885c7fc1272f65add2121e7b5b4306c373c42fe1748ad89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f98fa7da34f74eb777767c399d176c127928d275241a4bb914f018d5ea4bd110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98fa7da34f74eb777767c399d176c127928d275241a4bb914f018d5ea4bd110->enter($__internal_f98fa7da34f74eb777767c399d176c127928d275241a4bb914f018d5ea4bd110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f98fa7da34f74eb777767c399d176c127928d275241a4bb914f018d5ea4bd110->leave($__internal_f98fa7da34f74eb777767c399d176c127928d275241a4bb914f018d5ea4bd110_prof);

        
        $__internal_93103a5808b4d02d0885c7fc1272f65add2121e7b5b4306c373c42fe1748ad89->leave($__internal_93103a5808b4d02d0885c7fc1272f65add2121e7b5b4306c373c42fe1748ad89_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d15cf9f97bdfa167c9f8eef45309374cf4893aa4e5ac4e6067003f7e8335e8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15cf9f97bdfa167c9f8eef45309374cf4893aa4e5ac4e6067003f7e8335e8c5->enter($__internal_d15cf9f97bdfa167c9f8eef45309374cf4893aa4e5ac4e6067003f7e8335e8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fec770802471d3435998c50ff5b4e57b523fb2fefb7aecab88f3446f7cbc210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec770802471d3435998c50ff5b4e57b523fb2fefb7aecab88f3446f7cbc210e->enter($__internal_fec770802471d3435998c50ff5b4e57b523fb2fefb7aecab88f3446f7cbc210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fec770802471d3435998c50ff5b4e57b523fb2fefb7aecab88f3446f7cbc210e->leave($__internal_fec770802471d3435998c50ff5b4e57b523fb2fefb7aecab88f3446f7cbc210e_prof);

        
        $__internal_d15cf9f97bdfa167c9f8eef45309374cf4893aa4e5ac4e6067003f7e8335e8c5->leave($__internal_d15cf9f97bdfa167c9f8eef45309374cf4893aa4e5ac4e6067003f7e8335e8c5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2307d1b0a180bc95f065ab49854b613783499ad8286e768c3a7f622d656a6d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2307d1b0a180bc95f065ab49854b613783499ad8286e768c3a7f622d656a6d97->enter($__internal_2307d1b0a180bc95f065ab49854b613783499ad8286e768c3a7f622d656a6d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bab9d34238c96be0cc6dffd7a4f5f645d945f3055101a458b4f0e6f45d08ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bab9d34238c96be0cc6dffd7a4f5f645d945f3055101a458b4f0e6f45d08ed3->enter($__internal_5bab9d34238c96be0cc6dffd7a4f5f645d945f3055101a458b4f0e6f45d08ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5bab9d34238c96be0cc6dffd7a4f5f645d945f3055101a458b4f0e6f45d08ed3->leave($__internal_5bab9d34238c96be0cc6dffd7a4f5f645d945f3055101a458b4f0e6f45d08ed3_prof);

        
        $__internal_2307d1b0a180bc95f065ab49854b613783499ad8286e768c3a7f622d656a6d97->leave($__internal_2307d1b0a180bc95f065ab49854b613783499ad8286e768c3a7f622d656a6d97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
