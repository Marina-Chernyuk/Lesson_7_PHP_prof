<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY4iEBoi\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY4iEBoi/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerY4iEBoi.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerY4iEBoi\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerY4iEBoi\App_KernelTestDebugContainer([
    'container.build_hash' => 'Y4iEBoi',
    'container.build_id' => '228275b8',
    'container.build_time' => 1638340660,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY4iEBoi');
