<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVUq5ejd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVUq5ejd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVUq5ejd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVUq5ejd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVUq5ejd\App_KernelDevDebugContainer([
    'container.build_hash' => 'VUq5ejd',
    'container.build_id' => '24bc87f5',
    'container.build_time' => 1690444134,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVUq5ejd');
