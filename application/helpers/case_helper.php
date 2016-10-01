<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		CBNUKE
 * @author		CBNUKE
 * @copyright           Copyright (c) 2016
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		https://thaihubhosting.com
 * @version		v1.0
 * @filesource
 *
 * @usage 		$autoload['helper'] = array('case');
 * @example		<?=img('photo.jpg')?>
 *
 * @install		Copy helpers/asset_helper.php to your application/helpers/ directory.
 * 				Then add both files as autoloads in application/autoload.php:
 *
 * 				$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 *
 * 				Autoload CodeIgniter's url_helper in application/config/autoload.php:
 * 				$autoload['helper'] = array('url');
 */
// ------------------------------------------------------------------------
// URL HELPERS

/**
 * Get case id such as 045900001-1
 * param idbegin    ,num ,  point
 *       045900001  ,   1,      1
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('case_idconvert')) {

    function case_idconvert($idbegin, $num = 1, $point = 1) {
        $ans = substr($idbegin, 4);
        $ans += ($num - 1);
        $ans = str_pad($ans, 5, "0", STR_PAD_LEFT);
        return substr($idbegin, 0, 4) . $ans . '-' . $point;
    }

}

/* End of file case_helper.php */