<?php
namespace unapi\sms\common;

use GuzzleHttp\Promise\PromiseInterface;
use unapi\sms\common\dto\MessageInterface;

interface GateServiceInterface
{
    /**
     * @param MessageInterface $message
     * @return PromiseInterface
     */
    public function sendMessage(MessageInterface $message): PromiseInterface;
}