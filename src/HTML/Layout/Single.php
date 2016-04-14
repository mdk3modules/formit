<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/14/16
 * Time: 3:47 PM
 */

namespace Formit\HTML\Layout;


use Formit\Contracts\SingleHtmlLayout;

class Single implements SingleHtmlLayout
{
    protected $options;

    public function __construct(LayoutOptions $options = null)
    {
        $this->options = $options;
    }

    public function bindSubMenu()
    {

    }
}