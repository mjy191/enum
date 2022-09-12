<?php

namespace Mjy191\Enum;

class Enum
{
    /**
     * 定义接口返回错误码
     */
    // 成功
    const codeSuccess     = 1;
    // 参数错误
    const erCodeParam    = 2;
    // 系统错误
    const erCodeSystem   = 3;
    // 签名错误
    const erCodeSign      = 4;
    // 请求method方式错误
    const erCodeMethod    = 100;
    // token错误
    const erCodeToken     = 401;
    // 接口404
    const erCodeNotFound = 404;
    // 服务器错误
    const erCodeServer   = 500;

    /**
     * 返回错误信息
     */
    const msg = [
        self::codeSuccess      => 'success',
        self::erCodeParam      => '参数错误',
        self::erCodeSystem     => '系统错误',
        self::erCodeSign       => 'sing error',
        self::erCodeMethod     => '请求method方式错误',
        self::erCodeToken      => 'token错误',
        self::erCodeNotFound   => '404 not found',
        self::erCodeServer     => '服务器错误',
    ];

    /**
     * 1是
     * 2否
     */
    const yes = 1;
    const no  = 2;
}
