<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8dSN1N9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8dSN1N9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8dSN1N9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8dSN1N9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8dSN1N9\App_KernelDevDebugContainer([
    'container.build_hash' => '8dSN1N9',
    'container.build_id' => '9e8f55c1',
    'container.build_time' => 1638332787,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8dSN1N9');
