<?php
/**
 * This file is part of openvj project.
 *
 * Copyright 2013-2015 openvj dev team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace VJ\Test;

use Httpful\Exception\ConnectionErrorException;
use VJ\BackgroundUtil;

class BackgroundUtilTest extends \PHPUnit_Framework_TestCase
{
    public function testPing()
    {
        try {
            $request = BackgroundUtil::get('/ping');
            $response = $request->send();
            $this->assertLessThanOrEqual(5000, time() * 1000 - $response->body->pong);
        } catch (ConnectionErrorException $e) {
            $this->markTestSkipped('Background service is not started');
        }
    }
}