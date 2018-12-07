<?php

namespace JensVercruysse\HtmlElements;

class Element extends VoidElement
{
    public function __construct($element, $content, $attributes = [])
    {
        parent::__construct($element, $attributes);
        $this->content = $content;
    }
    
    public function __toString()
    {
        $openTag = parent::__toString();
        return "$openTag$this->content</$this->element>";
    }
}
