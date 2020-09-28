<?php

/* EduwebTrainingBundle:Blog:index.html.twig */
class __TwigTemplate_77d69d9b72217246ded7b7734ec3b2503f943cebaa4bec6fa40c83492bb38836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EduwebTrainingBundle::base.html.twig", "EduwebTrainingBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EduwebTrainingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Strona główna | ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 4
        echo "        <div class=\"jumbotron\">
            <div class=\"container\">
                <div class=\"text\">
                    <h1>Być jak Warren Buffett!</h1>
                    <p>Jest powszechnie uważany za jednego z najlepszych inwestorów na świecie. Warren Buffett, często określany jako \"legendarny inwestor\", jest głównym akcjonariuszem, przewodniczącym rady nadzorczej oraz prezesem Berkshire Hathaway. Od wielu lat konsekwentnie utrzymuje się na szczytach list najbogatszych ludzi świata.</p>
                    <p><a class=\"btn btn-primary btn-lg\" href=\"dziennik.html\" role=\"button\">Moja droga na szczyt &raquo;</a></p>
                </div>
                <img class=\"bull\" src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/img/bull.jpg"), "html", null, true);
        echo " alt=\"bull\">
            </div>
        </div>

        <div class=\"container\">
            <!-- Example row of columns -->
            <div class=\"row\">

                <div class=\"col-md-4\">
                    ";
        // line 20
        $this->loadTemplate("EduwebTrainingBundle:Blog/Widgets:gpwWidget.html.twig", "EduwebTrainingBundle:Blog:index.html.twig", 20)->display($context);
        // line 21
        echo "                </div>

                <div class=\"col-md-4\">
";
        // line 25
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EduwebTrainingBundle:Blog:followWidgets"));
        echo "
                </div>

                <div class=\"col-md-4\">
";
        // line 30
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EduwebTrainingBundle:Blog:walletWidgets"));
        echo "

                </div>
            </div>

        </div> <!-- /container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  82 => 25,  77 => 21,  75 => 20,  63 => 11,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
{% block pageTitle%}Strona główna | {{parent()}}{% endblock %}
{% block pageContainer %}
        <div class=\"jumbotron\">
            <div class=\"container\">
                <div class=\"text\">
                    <h1>Być jak Warren Buffett!</h1>
                    <p>Jest powszechnie uważany za jednego z najlepszych inwestorów na świecie. Warren Buffett, często określany jako \"legendarny inwestor\", jest głównym akcjonariuszem, przewodniczącym rady nadzorczej oraz prezesem Berkshire Hathaway. Od wielu lat konsekwentnie utrzymuje się na szczytach list najbogatszych ludzi świata.</p>
                    <p><a class=\"btn btn-primary btn-lg\" href=\"dziennik.html\" role=\"button\">Moja droga na szczyt &raquo;</a></p>
                </div>
                <img class=\"bull\" src={{ asset('bundles/eduwebtraining/img/bull.jpg') }} alt=\"bull\">
            </div>
        </div>

        <div class=\"container\">
            <!-- Example row of columns -->
            <div class=\"row\">

                <div class=\"col-md-4\">
                    {% include 'EduwebTrainingBundle:Blog/Widgets:gpwWidget.html.twig'%}
                </div>

                <div class=\"col-md-4\">
{#                    {% include 'EduwebTrainingBundle:Blog/Widgets:followingWidget.html.twig'%}#}
                    {{ render(controller('EduwebTrainingBundle:Blog:followWidgets'))  }}
                </div>

                <div class=\"col-md-4\">
{#                    {% include 'EduwebTrainingBundle:Blog/Widgets:walletWidget.html.twig'%}#}
                    {{ render(controller('EduwebTrainingBundle:Blog:walletWidgets'))  }}

                </div>
            </div>

        </div> <!-- /container -->
{% endblock %}
", "EduwebTrainingBundle:Blog:index.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/index.html.twig");
    }
}
