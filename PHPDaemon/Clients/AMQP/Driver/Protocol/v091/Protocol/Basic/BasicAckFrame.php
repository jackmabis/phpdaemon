<?php

namespace PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\Basic;

use PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\IncomingFrame;
use PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\MethodFrame;
use PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\OutgoingFrame;

/**
 * Class BasicAckFrame
 * @author Aleksey I. Kuleshov YOU GLOBAL LIMITED
 * @package PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\Basic
 */
class BasicAckFrame implements MethodFrame, IncomingFrame, OutgoingFrame
{
    const METHOD_ID = 0x003c0050;

    public $frameChannelId = 0;
    public $deliveryTag = 0; // longlong
    public $multiple = false; // bit

    public static function create(
        $deliveryTag = null, $multiple = null
    )
    {
        $frame = new self();

        if (null !== $deliveryTag) {
            $frame->deliveryTag = $deliveryTag;
        }
        if (null !== $multiple) {
            $frame->multiple = $multiple;
        }

        return $frame;
    }
}
