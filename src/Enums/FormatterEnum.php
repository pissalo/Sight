<?php
declare(strict_types=1);

/*
 * This file is part of the bardoqi/sight package.
 *
 * (c) BardoQi <67158925@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bardoqi\Sight\Enums;

/**
 * Class FormatterEnum
 *
 * @package Bardoqi\Sight\Enums
 */
final class FormatterEnum
{
    const TO_DATE = 'toDate';
    const TO_DATETIME = 'toDatetime';
    const TO_TIME = 'toTime';
    const TO_BOOL = 'toBool';
    const TO_CURRENCY = 'toCurrency';
    const TO_CNY = 'toCny';
    const TO_USD = 'toUsd';
}
