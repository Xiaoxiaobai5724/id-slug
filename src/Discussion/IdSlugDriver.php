<?php

/*
 * This file is part of Xiaoxiaobai5724/id-slug.
 *
 * Copyright (c) XXB.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XXB\IdSlug\Discussion;

use Flarum\Database\AbstractModel;
use Flarum\Discussion\DiscussionRepository;
use Flarum\Http\SlugDriverInterface;
use Flarum\User\User;

class IdSlugDriver implements SlugDriverInterface
{
    /**
     * @var DiscussionRepository
     */
    protected $discussions;

    public function __construct(DiscussionRepository $discussions)
    {
        $this->discussions = $discussions;
    }

    public function toSlug(AbstractModel $instance): string
    {
        return $instance->id;
    }

    public function fromSlug(string $slug, User $actor): AbstractModel
    {
        if (strpos($slug, '-')) {
            $slug_array = explode('-', $slug);
            $slug = $slug_array[0];
        }

        return $this->discussions->findOrFail($slug, $actor);
    }
}
