<?php

declare(strict_types=1);

namespace Postboy\Contract\Encoder;

use Postboy\Contract\Message\MessageInterface;

interface EncoderInterface
{
    /**
     * @param MessageInterface $message
     * @return string
     */
    public function encode(MessageInterface $message): string;
}
