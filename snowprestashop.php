<?php
/*
Snow Prestashop Module
Developed by Gialuca Barranca
*/

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class SnowPrestashop extends Module{

	function __construct(){
		$this->name = 'snowprestashop';
		$this->tab = 'front_office_features';
		$this->version = '0.1';
		$this->author = 'Gianluca Barranca';
		$this->need_instance = 0;

		parent::__construct();

		$this->displayName = $this->l('Add an effect Christmas to your site ');
		$this->description = $this->l('A snow effect for prestashop ');
	}

	function install(){

		 if (!parent::install() ||
		 	!$this->registerHook('displayHeader') ||
		 	!$this->registerHook('displayTop')
		 	)
    			return false;

  	return true;

	}

	public function uninstall(){

	  if (!parent::uninstall())
	    return false;
	return true;

	}

	function getContent(){
		//here your code
	}

	public function hookDisplayTop($params){

		global $smarty;
		$content = '<div id="snowflakeContainer"><p class="snowflake">*</p></div>' ;
		$smarty->assign(array(
		'content' => $content,
		));

		return $this->display(__FILE__, 'snowprestashop.tpl');
	}

	public function hookDisplayHeader($params){
	    $this->context->controller->addCSS($this->_path.'snowprestashop.css', 'all');


	}
}
?>