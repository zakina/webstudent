<?php

/* webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig */
class __TwigTemplate_dd26e35bb28deceb750a699974047772d6aa33ce792493911f217e3fcc1f0b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("webStudentEtudiantBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "

 <h5>PAGE DE CONSULTATION D'UN ETUDIANT</h5>
 <p>
  <table class=\"table table-bordered table-striped table-condensed\">
     <tr><td>Id : </td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id"), "html", null, true);
        echo " </td></tr>
\t<tr><td>Nom : </td><td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom"), "html", null, true);
        echo "</td>
\t<td  rowspan=\"8\" class=\"imgEtu\">
\t\t\t\t\t";
        // line 16
        $context["photo"] = (("img/etudiant/" . $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id")) . ".jpg");
        // line 17
        echo "\t\t\t\t\t<span class=\"zoom\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('translator')->trans((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom") . " ") . $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom") . " ") . $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom")), "html", null, true);
        echo "\"/></span></td></tr> </td>
    <tr><td>Prénom : </td><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom"), "html", null, true);
        echo "</td></tr></tr>
\t
       <tr><td>Date de naissance : </td><td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "dateNaissance"), "d/m/Y"), "html", null, true);
        echo "</td></tr>
\t  <tr><td>adresse mail </td><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "adrMail"), "html", null, true);
        echo "</td></tr>
\t  <tr><td>Téléphone </td><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone"), "html", null, true);
        echo "</td></tr>
\t  <tr><td>Section </td><td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "section"), "nom"), "html", null, true);
        echo "</td></tr>
\t  <tr><td>Année </td><td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "niveau"), "libelle"), "html", null, true);
        echo "</td></tr>
\t  <tr><td>Promotion </td><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "promo"), "annee"), "html", null, true);
        echo "</td></tr>
 </table>
\t
\t
 
 ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:etudiantConsulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  72 => 18,  63 => 17,  61 => 16,  56 => 14,  52 => 13,  45 => 8,  42 => 7,  37 => 5,  30 => 4,);
    }
}
