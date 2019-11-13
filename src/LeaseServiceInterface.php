<?php
namespace unapi\sms\common;

use GuzzleHttp\Promise\PromiseInterface;
use unapi\sms\common\dto\ServicePhoneInterface;

interface LeaseServiceInterface
{
    /**
     * Запрос на на выделение номера
     * @return PromiseInterface
     */
    public function getPhone(): PromiseInterface;

    /**
     * @param ServicePhoneInterface $servicePhone
     * @return PromiseInterface
     */
    public function getSmsMessage(ServicePhoneInterface $servicePhone): PromiseInterface;

    /**
     * Сообщает, что выданный номер уже использован или заблокирован в сервисе для которого запрашивалась активация
     * @param ServicePhoneInterface $servicePhone
     * @return PromiseInterface
     */
    public function declinePhone(ServicePhoneInterface $servicePhone): PromiseInterface;

    /**
     * Сообщает что вы отправили смс на номер и готовы получить код поступивший в этом смс
     * @param ServicePhoneInterface $servicePhone
     * @return PromiseInterface
     */
    public function readyPhone(ServicePhoneInterface $servicePhone): PromiseInterface;

    /**
     * Отправляет уведомление об успешном получении кода и завершает операцию
     * @param ServicePhoneInterface $servicePhone
     * @return PromiseInterface
     */
    public function confirmPhone(ServicePhoneInterface $servicePhone): PromiseInterface;
}