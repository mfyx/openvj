<?php
/**
 * This file is part of openvj project.
 *
 * Copyright 2013-2015 openvj dev team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace VJ\Core\Exception;

use VJ\Core\Application;
use VJ\Core\Response;

class InvalidArgumentException extends UserException
{
    public function __construct($name, $msg, $msgPlaceholder = array())
    {
        parent::__construct('invalid_argument', Response::HTTP_BAD_REQUEST, [
            'name' => Application::transExceptionArgumentName($name),
            'msg' => Application::transExceptionMessage($msg, $msgPlaceholder),
        ]);
    }
}