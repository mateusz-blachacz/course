<?php

/* EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig */
class __TwigTemplate_e757c92ea27dfdf94a79e3319eb663d9bb5747665c8fb1843bbc6aa3e91d3839 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["blogMacros"] = $this->loadTemplate("EduwebTrainingBundle:Blog:macros.html.twig", "EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig", 2);
        // line 3
        echo $context["blogMacros"]->getwidgetList("Aktualnie oberwuję", (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "Wszystkie spółki", "http://www.gpw.pl/lista_spolek");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
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
{% import 'EduwebTrainingBundle:Blog:macros.html.twig' as blogMacros %}
{{ blogMacros.widgetList('Aktualnie oberwuję',list,'Wszystkie spółki',\"http://www.gpw.pl/lista_spolek\") }}

{#<section class=\"widget\">#}
{#    <h2>Aktualnie oberwuję</h2>#}
{#    <ul>#}
{#        {% for item in list %}#}
{#            <li>{{  item }}</li>#}
{#        {% endfor %}#}
{#    </ul>#}
{#    <p><a class=\"btn btn-default\" href=\"http://www.gpw.pl/lista_spolek\" role=\"button\">Wszystkie spółki &raquo;</a></p>#}
{#</section>#}
", "EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/Widgets/followingWidget.html.twig");
    }
}
