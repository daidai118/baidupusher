<?php
namespace  daidai118\baidupusher;
/**
 * *************************************************************************
 *
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 *
 * ************************************************************************
 */

/**
 *
 * @file const.conf.php
 * @encoding UTF-8
 * 
 * 
 *         @date 2014年12月25日
 *        
 */

class BAIDU_PUSH_CONFIG {

    /**
     * api 所指向的服务器地址.
     *
     * @var string
     */
    const HOST = 'http://api.tuisong.baidu.com/rest/3.0/';

    const default_apiKey = '';

    const default_secretkey = '';

    const default_devicetype = 3;

    const test_channel_id = '';

    const LOG_LEVEL_DEV = 0; // 开发状态, rd开发时使用, 最详细 log. 发布后被移除
    const LOG_LEVEL_TRACE = 1; // 开发者开发时状态,隐藏rd开发时的细碎信息
    const LOG_LEVEL_ONLINE = 2; // 开发者线上使用, 只有fault和warn
    const LOG_LEVEL_ONLINE_FAULT = 3; // 开发者线上使用, 只有fault
    const LOG_LEVEL_ONLINE_SILENCE = 4; // 静默.

    const LOG_LEVEL = BAIDU_PUSH_CONFIG::LOG_LEVEL_TRACE;

    const LOG_OUTPUT = 'stdout';

    const SUPPRESS_EXCPTION = true;
    const SIGN_EXPIRES = 0;
} 

