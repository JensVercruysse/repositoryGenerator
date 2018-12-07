<?php

namespace JensVercruysse\Github;

class Github
{
    public function __construct($githubUsername, $token)
    {
        $this->username = $githubUsername;
        $this->token = $token;
    }

    public function getApi()
    {
        $auth = base64_encode($this->token);
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    'User-Agent: PHP',
                    "Authorization: Basic $auth",
                ],
            ],
        ];
        error_reporting(E_ALL ^ E_WARNING); 
        $context = stream_context_create($opts);
        $content = file_get_contents("https://api.github.com/users/" . $this->username . "/repos?type=owner", false, $context);
        if(!$content) {
            throw new \Exception("Github user not found, default repository displayed.");
        }
        $list = json_decode($content, true);
        return $list;
    }

    public function getRepoNames($list)
    {
        $nameCounter = 0;
        $repoNamesList = [];
        foreach ($list as $item) {
            $repoNames = $list[$nameCounter]['name'];
            array_push($repoNamesList, $repoNames);
            $nameCounter++;
        }
        return $repoNamesList;
    }

    public function getRepoLinks($list)
    {
        $linksCounter = 0;
        $repoLinksList = [];
        foreach ($list as $item) {
            $repoLinks = $list[$linksCounter]['html_url'];
            array_push($repoLinksList, $repoLinks);
            $linksCounter++;
        }
        return $repoLinksList;
    }
}