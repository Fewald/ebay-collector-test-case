<?php

namespace ProductFeedModule\FeedProvider;

use ProductFeedModule\Search\SearchRequest;

class NullFeedProvider implements InterfaceFeedProvider
{
    public function isSuitable(SearchRequest $request)
    {
        // TODO: Implement isSuitable() method.
    }

    public function find(SearchRequest $request)
    {
        // TODO: Implement find() method.
    }
}