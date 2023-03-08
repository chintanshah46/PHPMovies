<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class StarWarsController extends Controller
{

    const SW_BASE_API_URI = 'https://swapi.dev/api/';

    public function index(Request $request) {

        $search = $request['search'] ?? '';

        if ( $search == '' ){
            return view('starwars.index');
        } else {
            $returnData = [];

            $client = new Client([
                'base_url' => static::SW_BASE_API_URI,
                'default' => [
                    'exceptions' => false,
                    'headers' => [
                        'User-Agent' => sprintf('swapi/%s', '1.1.1'),
                        'Accept' => 'application/json',
                    ],
                ]
            ]);
                
            $response = $client->request('GET', static::SW_BASE_API_URI.'people/?search='.$search); 

            if ($response->getStatusCode() == 200) {

                $json_response = json_decode($response->getBody(), true);

                if ($json_response['count'] > 0 ){
                    $returnData = $json_response['results'];
                }

            }

            return view('starwars.index', [
                'data' => $returnData
            ]);
        }


    }

}
