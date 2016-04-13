<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/13/16
 * Time: 11:04 AM
 */

namespace Formit\HTML\Element;


use Formit\Contracts\HTML\ElementAttribute;

class TagAttribute implements ElementAttribute
{
    protected $key;

    protected $value;

    public function __construct($key, $value)
    {
        $this->key = $key;

        $this->value = $value;
    }

    /**
     * Make an instance of ElementAttribute
     * @param $key
     * @param $value
     * @return ElementAttribute
     */
    public static function make($key, $value)
    {
        return new static($key, $value);
    }


    public function __toString()
    {
        return $this->key . "='$this->value' ";
    }
}