<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d69a53e4b74858860d7271b8fa047330c508ff6e71f4164011ebb8ff6714ac3b extends Twig_Template
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
        $__internal_13e443126b58bdfe656d68f17139e30dc70b60e8dacabc0f6ed114544fda0c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e443126b58bdfe656d68f17139e30dc70b60e8dacabc0f6ed114544fda0c79->enter($__internal_13e443126b58bdfe656d68f17139e30dc70b60e8dacabc0f6ed114544fda0c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9b50279cda33ed733d4faa5567a938a3697ffc2e854d9a45fcc688b1ab986a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b50279cda33ed733d4faa5567a938a3697ffc2e854d9a45fcc688b1ab986a2d->enter($__internal_9b50279cda33ed733d4faa5567a938a3697ffc2e854d9a45fcc688b1ab986a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13e443126b58bdfe656d68f17139e30dc70b60e8dacabc0f6ed114544fda0c79->leave($__internal_13e443126b58bdfe656d68f17139e30dc70b60e8dacabc0f6ed114544fda0c79_prof);

        
        $__internal_9b50279cda33ed733d4faa5567a938a3697ffc2e854d9a45fcc688b1ab986a2d->leave($__internal_9b50279cda33ed733d4faa5567a938a3697ffc2e854d9a45fcc688b1ab986a2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20624cb74217a508b514e76c8159fdc49d8ae2fb1cb9eb9bd2ee70bd6faa91b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20624cb74217a508b514e76c8159fdc49d8ae2fb1cb9eb9bd2ee70bd6faa91b1->enter($__internal_20624cb74217a508b514e76c8159fdc49d8ae2fb1cb9eb9bd2ee70bd6faa91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d241cb54ad13c5e9408652547bec2c9a87dd01e2db41d0d1507a463e7300522d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d241cb54ad13c5e9408652547bec2c9a87dd01e2db41d0d1507a463e7300522d->enter($__internal_d241cb54ad13c5e9408652547bec2c9a87dd01e2db41d0d1507a463e7300522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d241cb54ad13c5e9408652547bec2c9a87dd01e2db41d0d1507a463e7300522d->leave($__internal_d241cb54ad13c5e9408652547bec2c9a87dd01e2db41d0d1507a463e7300522d_prof);

        
        $__internal_20624cb74217a508b514e76c8159fdc49d8ae2fb1cb9eb9bd2ee70bd6faa91b1->leave($__internal_20624cb74217a508b514e76c8159fdc49d8ae2fb1cb9eb9bd2ee70bd6faa91b1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f638725de704dfdb208f6c89f9ce34c0416ffda1ddfdabd9103572c4bd58b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f638725de704dfdb208f6c89f9ce34c0416ffda1ddfdabd9103572c4bd58b05->enter($__internal_2f638725de704dfdb208f6c89f9ce34c0416ffda1ddfdabd9103572c4bd58b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c261c9315279363a5ea621db1ce0724fd5eb23e7e0e2fcd83231d88b389257d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c261c9315279363a5ea621db1ce0724fd5eb23e7e0e2fcd83231d88b389257d5->enter($__internal_c261c9315279363a5ea621db1ce0724fd5eb23e7e0e2fcd83231d88b389257d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c261c9315279363a5ea621db1ce0724fd5eb23e7e0e2fcd83231d88b389257d5->leave($__internal_c261c9315279363a5ea621db1ce0724fd5eb23e7e0e2fcd83231d88b389257d5_prof);

        
        $__internal_2f638725de704dfdb208f6c89f9ce34c0416ffda1ddfdabd9103572c4bd58b05->leave($__internal_2f638725de704dfdb208f6c89f9ce34c0416ffda1ddfdabd9103572c4bd58b05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0346b35c3402986db3bb71d22e76d0f28d7f556e2c283fdb5aa74c6b853bda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0346b35c3402986db3bb71d22e76d0f28d7f556e2c283fdb5aa74c6b853bda4->enter($__internal_d0346b35c3402986db3bb71d22e76d0f28d7f556e2c283fdb5aa74c6b853bda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a96ef430015c1f478f6d3cb3e474988bf8c71a4beb5f9288c96159bc0e8427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a96ef430015c1f478f6d3cb3e474988bf8c71a4beb5f9288c96159bc0e8427b->enter($__internal_0a96ef430015c1f478f6d3cb3e474988bf8c71a4beb5f9288c96159bc0e8427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0a96ef430015c1f478f6d3cb3e474988bf8c71a4beb5f9288c96159bc0e8427b->leave($__internal_0a96ef430015c1f478f6d3cb3e474988bf8c71a4beb5f9288c96159bc0e8427b_prof);

        
        $__internal_d0346b35c3402986db3bb71d22e76d0f28d7f556e2c283fdb5aa74c6b853bda4->leave($__internal_d0346b35c3402986db3bb71d22e76d0f28d7f556e2c283fdb5aa74c6b853bda4_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
