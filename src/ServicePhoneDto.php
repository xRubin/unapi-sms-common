<?php
namespace unapi\sms\common;

class ServicePhoneDto
{
    /** @var TaskDto */
    private $id;
    /** @var PhoneDto */
    private $phone;

    public function __construct(TaskDto $id, PhoneDto $phone)
    {
        $this->id = $id;
        $this->phone = $phone;
    }

    /**
     * @return PhoneDto
     */
    public function getPhone(): PhoneDto
    {
        return $this->phone;
    }

    /**
     * @return TaskDto
     */
    public function getId(): TaskDto
    {
        return $this->id;
    }
}