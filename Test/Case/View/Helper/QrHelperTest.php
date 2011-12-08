<?php
/**
 * QrHelper Test
 */
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('QrHelper', 'Qr.View/Helper');
class QrHelperTest extends CakeTestCase {

/**
 * setUp
 */
	public function setUp() {
		parent::setUp();
		$Controller = new Controller();
		$View = new View($Controller);
		$this->Qr = new QrHelper($View);
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
		$expected = '<img src="http://chart.apis.google.com/chart?cht=qr&chl=Kyle&chs=350x350&choe=UTF-8&chld=L|4" alt="" />';
		$this->assertEquals($expected, $result);
	}

/**
 * testUrl
 */
	public function testUrl() {
		$result = $this->Qr->url('dontkry.com');
		$expected = '<img src="http://chart.apis.google.com/chart?cht=qr&chl=http%3A%2F%2Fdev%2Fdontkry.com&chs=350x350&choe=UTF-8&chld=L|4" alt="" />';
		$this->assertEquals($expected, $result);
	}

/**
 * testEmail
 */
	public function testEmail() {
		$result = $this->Qr->text('kyle@dontkry.com');
		$expected = '<img src="http://chart.apis.google.com/chart?cht=qr&chl=kyle%40dontkry.com&chs=350x350&choe=UTF-8&chld=L|4" alt="" />';
		$this->assertEquals($expected, $result);
	}
}