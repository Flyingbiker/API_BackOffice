<?php

namespace Component\Http\Exception;


class BadRequestHttpException extends HttpException
{
    public function __construct()
    {
        parent::__construct('Bad Request', 400);
    }
}