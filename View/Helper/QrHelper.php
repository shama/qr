<?php
/**
 * Helper wrapper for Qr Lib
 * 
 * @author Kyle Robinson Young <kyle at dontkry.com>
 */
App::uses('AppHelper', 'View/Helper');
App::uses('Qr', 'Qr.Lib');
class QrHelper extends AppHelper {
/**
 * helpers
 * @var array
 */
	public $helpers = array('Html');

/**
 * _Qr
 * @var Object
 */
	protected $_Qr = null;

/**
 * __construct
 * @param View $View
 * @param array $settings 
 */
	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);
		$this->_Qr = new Qr();
	}

/**
 * __get
 * @param string $name 
 */
	public function __get($name) {
		return $this->_Qr->{$name};
	}

/**
 * __set
 * @param string $name 
 * @param mixed $value
 */
	public function __set($name, $value) {
		$this->_Qr->{$name} = $value;
	}

/**
 * __call
 * @param string $name 
 */
	public function __call($name, $arguments) {
		$url = call_user_func_array(array($this->_Qr, $name), $arguments);
		return '<img src="' . $url . '" alt="" />';
	}
	
/**
 * Override Helper::url
 * 
 * @param string $url
 * @param array $options
 * @return string 
 */
	public function url($url = '', $options = array()) {
		$url = call_user_func_array(array($this->_Qr, 'url'), array($url, $options));
		return '<img src="' . $url . '" alt="" />';
	}
}