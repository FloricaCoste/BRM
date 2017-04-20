<?php

/* security/login.html.twig */
class __TwigTemplate_9dee038bd0be54fb350f65844b43f2aada9bfceacee1ffa1b0f5bb79f0276b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'pagerTitle' => array($this, 'block_pagerTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f372573452bad40d2a452a55a9ccb8a6c3936203c22669c189f86553e181105f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f372573452bad40d2a452a55a9ccb8a6c3936203c22669c189f86553e181105f->enter($__internal_f372573452bad40d2a452a55a9ccb8a6c3936203c22669c189f86553e181105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_2f0be6dbb3abf37e7c1b92f214447ab8bd085c57014f13c6000f020c0ec25728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0be6dbb3abf37e7c1b92f214447ab8bd085c57014f13c6000f020c0ec25728->enter($__internal_2f0be6dbb3abf37e7c1b92f214447ab8bd085c57014f13c6000f020c0ec25728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f372573452bad40d2a452a55a9ccb8a6c3936203c22669c189f86553e181105f->leave($__internal_f372573452bad40d2a452a55a9ccb8a6c3936203c22669c189f86553e181105f_prof);

        
        $__internal_2f0be6dbb3abf37e7c1b92f214447ab8bd085c57014f13c6000f020c0ec25728->leave($__internal_2f0be6dbb3abf37e7c1b92f214447ab8bd085c57014f13c6000f020c0ec25728_prof);

    }

    // line 2
    public function block_pagerTitle($context, array $blocks = array())
    {
        $__internal_1df847e6d87807a62c81ece8ebfb5df5485c373b6247a0b1d52edb4afbacafd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df847e6d87807a62c81ece8ebfb5df5485c373b6247a0b1d52edb4afbacafd6->enter($__internal_1df847e6d87807a62c81ece8ebfb5df5485c373b6247a0b1d52edb4afbacafd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagerTitle"));

        $__internal_d5c2f612826ac3fad15fc7ed95874f1f41d752d93b77ccefa6ccf3d610d4c63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c2f612826ac3fad15fc7ed95874f1f41d752d93b77ccefa6ccf3d610d4c63c->enter($__internal_d5c2f612826ac3fad15fc7ed95874f1f41d752d93b77ccefa6ccf3d610d4c63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagerTitle"));

        echo "Login";
        
        $__internal_d5c2f612826ac3fad15fc7ed95874f1f41d752d93b77ccefa6ccf3d610d4c63c->leave($__internal_d5c2f612826ac3fad15fc7ed95874f1f41d752d93b77ccefa6ccf3d610d4c63c_prof);

        
        $__internal_1df847e6d87807a62c81ece8ebfb5df5485c373b6247a0b1d52edb4afbacafd6->leave($__internal_1df847e6d87807a62c81ece8ebfb5df5485c373b6247a0b1d52edb4afbacafd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7de12c0e954d16cc90100b8dcad7285b6404671841db9a249dc7e1d9a7c61a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7de12c0e954d16cc90100b8dcad7285b6404671841db9a249dc7e1d9a7c61a5->enter($__internal_e7de12c0e954d16cc90100b8dcad7285b6404671841db9a249dc7e1d9a7c61a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d02e79cee5f5710d0c69a08c2793213fc7290dacd26dde388407e5f19aa83899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02e79cee5f5710d0c69a08c2793213fc7290dacd26dde388407e5f19aa83899->enter($__internal_d02e79cee5f5710d0c69a08c2793213fc7290dacd26dde388407e5f19aa83899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <h1>Login</h1>
        ";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\"><input type=\"hidden\" name=\"_csrf_token\"
                                                                 value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >
            <p>
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            <p>
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            <p>
                <button type=\"submit\">login</button> </form>
    ";
        
        $__internal_d02e79cee5f5710d0c69a08c2793213fc7290dacd26dde388407e5f19aa83899->leave($__internal_d02e79cee5f5710d0c69a08c2793213fc7290dacd26dde388407e5f19aa83899_prof);

        
        $__internal_e7de12c0e954d16cc90100b8dcad7285b6404671841db9a249dc7e1d9a7c61a5->leave($__internal_e7de12c0e954d16cc90100b8dcad7285b6404671841db9a249dc7e1d9a7c61a5_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 13,  84 => 9,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    {% block pagerTitle %}Login{% endblock %}
    {% block body %}
        <h1>Login</h1>
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <form action=\"{{ path('login') }}\" method=\"post\"><input type=\"hidden\" name=\"_csrf_token\"
                                                                 value=\"{{ csrf_token('authenticate') }}\"
            >
            <p>
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
            <p>
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            <p>
                <button type=\"submit\">login</button> </form>
    {% endblock %}", "security/login.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\security\\login.html.twig");
    }
}
