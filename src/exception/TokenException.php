<?php

namespace LinCmsTp\exception;

class TokenException extends BaseException
{
    public $code = 401;
    public $msg  = '令牌失效';
    public $error_code = 10050;
    
}