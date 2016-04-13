<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/13/16
 * Time: 11:01 AM
 */

namespace Formit\Contracts\HTML;


interface ElementAttribute
{
    /**
     * Make an instance of ElementAttribute
     * @param $key
     * @param $value
     * @return ElementAttribute
     */
    public static function make($key, $value);
}