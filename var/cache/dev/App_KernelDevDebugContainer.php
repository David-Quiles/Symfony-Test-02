<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYtLUN06\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYtLUN06/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYtLUN06.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYtLUN06\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYtLUN06\App_KernelDevDebugContainer([
    'container.build_hash' => 'YtLUN06',
    'container.build_id' => 'fc256b8c',
    'container.build_time' => 1625741626,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYtLUN06');
