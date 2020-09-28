<?php

/* EduwebTrainingBundle::base.html.twig */
class __TwigTemplate_7c61372ea5737ef088772dcda3e5438ff113fa20d2de198d5f57914980880ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'jsblock' => array($this, 'block_jsblock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Z pamiętnika domorosłego inwestora.\">
    <meta name=\"author\" content=\"Janek Złotówka\">

    <title>";
        // line 11
        ob_start();
        $this->displayBlock('pageTitle', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        ";
        // line 40
        $context["mainMenu"] = array(0 => array("path" => "edu_blog_glowna", "name" => "Home"), 1 => array("path" => "edu_blog_dziennik", "name" => "Dziennik"), 2 => array("path" => "edu_blog_oMnie", "name" => "O mnie"), 3 => array("path" => "edu_blog_kontakt", "name" => "Kontakt"));
        // line 46
        echo "        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : $this->getContext($context, "mainMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "
                    <li ";
            // line 50
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == $this->getAttribute($context["item"], "path", array(), "array"))) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "path", array(), "array"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array(), "array"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
        </div><!--/.navbar-collapse -->

    </div>
</div>
";
        // line 61
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 62
        echo "
<div id=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">&copy; Domorosły inwestor 2014</p>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 71
        $this->displayBlock('jsblock', $context, $blocks);
        // line 75
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " Domorosły inwestor";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_jsblock($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsblock"));

        // line 72
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eduwebtraining/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 73,  179 => 72,  173 => 71,  161 => 61,  151 => 17,  145 => 14,  142 => 13,  136 => 12,  124 => 11,  115 => 75,  113 => 71,  102 => 62,  100 => 61,  93 => 56,  81 => 50,  78 => 49,  74 => 48,  70 => 46,  68 => 40,  46 => 20,  44 => 12,  38 => 11,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Z pamiętnika domorosłego inwestora.\">
    <meta name=\"author\" content=\"Janek Złotówka\">

    <title>{% spaceless %}{% block pageTitle%} Domorosły inwestor{% endblock %}{% endspaceless %}</title>
    {% block stylesheets %}
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('bundles/eduwebtraining/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('bundles/eduwebtraining/css/styles.css') }}\" rel=\"stylesheet\">

    {% endblock %}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        {% set mainMenu = [
            {'path':'edu_blog_glowna','name':'Home'},
            {'path':'edu_blog_dziennik','name':'Dziennik'},
            {'path':'edu_blog_oMnie','name':'O mnie'},
            {'path':'edu_blog_kontakt','name':'Kontakt'}
        ] %}
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                {% for item in mainMenu %}

                    <li {{ app.request.get('_route') == item['path'] ? 'class=\"active\"':'' }}><a href=\"{{ path(item['path']) }}\">{{ item['name'] }}</a></li>
                {% endfor %}
{#                <li class=\"active\"><a href=\"glowna.html\">Home</a></li>#}
{#                <li><a href=\"dziennik.html\">Dziennik</a></li>#}
{#                <li><a href=\"o-mnie.html\">O</a></li>#}
{#                <li><a href=\"kontakt.html\">Kontakt</a></li>#}
            </ul>
        </div><!--/.navbar-collapse -->

    </div>
</div>
{% block pageContainer %} {% endblock %}

<div id=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">&copy; Domorosły inwestor 2014</p>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
{% block jsblock %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"{{ asset('bundles/eduwebtraining/js/bootstrap.min.js') }}\"></script>
{% endblock %}
</body>
</html>
", "EduwebTrainingBundle::base.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/base.html.twig");
    }
}
