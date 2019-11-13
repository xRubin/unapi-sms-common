<?php
namespace unapi\sms\common\dto;

use unapi\interfaces\DtoInterface;
use unapi\sms\common\interfaces\PhoneInterface;

/**
 * Interface MessageInterface
 */
interface MessageInterface extends DtoInterface
{
    /**
     * @param PhoneInterface $phone
     * @return MessageInterface
     */
    public function setPhone(PhoneInterface $phone): MessageInterface;

    /**
     * @return PhoneInterface
     */
    public function getPhone(): PhoneInterface;

    /**
     * @param string $text
     * @return MessageInterface
     */
    public function setText(string $text): MessageInterface;

    /**
     * @return string
     */
    public function getText(): string;
}
