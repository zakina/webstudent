<?php

/* webStudentEtudiantBundle:Etudiant:etudiantModifier.html.twig */
class __TwigTemplate_a6258a4b28580f3891d9a558c2bf5767e96fc345a3eab80d7b35f6b5f1b4837f extends Twig_Template
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
        // line 14
        echo "\t
\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " \t 
\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "\t
\t
<div>
  ";
        // line 20
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', array("label" => "Nom étudiant "));
        echo "
  
  ";
        // line 23
        echo "  ";
        // line 24
        echo " 
  ";
        // line 26
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo " 
  
  ";
        // line 29
        echo "  ";
        // line 30
        echo " 
  ";
        // line 32
        echo "  ";
        // line 33
        echo " 
  ";
        // line 35
        echo "  ";
        // line 36
        echo "
</div>
\t\t
\t\t";
        // line 40
        echo "\t\t
\t\t<input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:etudiantModifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  94 => 36,  92 => 35,  89 => 33,  87 => 32,  84 => 30,  82 => 29,  76 => 26,  73 => 24,  71 => 23,  65 => 20,  59 => 16,  55 => 15,  52 => 14,  50 => 13,  46 => 12,  39 => 7,  36 => 6,  29 => 4,);
    }
}
