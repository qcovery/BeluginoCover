<?php
/**
 * BeluginoCover helper
 */
namespace BeluginoCover\View\Helper\BeluginoCover;

use Laminas\View\Helper\AbstractHelper;

class BeluginoCover extends AbstractHelper
{
    protected $config;

    /**
     * Constructor
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Get icon class for given media type
     * @param $format media type
     * @return mixed
     */
    public function getIconClass($format) {
        return $this->config['belugino'][$format];
    }
}
