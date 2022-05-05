<?php

declare(strict_types=1);

namespace FactoryMethod;

/**
 * concrete creator
 */
class TwitterCreator extends SocialNetworkCreator
{
    public function __construct(
        private string $email,
        private string $password,
    ) {
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new TwitterConnector($this->email, $this->password);
    }
}