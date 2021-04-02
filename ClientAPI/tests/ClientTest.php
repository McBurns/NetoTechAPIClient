<?php
/**
 * ClientAPI\Tests\ClientTest.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 4:18
 *
 * Version: 0.0.2
 */

namespace ClientAPI\Tests;


class ClientTest extends PHPUnit_Framework_TestCase {
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }
}