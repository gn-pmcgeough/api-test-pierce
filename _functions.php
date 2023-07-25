<?php
require_once "./vendor/autoload.php";

use GuzzleHttp\Client;

function getClubs()
{
    $username = 'brsmobileapp';
    $password = 'QB6T9vmVw8WcbTZv8bGUJMs2E3SKU4jLBNJscNMZx4hyZdwfcta9ALqS4THXVxw679BFh5FsPEYbSUfHxSmvJVX9Wfm5gCPmterEJTWMzUjt8ej3kLwEbP7CkhLbfVAC8FvaxYDx2KzVvttMDsWxhNzmVqeqvjmVbFSNA2LgkfyDXTSD7XbPpNQRyZQcgzHSRuQVSQ5SZujDYjfm2TnetbP6Dk8gbf7Pae9vWA4kg5Bj84SsshnqMgGTFjPVeYr8';
    $url = 'https://www.brsgolf.com/api/v2/clubs';

    $client = new Client();

    $response = $client->get($url, [
        'auth' => [$username, $password]
    ]);

    if ($response->getStatusCode() === 200) {
        $data = $response->getBody()->getContents();
        $data = json_decode($data);
        return $data->_results;
    }

    return [];
}



function getAddressString($club)
{
    $addressPieces = [
        $club->address->line1,
        $club->address->line2,
        $club->address->city,
        $club->address->county,
        $club->address->country,
        $club->address->postcode,
    ];

    return implode(', ', array_filter($addressPieces));
}
