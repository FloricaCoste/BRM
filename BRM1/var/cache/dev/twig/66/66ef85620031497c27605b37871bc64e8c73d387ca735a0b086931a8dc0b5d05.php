<?php

/* user/show.html.twig */
class __TwigTemplate_1274d7f1f6d5278392036fddf0d61fa17e117a897718e2c9eec80d16e613147a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_705c943db14aef5dd182f17d322ef89b559ee0883cf238a229839cc26fe21761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705c943db14aef5dd182f17d322ef89b559ee0883cf238a229839cc26fe21761->enter($__internal_705c943db14aef5dd182f17d322ef89b559ee0883cf238a229839cc26fe21761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6d45f0a06342de4c59866000276b738c51e70104baab99459c516bab95543067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d45f0a06342de4c59866000276b738c51e70104baab99459c516bab95543067->enter($__internal_6d45f0a06342de4c59866000276b738c51e70104baab99459c516bab95543067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705c943db14aef5dd182f17d322ef89b559ee0883cf238a229839cc26fe21761->leave($__internal_705c943db14aef5dd182f17d322ef89b559ee0883cf238a229839cc26fe21761_prof);

        
        $__internal_6d45f0a06342de4c59866000276b738c51e70104baab99459c516bab95543067->leave($__internal_6d45f0a06342de4c59866000276b738c51e70104baab99459c516bab95543067_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aeb3bc7b81263a7155b1c07ba40d26970625f0993ef035b92f8576a1abfa3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aeb3bc7b81263a7155b1c07ba40d26970625f0993ef035b92f8576a1abfa3ca->enter($__internal_3aeb3bc7b81263a7155b1c07ba40d26970625f0993ef035b92f8576a1abfa3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c33d6d8b3ece8c9a132b9d67b1317c18da928bf621da85cc494dd9c8a829789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33d6d8b3ece8c9a132b9d67b1317c18da928bf621da85cc494dd9c8a829789e->enter($__internal_c33d6d8b3ece8c9a132b9d67b1317c18da928bf621da85cc494dd9c8a829789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "eMail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "isActive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c33d6d8b3ece8c9a132b9d67b1317c18da928bf621da85cc494dd9c8a829789e->leave($__internal_c33d6d8b3ece8c9a132b9d67b1317c18da928bf621da85cc494dd9c8a829789e_prof);

        
        $__internal_3aeb3bc7b81263a7155b1c07ba40d26970625f0993ef035b92f8576a1abfa3ca->leave($__internal_3aeb3bc7b81263a7155b1c07ba40d26970625f0993ef035b92f8576a1abfa3ca_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  112 => 40,  106 => 37,  96 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.eMail }}</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ user.roles }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\user\\show.html.twig");
    }
}
