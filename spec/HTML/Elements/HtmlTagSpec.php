<?php

namespace spec\Formit\HTML\Elements;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HtmlTagSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Formit\HTML\Elements\HtmlTag');
    }
}
