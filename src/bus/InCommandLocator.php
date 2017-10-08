<?php
/**
 * Simple automated command bus
 *
 * @link      https://github.com/hiqdev/yii2-autobus
 * @package   yii2-autobus
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\autobus\bus;

use League\Tactician\Handler\Locator\HandlerLocator;

class InCommandLocator implements HandlerLocator
{
    public function getHandlerForCommand($class)
    {
        return $class::getHandler();
    }
}
