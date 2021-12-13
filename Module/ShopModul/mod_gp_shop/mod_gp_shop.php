<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_gp_shop
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Gp_ShopNamespace\Module\Gp_Shop\Site\Helper\Gp_ShopHelper;

$test  = Gp_ShopHelper::getText();

$url = $params->get('domain');

require ModuleHelper::getLayoutPath('mod_gp_shop', $params->get('layout', 'default'));
