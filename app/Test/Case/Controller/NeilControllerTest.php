<?php
App::uses('NeilController', 'Controller');

/**
 * MessagesController Test Case
 */
class NeilControllerTest extends ControllerTestCase {


/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->testAction('/');
		echo "aaa"
	}

}
