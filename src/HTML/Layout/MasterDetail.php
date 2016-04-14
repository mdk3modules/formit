<?php
/**
 * Created by PhpStorm.
 * User: raf
 * Date: 4/14/16
 * Time: 3:40 PM
 */

namespace Formit\HTML\Layout;


use Formit\Contracts\MasterDetailHtmlLayout;

class MasterDetail implements MasterDetailHtmlLayout
{

    protected $options;

    public function __construct(LayoutOptions $options = null)
    {
        $this->options = $options;
    }


    public function bindMaster()
    {

    }

    public function bindDetail()
    {

    }

    public function bindSubMenu()
    {

    }
}