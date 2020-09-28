<?php

/* EduwebTrainingBundle:Blog:contact.html.twig */
class __TwigTemplate_a9d03cf48274c65b55c808345852b42dc6f1b04979690572f028f7a5a4166dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EduwebTrainingBundle:Blog:sidebarLayout.html.twig", "EduwebTrainingBundle:Blog:contact.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'contentConteiner' => array($this, 'block_contentConteiner'),
            'jsblock' => array($this, 'block_jsblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EduwebTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Kontakt | ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contentConteiner($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentConteiner"));

        // line 5
        echo "    <article class=\"col-md-8 contact\">

        <h1>Kontakt</h1>
        <p>Aby się ze mną skontaktować skorzystaj z poniższego formularza.</p>

        <div class=\"alert alert-success\">
            <strong>Dzięki!</strong> Twoja wiadomość została wysłana!
        </div>

        <div class=\"alert alert-danger\">
            <strong>Ups...</strong> Niestety nie udało się wysłać wiadomości... Spróbuj jeszcze raz!
        </div>

        <div class=\"alert alert-warning\">
            <strong>Ups...</strong> Popraw błędy formularza!
        </div>

        <form class=\"form-horizontal\" role=\"form\">
            <div class=\"form-group\">
                <label for=\"name\" class=\"col-sm-2 control-label\">Imię</label>

                <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" id=\"name\" placeholder=\"Podaj swoje imię i nazwisko\">
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"email\" class=\"col-sm-2 control-label\">E-mail</label>
                <div class=\"col-sm-10\">
                    <input type=\"password\" class=\"form-control\" id=\"email\" placeholder=\"Podaj swój adres e-mail\">
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"message\" class=\"col-sm-2 control-label\">Wiadomość</label>
                <div class=\"col-sm-10\">
                    <textarea id=\"message\" class=\"form-control\" rows=\"5\" placeholder=\"Tu wpisz wiadomość :)\"></textarea>
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-success\">Wyślij</button>
                </div>
            </div>
        </form>

    </article>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_jsblock($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsblock"));

        // line 58
        echo "    ";
        $this->displayParentBlock("jsblock", $context, $blocks);
        echo "
    <script src=";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/js/contact-page.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  119 => 58,  113 => 57,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EduwebTrainingBundle:Blog:sidebarLayout.html.twig\" %}

{% block pageTitle%}Kontakt | {{parent()}}{% endblock %}
{% block contentConteiner %}
    <article class=\"col-md-8 contact\">

        <h1>Kontakt</h1>
        <p>Aby się ze mną skontaktować skorzystaj z poniższego formularza.</p>

        <div class=\"alert alert-success\">
            <strong>Dzięki!</strong> Twoja wiadomość została wysłana!
        </div>

        <div class=\"alert alert-danger\">
            <strong>Ups...</strong> Niestety nie udało się wysłać wiadomości... Spróbuj jeszcze raz!
        </div>

        <div class=\"alert alert-warning\">
            <strong>Ups...</strong> Popraw błędy formularza!
        </div>

        <form class=\"form-horizontal\" role=\"form\">
            <div class=\"form-group\">
                <label for=\"name\" class=\"col-sm-2 control-label\">Imię</label>

                <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" id=\"name\" placeholder=\"Podaj swoje imię i nazwisko\">
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"email\" class=\"col-sm-2 control-label\">E-mail</label>
                <div class=\"col-sm-10\">
                    <input type=\"password\" class=\"form-control\" id=\"email\" placeholder=\"Podaj swój adres e-mail\">
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"message\" class=\"col-sm-2 control-label\">Wiadomość</label>
                <div class=\"col-sm-10\">
                    <textarea id=\"message\" class=\"form-control\" rows=\"5\" placeholder=\"Tu wpisz wiadomość :)\"></textarea>
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-success\">Wyślij</button>
                </div>
            </div>
        </form>

    </article>



{% endblock %}
{% block jsblock %}
    {{ parent() }}
    <script src={{ asset('bundles/eduwebtraining/js/contact-page.js')}}></script>
{% endblock %}
", "EduwebTrainingBundle:Blog:contact.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/contact.html.twig");
    }
}
