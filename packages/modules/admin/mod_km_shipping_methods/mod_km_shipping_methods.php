<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

$view = JRequest::getVar('view', 'panel');
if (in_array('*', $params->get('views', array('shippings'))) || in_array($view, $params->get('views', array('shippings')))) {
	KSSystem::loadModuleFiles('mod_km_shipping_methods');
	require_once dirname(__FILE__) . DS . 'helper.php';
	$methods = ModKSMShippingMethodsHelper::getShippingMethods();
	require JModuleHelper::getLayoutPath('mod_km_shipping_methods', $params->get('layout', 'default'));
}