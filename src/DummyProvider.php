<?php

namespace App;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Entity\Foo;

class DummyProvider implements ProviderInterface, ItemDataProviderInterface
{

    public function provide(Operation $operation, array $uriVariables = [], array $context = [])
    {
        return new Foo();
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        return new Foo();
    }
}