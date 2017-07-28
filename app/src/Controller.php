<?php

abstract class Controller
{
    /** @var \Silex\Application */
    protected $app;

    /**
     * @param \Silex\Application $app
     */
    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }
}