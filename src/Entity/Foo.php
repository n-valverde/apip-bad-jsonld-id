<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Link;
use App\Controller\FooController;
use App\DummyProvider;

/**
 * @ApiPlatform\Core\Annotation\ApiResource(
 *     itemOperations={
 *         "get"={
 *             "method"="GET",
 *             "path"="/foo/{id}",
 *             "controller"=FooController::class
 *         },
 *          "get_something"={
 *              "method"="GET",
 *              "path"="/foo/{id}/something",
 *              "controller"=FooController::class
 *          }
 *     }
 * )
 */
#[\ApiPlatform\Metadata\ApiResource(
    operations: [
        new Get(uriTemplate: '/foo/{id}', controller: FooController::class, provider: DummyProvider::class),
        new Get(uriTemplate: '/foo/{id}/something', controller: FooController::class, provider: DummyProvider::class)
    ]
)]
class Foo
{

    #[ApiProperty(identifier: true)]
    public $id = 1;

}