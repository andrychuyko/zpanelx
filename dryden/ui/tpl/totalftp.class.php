<?php

/**
 * Generic template place holder class.
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @version 1.0.0
 * @author Bobby Allen (ballen@zpanelcp.com)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_totalftp {

    public static function Template() {
        $currentuser = ctrl_users::GetUserDetail();
        $ftpaccountsquota = $currentuser['ftpaccountsquota'];
        if ($ftpaccountsquota < 0)
            return '&#8734;';
        else
            return $ftpaccountsquota;
    }

}

?>
