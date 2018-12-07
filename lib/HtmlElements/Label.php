<?php

namespace JensVercruysse\HtmlElements;

class Label extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("label", $content, $attributes);
    }
}