<?php

declare(strict_types=1);

namespace Ameos\Amqp\Messenger;

use Ameos\Amqp\Exception\MissingConfigurationException;
use Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpTransportFactory as SymfonyAmqpTransportFactory;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;
use Symfony\Component\Messenger\Transport\TransportInterface;

final class AmqpTransportFactory extends SymfonyAmqpTransportFactory
{
    public function createTransportForTypo3(SerializerInterface $serializer): TransportInterface
    {
        $configuration = $GLOBALS['TYPO3_CONF_VARS']['SYS']['messenger']['AMQP'] ?? [];
        if (!isset($configuration['dsn']) || empty($configuration['dsn'])) {
            throw new MissingConfigurationException('DSN missing');
        }

        return parent::createTransport($configuration['dsn'], $configuration['options'] ?? [], $serializer);
    }
}
