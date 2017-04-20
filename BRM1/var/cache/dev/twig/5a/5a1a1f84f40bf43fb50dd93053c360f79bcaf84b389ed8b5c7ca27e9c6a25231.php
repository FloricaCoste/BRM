<?php

/* user/index.html.twig */
class __TwigTemplate_c95df775237b6d48aec7c4673a5338595da26e849fdb818b4418744c4cac4d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_00daff9e72af1fd09eb59e6eb2569b6cf7e131c268b2023f9a4feae168e22262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00daff9e72af1fd09eb59e6eb2569b6cf7e131c268b2023f9a4feae168e22262->enter($__internal_00daff9e72af1fd09eb59e6eb2569b6cf7e131c268b2023f9a4feae168e22262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_a4367f31e59f8f8db17980c0fbbc34ec7d539d64553af3a149834b21fb0d8264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4367f31e59f8f8db17980c0fbbc34ec7d539d64553af3a149834b21fb0d8264->enter($__internal_a4367f31e59f8f8db17980c0fbbc34ec7d539d64553af3a149834b21fb0d8264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00daff9e72af1fd09eb59e6eb2569b6cf7e131c268b2023f9a4feae168e22262->leave($__internal_00daff9e72af1fd09eb59e6eb2569b6cf7e131c268b2023f9a4feae168e22262_prof);

        
        $__internal_a4367f31e59f8f8db17980c0fbbc34ec7d539d64553af3a149834b21fb0d8264->leave($__internal_a4367f31e59f8f8db17980c0fbbc34ec7d539d64553af3a149834b21fb0d8264_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29abbd10f4fed65475621493a868165c51b2851da039754327f5d6412ae06b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29abbd10f4fed65475621493a868165c51b2851da039754327f5d6412ae06b5d->enter($__internal_29abbd10f4fed65475621493a868165c51b2851da039754327f5d6412ae06b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d71d3876e566db43595ce4f7b73226aeda748e1ab4ada0dd1c8370e52674fa99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71d3876e566db43595ce4f7b73226aeda748e1ab4ada0dd1c8370e52674fa99->enter($__internal_d71d3876e566db43595ce4f7b73226aeda748e1ab4ada0dd1c8370e52674fa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Isactive</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "eMail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_d71d3876e566db43595ce4f7b73226aeda748e1ab4ada0dd1c8370e52674fa99->leave($__internal_d71d3876e566db43595ce4f7b73226aeda748e1ab4ada0dd1c8370e52674fa99_prof);

        
        $__internal_29abbd10f4fed65475621493a868165c51b2851da039754327f5d6412ae06b5d->leave($__internal_29abbd10f4fed65475621493a868165c51b2851da039754327f5d6412ae06b5d_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  121 => 39,  109 => 33,  103 => 30,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Isactive</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.eMail }}</td>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\user\\index.html.twig");
    }
}
