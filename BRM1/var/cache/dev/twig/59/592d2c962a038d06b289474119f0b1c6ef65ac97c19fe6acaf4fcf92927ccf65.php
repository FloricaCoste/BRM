<?php

/* tag/index.html.twig */
class __TwigTemplate_ec13afe054de097103ea0e15aca0905f6fd73208d5f8ce039b8852ec1990c918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
        $__internal_9c6287b4f0a1c9d919d0ac07a8ef3864c3de7d4aa91c85f5823add67c6661483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6287b4f0a1c9d919d0ac07a8ef3864c3de7d4aa91c85f5823add67c6661483->enter($__internal_9c6287b4f0a1c9d919d0ac07a8ef3864c3de7d4aa91c85f5823add67c6661483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_d1c4475ce01110320096f134a9cd26c2b092f80147dede3ea4864eadb36f919e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c4475ce01110320096f134a9cd26c2b092f80147dede3ea4864eadb36f919e->enter($__internal_d1c4475ce01110320096f134a9cd26c2b092f80147dede3ea4864eadb36f919e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c6287b4f0a1c9d919d0ac07a8ef3864c3de7d4aa91c85f5823add67c6661483->leave($__internal_9c6287b4f0a1c9d919d0ac07a8ef3864c3de7d4aa91c85f5823add67c6661483_prof);

        
        $__internal_d1c4475ce01110320096f134a9cd26c2b092f80147dede3ea4864eadb36f919e->leave($__internal_d1c4475ce01110320096f134a9cd26c2b092f80147dede3ea4864eadb36f919e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37455a886f243178e75ffb04b8e3a79ebab2432f96957a1bed3d8832fa8052c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37455a886f243178e75ffb04b8e3a79ebab2432f96957a1bed3d8832fa8052c0->enter($__internal_37455a886f243178e75ffb04b8e3a79ebab2432f96957a1bed3d8832fa8052c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaf7857b4b176a26d577e23efbf02174e1cb5918ad61a2c3be30e2aa98942e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf7857b4b176a26d577e23efbf02174e1cb5918ad61a2c3be30e2aa98942e11->enter($__internal_eaf7857b4b176a26d577e23efbf02174e1cb5918ad61a2c3be30e2aa98942e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tags list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tagid</th>
                <th>Tagname</th>
                <th>Vote</th>
                <th>Tagstatus</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "vote", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagStatus", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">Create a new tag</a>
        </li>
    </ul>
";
        
        $__internal_eaf7857b4b176a26d577e23efbf02174e1cb5918ad61a2c3be30e2aa98942e11->leave($__internal_eaf7857b4b176a26d577e23efbf02174e1cb5918ad61a2c3be30e2aa98942e11_prof);

        
        $__internal_37455a886f243178e75ffb04b8e3a79ebab2432f96957a1bed3d8832fa8052c0->leave($__internal_37455a886f243178e75ffb04b8e3a79ebab2432f96957a1bed3d8832fa8052c0_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
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
    <h1>Tags list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tagid</th>
                <th>Tagname</th>
                <th>Vote</th>
                <th>Tagstatus</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
            <tr>
                <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                <td>{{ tag.tagID }}</td>
                <td>{{ tag.tagName }}</td>
                <td>{{ tag.vote }}</td>
                <td>{{ tag.tagStatus }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tag_new') }}\">Create a new tag</a>
        </li>
    </ul>
{% endblock %}
", "tag/index.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
