<?php 
defined( '_JEXEC' ) or die;

if (!class_exists('KsenmartTable')){
	require JPATH_COMPONENT_ADMINISTRATOR . DS . 'tables' .DS.'ksenmart.php' ;
}

class KsenmartTableProductRelations extends KsenmartTable
{
	/**
	 * Constructor
	 *
	 * @since	1.5
	 */
	function __construct(&$_db)
	{
		parent::__construct('#__ksenmart_products_relations', 'id', $_db);
		//$date = JFactory::getDate();
		
	}
	
	
	
	
}
