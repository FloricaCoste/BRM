<?php

/* user/new.html.twig */
class __TwigTemplate_babe5791c4d4c01a27448ec52ae66861f2e0fba36fd1075bd83b3b6a2afff58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f8fd443600b755fcdef8d2811df20167ec5c585235a865a59a4b1eafbdc3c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8fd443600b755fcdef8d2811df20167ec5c585235a865a59a4b1eafbdc3c9d->enter($__internal_5f8fd443600b755fcdef8d2811df20167ec5c585235a865a59a4b1eafbdc3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_90f0660f3bbd73baff986a88794f4c856f1d2234e573d748d1f9d07489978b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f0660f3bbd73baff986a88794f4c856f1d2234e573d748d1f9d07489978b4a->enter($__internal_90f0660f3bbd73baff986a88794f4c856f1d2234e573d748d1f9d07489978b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8fd443600b755fcdef8d2811df20167ec5c585235a865a59a4b1eafbdc3c9d->leave($__internal_5f8fd443600b755fcdef8d2811df20167ec5c585235a865a59a4b1eafbdc3c9d_prof);

        
        $__internal_90f0660f3bbd73baff986a88794f4c856f1d2234e573d748d1f9d07489978b4a->leave($__internal_90f0660f3bbd73baff986a88794f4c856f1d2234e573d748d1f9d07489978b4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_627040db4cc506a5d6668cfc63548d4dd9742febadcfb692272550d5226f1a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627040db4cc506a5d6668cfc63548d4dd9742febadcfb692272550d5226f1a8d->enter($__internal_627040db4cc506a5d6668cfc63548d4dd9742febadcfb692272550d5226f1a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_519863d766cc3fe2b6bf2198d5797770e06501789a0c076986ee3b375ee60efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519863d766cc3fe2b6bf2198d5797770e06501789a0c076986ee3b375ee60efc->enter($__internal_519863d766cc3fe2b6bf2198d5797770e06501789a0c076986ee3b375ee60efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_519863d766cc3fe2b6bf2198d5797770e06501789a0c076986ee3b375ee60efc->leave($__internal_519863d766cc3fe2b6bf2198d5797770e06501789a0c076986ee3b375ee60efc_prof);

        
        $__internal_627040db4cc506a5d6668cfc63548d4dd9742febadcfb692272550d5226f1a8d->leave($__internal_627040db4cc506a5d6668cfc63548d4dd9742febadcfb692272550d5226f1a8d_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\user\\new.html.twig");
    }
}
