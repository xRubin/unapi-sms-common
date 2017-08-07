<?php
namespace unapi\sms\common;

/**
 * Class TaskDto
 */
class TaskDto
{
     /** @var string */
    private $id;

    /**
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
