<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
use GuzzleHttp\Client;


class User extends Eloquent
{
	protected $fillable = ['username', 'email'];

	public function get_all($film){
	$client = new Client([
	    'timeout'  => 2.0,
	]);

	$response = $client->request('GET', 'http://www.omdbapi.com/', [
	    'query' => ['s'=> $film, 'page'=> '15', 'apikey' => '9bfc5649']
	]);

	if($response->getBody()){
		$data = json_decode($response->getBody());
	}
		return $data;
	}
}