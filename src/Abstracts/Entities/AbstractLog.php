<?php

namespace ApiArchitect\Log\Abstracts\Entities;

use Doctrine\ORM\Cache;
use Doctrine\ORM\Events;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Util\ClassUtils;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use ApiArchitect\Core\Libraries\EntityTrait;
use ApiArchitect\Core\Contracts\EntityContract;

/**
 * Class AbstractLog
 *
 * @package ApiArchitect\Abstracts
 * @see Gedmo\Loggable\Entity\AbstractLog
 * @author James Kirkby <hello@jameskirkby.com>
 */
abstract class AbstractLog implements EntityContract
{
    use EntityTrait;
}