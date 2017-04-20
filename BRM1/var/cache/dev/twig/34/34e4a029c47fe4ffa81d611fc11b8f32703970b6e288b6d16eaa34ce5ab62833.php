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
        $__internal_4f9474345aff85e6062f56a7a15cc6d21ce96dd987c62da5ad6966e8312842b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9474345aff85e6062f56a7a15cc6d21ce96dd987c62da5ad6966e8312842b3->enter($__internal_4f9474345aff85e6062f56a7a15cc6d21ce96dd987c62da5ad6966e8312842b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_51489c4421d20a7bba4fd506275ed3afa84f64815aef649c76f8f1df0a027f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51489c4421d20a7bba4fd506275ed3afa84f64815aef649c76f8f1df0a027f6e->enter($__internal_51489c4421d20a7bba4fd506275ed3afa84f64815aef649c76f8f1df0a027f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9474345aff85e6062f56a7a15cc6d21ce96dd987c62da5ad6966e8312842b3->leave($__internal_4f9474345aff85e6062f56a7a15cc6d21ce96dd987c62da5ad6966e8312842b3_prof);

        
        $__internal_51489c4421d20a7bba4fd506275ed3afa84f64815aef649c76f8f1df0a027f6e->leave($__internal_51489c4421d20a7bba4fd506275ed3afa84f64815aef649c76f8f1df0a027f6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d57c8c9023985eb31a48093555311f1aa2bbc8bc10c7f6923b9f2ba6d59f8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d57c8c9023985eb31a48093555311f1aa2bbc8bc10c7f6923b9f2ba6d59f8d8->enter($__internal_6d57c8c9023985eb31a48093555311f1aa2bbc8bc10c7f6923b9f2ba6d59f8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35783223102e2a3a946c8a07855edeef75bc72b094b3149e8ed94f6cda1ee9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35783223102e2a3a946c8a07855edeef75bc72b094b3149e8ed94f6cda1ee9b2->enter($__internal_35783223102e2a3a946c8a07855edeef75bc72b094b3149e8ed94f6cda1ee9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_35783223102e2a3a946c8a07855edeef75bc72b094b3149e8ed94f6cda1ee9b2->leave($__internal_35783223102e2a3a946c8a07855edeef75bc72b094b3149e8ed94f6cda1ee9b2_prof);

        
        $__internal_6d57c8c9023985eb31a48093555311f1aa2bbc8bc10c7f6923b9f2ba6d59f8d8->leave($__internal_6d57c8c9023985eb31a48093555311f1aa2bbc8bc10c7f6923b9f2ba6d59f8d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdd89074a6c84a2712acd907afbbc2014b140ff770d48990e0f6f4930d9678ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd89074a6c84a2712acd907afbbc2014b140ff770d48990e0f6f4930d9678ec->enter($__internal_bdd89074a6c84a2712acd907afbbc2014b140ff770d48990e0f6f4930d9678ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e40ebd7f9ae7d960efbe7d68cf64e9545209a8d2475435d32d0a6733d689b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e40ebd7f9ae7d960efbe7d68cf64e9545209a8d2475435d32d0a6733d689b09->enter($__internal_4e40ebd7f9ae7d960efbe7d68cf64e9545209a8d2475435d32d0a6733d689b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4e40ebd7f9ae7d960efbe7d68cf64e9545209a8d2475435d32d0a6733d689b09->leave($__internal_4e40ebd7f9ae7d960efbe7d68cf64e9545209a8d2475435d32d0a6733d689b09_prof);

        
        $__internal_bdd89074a6c84a2712acd907afbbc2014b140ff770d48990e0f6f4930d9678ec->leave($__internal_bdd89074a6c84a2712acd907afbbc2014b140ff770d48990e0f6f4930d9678ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88f2bbb2510290cbe52b7de335305ab0428ad5bbdf47e8010e63e4b692f51d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f2bbb2510290cbe52b7de335305ab0428ad5bbdf47e8010e63e4b692f51d03->enter($__internal_88f2bbb2510290cbe52b7de335305ab0428ad5bbdf47e8010e63e4b692f51d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41a9a3fa337b4f7fd5a51de052994ffe46b43963bb1dd97f012d7d8c513eae52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a9a3fa337b4f7fd5a51de052994ffe46b43963bb1dd97f012d7d8c513eae52->enter($__internal_41a9a3fa337b4f7fd5a51de052994ffe46b43963bb1dd97f012d7d8c513eae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_41a9a3fa337b4f7fd5a51de052994ffe46b43963bb1dd97f012d7d8c513eae52->leave($__internal_41a9a3fa337b4f7fd5a51de052994ffe46b43963bb1dd97f012d7d8c513eae52_prof);

        
        $__internal_88f2bbb2510290cbe52b7de335305ab0428ad5bbdf47e8010e63e4b692f51d03->leave($__internal_88f2bbb2510290cbe52b7de335305ab0428ad5bbdf47e8010e63e4b692f51d03_prof);

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
