<?php
/**
 *
 */
namespace BeluginoCover\View\Helper\BeluginoCover;

use Laminas\View\Helper\AbstractHelper;

class BeluginoCover extends AbstractHelper
{
    protected $config;

    /**
     *
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getIconClass($format) {
        return $this->config['belugino'][$format];
    }
}
