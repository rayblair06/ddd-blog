<?php

namespace src\Posts\Application\QueryHandlers;

use src\Posts\Domain\Models\PostInterface;
use src\Posts\Domain\Queries\GetPost;
use src\Posts\Domain\Repositories\PostRepositoryInterface;

final class GetPostHandler
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(GetPost $query): PostInterface
    {
        return $this->postRepository->findByIdOrFail($query->postId);
    }
}