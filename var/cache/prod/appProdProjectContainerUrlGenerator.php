<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registrationRegister' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::registrationRegisterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_route' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration_get_users_table' => array (  0 =>   array (    0 => 'clusterStatus',    1 => 'userStatus',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::getUsersJsonAction',    'clusterStatus' => NULL,    'userStatus' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userStatus',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'clusterStatus',    ),    2 =>     array (      0 => 'text',      1 => '/admin/getUsersJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_user_verification' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::userVerificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/userVerification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_user_edition' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::userEditionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/userEdition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_user_enable' => array (  0 =>   array (    0 => 'userId',    1 => 'status',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::userStatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'status',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    2 =>     array (      0 => 'text',      1 => '/admin/userStatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_distributionList_enable' => array (  0 =>   array (    0 => 'userId',    1 => 'status',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::distributionListStatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'status',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    2 =>     array (      0 => 'text',      1 => '/admin/distributionListStatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_getUsers_by' => array (  0 =>   array (    0 => 'cmd',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::getUsersByAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cmd',    ),    2 =>     array (      0 => 'text',      1 => '/admin/getUsersBy',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration_get_centres_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::getCentersJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/getCentresJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_centre_creation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::centreCreationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/centreCreation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_centre_edition' => array (  0 =>   array (    0 => 'centreId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::centreEditionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'centreId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/centreEdition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_centre_deletion' => array (  0 =>   array (    0 => 'centreId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::centreDeletionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'centreId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/centreDeletion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration_get_departments_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::getDepartmentsJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/getDepartmentsJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_department_creation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::departmentCreationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/departmentCreation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_department_edition' => array (  0 =>   array (    0 => 'departmentId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::departmentEditionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'departmentId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/departmentEdition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_department_deletion' => array (  0 =>   array (    0 => 'departmentId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::departmentDeletionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'departmentId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/departmentDeletion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration_get_groups_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::getGroupsJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/getGroupsJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_group_creation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::groupCreationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/groupCreation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_group_edition' => array (  0 =>   array (    0 => 'groupId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::groupEditionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'groupId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/groupEdition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_group_deletion' => array (  0 =>   array (    0 => 'groupId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::groupDeletionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'groupId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/groupDeletion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration_get_leaders_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::getLeadersJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/getLeadersJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_leader_creation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::leaderCreationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/leaderCreation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_leader_edition' => array (  0 =>   array (    0 => 'leaderId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::leaderEditionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leaderId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/leaderEdition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminstration_leader_deletion' => array (  0 =>   array (    0 => 'leaderId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdministrationController::leaderDeletionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leaderId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/leaderDeletion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'captcha_resource' => array (  0 =>   array (    0 => 'filename',  ),  1 =>   array (    '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaResourceController::indexAction',    'filename' => 'none',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'filename',    ),    1 =>     array (      0 => 'text',      1 => '/captcha-resource',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'captcha_layout_stylesheet_url' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaResourceController::indexAction',    'filename' => 'bdc-layout-stylesheet.css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/captcha-resource/bdc-layout-stylesheet.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'captcha_handler' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaHandlerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/captcha-handler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
