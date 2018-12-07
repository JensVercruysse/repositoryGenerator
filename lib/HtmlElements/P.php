<?php

namespace JensVercruysse\HtmlElements;

class P extends Element
{
    public function __construct($content = "")
    {
        parent::__construct("p", $content);
    }
}
