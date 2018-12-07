<?php

namespace JensVercruysse\HtmlElements;

class Div extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("div", $content, $attributes);
    }
}
