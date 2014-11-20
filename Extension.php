<?php
/**
 * Created by PhpStorm.
 * User: jeroenmarinus
 * Date: 20/11/14
 * Time: 21:39
 */

namespace Bolt\Extension\Tagini\Bandsintown;

use Bolt\Application;

class Extension extends \Bolt\BaseExtension
{
    function initialize()
    {
        $this->addTwigFunction('bandsintown', 'bandsintown');
    }

    function getName()
    {
        return 'bandsintown';
    }

    function bandsintown()
    {
        $url = 'http://api.bandsintown.com/artists/' . $this->config['artist'] . '/events.json?app_id=' . $this->config['app_id'];
    }
} 