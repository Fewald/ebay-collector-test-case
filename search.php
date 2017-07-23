<?php

class SearchProvider
{
    public
        $provider; //(=“ebay“)
    public
        $item_id;
    public
        $click_out_link;
    public
        $main_photo_url;
    public
        $price;
    public
        $price_currency;
    public
        $shipping_price;
    public
        $title;
    public
        $description;
    public
        $valid_until;
    public
        $brand;


    public function search()
    {
        $this->item_id = filter_input(INPUT_GET, 'item_id', FILTER_SANITIZE_NUMBER_INT);
        $this->click_out_link = filter_input(INPUT_GET, 'click_out_link', FILTER_SANITIZE_STRING);
        $this->main_photo_url = filter_input(INPUT_GET, 'main_photo_url', FILTER_SANITIZE_STRING);
        $this->price = filter_input(INPUT_GET, 'price', FILTER_SANITIZE_NUMBER_FLOAT);
        $this->price_currency = filter_input(INPUT_GET, 'price_currency', FILTER_SANITIZE_STRING);
        $this->shipping_price = filter_input(INPUT_GET, 'shipping_price', FILTER_SANITIZE_NUMBER_FLOAT);
        $this->title = filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING);
        $this->description = filter_input(INPUT_GET, 'description', FILTER_SANITIZE_STRING);
        $this->valid_until = filter_input(INPUT_GET, 'valid_until', FILTER_SANITIZE_STRING);
        $this->brand = filter_input(INPUT_GET, 'brand', FILTER_SANITIZE_STRING);

        $result = $this->request();

        return $this->render($result);
    }

    public function request()
    {
        return ['result' => 'success'];
    }

    public function render($result)
    {
        return json_encode($result);
    }
}

$app = new SearchProvider();
print $app->search();
