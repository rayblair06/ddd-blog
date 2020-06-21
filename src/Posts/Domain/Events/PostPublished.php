<?php

namespace Weblog\Posts\Domain\Events;

use Weblog\Posts\Domain\ValueObjects\PostId;

final class PostPublished
{
    public PostId $postId;

    public function __construct(PostId $postId)
    {
        $this->postId = $postId;
    }
}
