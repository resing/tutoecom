<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        // site_backoffice_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_backoffice_default_index')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // site_frontoffice_default_index
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_frontoffice_default_index',);
        }

        // site_frontoffice_default_listproduct
        if ($pathinfo === '/product') {
            return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::listproductAction',  '_route' => 'site_frontoffice_default_listproduct',);
        }

        // single_product
        if (0 === strpos($pathinfo, '/single') && preg_match('#^/single/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'single_product')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::singleAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
