<?php

namespace ProductFeedModule;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
use ProductFeedModule\Controller\FeedController;
use ProductFeedModule\FeedProvider\EbayFeedProvider;
use ProductFeedModule\FeedProviderManager\FeedProviderManager;
use Silex\Api\BootableProviderInterface;
use Silex\Application;

class ProductFeedServiceProvider implements ServiceProviderInterface, BootableProviderInterface
{
    public function boot(Application $app)
    {
        $app->get('/', 'frontend.controller.landing:indexAction')
            ->bind('frontend.landing.index');

        $app->get('/search', function ($name) use ($app) {
            return 'Hello ' . $app->escape($name);
        });
    }

    public function register(Container $pimple)
    {
        $pimple['feed.controller'] =  function (Application $app) {
            return new FeedController($app);
        };

        $pimple['feed.provider.ebay'] = function (Application $app) {
            return new EbayFeedProvider();
        };
        /**
         * @param Application $app
         * @return FeedProviderManager
         */
        $pimple['feed.provider.manager'] = function (Application $app) {
            $manager = new FeedProviderManager();

            $manager->addProvider($app['feed.provider.ebay']);

            return new $manager;
        };
    }
}