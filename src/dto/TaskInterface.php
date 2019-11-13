<?php
namespace unapi\sms\common\dto;

use unapi\interfaces\DtoInterface;

/**
 * Interface TaskInterface
 */
interface TaskInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getId(): string;
}
