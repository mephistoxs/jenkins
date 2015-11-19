<?php
App::uses('NeilController', 'Controller');

/**
 * MessagesController Test Case
 */
class NeilControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message',
		'app.user',
		'app.message_content'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->testAction('/index');
	}

}
