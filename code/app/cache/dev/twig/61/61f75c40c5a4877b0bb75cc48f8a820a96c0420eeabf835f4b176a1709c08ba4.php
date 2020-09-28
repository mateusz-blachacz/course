<?php

/* EduwebTrainingBundle:Blog:about.html.twig */
class __TwigTemplate_b075d8d0fe2b058b74a42c9781bfd95d49477f5867cc40f2c93c8f3dcc36e479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EduwebTrainingBundle::base.html.twig", "EduwebTrainingBundle:Blog:about.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "O mnie | ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/css/sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 9
        echo "        <div class=\"container\">
            <!-- Example row of columns -->
            <div class=\"row extra-padding\">
                <div class=\"col-md-12\">
                    <article class=\"about clearfix\">
                        <div class=\"bio\">
                            <h1>Janek Złotówka</h1>
                            <p>Lorem ipsum dolor sit amet mi augue, sagittis vel, ornare id, turpis. Nullam augue eu neque eu libero. Aliquam erat volutpat. Nam dolor sit amet augue leo, ac nibh placerat quam. Integer sit amet ipsum dolor cursus wisi vel blandit egestas quam in augue. Maecenas eu odio. Nam dictum lectus non nibh ac lacus. Cras luctus et turpis. Proin nunc semper convallis. Suspendisse potenti. Vestibulum fermentum. Vivamus laoreet viverra fermentum mi, nec libero. Nulla varius, sem ut quam ipsum, vel lectus. Curabitur ultrices varius. Ut eu urna. Donec condimentum quam. Sed nonummy malesuada, arcu erat, ut quam nec massa. Maecenas vitae neque vitae mauris. Donec faucibus eu, bibendum quis, odio. Vestibulum eget urna. Nulla mi at quam. Mauris interdum dui nulla, auctor nibh, imperdiet quis, pellentesque purus, nec nunc vitae lectus at sapien. Morbi pede. In turpis egestas. Suspendisse est eu sem tincidunt lorem. In fermentum. Aliquam ultricies sollicitudin. Vestibulum aliquam tellus dui nunc, tempus rutrum euismod, quam at turpis.</p>
                            <p>Aenean vel risus. Mauris pellentesque, wisi. Integer nibh porta scelerisque, quam at nulla. Nunc elementum. Morbi dignissim, imperdiet sed, posuere tristique ullamcorper. Nam consectetuer lobortis vitae, imperdiet id, urna. Sed leo vulputate sagittis, mi vel neque at ante. Maecenas mi quam molestie aliquam. Nunc placerat pharetra velit sit amet dolor. Ut vel lorem. Cras ac magna tincidunt rutrum ut, ultricies porta. Quisque eu neque ut enim. Phasellus fermentum, metus nisl, a purus. Duis vehicula enim sapien sodales neque mauris, interdum adipiscing elit. Proin at urna mauris, consectetuer egestas, justo vel urna eu justo. Suspendisse sollicitudin. Praesent vitae magna neque, mattis rhoncus libero dolor, porttitor vel, metus. Curabitur commodo. Suspendisse sollicitudin. Cras tempus vitae, dapibus nisl. Sed placerat. Mauris vel tortor. Vivamus pede. Sed diam vestibulum ligula. Sed pellentesque dapibus in, ipsum. Fusce tempor lorem. Curabitur placerat, nisl sapien vitae neque nibh vel urna ullamcorper risus. Vivamus ut urna quis orci. Nunc et turpis. Aenean vulputate quam. Nunc ultricies iaculis nisl.</p>
                        </div>

                        <img class=\"img-thumbnail\" src=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/img/me.jpg"), "html", null, true);
        echo " alt=\"\">
                    </article>
                </div>
            </div>

        </div> <!-- /container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  76 => 9,  70 => 8,  60 => 5,  55 => 4,  49 => 3,  36 => 2,  11 => 1,);
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
{% block pageTitle%}O mnie | {{parent()}}{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/eduwebtraining/css/sidebar.css') }}\" rel=\"stylesheet\">

{% endblock %}
{% block pageContainer %}
        <div class=\"container\">
            <!-- Example row of columns -->
            <div class=\"row extra-padding\">
                <div class=\"col-md-12\">
                    <article class=\"about clearfix\">
                        <div class=\"bio\">
                            <h1>Janek Złotówka</h1>
                            <p>Lorem ipsum dolor sit amet mi augue, sagittis vel, ornare id, turpis. Nullam augue eu neque eu libero. Aliquam erat volutpat. Nam dolor sit amet augue leo, ac nibh placerat quam. Integer sit amet ipsum dolor cursus wisi vel blandit egestas quam in augue. Maecenas eu odio. Nam dictum lectus non nibh ac lacus. Cras luctus et turpis. Proin nunc semper convallis. Suspendisse potenti. Vestibulum fermentum. Vivamus laoreet viverra fermentum mi, nec libero. Nulla varius, sem ut quam ipsum, vel lectus. Curabitur ultrices varius. Ut eu urna. Donec condimentum quam. Sed nonummy malesuada, arcu erat, ut quam nec massa. Maecenas vitae neque vitae mauris. Donec faucibus eu, bibendum quis, odio. Vestibulum eget urna. Nulla mi at quam. Mauris interdum dui nulla, auctor nibh, imperdiet quis, pellentesque purus, nec nunc vitae lectus at sapien. Morbi pede. In turpis egestas. Suspendisse est eu sem tincidunt lorem. In fermentum. Aliquam ultricies sollicitudin. Vestibulum aliquam tellus dui nunc, tempus rutrum euismod, quam at turpis.</p>
                            <p>Aenean vel risus. Mauris pellentesque, wisi. Integer nibh porta scelerisque, quam at nulla. Nunc elementum. Morbi dignissim, imperdiet sed, posuere tristique ullamcorper. Nam consectetuer lobortis vitae, imperdiet id, urna. Sed leo vulputate sagittis, mi vel neque at ante. Maecenas mi quam molestie aliquam. Nunc placerat pharetra velit sit amet dolor. Ut vel lorem. Cras ac magna tincidunt rutrum ut, ultricies porta. Quisque eu neque ut enim. Phasellus fermentum, metus nisl, a purus. Duis vehicula enim sapien sodales neque mauris, interdum adipiscing elit. Proin at urna mauris, consectetuer egestas, justo vel urna eu justo. Suspendisse sollicitudin. Praesent vitae magna neque, mattis rhoncus libero dolor, porttitor vel, metus. Curabitur commodo. Suspendisse sollicitudin. Cras tempus vitae, dapibus nisl. Sed placerat. Mauris vel tortor. Vivamus pede. Sed diam vestibulum ligula. Sed pellentesque dapibus in, ipsum. Fusce tempor lorem. Curabitur placerat, nisl sapien vitae neque nibh vel urna ullamcorper risus. Vivamus ut urna quis orci. Nunc et turpis. Aenean vulputate quam. Nunc ultricies iaculis nisl.</p>
                        </div>

                        <img class=\"img-thumbnail\" src={{ asset('bundles/eduwebtraining/img/me.jpg') }} alt=\"\">
                    </article>
                </div>
            </div>

        </div> <!-- /container -->
{% endblock %}
", "EduwebTrainingBundle:Blog:about.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/about.html.twig");
    }
}
