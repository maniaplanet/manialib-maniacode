<?php

namespace ManiaLib\ManiaCode\Elements;

use ManiaLib\XML\Node;

class ShowMessage extends Node
{
    protected $nodeName = 'show_message';

    protected $message;

    public function __construct()
    {
        $this->message = Node::create()
            ->setNodeName('message');
    }

    public function setMessage($message)
    {
        return $this->message->setNodeValue($message);
    }

    public function getMessage()
    {
        return $this->message->getNodeValue();
    }
}