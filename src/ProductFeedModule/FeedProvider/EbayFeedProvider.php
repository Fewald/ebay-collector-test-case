<?php
namespace ProductFeedModule\FeedProvider;



use ProductFeedModule\Search\SearchRequest;

class EbayFeedProvider implements InterfaceFeedProvider
{
    protected $endpoint = 'http://svcs.sandbox.ebay.com/services/search/FindingService/v1';
    protected $version = '1.0.0';
    protected $appId = 'WandoInt-217b-42d8-a699-e79808dd505e';
    protected $responseDataFormat = 'JSON';

    public function __construct()
    {

    }

    /**
     * @param SearchRequest $request
     * @return bool
     */
    public function isSuitable(SearchRequest $request)
    {
        return $request->getProvider() === 'ebay';
    }

    public function find(SearchRequest $request)
    {
        // TODO: Implement find() method.
    }
}