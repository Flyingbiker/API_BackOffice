<?php

namespace Component\Http\Exception;


class UnauthorizedHttpException extends HttpException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}