<?php

namespace App\MyCustom\Routing;

use Illuminate\Routing\ResourceRegistrar as OriginalRegistrar;

class ResourceRegistrar extends OriginalRegistrar
{
    // add data to the array
    /**
     * The default actions for a resourceful controller.
     *
     * @var array
     */
    protected $resourceDefaults = ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy', 'showDaily', 'showType'];


    /**
     * Add the data method for a resourceful route.
     *
     * @param  string  $name
     * @param  string  $base
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\Route
     */
    protected function addResourceShowDaily($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name).'/showDaily/{'.$base.'}';

        $action = $this->getResourceAction($name, $controller, 'showDaily', $options);

        return $this->router->get($uri, $action);
    }
    /**
     * Add the data method for a resourceful route.
     *
     * @param  string  $name
     * @param  string  $base
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\Route
     */
    protected function addResourceShowType($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name).'/type/{'.$base.'}';

        $action = $this->getResourceAction($name, $controller, 'showType', $options);

        return $this->router->get($uri, $action);
    }
}