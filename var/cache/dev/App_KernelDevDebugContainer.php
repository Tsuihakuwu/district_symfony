<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOdcXjxu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOdcXjxu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOdcXjxu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOdcXjxu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOdcXjxu\App_KernelDevDebugContainer([
    'container.build_hash' => 'OdcXjxu',
    'container.build_id' => '54cba418',
    'container.build_time' => 1688478188,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOdcXjxu');
