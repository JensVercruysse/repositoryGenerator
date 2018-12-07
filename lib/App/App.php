<?php

namespace JensVercruysse\App;

use \JensVercruysse\Material\Collection;
use \JensVercruysse\Github\Github;

class App
{
    public function __construct($username, $token)
    {
        $this->username = $username;
        $github = new Github($this->username, $token);
        
        $this->myRepoNames = $github->getRepoNames($github->getApi());
        $this->myRepoLinks = $github->getRepoLinks($github->getApi());
    }

    private function createSite()
    {
        $repoSite = new Collection($this->myRepoNames, $this->myRepoLinks, $this->username);
        return $repoSite;
    }

    public function __toString()
    {
        return (string) $this->createSite();
    }
}