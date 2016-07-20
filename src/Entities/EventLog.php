<?php

namespace ApiArchitect\Log\Entities;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiArchitect\Log\Abstracts\Entities\AbstractLog;

/**
 * Gedmo\Loggable\Entity\EventLog
 *
 * @author James Kirkby <hello@jameskirkby.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="event_log")})
 * @ORM\Entity(repositoryClass="Gedmo\Loggable\Entity\Repository\EventLogRepository")
 */
class EventLog extends AbstractLog
{
    public $nodeType;

    /**
     * EventLog constructor.
     */
    public function __construct()
    {
        $this->nodeType = 'EventLog';
    }
}