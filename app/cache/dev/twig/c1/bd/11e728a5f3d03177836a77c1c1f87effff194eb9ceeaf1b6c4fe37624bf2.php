<?php

/* webStudentEtudiantBundle:Etudiant:listeEtudiant.html.twig */
class __TwigTemplate_c1bd11e728a5f3d03177836a77c1c1f87effff194eb9ceeaf1b6c4fe37624bf2 extends Twig_Template
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
<h3>LISTE DES ETUDIANTS RECHERCHES</h3>
<table class=\"table table-bordered table-striped table-condensed\">
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEtudiant"]) ? $context["listeEtudiant"] : $this->getContext($context, "listeEtudiant")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 11
            echo "    <tr>
\t<td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Etudiant_consulter", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nom"), "html", null, true);
            echo "</a></td>
\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Etudiant_consulter", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "prenom"), "html", null, true);
            echo "</a></td>
\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "dateNaissance"), "d/m/Y"), "html", null, true);
            echo "</td>
\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "adrMail"), "html", null, true);
            echo "</td>
\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "section"), "code"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "niveau"), "id"), "html", null, true);
            echo " </td>
\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "promo"), "annee"), "html", null, true);
            echo "</td>
\t<td> <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Etudiant_modifier", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\"> <img src=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/crayon.png"), "html", null, true);
            echo " \"> </a></td>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "    <tr>
\t<td>Aucun etudiant n'a été trouvé.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:listeEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  91 => 20,  82 => 18,  78 => 17,  72 => 16,  68 => 15,  64 => 14,  58 => 13,  52 => 12,  49 => 11,  44 => 10,  39 => 7,  36 => 6,  29 => 4,);
    }
}
