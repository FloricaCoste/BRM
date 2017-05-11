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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf9cab55519825d10eb254c74631be11c89b224a05baabb3e1b5c269abc9d9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9cab55519825d10eb254c74631be11c89b224a05baabb3e1b5c269abc9d9a0->enter($__internal_bf9cab55519825d10eb254c74631be11c89b224a05baabb3e1b5c269abc9d9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7050a18685d607dcfc7f8bb4fd10983531aeaf5c7319dddc1495b7d70038bc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7050a18685d607dcfc7f8bb4fd10983531aeaf5c7319dddc1495b7d70038bc79->enter($__internal_7050a18685d607dcfc7f8bb4fd10983531aeaf5c7319dddc1495b7d70038bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            Please login: <a href=\"";
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
            .dropbtn {
                background-color: peru;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: burlywood;
            }

            body {
                color: ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["colours"] ?? $this->getContext($context, "colours")), "foreground", array(), "array"), "html", null, true);
        echo ";
                background-color: ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["colours"] ?? $this->getContext($context, "colours")), "background", array(), "array"), "html", null, true);
        echo ";
            }
            tr, td {
                border: 0.1rem solid saddlebrown;
                padding: 0.5rem;
            }
            table{
                border: 0.1rem solid chocolate;
                padding: 0.5rem;
            }
            ";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 87
        echo "        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>


    <ul>

        <div class=\"dropdown\">
            <button class=\"dropbtn\">Bibliography</button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Bibliography</a>

            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Reference</button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Reference</a>
            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Referent</button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("referent_index");
        echo "\">Referent</a>
            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Tag</button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Tag</a>
            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Users</button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userprofile_index");
        echo "\">User details</a>
                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">User</a>
            </div>
        </div>
    </ul>
    <hr>

        ";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "    <div id=\"footer\">

        <hr>
        ";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 139
        echo "    </div>
    </body>
</html>
";
        
        $__internal_bf9cab55519825d10eb254c74631be11c89b224a05baabb3e1b5c269abc9d9a0->leave($__internal_bf9cab55519825d10eb254c74631be11c89b224a05baabb3e1b5c269abc9d9a0_prof);

        
        $__internal_7050a18685d607dcfc7f8bb4fd10983531aeaf5c7319dddc1495b7d70038bc79->leave($__internal_7050a18685d607dcfc7f8bb4fd10983531aeaf5c7319dddc1495b7d70038bc79_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2250d5cca50c1818a0061b91225631df6abd702cedc32b96c88f6c9c818374e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2250d5cca50c1818a0061b91225631df6abd702cedc32b96c88f6c9c818374e->enter($__internal_a2250d5cca50c1818a0061b91225631df6abd702cedc32b96c88f6c9c818374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_330aec12877db6341ce7d00e1512a365db6c99be5892131ed34e2c40777425cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330aec12877db6341ce7d00e1512a365db6c99be5892131ed34e2c40777425cf->enter($__internal_330aec12877db6341ce7d00e1512a365db6c99be5892131ed34e2c40777425cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BRM";
        
        $__internal_330aec12877db6341ce7d00e1512a365db6c99be5892131ed34e2c40777425cf->leave($__internal_330aec12877db6341ce7d00e1512a365db6c99be5892131ed34e2c40777425cf_prof);

        
        $__internal_a2250d5cca50c1818a0061b91225631df6abd702cedc32b96c88f6c9c818374e->leave($__internal_a2250d5cca50c1818a0061b91225631df6abd702cedc32b96c88f6c9c818374e_prof);

    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74928e1276e2b3ff0b95fb677d74c325571b2ce2089fe61dc99983b7c22bf1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74928e1276e2b3ff0b95fb677d74c325571b2ce2089fe61dc99983b7c22bf1d2->enter($__internal_74928e1276e2b3ff0b95fb677d74c325571b2ce2089fe61dc99983b7c22bf1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_90d155f19d0bc1d52180834751dec572bbda74796842a3393ab69f8f3692d63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d155f19d0bc1d52180834751dec572bbda74796842a3393ab69f8f3692d63c->enter($__internal_90d155f19d0bc1d52180834751dec572bbda74796842a3393ab69f8f3692d63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 86
        echo "            ";
        
        $__internal_90d155f19d0bc1d52180834751dec572bbda74796842a3393ab69f8f3692d63c->leave($__internal_90d155f19d0bc1d52180834751dec572bbda74796842a3393ab69f8f3692d63c_prof);

        
        $__internal_74928e1276e2b3ff0b95fb677d74c325571b2ce2089fe61dc99983b7c22bf1d2->leave($__internal_74928e1276e2b3ff0b95fb677d74c325571b2ce2089fe61dc99983b7c22bf1d2_prof);

    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        $__internal_85f27cdba96f7c4ae6de3468e95ac36e15574af151d7f66961971f936fa417ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f27cdba96f7c4ae6de3468e95ac36e15574af151d7f66961971f936fa417ce->enter($__internal_85f27cdba96f7c4ae6de3468e95ac36e15574af151d7f66961971f936fa417ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b89545b5ca41d107e56c4e3d338e4b84ec10cc07125339dbf23b62f98d822070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89545b5ca41d107e56c4e3d338e4b84ec10cc07125339dbf23b62f98d822070->enter($__internal_b89545b5ca41d107e56c4e3d338e4b84ec10cc07125339dbf23b62f98d822070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b89545b5ca41d107e56c4e3d338e4b84ec10cc07125339dbf23b62f98d822070->leave($__internal_b89545b5ca41d107e56c4e3d338e4b84ec10cc07125339dbf23b62f98d822070_prof);

        
        $__internal_85f27cdba96f7c4ae6de3468e95ac36e15574af151d7f66961971f936fa417ce->leave($__internal_85f27cdba96f7c4ae6de3468e95ac36e15574af151d7f66961971f936fa417ce_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5924d02182780a64b9789671fc4acaae19bc54a1cdc895d4468805bd8da41b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5924d02182780a64b9789671fc4acaae19bc54a1cdc895d4468805bd8da41b8c->enter($__internal_5924d02182780a64b9789671fc4acaae19bc54a1cdc895d4468805bd8da41b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1638b5fde4bc8fe4939a21440834f5ecf208d604a58551cdfae3b3b99e5ceda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1638b5fde4bc8fe4939a21440834f5ecf208d604a58551cdfae3b3b99e5ceda->enter($__internal_c1638b5fde4bc8fe4939a21440834f5ecf208d604a58551cdfae3b3b99e5ceda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1638b5fde4bc8fe4939a21440834f5ecf208d604a58551cdfae3b3b99e5ceda->leave($__internal_c1638b5fde4bc8fe4939a21440834f5ecf208d604a58551cdfae3b3b99e5ceda_prof);

        
        $__internal_5924d02182780a64b9789671fc4acaae19bc54a1cdc895d4468805bd8da41b8c->leave($__internal_5924d02182780a64b9789671fc4acaae19bc54a1cdc895d4468805bd8da41b8c_prof);

    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ac4f5e7305570f18d6d326bd7e13cb3e7aca2e0ded9b14d8a044b6dbff9222d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4f5e7305570f18d6d326bd7e13cb3e7aca2e0ded9b14d8a044b6dbff9222d8->enter($__internal_ac4f5e7305570f18d6d326bd7e13cb3e7aca2e0ded9b14d8a044b6dbff9222d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d3b83a6fba9d6b1cbddbbd9fc6b452b99334822704f16cb5b728e0acb7d9dc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b83a6fba9d6b1cbddbbd9fc6b452b99334822704f16cb5b728e0acb7d9dc47->enter($__internal_d3b83a6fba9d6b1cbddbbd9fc6b452b99334822704f16cb5b728e0acb7d9dc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 137
        echo "            &copy; Copyright 2017 by Florica Coste</a>.
        ";
        
        $__internal_d3b83a6fba9d6b1cbddbbd9fc6b452b99334822704f16cb5b728e0acb7d9dc47->leave($__internal_d3b83a6fba9d6b1cbddbbd9fc6b452b99334822704f16cb5b728e0acb7d9dc47_prof);

        
        $__internal_ac4f5e7305570f18d6d326bd7e13cb3e7aca2e0ded9b14d8a044b6dbff9222d8->leave($__internal_ac4f5e7305570f18d6d326bd7e13cb3e7aca2e0ded9b14d8a044b6dbff9222d8_prof);

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
        return array (  320 => 137,  311 => 136,  294 => 132,  277 => 131,  267 => 86,  258 => 85,  240 => 30,  227 => 139,  225 => 136,  220 => 133,  217 => 132,  215 => 131,  206 => 125,  202 => 124,  193 => 118,  184 => 112,  175 => 106,  165 => 99,  151 => 88,  148 => 87,  146 => 85,  133 => 75,  129 => 74,  82 => 30,  74 => 24,  68 => 21,  63 => 19,  60 => 18,  54 => 15,  51 => 14,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  37 => 4,  35 => 3,  33 => 2,  30 => 1,);
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
            Please login: <a href=\"{{ path('login') }}\">Login: </a>
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
        <title>{% block title %}BRM{% endblock %}</title>
        <style>
            /*@import \"/../web/css/table.css\";*/
            .dropbtn {
                background-color: peru;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: burlywood;
            }

            body {
                color: {{ colours['foreground'] }};
                background-color: {{ colours['background'] }};
            }
            tr, td {
                border: 0.1rem solid saddlebrown;
                padding: 0.5rem;
            }
            table{
                border: 0.1rem solid chocolate;
                padding: 0.5rem;
            }
            {% block stylesheets %}
            {% endblock %}
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>


    <ul>

        <div class=\"dropdown\">
            <button class=\"dropbtn\">Bibliography</button>
            <div class=\"dropdown-content\">
                <a href=\"{{ path('bibliography_index') }}\">Bibliography</a>

            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Reference</button>
            <div class=\"dropdown-content\">
                <a href=\"{{ path('reference_index') }}\">Reference</a>
            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Referent</button>
            <div class=\"dropdown-content\">
                <a href=\"{{ path('referent_index') }}\">Referent</a>
            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Tag</button>
            <div class=\"dropdown-content\">
                <a href=\"{{ path('tag_index') }}\">Tag</a>
            </div>
        </div>
        <div class=\"dropdown\">
            <button class=\"dropbtn\">Users</button>
            <div class=\"dropdown-content\">
                <a href=\"{{ path('userprofile_index') }}\">User details</a>
                <a href=\"{{ path('user_index') }}\">User</a>
            </div>
        </div>
    </ul>
    <hr>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    <div id=\"footer\">

        <hr>
        {% block footer %}
            &copy; Copyright 2017 by Florica Coste</a>.
        {% endblock %}
    </div>
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\app\\Resources\\views\\base.html.twig");
    }
}
