<?php
/**
* @author Julien Goret (Kyah) http://www.octetsetquartdepouces.net
*
* @package mushraider_bridge
* @version $Id:
* @copyright (c) 2014 Julien Goret
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB')) {
	exit;
}

class acp_mushraider_bridge_info {

    function module()
    {
        return array(
            'filename'	=> 'acp_mushraider_bridge',
            'title'		=> 'ACP_MUSHRAIDER_BRIDGE',
            'version'   => '1.0.0',
            'modes'     => array(
				'config' => array(
					'title' => 'ACP_MRB_CONFIG',
					'auth' => 'acl_a_',
					'cat' => array('ACP_MUSHRAIDER_BRIDGE')
				),
            ),
        );
    }

    function install()
    {
    }

    function uninstall()
    {
    }
}


?>