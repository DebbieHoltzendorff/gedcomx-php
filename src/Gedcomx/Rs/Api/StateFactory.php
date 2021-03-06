<?php


namespace Gedcomx\Rs\Api;

use GuzzleHttp\Client;

class StateFactory
{

    function __construct()
    {
    }

    /**
     * @param string $uri The URI to the collection.
     * @param Client $client The client to use.
     * @param string $method The method.
     * @return CollectionState The collection state.
     */
    public function newCollectionState($uri, $client = null, $method = "GET")
    {
        if (!$client) {
            $client = new Client();
        }

        $request = $client->createRequest($method, $uri);
        $request->setHeader("Accept", GedcomxApplicationState::GEDCOMX_MEDIA_TYPE);
        return new CollectionState($client, $request, $client->send($request), null, $this);
    }

    /**
     * @param string $uri The URI to the person.
     * @param Client $client The client to use.
     * @param string $method The method.
     * @return PersonState The person state.
     */
    public function newPersonState($uri, $client = null, $method = "GET")
    {
        if (!$client) {
            $client = new Client();
        }

        $request = $client->createRequest($method, $uri);
        $request->setHeader("Accept", GedcomxApplicationState::GEDCOMX_MEDIA_TYPE);
        return new PersonState($client, $request, $client->send($request), null, $this);
    }

    function buildPersonState($client, $request, $response, $accessToken)
    {
        return new PersonState($client, $request, $response, $accessToken, $this);
    }

}