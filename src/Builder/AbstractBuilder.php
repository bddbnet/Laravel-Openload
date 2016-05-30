<?php

/**
 * Created by PhpStorm.
 * User: fajarmawan
 * Date: 5/30/16
 * Time: 18:27
 */

namespace fajardm\LaravelOpenload;

abstract class AbstractBuilder
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * Builds a date from a string
     *
     * @param string $dateString The date string
     *
     * @return \DateTime
     */
    protected static function buildDate($dateString)
    {
        return \DateTime::createFromFormat(static::DATE_FORMAT, $dateString);
    }
}
