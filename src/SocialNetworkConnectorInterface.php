<?php

declare(strict_types=1);

namespace FactoryMethod;

/**
 * product interface
 */
interface SocialNetworkConnectorInterface
{
    public function logIn(): void;
    
    public function logOut(): void;

    public function createPost(string $content): void;
}