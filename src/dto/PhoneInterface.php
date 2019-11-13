<?php
namespace unapi\sms\common\interfaces;

use unapi\interfaces\DtoInterface;

/**
 * Interface PhoneInterface
 */
interface PhoneInterface extends DtoInterface
{
    /**
     * @param string $prepend
     * @return string
     */
    public function getNumber(string $prepend = ''): string;
}
