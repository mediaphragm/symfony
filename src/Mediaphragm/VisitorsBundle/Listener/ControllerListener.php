<?php

namespace Mediaphragm\VisitorsBundle\Listener;

use Symfony\Component\EventDispatcher\Event;

class ControllerListener extends Event
{
    
    protected $session;
    
    protected $request;
    
    private $enable;

    public function __construct($enable, $request, $session)
    {
        $this->session = $session;
        $this->request = $request;
        $this->enable = $enable;
    }
    
    /**
     * This function handle the event
     * Momently nothing
     */
    public function handle(Event $event)
    {
        if($this->enable == true)
        {
            echo $this->request->getUri();
        }
    }
}
