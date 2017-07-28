<?php
namespace ProductFeedModule\FeedProvider;



use ProductFeedModule\Search\SearchRequest;

class EbayFeedProvider implements InterfaceFeedProvider
{
    /** @var  string */
    protected $appId;

    public function __construct($appId)
    {
        $this->appId = $appId;
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