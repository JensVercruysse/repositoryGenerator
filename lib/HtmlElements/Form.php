<?php

namespace JensVercruysse\HtmlElements;

class Form extends Element
{
    public function __construct($content = "", $attributes = [])
    {
        parent::__construct("form", $content, $attributes);
    }
}