<?php

/*
 * This file is part of Xiaoxiaobai5724/id-slug.
 *
 * Copyright (c) XXB.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XXB\IdSlug;

use Flarum\Discussion\Discussion;
use Flarum\Extend;
use XXB\IdSlug\Discussion\IdSlugDriver;

return [
    (new Extend\ModelUrl(Discussion::class))
        ->addSlugDriver('id', IdSlugDriver::class)
];
