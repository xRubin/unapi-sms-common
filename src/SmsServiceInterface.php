<?php
namespace unapi\sms\common;

use GuzzleHttp\Promise\PromiseInterface;

interface SmsServiceInterface
{
    /**
     * @param string $value
     * @return $this
     */
    public function setCountry(string $value);

    /**
     * @param string $value
     * @return $this
     */
    public function setService(string $value);

    /**
     * @return PromiseInterface
     */
    public function getPhone(): PromiseInterface;

    /**
     * @param ServicePhoneDto $servicePhone
     * @return PromiseInterface
     */
    public function getSmsMessage(ServicePhoneDto $servicePhone): PromiseInterface;

    /**
     * Сообщает, что выданный номер уже использован или заблокирован в сервисе для которого запрашивалась активация
     * @param ServicePhoneDto $servicePhone
     * @return PromiseInterface
     */
    public function declinePhone(ServicePhoneDto $servicePhone): PromiseInterface;

    /**
     * Сообщает что вы отправили смс на номер и готовы получить код поступивший в этом смс
     * @param ServicePhoneDto $servicePhone
     * @return PromiseInterface
     */
    public function readyPhone(ServicePhoneDto $servicePhone): PromiseInterface;

    /**
     * Отправляет уведомление об успешном получении кода и завершает операцию
     * @param ServicePhoneDto $servicePhone
     * @return PromiseInterface
     */
    public function confirmPhone(ServicePhoneDto $servicePhone): PromiseInterface;
}