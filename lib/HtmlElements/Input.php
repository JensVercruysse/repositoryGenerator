<?php

namespace JensVercruysse\HtmlElements;

class Input extends VoidElement
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("input", $content, $attributes);
    }
}