<?php

/* EduwebTrainingBundle:Blog:sidebarLayout.html.twig */
class __TwigTemplate_8cb0eff9c099e4cfcac711577edade5e5d47a70cc21622da8d9a376b653654af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EduwebTrainingBundle::base.html.twig", "EduwebTrainingBundle:Blog:sidebarLayout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'contentConteiner' => array($this, 'block_contentConteiner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EduwebTrainingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog:sidebarLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row extra-padding\">

            ";
        // line 12
        $this->displayBlock('contentConteiner', $context, $blocks);
        // line 13
        echo "
            <div class=\"col-md-3 pull-right sidebar\">

                ";
        // line 16
        $this->loadTemplate("EduwebTrainingBundle:Blog/Widgets:gpwWidget.html.twig", "EduwebTrainingBundle:Blog:sidebarLayout.html.twig", 16)->display($context);
        // line 17
        echo "
";
        // line 19
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EduwebTrainingBundle:Blog:followWidgets"));
        echo "
";
        // line 21
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EduwebTrainingBundle:Blog:walletWidgets"));
        echo "


            </div>

        </div>

    </div> <!-- /container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_contentConteiner($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentConteiner"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 12,  86 => 21,  81 => 19,  78 => 17,  76 => 16,  71 => 13,  69 => 12,  63 => 8,  57 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EduwebTrainingBundle::base.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/eduwebtraining/css/sidebar.css') }}\" rel=\"stylesheet\">

{% endblock %}
{% block pageContainer %}
    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row extra-padding\">

            {% block  contentConteiner%} {% endblock %}

            <div class=\"col-md-3 pull-right sidebar\">

                {% include 'EduwebTrainingBundle:Blog/Widgets:gpwWidget.html.twig'%}

{#                {% include 'EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig'%}#}
                {{ render(controller('EduwebTrainingBundle:Blog:followWidgets'))  }}
{#                {% include 'EduwebTrainingBundle:Blog/Widgets:walletWidget.html.twig'%}#}
                {{ render(controller('EduwebTrainingBundle:Blog:walletWidgets'))  }}


            </div>

        </div>

    </div> <!-- /container -->
{% endblock %}

", "EduwebTrainingBundle:Blog:sidebarLayout.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/sidebarLayout.html.twig");
    }
}
