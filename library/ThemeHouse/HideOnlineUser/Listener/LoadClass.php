<?php

class ThemeHouse_HideOnlineUser_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_HideOnlineUser' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Online',
                ), /* END 'controller' */
            ), /* END 'ThemeHouse_HideOnlineUser' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_HideOnlineUser_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */
}