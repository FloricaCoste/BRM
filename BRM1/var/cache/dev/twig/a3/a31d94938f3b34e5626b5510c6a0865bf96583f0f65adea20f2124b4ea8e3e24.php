<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57455bc33aecfac6544ea92ce7609362e910188355485e171a00baa0113b4cdc extends Twig_Template
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
        $__internal_af9ee353b6af8e5467372932023f96aa71ecd038e66c569453f257bed3d0ba65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9ee353b6af8e5467372932023f96aa71ecd038e66c569453f257bed3d0ba65->enter($__internal_af9ee353b6af8e5467372932023f96aa71ecd038e66c569453f257bed3d0ba65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_385adadfa1af4543dcfcf2e94dd46f64c3e99c23a096ad8628d24ba84e1ed66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385adadfa1af4543dcfcf2e94dd46f64c3e99c23a096ad8628d24ba84e1ed66c->enter($__internal_385adadfa1af4543dcfcf2e94dd46f64c3e99c23a096ad8628d24ba84e1ed66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af9ee353b6af8e5467372932023f96aa71ecd038e66c569453f257bed3d0ba65->leave($__internal_af9ee353b6af8e5467372932023f96aa71ecd038e66c569453f257bed3d0ba65_prof);

        
        $__internal_385adadfa1af4543dcfcf2e94dd46f64c3e99c23a096ad8628d24ba84e1ed66c->leave($__internal_385adadfa1af4543dcfcf2e94dd46f64c3e99c23a096ad8628d24ba84e1ed66c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05e8eba308593c1399bce10152aaeba1ea97deaa0323646ba46cfdf12b7042a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e8eba308593c1399bce10152aaeba1ea97deaa0323646ba46cfdf12b7042a4->enter($__internal_05e8eba308593c1399bce10152aaeba1ea97deaa0323646ba46cfdf12b7042a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b12df0fd55661e7ad36884a06e94b5bd46be200f16289fd98966203bbcac6eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12df0fd55661e7ad36884a06e94b5bd46be200f16289fd98966203bbcac6eb0->enter($__internal_b12df0fd55661e7ad36884a06e94b5bd46be200f16289fd98966203bbcac6eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b12df0fd55661e7ad36884a06e94b5bd46be200f16289fd98966203bbcac6eb0->leave($__internal_b12df0fd55661e7ad36884a06e94b5bd46be200f16289fd98966203bbcac6eb0_prof);

        
        $__internal_05e8eba308593c1399bce10152aaeba1ea97deaa0323646ba46cfdf12b7042a4->leave($__internal_05e8eba308593c1399bce10152aaeba1ea97deaa0323646ba46cfdf12b7042a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fd9881647bf90d63029bfed9ce972c3d7726cadf2fb2f151c85f483c0b73c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd9881647bf90d63029bfed9ce972c3d7726cadf2fb2f151c85f483c0b73c04->enter($__internal_5fd9881647bf90d63029bfed9ce972c3d7726cadf2fb2f151c85f483c0b73c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_796633df7d2d0da41e7bb51e274cc61fa51d73eb611437b5194c0a82eb790b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796633df7d2d0da41e7bb51e274cc61fa51d73eb611437b5194c0a82eb790b5e->enter($__internal_796633df7d2d0da41e7bb51e274cc61fa51d73eb611437b5194c0a82eb790b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_796633df7d2d0da41e7bb51e274cc61fa51d73eb611437b5194c0a82eb790b5e->leave($__internal_796633df7d2d0da41e7bb51e274cc61fa51d73eb611437b5194c0a82eb790b5e_prof);

        
        $__internal_5fd9881647bf90d63029bfed9ce972c3d7726cadf2fb2f151c85f483c0b73c04->leave($__internal_5fd9881647bf90d63029bfed9ce972c3d7726cadf2fb2f151c85f483c0b73c04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dc64f9894b9cb4905b93360aff7bb468afc892ec4fe6f600073ad1d5c52782a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc64f9894b9cb4905b93360aff7bb468afc892ec4fe6f600073ad1d5c52782a->enter($__internal_0dc64f9894b9cb4905b93360aff7bb468afc892ec4fe6f600073ad1d5c52782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57813ef1ad2a08dee07bdee6d9243867f5e705779689075e871f5445da25e1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57813ef1ad2a08dee07bdee6d9243867f5e705779689075e871f5445da25e1a9->enter($__internal_57813ef1ad2a08dee07bdee6d9243867f5e705779689075e871f5445da25e1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57813ef1ad2a08dee07bdee6d9243867f5e705779689075e871f5445da25e1a9->leave($__internal_57813ef1ad2a08dee07bdee6d9243867f5e705779689075e871f5445da25e1a9_prof);

        
        $__internal_0dc64f9894b9cb4905b93360aff7bb468afc892ec4fe6f600073ad1d5c52782a->leave($__internal_0dc64f9894b9cb4905b93360aff7bb468afc892ec4fe6f600073ad1d5c52782a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
