<?php
namespace unapi\sms\common\dto;

use unapi\interfaces\DtoInterface;
use unapi\sms\common\interfaces\PhoneInterface;

/**
 * Interface ServicePhoneInterface
 */
interface ServicePhoneInterface extends DtoInterface
{
    /**
     * @return PhoneInterface
     */
    public function getPhone(): PhoneInterface;

    /**
     * @return TaskInterface
     */
    public function getId(): TaskInterface;
}