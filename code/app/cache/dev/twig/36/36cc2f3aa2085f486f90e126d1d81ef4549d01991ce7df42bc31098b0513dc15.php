<?php

/* EduwebTrainingBundle:Blog:journal.html.twig */
class __TwigTemplate_37aa44eb63127aefe9afe9b316534d754d9b98e350cd644b50ab139e30922ba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EduwebTrainingBundle:Blog:sidebarLayout.html.twig", "EduwebTrainingBundle:Blog:journal.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'contentConteiner' => array($this, 'block_contentConteiner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EduwebTrainingBundle:Blog:sidebarLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EduwebTrainingBundle:Blog:journal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Dziennik | ";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contentConteiner($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentConteiner"));

        // line 5
        echo "    <article class=\"col-md-8 journal\">
        <h1>Domowy dzienniczek inwestora</h1>
        <p>Na początku swojej przygoty z inwestowaniem postanowiłem, że każdą inwestycję będę zapisywał. W ten sposób powstał poniższy dziennik, który prezentuje moją aktywność na giełdzie. Przez ostatnie pare miesięcy wiele się działo. Na zmianę raz zyskiwałem, raz traciłem.</p>
";
        // line 9
        echo "        ";
        // line 10
        echo "        <h4>Wszystkich inwestycji: ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["historyObj"]) ? $context["historyObj"] : $this->getContext($context, "historyObj"))), "html", null, true);
        echo "</h4>#}
";
        // line 12
        echo "        <table class=\"table table-bordered table-striped table-hover\">
            <thead>
                <tr>
                    <th>Spółka</th>
                    <th>Data rozpoczęcia</th>
                    <th>Śr. kurs nabycia</th>
                    <th>Ilość</th>
                    <th>Data zakończenia</th>
                    <th>Śr. kurs sprzedaży</th>
                    <th>Wynik</th>
                </tr>
            </thead>
            <tbody>

            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historyObj"]) ? $context["historyObj"] : $this->getContext($context, "historyObj")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "                ";
            if ($this->getAttribute($context["row"], "isFinished", array())) {
                // line 28
                echo "
                    ";
                // line 29
                if ($this->getAttribute($context["row"], "isClosedPositive", array())) {
                    // line 30
                    echo "                        <tr class=\"success\">
                    ";
                } else {
                    // line 32
                    echo "                        <tr class=\"danger\">
                    ";
                }
                // line 34
                echo "
                ";
            } else {
                // line 36
                echo "                    <tr>
                ";
            }
            // line 38
            echo "
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "getCompanyName", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["row"], "getStartDate", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["row"], "PurchasePrice", array()), 2, ",", " "), "html", null, true);
            echo " zł</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getQuantity", array()), 0, ",", " "), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($context["row"], "isFinished", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($context["row"], "getEndDate", array()), "d.m.Y")) : ("---")), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute($context["row"], "isFinished", array())) ? ((twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getSellingPrice", array()), 2, ",", " ") . " zł")) : ("---")), "html", null, true);
            echo " </td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($context["row"], "isFinished", array())) ? ((twig_number_format_filter($this->env, $this->getAttribute($context["row"], "getResult", array()), 2, ",", " ") . " zł")) : ("---")), "html", null, true);
            echo "</td>

                    </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                <tr>
                    <td colspan=\"7\">Brak wpisów histori</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

";
        // line 91
        echo "            </tbody>
        </table>
    </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EduwebTrainingBundle:Blog:journal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 91,  156 => 53,  147 => 49,  138 => 45,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  111 => 38,  107 => 36,  103 => 34,  99 => 32,  95 => 30,  93 => 29,  90 => 28,  87 => 27,  82 => 26,  66 => 12,  61 => 10,  59 => 9,  54 => 5,  48 => 4,  35 => 3,  11 => 1,);
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

{% block pageTitle%}Dziennik | {{parent()}}{% endblock %}
{% block contentConteiner %}
    <article class=\"col-md-8 journal\">
        <h1>Domowy dzienniczek inwestora</h1>
        <p>Na początku swojej przygoty z inwestowaniem postanowiłem, że każdą inwestycję będę zapisywał. W ten sposób powstał poniższy dziennik, który prezentuje moją aktywność na giełdzie. Przez ostatnie pare miesięcy wiele się działo. Na zmianę raz zyskiwałem, raz traciłem.</p>
{#        <h4>Wszystkich inwestycji: {{ history | length }}</h4>#}
        {#<pre>{{  dump(history) }}</pre>#}
        <h4>Wszystkich inwestycji: {{ historyObj | length }}</h4>#}
{#        <pre>{{  dump(historyObj) }}</pre>#}
        <table class=\"table table-bordered table-striped table-hover\">
            <thead>
                <tr>
                    <th>Spółka</th>
                    <th>Data rozpoczęcia</th>
                    <th>Śr. kurs nabycia</th>
                    <th>Ilość</th>
                    <th>Data zakończenia</th>
                    <th>Śr. kurs sprzedaży</th>
                    <th>Wynik</th>
                </tr>
            </thead>
            <tbody>

            {% for row in historyObj %}
                {% if  row.isFinished %}

                    {% if row.isClosedPositive %}
                        <tr class=\"success\">
                    {% else %}
                        <tr class=\"danger\">
                    {% endif %}

                {% else %}
                    <tr>
                {% endif %}

                        <td>{{ row.getCompanyName | upper }}</td>
                        <td>{{ row.getStartDate | date('d.m.Y') }}</td>
                        <td>{{ row.PurchasePrice | number_format(2, ',',' ') }} zł</td>
                        <td>{{ row.getQuantity | number_format(0, ',',' ')}}</td>
                        <td>{{ row.isFinished ? row.getEndDate | date('d.m.Y') : '---'}}</td>
                        <td>{{ row.isFinished ? row.getSellingPrice | number_format(2, ',',' ')~' zł' :'---' }} </td>
                        <td>{{ row.isFinished ? row.getResult | number_format(2, ',',' ')~' zł' :'---' }}</td>

                    </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">Brak wpisów histori</td>
                </tr>
            {% endfor %}


{#                <tr class=\"success\">#}
{#                    <td>ATREM</td>#}
{#                    <td>03.03.2012</td>#}
{#                    <td>7,50 zł</td>#}
{#                    <td>1 000</td>#}
{#                    <td>05.05.2012</td>#}
{#                    <td>9,10 zł</td>#}
{#                    <td></td>#}
{#                </tr>#}
{#                <tr>#}
{#                    <td>DEBICA</td>#}
{#                    <td>12.01.2013</td>#}
{#                    <td>96,20 zł</td>#}
{#                    <td>100</td>#}
{#                    <td>---</td>#}
{#                    <td>---</td>#}
{#                    <td>---</td>#}
{#                </tr>#}
{#                <tr class=\"success\">#}
{#                    <td>ALCHEMIA</td>#}
{#                    <td>05.03.2012</td>#}
{#                    <td>5,20 zł</td>#}
{#                    <td>1 500</td>#}
{#                    <td>15.09.2013</td>#}
{#                    <td>9,30 zł</td>#}
{#                    <td></td>#}
{#                </tr>#}
{#                <tr class=\"danger\">#}
{#                    <td>VOTUM</td>#}
{#                    <td>12.06.2012</td>#}
{#                    <td>5,82 zł</td>#}
{#                    <td>4 000</td>#}
{#                    <td>28.12.2013</td>#}
{#                    <td>4,30 zł</td>#}
{#                    <td></td>#}
{#                </tr>#}
            </tbody>
        </table>
    </article>
{% endblock %}
", "EduwebTrainingBundle:Blog:journal.html.twig", "/var/www/html/app/src/Eduweb/TrainingBundle/Resources/views/Blog/journal.html.twig");
    }
}
