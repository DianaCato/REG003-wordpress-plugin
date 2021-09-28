// docker run -it --rm -v $(pwd):/var/www php:composer /bin/bash
// vendor/bin/phpunit html/wp-content/plugins/Laboratoria-WhatsApp-plugin/test/test.php

<?php

require('vendor/autoload.php');
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase {
    public function testExample() {
        $expected = 'hoge';
        $this->assertEquals($expected, 'hoge');
    }
}