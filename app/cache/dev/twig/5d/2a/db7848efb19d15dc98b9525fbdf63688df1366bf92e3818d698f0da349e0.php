<?php

/* webStudentEtudiantBundle::layout.html.twig */
class __TwigTemplate_5d2adb7848efb19d15dc98b9525fbdf63688df1366bf92e3818d698f0da349e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  </head>

<header>
\t<div class=\"row\">
\t<div class=\"span3\"></div>
\t<div class=\"span9\"><img alt=\"Lycée Jean Rostand\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/banniere_ljr.jpg"), "html", null, true);
        echo "\"/></div>
\t</div>
\t
\t
\t<div class=\"row\">
\t<div class=\"span3\"></div>
\t<div class=\"span9\"> <h4>BIENVENUE SUR LE SITE WEB DES ETUDIANTS DU LYCEE JEAN ROSTAND</h4></div>
\t</div>
\t
\t
<div class=\"row\">
<div class=\"span3\"></div>
<div class=\"span9\">
\t
<div class=\"navbar\">
  <div class=\"navbar-inner\">
    <div class=\"container\">
      <ul class=\"nav\">
        <li> <a href=\"#\">Accueil</a> </li>
        <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Etudiant <b class=\"caret\"></b> </a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"http://localhost/Symfony/web/app_dev.php/etudiant/rechercher\">Rechercher</a></li>
            <li><a href=\"http://localhost/Symfony/web/app_dev.php/etudiant/ajouter\">Ajouter</a></li>
           

          </ul>
        </li>
         <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Stage <b class=\"caret\"></b> </a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Rechercher</a></li>
            <li><a href=\"#\">Ajouter</a></li>
            <li><a href=\"#\">Modifier</a></li>

          </ul>
        </li>
\t\t
\t\t <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> Entreprise <b class=\"caret\"></b> </a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Rechercher</a></li>
            <li><a href=\"#\">Ajouter</a></li>
            <li><a href=\"#\">Modifier</a></li>

          </ul>
        </li>
      </ul>
      <form class=\"navbar-search pull-right\" action=\"\">
        <input class=\"search-query\" type=\"text\" placeholder=\"Recherche\">
      </form>
    </div>
  </div>
</div>\t
\t
</div>
\t
\t</div>\t
\t
\t
\t
</header>
 
   
\t  <body>
\t   <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t   <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t <div class=\"row\">
<div class=\"span3\"></div>
<div class=\"span9\">
\t\t ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "\t\t </div>
\t\t </div>
\t\t
\t  </body>
   

</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "WEBSTUDENT";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/webstudent.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "\t\t ";
    }

    public function getTemplateName()
    {
        return "webStudentEtudiantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 87,  152 => 86,  146 => 11,  141 => 10,  138 => 9,  132 => 8,  122 => 88,  120 => 86,  112 => 81,  108 => 80,  43 => 18,  36 => 13,  34 => 9,  30 => 8,  22 => 2,);
    }
}
