<?php

namespace RestApi\Http\Services;

use GuzzleHttp\Client;

class BooksService
{
    private $client;
    // https://openlibrary.org/api/books?bibkeys=ISBN:9780980200447&jscmd=details&format=json
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://openlibrary.org', 'timeout'  => 3.0]);
    }

    public function getBook($isbn)
    {
        $response = json_decode($this->client->request('GET', '/api/books?bibkeys=ISBN:' . $isbn . '&jscmd=details&format=json')->getBody());
        return  $response;
    }
}
