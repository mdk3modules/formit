<?php

namespace Formit\HTML\Element;


use Formit\Contracts\HTML\ElementAttribute;
use Formit\Contracts\HTML\ElementContainer;
use Formit\Contracts\HTML\ElementTag;

class HtmlTag implements ElementTag
{

    protected $attributes = [];

    protected $name = null;

    /**
     * True if the html tag contains sub content between the start and end tags of the element
     * @var bool
     */
    protected $have_content = true;


    /**
     * @var ElementContainer | null
     */
    protected $content = null;


    public function __construct($tagName = null, ElementContainer $content = null)
    {
        $this->name = $tagName;

        $this->content = $content;
    }


    /**
     * Html Tag Element Name
     * @param $name
     */
    public function setTagName($name)
    {
        $this->name = $name;
    }

    public function getTagName()
    {
        if(!is_null($this->name))
        {
            return $this->name;
        }

        return $this->name = get_class($this);
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        if(! empty($attributes) && is_array($attributes))
        {
            foreach($attributes as $attribute => $value)
            {
                $this->setAttribute($attribute, $value);
            }
        }
    }

    /**
     * @param $attribute
     * @param $value
     * @return void
     */
    public function setAttribute($attribute, $value)
    {
        $this->attributes[$attribute] = TagAttribute::make($attribute, $value);
    }

    /**
     * @param $attribute
     * @return ElementAttribute
     */
    public function getAttribute($attribute)
    {
        if(isset($this->attributes[$attribute]))
        {
            return $this->attributes[$attribute];
        }

        return null;
    }


    protected function renderContent()
    {

    }

    /**
     * @return string
     */
    public function render()
    {
        $template = $this->getElementTemplate();
        $attributes = $this->getAttributesToString();
        $tagName = $this->getTagName();

        $output = str_replace('[@name]', $tagName, $template);

        if(! empty($attributes))
        {
            $output = str_replace('[@attributes]', $attributes, $output);
        }

        if($this->have_content)
        {
            $content = $this->renderContent();

            $output = str_replace('[@content]', $content, $output);
        }

        return $output;
    }

    /**
     * @return string
     */
    protected function getElementTemplate()
    {
        if($this->have_content)
        {
            return '<[@name] [@attributes]>[@content]</[@name]>';
        }
        else
        {
            return '<[@name] [@attributes] />';
        }
    }

    /**
     * @return string
     */
    protected function getAttributesToString()
    {
        if(! empty($this->attributes))
        {
            return implode(' ', $this->attributes);
        }

        return '';
    }


    public function __toString()
    {
        return $this->render();
    }


    public function __call($method, $args)
    {
        if(count($args) === 1)
        {
            $this->setAttribute($method, $args[0]);
        }

        return $this;
    }


}
