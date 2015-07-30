<?php
/**
 * Mabs framework
 *
 * @author      Mohamed Aymen Ben Slimane <aymen.kernel@gmail.com>
 * @copyright   2015 Mohamed Aymen Ben Slimane
 *
 * The MIT License (MIT)
 * 
 * Copyright (c) 2015 Mohamed Aymen Ben Slimane
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Mabs\Tests;


class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test version constant is string
     */
    public function testHasVersionConstant()
    {
        $this->assertTrue(is_string(\Mabs\Application::VERSION), 'test application has version');
    }

    /**
     * Test mode debug
     */
    public function testModeDebug()
    {
        $app = new \Mabs\Application(true);
        $this->assertTrue($app->isDebugMode(), 'test active Mode debug');

        $app = new \Mabs\Application();
        $this->assertFalse($app->isDebugMode(), 'test inactive Mode debug');
    }

    /**
     * Test running application
     */
    public function testRunningApplication()
    {
        $app = new \Mabs\Application(true);
        $this->assertTrue($app->isLoaded(), 'test all components are loaded');
        $this->assertTrue($app->getContainer()->isLocked(), 'test if the Container is locked');
    }
}
