<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_71001b70e3e97040e1807b9f9e7701680cb7a243ecef61cf944e913337471340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e950a7fa95d7c9c425b206332ca5f00d534dc0c63523bdadc36ea12f1ac1062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e950a7fa95d7c9c425b206332ca5f00d534dc0c63523bdadc36ea12f1ac1062->enter($__internal_3e950a7fa95d7c9c425b206332ca5f00d534dc0c63523bdadc36ea12f1ac1062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7344752c2f3304b57182e56f356ef0d78f72ac0ee64f5a713d668533c903db8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7344752c2f3304b57182e56f356ef0d78f72ac0ee64f5a713d668533c903db8e->enter($__internal_7344752c2f3304b57182e56f356ef0d78f72ac0ee64f5a713d668533c903db8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e950a7fa95d7c9c425b206332ca5f00d534dc0c63523bdadc36ea12f1ac1062->leave($__internal_3e950a7fa95d7c9c425b206332ca5f00d534dc0c63523bdadc36ea12f1ac1062_prof);

        
        $__internal_7344752c2f3304b57182e56f356ef0d78f72ac0ee64f5a713d668533c903db8e->leave($__internal_7344752c2f3304b57182e56f356ef0d78f72ac0ee64f5a713d668533c903db8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f23f07cdbd1fe7ab46fbac1d0f9c3efa89070ba492221836fa7475656f96446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f23f07cdbd1fe7ab46fbac1d0f9c3efa89070ba492221836fa7475656f96446->enter($__internal_1f23f07cdbd1fe7ab46fbac1d0f9c3efa89070ba492221836fa7475656f96446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b02aef163c0b220ab08e4e8a9353bbc5889cbe46cad86c8add37a38495bdc17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b02aef163c0b220ab08e4e8a9353bbc5889cbe46cad86c8add37a38495bdc17->enter($__internal_1b02aef163c0b220ab08e4e8a9353bbc5889cbe46cad86c8add37a38495bdc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1b02aef163c0b220ab08e4e8a9353bbc5889cbe46cad86c8add37a38495bdc17->leave($__internal_1b02aef163c0b220ab08e4e8a9353bbc5889cbe46cad86c8add37a38495bdc17_prof);

        
        $__internal_1f23f07cdbd1fe7ab46fbac1d0f9c3efa89070ba492221836fa7475656f96446->leave($__internal_1f23f07cdbd1fe7ab46fbac1d0f9c3efa89070ba492221836fa7475656f96446_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
