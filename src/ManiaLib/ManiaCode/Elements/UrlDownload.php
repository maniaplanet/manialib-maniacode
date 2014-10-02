<?php

namespace ManiaLib\ManiaCode\Elements;

use ManiaLib\XML\Node;

abstract class UrlDownload extends Node
{
    /**
     * @var Node
     */
    protected $name;

    /**
     * @var Node
     */
    protected $url;
    
    public function __construct()
    {
        $this->name = Node::create()
            ->setNodeName('name')
            ->appendTo($this);
        
        $this->url = Node::create()
            ->setNodeName('url')
            ->appendTo($this);
    }

    public function getName()
    {
        return $this->name->getNodeValue();
    }

    public function getUrl()
    {
        return $this->url->getNodeValue();
    }

    public function setName($name)
    {
        $this->name->setNodeValue($name);
        return $this;
    }

    public function setUrl($url)
    {
        $this->url->setNodeValue($url);
        return $this;
    }



}