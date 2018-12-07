<?php

namespace JensVercruysse\Material;

use \JensVercruysse\HtmlElements\A;
use \JensVercruysse\HtmlElements\Div;
use \JensVercruysse\HtmlElements\H4;
use \JensVercruysse\HtmlElements\I;
use \JensVercruysse\HtmlElements\Li;
use \JensVercruysse\HtmlElements\Ul;

class Collection
{
    public function __construct($repoNamesList = [], $repoLinksList = [], $username)
    {
        $this->repoNamesList = $repoNamesList;
        $this->repoLinksList = $repoLinksList;
        $this->username = $username;
    }

    public function __toString()
    {
        $titleContent = new H4("Index of repositories from: " . $this->username, ["class" => "center-align"]);
        $title = new Li($titleContent, ["class" => "collection-header"]);

        $output = $this->createList();

        $ul = new Ul($title . $output, ["class" => "collection with-header"]);
        $this->content = new Div($ul, ["class" => "container"]);

        return (string) $this->content;
    }

    private function createList()
    {
        $output = "";
        $counter = 0;

        foreach ($this->repoNamesList as $nameItem) {
            $icon = new I("send", ["class" => "material-icons"]);
            $link = new A($icon, ["href" => $this->repoLinksList[$counter], "class" => "secondary-content"]);
            $iconDiv = new Div($nameItem . $link);
            $li = new Li($iconDiv, ["class" => "collection-item"]);

            $output .= $li;
            $counter++;
        }
        return $output;
    }
}
