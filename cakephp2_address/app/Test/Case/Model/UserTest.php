<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		// CalassRegistry description is witten at cakePHP p227 
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

/**
 * testNameAndMail1IsRequiredItem method
 *
 * @return void
 */
	public function testNameAndMail1IsRequiredItem()
	{
		
		$this->User->create(array('User' => 
				array('name' => '', 'mail1' => '')));
		$this->assertFalse($this->User->validates());
		$this->assertArrayHasKey('name', $this->User->validationErrors);
		$this->assertArrayHasKey('mail1', $this->User->validationErrors);
	}

/**
 * testCheckNameAndMail1MaxLength method
 *
 * @return void
 */
	public function testCheckNameAndMail1MaxLength()
	{
		// generate over 64charlength str 
		// (validatton name maxlength 64)
		$name = 'a';
		for ($i=0; $i<64; $i++) {
			$name .= 'a';
		}

		// generate over 128charlength str 
		// (validatton mail1 maxlength 128)
		$mail1 = 'a';
		for ($i=0; $i<128; $i++) {
			$mail1 .= 'a';
		}

		$this->User->create(array('User' => 
				array('name' => $name, 'mail1' => $mail1)));
		$this->assertFalse($this->User->validates());
		$this->assertArrayHasKey('name', $this->User->validationErrors);
		$this->assertArrayHasKey('mail1', $this->User->validationErrors);	
	}	
}
