<?php
/**
 * Class SampleTest
 *
 * @package Laboratoria_WhatsApp_Plugin
 */

/**
 * Sample test case.
 */


 require_once (plugin_dir_path(__DIR__).'admin/data-base.php');
 require_once (plugin_dir_path(__DIR__).'Laboratoria-WhatsApp-plugin.php');

class TestFunction extends WP_UnitTestCase {

	public function test_encodeURI() {
		$messageEncode = 'This%20is%20a%20test%20message';
		$result = encodeURI('This is a test message');		
		$this->assertEquals( $messageEncode, $result );
	}
	public function test_encodeURI_withoutSpaces() {
		$messageEncode = 'second-test-message';
		$result = encodeURI('second-test-message');		
		$this->assertEquals( $messageEncode, $result );
	}
	public function test_encodeURI_number() {
		$messageEncode = '12345';
		$result = encodeURI(12345);		
		$this->assertEquals( $messageEncode, $result );
	}
	//--------//

	public function test_getData() {
		$answerArray = ['Paquita la del barrio', '573133133122', 'Bienvenidos a paquita', 'Bienvenidos%20a%20paquita'];
		$_POST = array("enterpriseName"=>'Paquita la del barrio', "select"=>57, "number"=>3133133122, "message"=>'Bienvenidos a paquita');
		$result = getData();		
		$this->assertEquals( $answerArray, $result );
	}
	//-----//

    function setUp(){
        parent::setUp(); 
        global $wpdb; 
    
        $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}WhatsAppPlugin(
            `id_whatsapp_plugin` INT NOT NULL AUTO_INCREMENT,
            `enterprise_name` VARCHAR(45) NULL,
            `number` VARCHAR(45) NULL,
            `message` VARCHAR(45) NULL,
            PRIMARY KEY (`id_whatsapp_plugin`))";
    
        $wpdb->query($sql);
    }
    public function test_sendData() {
        $arrayTest = ['Paquita la del barrio', '573133133122', 'Bienvenidos a paquita','Bienvenidos%20a%20paquita'];
        $messageTest = "New record created successfully in " . "https://wa.me/{$arrayTest[1]}/?text={$arrayTest[3]}";
        $result = sendData($arrayTest);		
        $this->assertEquals( $messageTest, $result );
    }
	//------//

	public function test_verifyEmptyGaps() {
		$answerEcho = 'Missing Spaces';
		verifyGaps();	
		$this->expectOutputString($answerEcho);
	}

	public function test_verifyEmptyOneGap() {
		$_POST = array("enterpriseName"=>'Paquita la del barrio', "select"=>57, "number"=>3133133122);
		$answerEcho = 'Missing Spaces';
		verifyGaps();	
		$this->expectOutputString($answerEcho);
	}

	public function test_verifySuccessful() {
		$_POST = array("enterpriseName"=>'Paquita la del barrio', "select"=>57, "number"=>3133133122, "message"=>'Bienvenidos a paquita');
		$answerEcho = "New record created successfully in " . "https://wa.me/573133133122/?text=Bienvenidos%20a%20paquita";
		verifyGaps();
		$this->expectOutputString($answerEcho);
	}
}