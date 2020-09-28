<?php

/* EduwebTrainingBundle:Blog:macros.html.twig */
class __TwigTemplate_c124cf45e1eda70d5055c9fa3c8af7562ec9108ed0b1b46d9e00e6113cff6d29 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog:macros.html.twig"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getwidgetList($__title__ = null, $__listItems__ = null, $__btnLabel__ = null, $__btnUrl__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "listItems" => $__listItems__,
            "btnLabel" => $__btnLabel__,
            "btnUrl" => $__btnUrl__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "widgetList"));

            // line 2
            echo "<section class=\"widget\">
    <h2>";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h2>
    <ul>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listItems"]) ? $context["listItems"] : $this->getContext($context, "listItems")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
    <p><a class=\"btn btn-default\" href=";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["btnUrl"]) ? $context["btnUrl"] : $this->getContext($context, "btnUrl")), "html", null, true);
            echo " role=\"button\">";
            echo twig_escape_filter($this->env, (isset($context["btnLabel"]) ? $context["btnLabel"] : $this->getContext($context, "btnLabel")), "html", null, true);
            echo "</a></p>
</section>

";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  66 => 8,  57 => 6,  53 => 5,  48 => 3,  45 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro widgetList(title, listItems, btnLabel, btnUrl) %}
<section class=\"widget\">
    <h2>{{  title}}</h2>
    <ul>
        {% for item in listItems %}
        <li>{{  item }}</li>
        {% endfor %}
    </ul>
    <p><a class=\"btn btn-default\" href={{ btnUrl}} role=\"button\">{{  btnLabel}}</a></p>
</section>

{% endmacro %}
", "EduwebTrainingBundle:Blog:macros.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/macros.html.twig");
    }
}
