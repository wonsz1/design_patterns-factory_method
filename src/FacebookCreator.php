<?php

declare(strict_types=1);

namespace FactoryMethod;

/**
 * concrete creator
 */
class FacebookCreator extends SocialNetworkCreator
{
    public function __construct(
        private string $login,
        private string $password,
    ) {
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new FacebookConnector($this->login, $this->password);
    }
}