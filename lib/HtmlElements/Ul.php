<?php

namespace JensVercruysse\HtmlElements;

class Ul extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("ul", $content, $attributes);
    }
}