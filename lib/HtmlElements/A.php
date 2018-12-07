<?php

namespace JensVercruysse\HtmlElements;

class A extends Element
{

    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("a", $content, $attributes);
    }
}