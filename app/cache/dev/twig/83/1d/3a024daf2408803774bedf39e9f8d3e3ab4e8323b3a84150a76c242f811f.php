<?php

/* webStudentEtudiantBundle:Etudiant:etudiantRechercher.html.twig */
class __TwigTemplate_831d3a024daf2408803774bedf39e9f8d3e3ab4e8323b3a84150a76c242f811f extends Twig_Template
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
<h3>FORMULAIRE DE RECHERCHE</h3>

 
<div >
\t";
        // line 12
        echo "\t
\t<form method=\"post\" class=\"form-inline\"  method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
 
</div>

";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:etudiantRechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 13,  46 => 12,  39 => 7,  36 => 6,  29 => 4,);
    }
}
