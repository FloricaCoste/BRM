<?php

/* referent/index.html.twig */
class __TwigTemplate_1d5e08507c3736183c4b04a2d35ba007f9da13b43cd95da9c180cf192bd65618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "referent/index.html.twig", 1);
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
        $__internal_984e6f1658b10ae7dfb0281603129198be6d0237024e1a7a832825797202aff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984e6f1658b10ae7dfb0281603129198be6d0237024e1a7a832825797202aff0->enter($__internal_984e6f1658b10ae7dfb0281603129198be6d0237024e1a7a832825797202aff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "referent/index.html.twig"));

        $__internal_7bf9fe2bee356c83eb97dc8f3fd045d514ebac8cf4a43e50139784ce5901f6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf9fe2bee356c83eb97dc8f3fd045d514ebac8cf4a43e50139784ce5901f6ea->enter($__internal_7bf9fe2bee356c83eb97dc8f3fd045d514ebac8cf4a43e50139784ce5901f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "referent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_984e6f1658b10ae7dfb0281603129198be6d0237024e1a7a832825797202aff0->leave($__internal_984e6f1658b10ae7dfb0281603129198be6d0237024e1a7a832825797202aff0_prof);

        
        $__internal_7bf9fe2bee356c83eb97dc8f3fd045d514ebac8cf4a43e50139784ce5901f6ea->leave($__internal_7bf9fe2bee356c83eb97dc8f3fd045d514ebac8cf4a43e50139784ce5901f6ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd0f4485d5977c50556daec30a3bb46aa77488f8ecd8782866ba7fec2fc2e934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0f4485d5977c50556daec30a3bb46aa77488f8ecd8782866ba7fec2fc2e934->enter($__internal_cd0f4485d5977c50556daec30a3bb46aa77488f8ecd8782866ba7fec2fc2e934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d18f4c1c148e6b2ebebd16075d8278d00896a0d0ba42097e11fb9d21d92ea849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18f4c1c148e6b2ebebd16075d8278d00896a0d0ba42097e11fb9d21d92ea849->enter($__internal_d18f4c1c148e6b2ebebd16075d8278d00896a0d0ba42097e11fb9d21d92ea849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Referents list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>User ID</th>
                <th>Status ID</th>
                <th>Date edit</th>
                <th>Reader</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["referents"] ?? $this->getContext($context, "referents")));
        foreach ($context['_seq'] as $context["_key"] => $context["referent"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("referent_show", array("id" => $this->getAttribute($context["referent"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["referent"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["referent"], "userID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["referent"], "statusID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["referent"], "dateEdit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["referent"], "reader", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("referent_show", array("id" => $this->getAttribute($context["referent"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("referent_edit", array("id" => $this->getAttribute($context["referent"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("referent_new");
        echo "\">Create a new referent</a>
        </li>
    </ul>
";
        
        $__internal_d18f4c1c148e6b2ebebd16075d8278d00896a0d0ba42097e11fb9d21d92ea849->leave($__internal_d18f4c1c148e6b2ebebd16075d8278d00896a0d0ba42097e11fb9d21d92ea849_prof);

        
        $__internal_cd0f4485d5977c50556daec30a3bb46aa77488f8ecd8782866ba7fec2fc2e934->leave($__internal_cd0f4485d5977c50556daec30a3bb46aa77488f8ecd8782866ba7fec2fc2e934_prof);

    }

    public function getTemplateName()
    {
        return "referent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Referents list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>User ID</th>
                <th>Status ID</th>
                <th>Date edit</th>
                <th>Reader</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for referent in referents %}
            <tr>
                <td><a href=\"{{ path('referent_show', { 'id': referent.id }) }}\">{{ referent.id }}</a></td>
                <td>{{ referent.userID }}</td>
                <td>{{ referent.statusID }}</td>
                <td>{{ referent.dateEdit }}</td>
                <td>{{ referent.reader }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('referent_show', { 'id': referent.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('referent_edit', { 'id': referent.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('referent_new') }}\">Create a new referent</a>
        </li>
    </ul>
{% endblock %}
", "referent/index.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\referent\\index.html.twig");
    }
}
