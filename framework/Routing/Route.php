<?php


namespace Framework\Routing;


class Route
{
    const METHOD_GET = 1;
    const METHOD_POST = 2;

    private $path;
    private $action;
    private $type;

    /**
     * Route constructor.
     * @param $path
     * @param $action
     * @param $type
     */
    public function __construct($path, $action, $type)
    {
        $this->path = $path;
        $this->action = $action;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }



}