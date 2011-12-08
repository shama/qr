<?php
/**
 * QrComponent Test
 */
App::uses('Controller', 'Controller');
App::uses('Component', 'Controller');
App::uses('ComponentCollection', 'Controller');
App::uses('QrComponent', 'Qr.Controller/Component');
class QrComponentTest extends CakeTestCase {

/**
 * setUp
 */
	public function setUp() {
		parent::setUp();
		$ComponentCollection = new ComponentCollection();
		$this->Qr = new QrComponent($ComponentCollection);
	}

/**
 * tearDown
 */
	public function tearDown() {
		parent::tearDown();
		unset($this->Qr);
	}

/**
 * testText
 */
	public function testText() {
		$result = $this->Qr->text('Kyle');
		$expected = 'http://chart.apis.google.com/chart?cht=qr&chl=Kyle&chs=350x350&choe=UTF-8&chld=L|4';
		$this->assertEquals($expected, $result);
	}

/**
 * testUrl
 */
	public function testUrl() {
		$result = $this->Qr->url('http://dontkry.com');
		$expected = 'http://chart.apis.google.com/chart?cht=qr&chl=http%3A%2F%2Fdontkry.com&chs=350x350&choe=UTF-8&chld=L|4';
		$this->assertEquals($expected, $result);
	}

/**
 * testEmail
 */
	public function testEmail() {
		$result = $this->Qr->text('kyle@dontkry.com');
		$expected = 'http://chart.apis.google.com/chart?cht=qr&chl=kyle%40dontkry.com&chs=350x350&choe=UTF-8&chld=L|4';
		$this->assertEquals($expected, $result);
	}
}