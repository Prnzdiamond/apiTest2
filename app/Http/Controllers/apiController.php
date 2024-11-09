<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function getVideo()
    {
        $client = new Client();
        $payload = [
            'title' => 'larevel movie'
        ];
        $data = $client->get('http://127.0.0.1:8000/api/jobs', [
            'headers' => [
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZ2V0X3Rva2VuIiwiaWF0IjoxNzE4ODk0NjI4LCJleHAiOjE3MTg4OTQ2ODgsIm5iZiI6MTcxODg5NDYyOCwianRpIjoiV0dTYnh3dE1zcDU4ZlZMcCIsInN1YiI6IjQiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0._17nSStpxcTmFY9PQ-nQOKJKag8Xhkokob6dtrYL7yw'
            ]
        ]);
        $listing = json_decode($data->getBody()->getContents());
        return $listing;
        //     if(isset($listing)) {
        //         return view('welcome', [
        //             'listing' => $listing
        //         ]);
        //     }
    }
}
