<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/13/16
 * Time: 10:55 AM
 */

namespace Formit\Contracts\HTML;


interface ElementTag
{

    /**
     * Html Tag Element Name
     * @param $name
     */
    public function setTagName($name);

    /**
     * @param $attribute
     * @param $value
     * @return void
     */
    public function setAttribute($attribute, $value);

    /**
     * @param $attribute
     * @return ElementAttribute
     */
    public function getAttribute($attribute);
}