<?php

namespace ProductFeedModule\Controller;


use ProductFeedModule\FeedProviderManager\FeedProviderManager;
use ProductFeedModule\Search\SearchRequest;

class FeedController extends \Controller
{
    public function searchAction()
    {
        $provider = filter_input(INPUT_GET, 'provider', FILTER_SANITIZE_STRING);
        $item_id = filter_input(INPUT_GET, 'item_id', FILTER_SANITIZE_NUMBER_INT);
        $click_out_link = filter_input(INPUT_GET, 'click_out_link', FILTER_SANITIZE_STRING);
        $main_photo_url = filter_input(INPUT_GET, 'main_photo_url', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_GET, 'price', FILTER_SANITIZE_NUMBER_FLOAT);
        $price_currency = filter_input(INPUT_GET, 'price_currency', FILTER_SANITIZE_STRING);
        $shipping_price = filter_input(INPUT_GET, 'shipping_price', FILTER_SANITIZE_NUMBER_FLOAT);
        $title = filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_GET, 'description', FILTER_SANITIZE_STRING);
        $valid_until = filter_input(INPUT_GET, 'valid_until', FILTER_SANITIZE_STRING);
        $brand = filter_input(INPUT_GET, 'brand', FILTER_SANITIZE_STRING);

        $searchRequest = new SearchRequest(
            $provider,
            $item_id,
            $click_out_link,
            $main_photo_url,
            $price,
            $price_currency,
            $shipping_price,
            $title,
            $description,
            $valid_until,
            $brand
        );

        /** @var FeedProviderManager $manager */
        $manager = $this->app['feed.provider.manager'];

        $provider = $manager->getProviderBySearchRequest($searchRequest);
        $result = $provider->find($searchRequest);

        return $this->app->json($result);
    }

}