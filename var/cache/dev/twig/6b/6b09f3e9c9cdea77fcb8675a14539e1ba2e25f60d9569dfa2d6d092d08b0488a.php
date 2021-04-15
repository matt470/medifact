<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* patient/show.html.twig */
class __TwigTemplate_16a5ee52fa9f5b35c8c4f6110271dbc77558dc30e86ed88518905d2acb599562 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "patient/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Patient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Patient</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>modifier
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            
    <hr>
    
    <h2>Les actes du patient</h2>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Motif</th>
                <th>Date</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actes"]) || array_key_exists("actes", $context) ? $context["actes"] : (function () { throw new RuntimeError('Variable "actes" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["acte"]) {
            // line 44
            echo "            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acte"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acte"], "motif", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["acte"], "date", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acte"], "date", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acte_show", ["id" => twig_get_attribute($this->env, $this->source, $context["acte"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Voir</a>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acte_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["acte"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
    
    <hr>
    
    <h2>Les factures du patient</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descriptif</th>
                <th>Tarif</th>
                <th>Paye</th>
                <th>Date</th>
                ";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRATICIEN")) {
            // line 73
            echo "                <th>Etat</th>
                ";
        }
        // line 75
        echo "                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 80
            echo "            <tr>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "descriptif", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "tarif", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "paye", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 85)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 85), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                ";
            // line 86
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRATICIEN")) {
                // line 87
                echo "                <td>
                    ";
                // line 88
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["facture"], "tarif", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, $context["facture"], "paye", [], "any", false, false, false, 88)))) {
                    // line 89
                    echo "                        Réglée
                    ";
                } elseif ((1 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 90
$context["facture"], "tarif", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, $context["facture"], "paye", [], "any", false, false, false, 90)))) {
                    // line 91
                    echo "                        Non réglée
                    ";
                } else {
                    // line 93
                    echo "                        Vérifier facture
                    ";
                }
                // line 95
                echo "                </td>
                ";
            }
            // line 97
            echo "                <td>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">
                                                                        Voir</a>
                    <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">
                                                                        Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
        </tbody>
    </table>
    
    <h2>Suivi du patient</h2>
    
    <p>Reste dû : ";
        // line 115
        echo twig_escape_filter($this->env, ((isset($context["sommeTarif"]) || array_key_exists("sommeTarif", $context) ? $context["sommeTarif"] : (function () { throw new RuntimeError('Variable "sommeTarif" does not exist.', 115, $this->source); })()) - (isset($context["sommePaye"]) || array_key_exists("sommePaye", $context) ? $context["sommePaye"] : (function () { throw new RuntimeError('Variable "sommePaye" does not exist.', 115, $this->source); })())), "html", null, true);
        echo " euros</p>

    <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_index");
        echo "\">retour à la liste</a>

    <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
        echo "\">modifier</a>
    
    <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acte_new", ["patient_id" => twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        echo "\">Créer Acte</a>
    
    ";
        // line 123
        echo twig_include($this->env, $context, "patient/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "patient/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 123,  312 => 121,  307 => 119,  302 => 117,  297 => 115,  289 => 109,  280 => 105,  270 => 100,  265 => 98,  262 => 97,  258 => 95,  254 => 93,  250 => 91,  248 => 90,  245 => 89,  243 => 88,  240 => 87,  238 => 86,  234 => 85,  230 => 84,  226 => 83,  222 => 82,  218 => 81,  215 => 80,  210 => 79,  204 => 75,  200 => 73,  198 => 72,  182 => 58,  173 => 54,  164 => 50,  160 => 49,  155 => 47,  151 => 46,  147 => 45,  144 => 44,  139 => 43,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Patient{% endblock %}

{% block body %}
    <h1>Patient</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ patient.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ patient.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>modifier
                <td>{{ patient.prenom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ patient.adresse }}</td>
            </tr>
        </tbody>
    </table>
            
    <hr>
    
    <h2>Les actes du patient</h2>
    
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Motif</th>
                <th>Date</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for acte in actes %}
            <tr>
                <td>{{ acte.id }}</td>
                <td>{{ acte.motif }}</td>
                <td>{{ acte.date ? acte.date|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('acte_show', {'id': acte.id}) }}\">Voir</a>
                    <a href=\"{{ path('acte_edit', {'id': acte.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    <hr>
    
    <h2>Les factures du patient</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descriptif</th>
                <th>Tarif</th>
                <th>Paye</th>
                <th>Date</th>
                {% if is_granted('ROLE_PRATICIEN') %}
                <th>Etat</th>
                {% endif %}
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for facture in factures %}
            <tr>
                <td>{{ facture.id }}</td>
                <td>{{ facture.descriptif }}</td>
                <td>{{ facture.tarif }}</td>
                <td>{{ facture.paye }}</td>
                <td>{{ facture.date ? facture.date|date('Y-m-d') : '' }}</td>
                {% if is_granted('ROLE_PRATICIEN') %}
                <td>
                    {% if  facture.tarif == facture.paye %}
                        Réglée
                    {% elseif facture.tarif > facture.paye %}
                        Non réglée
                    {% else %}
                        Vérifier facture
                    {% endif %}
                </td>
                {% endif %}
                <td>
                    <a href=\"{{ path('facture_show', {'id': facture.id}) }}\">
                                                                        Voir</a>
                    <a href=\"{{ path('facture_edit', {'id': facture.id}) }}\">
                                                                        Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    
    <h2>Suivi du patient</h2>
    
    <p>Reste dû : {{ sommeTarif - sommePaye }} euros</p>

    <a href=\"{{ path('patient_index') }}\">retour à la liste</a>

    <a href=\"{{ path('patient_edit', {'id': patient.id}) }}\">modifier</a>
    
    <a href=\"{{ path('acte_new', {'patient_id': patient.id}) }}\">Créer Acte</a>
    
    {{ include('patient/_delete_form.html.twig') }}
{% endblock %}
", "patient/show.html.twig", "/home/csp56/medifact/templates/patient/show.html.twig");
    }
}
