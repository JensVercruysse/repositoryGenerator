<?php

namespace JensVercruysse\HtmlElements;

class I extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("i", $content, $attributes);
    }
}