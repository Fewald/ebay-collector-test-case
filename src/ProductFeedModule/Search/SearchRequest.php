<?php

namespace ProductFeedModule\Search;

class SearchRequest
{
    /** @var  string */
    public $provider; //(=“ebay“)
    /** @var  int */
    public $item_id;
    /** @var  string */
    public $click_out_link;
    /** @var  string */
    public $main_photo_url;
    /** @var  float */
    public $price;
    /** @var  string */
    public $price_currency;
    /** @var  float */
    public $shipping_price;
    /** @var  string */
    public $title;
    /** @var  string */
    public $description;
    /** @var  string */
    public $valid_until;
    /** @var  string */
    public $brand;

    /**
     * SearchRequest constructor.
     * @param string $provider
     * @param int $item_id
     * @param string $click_out_link
     * @param string $main_photo_url
     * @param float $price
     * @param string $price_currency
     * @param float $shipping_price
     * @param string $title
     * @param string $description
     * @param string $valid_until
     * @param string $brand
     */
    public function __construct($provider, $item_id, $click_out_link, $main_photo_url, $price, $price_currency, $shipping_price, $title, $description, $valid_until, $brand)
    {
        $this->provider = $provider;
        $this->item_id = $item_id;
        $this->click_out_link = $click_out_link;
        $this->main_photo_url = $main_photo_url;
        $this->price = $price;
        $this->price_currency = $price_currency;
        $this->shipping_price = $shipping_price;
        $this->title = $title;
        $this->description = $description;
        $this->valid_until = $valid_until;
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @return string
     */
    public function getClickOutLink()
    {
        return $this->click_out_link;
    }

    /**
     * @return string
     */
    public function getMainPhotoUrl()
    {
        return $this->main_photo_url;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->price_currency;
    }

    /**
     * @return float
     */
    public function getShippingPrice()
    {
        return $this->shipping_price;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getValidUntil()
    {
        return $this->valid_until;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }


}