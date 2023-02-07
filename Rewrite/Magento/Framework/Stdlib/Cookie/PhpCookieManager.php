<?php
/**
 * Copyright © 2021 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace OrviSoft\CookieFix\Rewrite\Magento\Framework\Stdlib\Cookie;

class PhpCookieManager extends \Magento\Framework\Stdlib\Cookie\PhpCookieManager
{
    const MAX_NUM_COOKIES = 999;
    const MAX_COOKIE_SIZE = 409600;
    const EXPIRE_NOW_TIME = 1;
    const EXPIRE_AT_END_OF_SESSION_TIME = 50;

}