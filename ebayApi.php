<?php


class ebayApi
{
    protected $endpoint = 'http://svcs.sandbox.ebay.com/services/search/FindingService/v1';
    protected $version = '1.0.0';
    protected $appId = 'WandoInt-217b-42d8-a699-e79808dd505e';
    protected $responseDataFormat = 'JSON';
    protected $httpClient;
    public function __construct()
    {
        $this->httpClient = new \GuzzleHttp\Client([
            'base_url' => $this->endpoint
        ]);
    }

    public function findItemsByKeywords($keywords)
    {
        return $this->httpClient->request('GET', '', [
            'query' => [
                'SERVICE-VERSION' => $this->version,
                'RESPONSE-DATA-FORMAT' => $this->responseDataFormat,
                'REST-PAYLOAD' => '',
                'keywords' => $keywords
            ]
        ]);
    }
}