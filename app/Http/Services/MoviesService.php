<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

class MoviesService
{
    private $client;
    private $API_KEY;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://www.omdbapi.com', 'timeout'  => 2.0]);
        $this->API_KEY = "96b375df";
    }

    public function getMovie($title, $year, $version)
    {
        $response = json_decode($this->client->request('GET', '/?apikey=' . $this->API_KEY . '&t=' . $title . '&y=' . $year . '&v=' . $version)->getBody());
        return  $response;
    }
}
