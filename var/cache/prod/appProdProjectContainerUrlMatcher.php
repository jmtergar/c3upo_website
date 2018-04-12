<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // registrationRegister
        if ('/registration' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_registrationRegister;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registrationRegisterAction',  '_route' => 'registrationRegister',);
        }
        not_registrationRegister:

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::indexAction',  '_route' => 'admin_index',);
            }

            // login_route
            if ('/admin/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
            }

            if (0 === strpos($pathinfo, '/admin/leader')) {
                // adminstration_leader_creation
                if ('/admin/leaderCreation' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_leader_creation;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::leaderCreationAction',  '_route' => 'adminstration_leader_creation',);
                }
                not_adminstration_leader_creation:

                // adminstration_leader_edition
                if (0 === strpos($pathinfo, '/admin/leaderEdition') && preg_match('#^/admin/leaderEdition/(?P<leaderId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_leader_edition;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_leader_edition')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::leaderEditionAction',));
                }
                not_adminstration_leader_edition:

                // adminstration_leader_deletion
                if (0 === strpos($pathinfo, '/admin/leaderDeletion') && preg_match('#^/admin/leaderDeletion/(?P<leaderId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_leader_deletion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_leader_deletion')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::leaderDeletionAction',));
                }
                not_adminstration_leader_deletion:

            }

            elseif (0 === strpos($pathinfo, '/admin/get')) {
                // administration_get_users_table
                if (0 === strpos($pathinfo, '/admin/getUsersJson') && preg_match('#^/admin/getUsersJson(?:/(?P<clusterStatus>[^/]++)(?:/(?P<userStatus>[^/]++))?)?$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_administration_get_users_table;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'administration_get_users_table')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::getUsersJsonAction',  'clusterStatus' => NULL,  'userStatus' => NULL,));
                }
                not_administration_get_users_table:

                // adminstration_getUsers_by
                if (0 === strpos($pathinfo, '/admin/getUsersBy') && preg_match('#^/admin/getUsersBy/(?P<cmd>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_getUsers_by;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_getUsers_by')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::getUsersByAction',));
                }
                not_adminstration_getUsers_by:

                // administration_get_centres_table
                if ('/admin/getCentresJson' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_administration_get_centres_table;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::getCentersJsonAction',  '_route' => 'administration_get_centres_table',);
                }
                not_administration_get_centres_table:

                // administration_get_departments_table
                if ('/admin/getDepartmentsJson' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_administration_get_departments_table;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::getDepartmentsJsonAction',  '_route' => 'administration_get_departments_table',);
                }
                not_administration_get_departments_table:

                // administration_get_groups_table
                if ('/admin/getGroupsJson' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_administration_get_groups_table;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::getGroupsJsonAction',  '_route' => 'administration_get_groups_table',);
                }
                not_administration_get_groups_table:

                // administration_get_leaders_table
                if ('/admin/getLeadersJson' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_administration_get_leaders_table;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::getLeadersJsonAction',  '_route' => 'administration_get_leaders_table',);
                }
                not_administration_get_leaders_table:

            }

            elseif (0 === strpos($pathinfo, '/admin/group')) {
                // adminstration_group_creation
                if ('/admin/groupCreation' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_group_creation;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::groupCreationAction',  '_route' => 'adminstration_group_creation',);
                }
                not_adminstration_group_creation:

                // adminstration_group_edition
                if (0 === strpos($pathinfo, '/admin/groupEdition') && preg_match('#^/admin/groupEdition/(?P<groupId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_group_edition;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_group_edition')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::groupEditionAction',));
                }
                not_adminstration_group_edition:

                // adminstration_group_deletion
                if (0 === strpos($pathinfo, '/admin/groupDeletion') && preg_match('#^/admin/groupDeletion/(?P<groupId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_group_deletion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_group_deletion')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::groupDeletionAction',));
                }
                not_adminstration_group_deletion:

            }

            elseif (0 === strpos($pathinfo, '/admin/user')) {
                // adminstration_user_verification
                if (0 === strpos($pathinfo, '/admin/userVerification') && preg_match('#^/admin/userVerification/(?P<userId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_user_verification;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_user_verification')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::userVerificationAction',));
                }
                not_adminstration_user_verification:

                // adminstration_user_edition
                if (0 === strpos($pathinfo, '/admin/userEdition') && preg_match('#^/admin/userEdition/(?P<userId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_user_edition;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_user_edition')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::userEditionAction',));
                }
                not_adminstration_user_edition:

                // adminstration_user_enable
                if (0 === strpos($pathinfo, '/admin/userStatus') && preg_match('#^/admin/userStatus/(?P<userId>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_user_enable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_user_enable')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::userStatusAction',));
                }
                not_adminstration_user_enable:

            }

            // adminstration_distributionList_enable
            if (0 === strpos($pathinfo, '/admin/distributionListStatus') && preg_match('#^/admin/distributionListStatus/(?P<userId>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_adminstration_distributionList_enable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_distributionList_enable')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::distributionListStatusAction',));
            }
            not_adminstration_distributionList_enable:

            if (0 === strpos($pathinfo, '/admin/department')) {
                // adminstration_department_creation
                if ('/admin/departmentCreation' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_department_creation;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::departmentCreationAction',  '_route' => 'adminstration_department_creation',);
                }
                not_adminstration_department_creation:

                // adminstration_department_edition
                if (0 === strpos($pathinfo, '/admin/departmentEdition') && preg_match('#^/admin/departmentEdition/(?P<departmentId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_department_edition;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_department_edition')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::departmentEditionAction',));
                }
                not_adminstration_department_edition:

                // adminstration_department_deletion
                if (0 === strpos($pathinfo, '/admin/departmentDeletion') && preg_match('#^/admin/departmentDeletion/(?P<departmentId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_department_deletion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_department_deletion')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::departmentDeletionAction',));
                }
                not_adminstration_department_deletion:

            }

            elseif (0 === strpos($pathinfo, '/admin/centre')) {
                // adminstration_centre_creation
                if ('/admin/centreCreation' === $pathinfo && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_centre_creation;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::centreCreationAction',  '_route' => 'adminstration_centre_creation',);
                }
                not_adminstration_centre_creation:

                // adminstration_centre_edition
                if (0 === strpos($pathinfo, '/admin/centreEdition') && preg_match('#^/admin/centreEdition/(?P<centreId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_centre_edition;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_centre_edition')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::centreEditionAction',));
                }
                not_adminstration_centre_edition:

                // adminstration_centre_deletion
                if (0 === strpos($pathinfo, '/admin/centreDeletion') && preg_match('#^/admin/centreDeletion/(?P<centreId>[^/]++)$#s', $pathinfo, $matches) && $request->isXmlHttpRequest()) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_adminstration_centre_deletion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminstration_centre_deletion')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::centreDeletionAction',));
                }
                not_adminstration_centre_deletion:

            }

        }

        // login_check
        if ('/login_check' === $pathinfo) {
            return array('_route' => 'login_check');
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/captcha-resource')) {
            // captcha_resource
            if (preg_match('#^/captcha\\-resource(?:/(?P<filename>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_captcha_resource;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'captcha_resource')), array (  '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaResourceController::indexAction',  'filename' => 'none',));
            }
            not_captcha_resource:

            // captcha_layout_stylesheet_url
            if ('/captcha-resource/bdc-layout-stylesheet.css' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_captcha_layout_stylesheet_url;
                }

                return array (  '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaResourceController::indexAction',  'filename' => 'bdc-layout-stylesheet.css',  '_route' => 'captcha_layout_stylesheet_url',);
            }
            not_captcha_layout_stylesheet_url:

        }

        // captcha_handler
        if ('/captcha-handler' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_captcha_handler;
            }

            return array (  '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaHandlerController::indexAction',  '_route' => 'captcha_handler',);
        }
        not_captcha_handler:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
