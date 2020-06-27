<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Rossjcooper\LaravelHubSpot\HubSpot as HubSpot;

Route::get('/contact', function (Rossjcooper\LaravelHubSpot\HubSpot $hubspot) {
    $response = $hubspot->contacts()->all();
    foreach ($response->contacts as $contact) {
        echo sprintf(
            "Contact name is %s %s." . PHP_EOL,
            $contact->properties->firstname->value,
            $contact->properties->lastname->value
        );
    }
});

Route::post('/contact', function (HubSpot $hubspot, Request $request) {
    $email = $request->get('email');

    $response = $hubspot->contacts()->createOrUpdate($email, [[
        'property'  => 'email',
        'value'     => $email
    ]]);

    return $response;
})->middleware('cors');
