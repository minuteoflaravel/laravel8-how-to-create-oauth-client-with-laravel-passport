<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Passport\ClientRepository;

class OAuthClientsController extends Controller
{
    public function createClient(ClientRepository $clients)
    {
        $client = $clients->create(
            1, 'Created from backend', 'https://my.redirect.url'
        );

        return 'Client was created successfully!<Br/>
                Client ID: ' . $client->id .'<br/>
                Client Secred: ' . $client->plainSecret;
    }
}
