<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLqklvj5\srcTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLqklvj5/srcTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLqklvj5.legacy');

    return;
}

if (!\class_exists(srcTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLqklvj5\srcTestDebugProjectContainer::class, srcTestDebugProjectContainer::class, false);
}

return new \ContainerLqklvj5\srcTestDebugProjectContainer(array(
    'container.build_hash' => 'Lqklvj5',
    'container.build_id' => '11b760f5',
    'container.build_time' => 1530519613,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLqklvj5');
