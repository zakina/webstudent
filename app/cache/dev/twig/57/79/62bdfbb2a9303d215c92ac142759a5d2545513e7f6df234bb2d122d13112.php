<?php

/* webStudentEtudiantBundle:Etudiant:etudiantLister.html.twig */
class __TwigTemplate_577962bdfbb2a9303d215c92ac142759a5d2545513e7f6df234bb2d122d13112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
<form id=\"form_recherche\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("Etudiant_rechercher");
        echo "\" method=\"post\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Rechercher\" />
</form>
<div class=\"loading\"></div>
<div id=\"resultats_recherche\"> 
    ";
        // line 9
        $this->env->loadTemplate("webStudentEtudiantBundle:Etudiant:liste.html.twig")->display(array_merge($context, array("listeEtudiant" => (isset($context["listeEtudiant"]) ? $context["listeEtudiant"] : $this->getContext($context, "listeEtudiant")))));
        // line 10
        echo "</div>

<p><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("Etudiant_ajouter");
        echo "\">Ajouter un étudiant</a><p>

<script>
\$(\".loading\").hide();
\$(\"#form_recherche\").submit(function(){ 
    \$(\".loading\").show();
    var nom = \$(\"#etudiantrecherche_nom\").val();
    var DATA = 'nom=' + nom;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("Etudiant_rechercher");
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#resultats_recherche').html(data);
           \$(\".loading\").hide();
        }
    });    
    return false;
});
</script>
";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle:Etudiant:etudiantLister.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  47 => 12,  43 => 10,  41 => 9,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
