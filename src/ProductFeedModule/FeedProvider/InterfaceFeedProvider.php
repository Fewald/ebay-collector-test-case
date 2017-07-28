<?php

namespace ProductFeedModule\FeedProvider;


use ProductFeedModule\Search\SearchRequest;

interface InterfaceFeedProvider
{
    public function isSuitable(SearchRequest $request);

    public function find(SearchRequest $request);
}