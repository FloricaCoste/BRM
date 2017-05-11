<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5a02cae616a8abc327fabe8e7e2b31ef3590d495b62bce4631e499526df8ed87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebf01a23be9af49e1c59386b79037d20e9cccd81d97beae6bd957ca685ddda5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf01a23be9af49e1c59386b79037d20e9cccd81d97beae6bd957ca685ddda5f->enter($__internal_ebf01a23be9af49e1c59386b79037d20e9cccd81d97beae6bd957ca685ddda5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9724099a0bd55d1d6d5a29a8d6040ff9c9b4cd709acd04022fec606dc28512ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9724099a0bd55d1d6d5a29a8d6040ff9c9b4cd709acd04022fec606dc28512ad->enter($__internal_9724099a0bd55d1d6d5a29a8d6040ff9c9b4cd709acd04022fec606dc28512ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ebf01a23be9af49e1c59386b79037d20e9cccd81d97beae6bd957ca685ddda5f->leave($__internal_ebf01a23be9af49e1c59386b79037d20e9cccd81d97beae6bd957ca685ddda5f_prof);

        
        $__internal_9724099a0bd55d1d6d5a29a8d6040ff9c9b4cd709acd04022fec606dc28512ad->leave($__internal_9724099a0bd55d1d6d5a29a8d6040ff9c9b4cd709acd04022fec606dc28512ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\laragon\\www\\Poject2017\\BRM1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
