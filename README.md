# TYPO3 AMQP Messenger Gateway Extension

## Introduction

The TYPO3 AMQP Messenger Gateway extension provides seamless integration between TYPO3 and Symfony's AMQP Messenger component. This extension enables TYPO3 to utilize AMQP (Advanced Message Queuing Protocol) for efficient message queueing, ensuring reliable and scalable communication between different services.

Features

 * Easy Integration: Simplifies the process of connecting TYPO3 with Symfony's AMQP Messenger component.
 * Reliable Messaging: Utilizes AMQP for robust message euing and handling.
 * Scalability: Supports scalable message-driven architecture.
 * Configuration: Flexible configuration options for various messaging requirements.
 * Logging: Comprehensive logging for monitoring message flow and errors.

Requirements

 * TYPO3 v12.4 or higher
 * PHP 8.0 or higher
 * PHP AMQP Extension
 * AMQP broker (RabbitMQ or similar)

## Installation

### Composer

Install the extension via Composer:

bash

```
composer require ameos/amqp
```

### Extension Manager

 * Go to the TYPO3 backend.
 * Navigate to Admin Tools > Extension Manager.
 * Click on Get Extensions.
 * Search for maqp.
 * Click on the Import and Install button.

## Configuration

Global Configuration

Add the following configuration to your LocalConfiguration.php or AdditionalConfiguration.php:

```
$GLOBALS['TYPO3_CONF_VARS']['SYS']['messenger']['AMQP'] = [
    'dsn' => 'amqp://user:password@localhost:5672/vhost',
    'options' => [
        'exchange' => [
            'name' => 'exchange_name',
        ],
        'queue' => [
            'name' => 'queue_name',
            'routing_key' => 'routing_key',
        ],
    ],
];
```

## Usage

Sending Messages

To send a message, see [TYPO3 documentation](https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ApiOverview/MessageBus/Index.html)

## Contributing

We welcome contributions to enhance the functionality of this extension. Please submit pull requests or open issues on GitHub.

## License

This TYPO3 extension is open-source and licensed under the GNU GENERAL PUBLIC LICENSE V2.

## Credits

Developed by AMEOS.

For any inquiries or support, please contact typo3dev@ameos.com.

Thank you for using the TYPO3 AMQP Messenger Gateway Extension. We hope it helps in building robust and scalable applications.