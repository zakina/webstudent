<?php

/* webStudentEtudiantBundle:Etudiant:index.html.twig */
class __TwigTemplate_a511cb5346e91fdd8b05bdd6261668895a8d8c996b6a859d789b9bc2721bef8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("webStudentEtudiantBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "webStudentEtudiantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " PAGE D'ACCUEIL : affichage des périodes de stage à venir";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  
 Date d'aujourd'hui : ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
 Annee d'aujourd'hui : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
 
";
        // line 14
        echo " 
 ";
        // line 16
        echo " ";
        // line 17
        echo " ";
        // line 18
        echo " ";
        // line 19
        echo " 
 <table class=\"table table-bordered table-striped table-condensed\">
 <tr>
\t\t\t<td>id</td>
\t\t\t<td>Section</td>
\t\t\t<td>Année</td>
\t\t\t<td>Date de debut</td>
\t\t\t<td>Date de fin</td>
\t\t\t<td>Nb de semaines</td>
\t\t</tr>
\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listePeriodeStage"]) ? $context["listePeriodeStage"] : $this->getContext($context, "listePeriodeStage")));
        foreach ($context['_seq'] as $context["_key"] => $context["periode"]) {
            // line 30
            echo "\t\t";
            // line 31
            echo "\t\t\t<tr>
\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")), "section"), "nom"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")), "niveau"), "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")), "DateDebut"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")), "DateFin"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")), "nbSemaines"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
            // line 40
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
</table>
 
 
 

 </p>
";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  106 => 40,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  78 => 31,  76 => 30,  72 => 29,  60 => 19,  58 => 18,  56 => 17,  54 => 16,  51 => 14,  46 => 9,  42 => 8,  39 => 7,  36 => 6,  29 => 4,);
    }
}
