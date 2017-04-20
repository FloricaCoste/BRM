<?php

/* base.html.twig */
class __TwigTemplate_e461d95e1d2892cdd0d1b7cffb9be3b485dee7efde8f1ac74c8c1d941ca29aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d8eb8b400d486abe3cea2badffa9523cfd29db4e7d952778fd70e5ea4a103de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8eb8b400d486abe3cea2badffa9523cfd29db4e7d952778fd70e5ea4a103de->enter($__internal_9d8eb8b400d486abe3cea2badffa9523cfd29db4e7d952778fd70e5ea4a103de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d4333144bbfbb5f2cbedbe6fd453763a2458ce02baf8f6ed82d36733710c0f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4333144bbfbb5f2cbedbe6fd453763a2458ce02baf8f6ed82d36733710c0f42->enter($__internal_d4333144bbfbb5f2cbedbe6fd453763a2458ce02baf8f6ed82d36733710c0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["colours"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "colours"), "method");
        // line 3
        if ((null === ($context["colours"] ?? $this->getContext($context, "colours")))) {
            // line 4
            echo "    ";
            $context["colours"] = array("foreground" => "purple", "background" => "paleturquoise");
        }
        // line 10
        echo "
";
        // line 11
        $context["user"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method");
        // line 12
        echo "
    ";
        // line 13
        if ((null === ($context["user"] ?? $this->getContext($context, "user")))) {
            // line 14
            echo "        <p>
            you are not logged in: <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login: </a>
        </p>
    ";
        } else {
            // line 18
            echo "        <header>
            You are logged in as: <strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</strong>
            <br>
            <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout: </a>
        </header>
    ";
        }
        // line 24
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            /*@import \"/../web/css/table.css\";*/
            tr, td {
                border: 0.1rem solid blueviolet;
                padding: 0.5rem;
            }
            table{
                border: 0.1rem solid chocolate;
                padding: 0.5rem;
            }
            body {
                color: ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["colours"] ?? $this->getContext($context, "colours")), "foreground", array(), "array"), "html", null, true);
        echo ";
                background-color: ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["colours"] ?? $this->getContext($context, "colours")), "background", array(), "array"), "html", null, true);
        echo ";
            }
            header {
                text-align: right;
                padding: 0.5rem;
                border-bottom: 0.1rem solid black;
                background-color: darkgray;
            }
            ";
        // line 51
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>


    <ul>

        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("referent_index");
        echo "\">List of referents</a>
        </li>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">List of Bibliography</a>
        </li>
        <li>
            <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">List of referents</a>
        </li>
        <li>
            <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">List of users</a>
        </li>
    </ul>

    <hr>


        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
        
        $__internal_9d8eb8b400d486abe3cea2badffa9523cfd29db4e7d952778fd70e5ea4a103de->leave($__internal_9d8eb8b400d486abe3cea2badffa9523cfd29db4e7d952778fd70e5ea4a103de_prof);

        
        $__internal_d4333144bbfbb5f2cbedbe6fd453763a2458ce02baf8f6ed82d36733710c0f42->leave($__internal_d4333144bbfbb5f2cbedbe6fd453763a2458ce02baf8f6ed82d36733710c0f42_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ce4dfda829295b1bbe37fb12782f2efc29511bf9d02ce51ccd0bacd89aba7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce4dfda829295b1bbe37fb12782f2efc29511bf9d02ce51ccd0bacd89aba7ff->enter($__internal_1ce4dfda829295b1bbe37fb12782f2efc29511bf9d02ce51ccd0bacd89aba7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07ea5103c661dbb4e52644f3562588d24be0008febac1f4767ea8a00cd42ffd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ea5103c661dbb4e52644f3562588d24be0008febac1f4767ea8a00cd42ffd3->enter($__internal_07ea5103c661dbb4e52644f3562588d24be0008febac1f4767ea8a00cd42ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07ea5103c661dbb4e52644f3562588d24be0008febac1f4767ea8a00cd42ffd3->leave($__internal_07ea5103c661dbb4e52644f3562588d24be0008febac1f4767ea8a00cd42ffd3_prof);

        
        $__internal_1ce4dfda829295b1bbe37fb12782f2efc29511bf9d02ce51ccd0bacd89aba7ff->leave($__internal_1ce4dfda829295b1bbe37fb12782f2efc29511bf9d02ce51ccd0bacd89aba7ff_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_517d03cc0170fb216698036ebe9e6f45fa71f5617ab933ddb2cef7da32c32e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517d03cc0170fb216698036ebe9e6f45fa71f5617ab933ddb2cef7da32c32e0f->enter($__internal_517d03cc0170fb216698036ebe9e6f45fa71f5617ab933ddb2cef7da32c32e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2d22edfb85c28f264b24c9d6d13666cc421c12f8a0dc0b6d9cc4344e42e5e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d22edfb85c28f264b24c9d6d13666cc421c12f8a0dc0b6d9cc4344e42e5e97->enter($__internal_b2d22edfb85c28f264b24c9d6d13666cc421c12f8a0dc0b6d9cc4344e42e5e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        echo "            ";
        
        $__internal_b2d22edfb85c28f264b24c9d6d13666cc421c12f8a0dc0b6d9cc4344e42e5e97->leave($__internal_b2d22edfb85c28f264b24c9d6d13666cc421c12f8a0dc0b6d9cc4344e42e5e97_prof);

        
        $__internal_517d03cc0170fb216698036ebe9e6f45fa71f5617ab933ddb2cef7da32c32e0f->leave($__internal_517d03cc0170fb216698036ebe9e6f45fa71f5617ab933ddb2cef7da32c32e0f_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d08db70416b6ea1745fb982c3168bee6a56241872124382f9ec6e6568aa280d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d08db70416b6ea1745fb982c3168bee6a56241872124382f9ec6e6568aa280d->enter($__internal_8d08db70416b6ea1745fb982c3168bee6a56241872124382f9ec6e6568aa280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a30b1f4c3b14ef7afcbf505226241343065e162999f17b5242145bb6773d713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a30b1f4c3b14ef7afcbf505226241343065e162999f17b5242145bb6773d713->enter($__internal_9a30b1f4c3b14ef7afcbf505226241343065e162999f17b5242145bb6773d713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a30b1f4c3b14ef7afcbf505226241343065e162999f17b5242145bb6773d713->leave($__internal_9a30b1f4c3b14ef7afcbf505226241343065e162999f17b5242145bb6773d713_prof);

        
        $__internal_8d08db70416b6ea1745fb982c3168bee6a56241872124382f9ec6e6568aa280d->leave($__internal_8d08db70416b6ea1745fb982c3168bee6a56241872124382f9ec6e6568aa280d_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_033b2ba47f8fb75a0dca9d2c13580e916fe3129f18cc7ee5410b08c4a8f567c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033b2ba47f8fb75a0dca9d2c13580e916fe3129f18cc7ee5410b08c4a8f567c7->enter($__internal_033b2ba47f8fb75a0dca9d2c13580e916fe3129f18cc7ee5410b08c4a8f567c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_be73880c960cd9320adc5b7654160b314e891a923cd77c4b10c140dcb8ba7d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be73880c960cd9320adc5b7654160b314e891a923cd77c4b10c140dcb8ba7d95->enter($__internal_be73880c960cd9320adc5b7654160b314e891a923cd77c4b10c140dcb8ba7d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be73880c960cd9320adc5b7654160b314e891a923cd77c4b10c140dcb8ba7d95->leave($__internal_be73880c960cd9320adc5b7654160b314e891a923cd77c4b10c140dcb8ba7d95_prof);

        
        $__internal_033b2ba47f8fb75a0dca9d2c13580e916fe3129f18cc7ee5410b08c4a8f567c7->leave($__internal_033b2ba47f8fb75a0dca9d2c13580e916fe3129f18cc7ee5410b08c4a8f567c7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 79,  209 => 78,  199 => 52,  190 => 51,  172 => 30,  160 => 80,  157 => 79,  155 => 78,  145 => 71,  139 => 68,  133 => 65,  127 => 62,  116 => 54,  113 => 53,  111 => 51,  100 => 43,  96 => 42,  81 => 30,  73 => 24,  67 => 21,  62 => 19,  59 => 18,  53 => 15,  50 => 14,  48 => 13,  45 => 12,  43 => 11,  40 => 10,  36 => 4,  34 => 3,  32 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% set colours = app.session.get('colours') %}
{% if colours is null %}
    {% set colours = {
    'foreground': 'purple',
    'background': 'paleturquoise'
    }
    %}
{% endif %}

{% set user = app.session.get('user') %}

    {% if user is null %}
        <p>
            you are not logged in: <a href=\"{{ path('login') }}\">Login: </a>
        </p>
    {% else %}
        <header>
            You are logged in as: <strong>{{ user.username }}</strong>
            <br>
            <a href=\"{{ path('logout') }}\">Logout: </a>
        </header>
    {% endif %}


<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <style>
            /*@import \"/../web/css/table.css\";*/
            tr, td {
                border: 0.1rem solid blueviolet;
                padding: 0.5rem;
            }
            table{
                border: 0.1rem solid chocolate;
                padding: 0.5rem;
            }
            body {
                color: {{ colours['foreground'] }};
                background-color: {{ colours['background'] }};
            }
            header {
                text-align: right;
                padding: 0.5rem;
                border-bottom: 0.1rem solid black;
                background-color: darkgray;
            }
            {% block stylesheets %}
            {% endblock %}
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>


    <ul>

        <li>
            <a href=\"{{ path('referent_index') }}\">List of referents</a>
        </li>
        <li>
            <a href=\"{{ path('bibliography_index') }}\">List of Bibliography</a>
        </li>
        <li>
            <a href=\"{{ path('tag_index') }}\">List of referents</a>
        </li>
        <li>
            <a href=\"{{ path('user_index') }}\">List of users</a>
        </li>
    </ul>

    <hr>


        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\base.html.twig");
    }
}
