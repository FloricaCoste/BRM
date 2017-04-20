<?php

/* user/edit.html.twig */
class __TwigTemplate_f02df64dabad366743141f2d68dc27b395032c89f6b3d5ea0217a381f1521f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_83b0a65745d5db36788e69f1953ca41ff0e44093f5af619002f11ffac840dd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b0a65745d5db36788e69f1953ca41ff0e44093f5af619002f11ffac840dd73->enter($__internal_83b0a65745d5db36788e69f1953ca41ff0e44093f5af619002f11ffac840dd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_8c0bb7d122930f4fdc1fdd2829706e7fc149b2be07c857f9585454c2c5a6817c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0bb7d122930f4fdc1fdd2829706e7fc149b2be07c857f9585454c2c5a6817c->enter($__internal_8c0bb7d122930f4fdc1fdd2829706e7fc149b2be07c857f9585454c2c5a6817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83b0a65745d5db36788e69f1953ca41ff0e44093f5af619002f11ffac840dd73->leave($__internal_83b0a65745d5db36788e69f1953ca41ff0e44093f5af619002f11ffac840dd73_prof);

        
        $__internal_8c0bb7d122930f4fdc1fdd2829706e7fc149b2be07c857f9585454c2c5a6817c->leave($__internal_8c0bb7d122930f4fdc1fdd2829706e7fc149b2be07c857f9585454c2c5a6817c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea2c2249f7b93f6d62d2e553a73b6c9d9553e78bb583627f0b200be36cecbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea2c2249f7b93f6d62d2e553a73b6c9d9553e78bb583627f0b200be36cecbaa->enter($__internal_5ea2c2249f7b93f6d62d2e553a73b6c9d9553e78bb583627f0b200be36cecbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f350f8a023dbf524a6ee653fd2cb76361aa1d42945ae3532e9ef23164efb9a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f350f8a023dbf524a6ee653fd2cb76361aa1d42945ae3532e9ef23164efb9a2a->enter($__internal_f350f8a023dbf524a6ee653fd2cb76361aa1d42945ae3532e9ef23164efb9a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f350f8a023dbf524a6ee653fd2cb76361aa1d42945ae3532e9ef23164efb9a2a->leave($__internal_f350f8a023dbf524a6ee653fd2cb76361aa1d42945ae3532e9ef23164efb9a2a_prof);

        
        $__internal_5ea2c2249f7b93f6d62d2e553a73b6c9d9553e78bb583627f0b200be36cecbaa->leave($__internal_5ea2c2249f7b93f6d62d2e553a73b6c9d9553e78bb583627f0b200be36cecbaa_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\user\\edit.html.twig");
    }
}
