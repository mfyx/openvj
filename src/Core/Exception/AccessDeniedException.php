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

use VJ\Core\Response;

class AccessDeniedException extends UserException
{
    public function __construct()
    {
        parent::__construct('access_denied', Response::HTTP_FORBIDDEN);
    }
} 