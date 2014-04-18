<?php

/* webStudentEtudiantBundle:Etudiant:etudiantAjouter.html.twig */
class __TwigTemplate_8dbaaa771448caffa9b498b47b73ef8974d0aea052bbc17549835a78d5669fc2 extends Twig_Template
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
<h3>FORMULAIRE ETUDIANT</h3>

 
<div >
  <form class=\"form-inline\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
\t";
        // line 13
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "webStudentEtudiantBundle:Form:fields.html.twig"));
        // line 16
        echo " 
\t";
        // line 18
        echo "\t

\t";
        // line 21
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', array("label" => "Nom      "));
        echo "
 
\t";
        // line 24
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo " 
 
\t";
        // line 27
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("placeholder" => "nom")));
        echo " 
  
\t";
        // line 30
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', array("label" => "Prénom   "));
        echo " 
 
\t";
        // line 33
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'errors');
        echo " 
 
\t";
        // line 36
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "<br>

\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'label', array("label" => "date de naissance  "));
        echo " 
\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'errors');
        echo "
\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'widget', array("attr" => array("placeholder" => "jj/mm/aaaa")));
        echo " \t
\t
\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t
\t\t<input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:etudiantAjouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  103 => 40,  99 => 39,  95 => 38,  89 => 36,  83 => 33,  77 => 30,  71 => 27,  65 => 24,  59 => 21,  55 => 18,  52 => 16,  50 => 13,  46 => 12,  39 => 7,  36 => 6,  29 => 4,);
    }
}
