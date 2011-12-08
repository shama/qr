<?php
/**
 * Component wrapper for Qr Lib
 * 
 * @author Kyle Robinson Young <kyle at dontkry.com>
 */
App::uses('Component', 'Controller');
App::uses('Qr', 'Qr.Lib');
class QrComponent extends Component {
/**
 * _Qr
 * @var Object
 */
	protected $_Qr = null;

/**
 * __construct
 * @param ComponentCollection $collection
 * @param array $settings 
 */
	public function __construct(ComponentCollection $collection, $settings = array()) {
		parent::__construct($collection, $settings);
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
		return call_user_func_array(array($this->_Qr, $name), $arguments);
	}
}