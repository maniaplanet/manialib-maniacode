<?php

namespace ManiaLib\ManiaCode\Elements;

use ManiaLib\XML\Node;

abstract class FileUrlDownload extends UrlDownload
{
    /**
     * @var Node
     */
    protected $file;

    public function __construct()
    {
        $this->file = Node::create()
            ->setNodeName('file')
            ->appendTo($this);
        
    }

    public function getFile()
    {
        return $this->file->getNodeValue();
    }

    public function setFile($file)
    {
        $this->file->setNodeValue($file);
        return $this;
    }
}