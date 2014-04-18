<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // web_student_etudiant_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_student_etudiant_homepage')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',));
        }

        // Etudiant_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'Etudiant_accueil',);
        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // Etudiant_ajouter
            if ($pathinfo === '/etudiant/ajouter') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::etudiantAjouterAction',  '_route' => 'Etudiant_ajouter',);
            }

            // Etudiant_modifier
            if (0 === strpos($pathinfo, '/etudiant/modifier') && preg_match('#^/etudiant/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Etudiant_modifier')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::etudiantModifierAction',));
            }

            // Etudiant_consulter
            if (0 === strpos($pathinfo, '/etudiant/consulter') && preg_match('#^/etudiant/consulter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Etudiant_consulter')), array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::etudiantConsulterAction',));
            }

            // Etudiant_rechercher
            if ($pathinfo === '/etudiant/rechercher') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::etudiantRechercherAction',  '_route' => 'Etudiant_rechercher',);
            }

        }

        if (0 === strpos($pathinfo, '/niveau')) {
            // Niveau_ajouter
            if ($pathinfo === '/niveau/ajouter') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::niveauAjouterAction',  '_route' => 'Niveau_ajouter',);
            }

            // Niveau_consulter
            if ($pathinfo === '/niveau/consulter') {
                return array (  '_controller' => 'webStudent\\EtudiantBundle\\Controller\\EtudiantController::niveauConsulterAction',  '_route' => 'Niveau_consulter',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
