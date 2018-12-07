<?php

namespace JensVercruysse\HtmlElements;

class Li extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("li", $content, $attributes);
    }
}
