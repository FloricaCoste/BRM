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
        $__internal_3dd6a23624b2bd6ae66d8f7628f0d38cd31263c5bfe22d771dd331ed18e4c7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd6a23624b2bd6ae66d8f7628f0d38cd31263c5bfe22d771dd331ed18e4c7f4->enter($__internal_3dd6a23624b2bd6ae66d8f7628f0d38cd31263c5bfe22d771dd331ed18e4c7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cefa84be22fb51270ca59a64a753819bf3d8211749b8cda90eb912e8468a587b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefa84be22fb51270ca59a64a753819bf3d8211749b8cda90eb912e8468a587b->enter($__internal_cefa84be22fb51270ca59a64a753819bf3d8211749b8cda90eb912e8468a587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd6a23624b2bd6ae66d8f7628f0d38cd31263c5bfe22d771dd331ed18e4c7f4->leave($__internal_3dd6a23624b2bd6ae66d8f7628f0d38cd31263c5bfe22d771dd331ed18e4c7f4_prof);

        
        $__internal_cefa84be22fb51270ca59a64a753819bf3d8211749b8cda90eb912e8468a587b->leave($__internal_cefa84be22fb51270ca59a64a753819bf3d8211749b8cda90eb912e8468a587b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b7f7deb149e712196c1c9544975d855906e75e9ab5a7a150ce9c1f5dc8329d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7f7deb149e712196c1c9544975d855906e75e9ab5a7a150ce9c1f5dc8329d2->enter($__internal_6b7f7deb149e712196c1c9544975d855906e75e9ab5a7a150ce9c1f5dc8329d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aea5b8ba97e90994cef962bc484d0a8263e01401ea6f03f2deb404ae21aa381a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea5b8ba97e90994cef962bc484d0a8263e01401ea6f03f2deb404ae21aa381a->enter($__internal_aea5b8ba97e90994cef962bc484d0a8263e01401ea6f03f2deb404ae21aa381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aea5b8ba97e90994cef962bc484d0a8263e01401ea6f03f2deb404ae21aa381a->leave($__internal_aea5b8ba97e90994cef962bc484d0a8263e01401ea6f03f2deb404ae21aa381a_prof);

        
        $__internal_6b7f7deb149e712196c1c9544975d855906e75e9ab5a7a150ce9c1f5dc8329d2->leave($__internal_6b7f7deb149e712196c1c9544975d855906e75e9ab5a7a150ce9c1f5dc8329d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d5764082f9744d4e676abd05a02aade3f3686b07e1819cad266047a8db5c5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5764082f9744d4e676abd05a02aade3f3686b07e1819cad266047a8db5c5fb->enter($__internal_1d5764082f9744d4e676abd05a02aade3f3686b07e1819cad266047a8db5c5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af00f08ff3657026653d512aa8ef8f642c4ddde9e492b1006e14006c3a2f9096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af00f08ff3657026653d512aa8ef8f642c4ddde9e492b1006e14006c3a2f9096->enter($__internal_af00f08ff3657026653d512aa8ef8f642c4ddde9e492b1006e14006c3a2f9096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af00f08ff3657026653d512aa8ef8f642c4ddde9e492b1006e14006c3a2f9096->leave($__internal_af00f08ff3657026653d512aa8ef8f642c4ddde9e492b1006e14006c3a2f9096_prof);

        
        $__internal_1d5764082f9744d4e676abd05a02aade3f3686b07e1819cad266047a8db5c5fb->leave($__internal_1d5764082f9744d4e676abd05a02aade3f3686b07e1819cad266047a8db5c5fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_903dbb0d91beb40c21a6c500c7b0c98266a751934ca1bf74c6a8013113f3ec89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903dbb0d91beb40c21a6c500c7b0c98266a751934ca1bf74c6a8013113f3ec89->enter($__internal_903dbb0d91beb40c21a6c500c7b0c98266a751934ca1bf74c6a8013113f3ec89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec4a711a0cf8940be7b0584084d05676f365eb4832f1f76dc679bd5595282dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4a711a0cf8940be7b0584084d05676f365eb4832f1f76dc679bd5595282dfd->enter($__internal_ec4a711a0cf8940be7b0584084d05676f365eb4832f1f76dc679bd5595282dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec4a711a0cf8940be7b0584084d05676f365eb4832f1f76dc679bd5595282dfd->leave($__internal_ec4a711a0cf8940be7b0584084d05676f365eb4832f1f76dc679bd5595282dfd_prof);

        
        $__internal_903dbb0d91beb40c21a6c500c7b0c98266a751934ca1bf74c6a8013113f3ec89->leave($__internal_903dbb0d91beb40c21a6c500c7b0c98266a751934ca1bf74c6a8013113f3ec89_prof);

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
