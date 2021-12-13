<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_gp_shop
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Gp_ShopNamespace\Module\Gp_Shop\Site\Helper;

\defined('_JEXEC') or die;

/**
 * Helper for mod_gp_shop
 *
 * @since  __BUMP_VERSION__
 */
class Gp_ShopHelper
{
	/**
	 * Retrieve gp_shop test
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getText()
	{
		return 'Gp_ShopHelpertest';
	}
}
