<?php

declare(strict_types=1);

namespace FactoryMethod;

/**
 * concrete product
 */
class TwitterConnector implements SocialNetworkConnectorInterface
{
    public function __construct(
        private string $email,
        private string $password
    ) {
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email from Twitter\n";
    }

    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Twitter.\n";
    }
}