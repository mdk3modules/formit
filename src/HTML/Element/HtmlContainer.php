<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/13/16
 * Time: 12:15 PM
 */

namespace Formit\HTML\Element;


use Formit\Contracts\HTML\ElementContainer;
use Formit\Contracts\HTML\ElementTag;

class HtmlContainer implements ElementContainer
{
    protected $items = [];

    /**
     * @var ElementTag
     */
    protected $parent;

    public function __construct(ElementTag $parent)
    {
        $this->parent = $parent;
    }
}