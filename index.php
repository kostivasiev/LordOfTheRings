<?php
require 'vendor/autoload.php';

class Lotr {
    private $url = 'https://the-one-api.dev/v2/';
    private $apiToken;
    private $client;

    public function __construct()
    {
        $this->client=new GuzzleHttp\Client();

    }

    public function setApiToken($token)
    {
        $this->apiToken = $token;
    }


    public function getAllBooks(){
        $response=$this->client->request('GET', $this->url.'book', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getBook($id){
        $response=$this->client->request('GET', $this->url.'book/'.$id, [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }



    public function getBookChapter($id){
        $response=$this->client->request('GET', $this->url.'book/'.$id.'/chapter', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }

    public function getMovies(){
        $response=$this->client->request('GET', $this->url.'movie', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getMovie($id){
        $response=$this->client->request('GET', $this->url.'movie/'.$id, [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }



    public function getMovieQuote($id){
        $response=$this->client->request('GET', $this->url.'movie/'.$id.'/quote', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getCharacters(){
        $response=$this->client->request('GET', $this->url.'character', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getCharacter($id){
        $response=$this->client->request('GET', $this->url.'character/'.$id, [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }



    public function getCharacterQuote($id){
        $response=$this->client->request('GET', $this->url.'character/'.$id.'/quote', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getQuotes(){
        $response=$this->client->request('GET', $this->url.'quote', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getQuote($id){
        $response=$this->client->request('GET', $this->url.'quote/'.$id, [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getChapters(){
        $response=$this->client->request('GET', $this->url.'chapter', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


    public function getChapter($id){
        $response=$this->client->request('GET', $this->url.'chapter/'.$id, [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'Authorization'=>'Bearer ' . $this->apiToken
            ]]);
        return $response->getBody()->getContents();
    }


}
