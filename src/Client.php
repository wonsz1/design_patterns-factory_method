<?php

declare(strict_types=1);

namespace FactoryMethod;

class Client
{
    public function postSocial(SocialNetworkCreator $creator)
    {
        $creator->post('Hello world!');
    }
}