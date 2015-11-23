<?php

/**
 *
 * @see XenForo_ControllerPublic_Online
 */
class ThemeHouse_HideOnlineUser_Extend_XenForo_ControllerPublic_Online extends XFCP_ThemeHouse_HideOnlineUser_Extend_XenForo_ControllerPublic_Online
{

    /**
     *
     * @see XenForo_ControllerPublic_Online::actionIndex()
     */
    public function actionIndex()
    {
        $visitor = XenForo_Visitor::getInstance();

        if (!$visitor['visible']) {
            return $this->responseError(new XenForo_Phrase('th_only_visible_users_have_permission_hideonlineusers'), 403);
        }

        return parent::actionIndex();
    } /* END actionIndex */
}