<?php

namespace JensVercruysse\HtmlElements;

class H4 extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("h4", $content, $attributes);
    }
}
