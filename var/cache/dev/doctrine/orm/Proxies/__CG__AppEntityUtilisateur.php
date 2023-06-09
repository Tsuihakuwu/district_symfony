<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'commandes' => [parent::class, 'commandes', null],
        "\0".parent::class."\0".'cp' => [parent::class, 'cp', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isVerified' => [parent::class, 'isVerified', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'telephone' => [parent::class, 'telephone', null],
        "\0".parent::class."\0".'ville' => [parent::class, 'ville', null],
        'adresse' => [parent::class, 'adresse', null],
        'commandes' => [parent::class, 'commandes', null],
        'cp' => [parent::class, 'cp', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'isVerified' => [parent::class, 'isVerified', null],
        'nom' => [parent::class, 'nom', null],
        'password' => [parent::class, 'password', null],
        'prenom' => [parent::class, 'prenom', null],
        'roles' => [parent::class, 'roles', null],
        'telephone' => [parent::class, 'telephone', null],
        'ville' => [parent::class, 'ville', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
