<?php

namespace SimpleBus\Message\Subscriber\Collection;

use SimpleBus\Message\Subscriber\MessageSubscriber;

interface MessageSubscriberCollection
{
    /**
     * @param string $messageName
     * @return MessageSubscriber[]
     */
    public function subscribersByMessageName($messageName);
}
