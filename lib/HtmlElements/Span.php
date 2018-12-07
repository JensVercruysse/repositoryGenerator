<?php

namespace JensVercruysse\HtmlElements;

class Span extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("span", $content, $attributes);
    }
}