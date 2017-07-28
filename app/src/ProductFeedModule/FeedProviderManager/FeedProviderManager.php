<?php

namespace ProductFeedModule\FeedProviderManager;

use ProductFeedModule\FeedProvider\InterfaceFeedProvider;
use ProductFeedModule\FeedProvider\NullFeedProvider;
use ProductFeedModule\Search\SearchRequest;

class FeedProviderManager
{
    /** @var  InterfaceFeedProvider[] */
    protected $providers = [];

    public function addProvider(InterfaceFeedProvider $feedProvider)
    {
        $this->providers[] = $feedProvider;
    }

    public function getProviderBySearchRequest(SearchRequest $request)
    {
        foreach ($this->providers as $provider) {
            if ($provider->isSuitable($request)) {
                return $provider;
            }
        }

        return new NullFeedProvider();
    }
}