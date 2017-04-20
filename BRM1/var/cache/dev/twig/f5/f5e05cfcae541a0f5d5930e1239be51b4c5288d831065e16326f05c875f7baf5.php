<?php

/* bibliography/index.html.twig */
class __TwigTemplate_bbc260f4eeab764eb908bc41ccd8d77567fb839da85580e9044866f0fcd953bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/index.html.twig", 1);
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
        $__internal_58121a7d8b57a4f5d561e88c417ab741369b8853a02f6e14d75a4e8ecccb53ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58121a7d8b57a4f5d561e88c417ab741369b8853a02f6e14d75a4e8ecccb53ff->enter($__internal_58121a7d8b57a4f5d561e88c417ab741369b8853a02f6e14d75a4e8ecccb53ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $__internal_7119ff228e6b0e6a29ba0015b1b68f69dd63bdb2076e839d226c24228937cf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7119ff228e6b0e6a29ba0015b1b68f69dd63bdb2076e839d226c24228937cf9e->enter($__internal_7119ff228e6b0e6a29ba0015b1b68f69dd63bdb2076e839d226c24228937cf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58121a7d8b57a4f5d561e88c417ab741369b8853a02f6e14d75a4e8ecccb53ff->leave($__internal_58121a7d8b57a4f5d561e88c417ab741369b8853a02f6e14d75a4e8ecccb53ff_prof);

        
        $__internal_7119ff228e6b0e6a29ba0015b1b68f69dd63bdb2076e839d226c24228937cf9e->leave($__internal_7119ff228e6b0e6a29ba0015b1b68f69dd63bdb2076e839d226c24228937cf9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fba11bbbb2c6fb0db74d87b74f3cf5ef51a645b5e361009471c7597b86651c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fba11bbbb2c6fb0db74d87b74f3cf5ef51a645b5e361009471c7597b86651c1->enter($__internal_1fba11bbbb2c6fb0db74d87b74f3cf5ef51a645b5e361009471c7597b86651c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1de2f683f02fc170867fdd2a156adc923fe2dbef0ebb3b3ad1b28be139d3c102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de2f683f02fc170867fdd2a156adc923fe2dbef0ebb3b3ad1b28be139d3c102->enter($__internal_1de2f683f02fc170867fdd2a156adc923fe2dbef0ebb3b3ad1b28be139d3c102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bibliographies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Bibliography ID</th>
                <th>User ID</th>
                <th>Author</th>
                <th>Year of pubblication</th>
                <th>Title: </th>
                <th>Chapter: </th>
                <th>Editor: </th>
                <th>Edition: </th>
                <th>Place publication:</th>
                <th>Publisher:</th>
                <th>Book:</th>
                <th>Actions: </th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bibliographies"] ?? $this->getContext($context, "bibliographies")));
        foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "bibID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "userID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "yearPub", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "chapter", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "editor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "edition", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "placePub", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "publisher", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["bibliography"], "book", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_edit", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_basket_add", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">add to basket</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

    <ul>
        <li>            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
        echo "\">Create a new bibliography</a>
        </li>
    </ul>
";
        
        $__internal_1de2f683f02fc170867fdd2a156adc923fe2dbef0ebb3b3ad1b28be139d3c102->leave($__internal_1de2f683f02fc170867fdd2a156adc923fe2dbef0ebb3b3ad1b28be139d3c102_prof);

        
        $__internal_1fba11bbbb2c6fb0db74d87b74f3cf5ef51a645b5e361009471c7597b86651c1->leave($__internal_1fba11bbbb2c6fb0db74d87b74f3cf5ef51a645b5e361009471c7597b86651c1_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  160 => 54,  148 => 48,  142 => 45,  136 => 42,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  79 => 27,  76 => 26,  72 => 25,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Bibliographies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Bibliography ID</th>
                <th>User ID</th>
                <th>Author</th>
                <th>Year of pubblication</th>
                <th>Title: </th>
                <th>Chapter: </th>
                <th>Editor: </th>
                <th>Edition: </th>
                <th>Place publication:</th>
                <th>Publisher:</th>
                <th>Book:</th>
                <th>Actions: </th>
            </tr>
        </thead>
        <tbody>
        {% for bibliography in bibliographies %}
            <tr>
                <td><a href=\"{{ path('bibliography_show', { 'id': bibliography.id }) }}\">{{ bibliography.id }}</a></td>
                <td>{{ bibliography.bibID }}</td>
                <td>{{ bibliography.userID }}</td>
                <td>{{ bibliography.author }}</td>
                <td>{{ bibliography.yearPub }}</td>
                <td>{{ bibliography.title }}</td>
                <td>{{ bibliography.chapter }}</td>
                <td>{{ bibliography.editor }}</td>
                <td>{{ bibliography.edition }}</td>
                <td>{{ bibliography.placePub }}</td>
                <td>{{ bibliography.publisher }}</td>
                <td>{% if bibliography.book %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('bibliography_show', { 'id': bibliography.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('bibliography_edit', { 'id': bibliography.id }) }}\">edit</a>
                        </li>
                        <li>
                            <a href=\"{{ path('bibliography_basket_add', { 'id': bibliography.id }) }}\">add to basket</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>            <a href=\"{{ path('bibliography_new') }}\">Create a new bibliography</a>
        </li>
    </ul>
{% endblock %}
", "bibliography/index.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\bibliography\\index.html.twig");
    }
}
