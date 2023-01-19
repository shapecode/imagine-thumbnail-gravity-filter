<?php

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use Webmozart\Glob\Glob;

return static function (Configuration $config): Configuration {
    return $config
        ->setAdditionalFilesFor('shapecode/imagine-thumbnail-gravity-filter', Glob::glob(__DIR__ . '/config/*.php'));
};
