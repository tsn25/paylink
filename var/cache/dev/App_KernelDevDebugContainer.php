<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDhk7NBO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDhk7NBO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDhk7NBO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDhk7NBO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDhk7NBO\App_KernelDevDebugContainer([
    'container.build_hash' => 'Dhk7NBO',
    'container.build_id' => 'a92f0ec5',
    'container.build_time' => 1626705068,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDhk7NBO');
