<?php

declare(strict_types=1);

namespace FactoryMethod;

/**
 * abstract Creator
 */
abstract class SocialNetworkCreator
{
    /**
     * facory method
     */
    abstract public function getSocialNetwork(): SocialNetworkConnectorInterface;

    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}