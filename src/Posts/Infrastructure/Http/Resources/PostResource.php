<?php

namespace Weblog\Posts\Infrastructure\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Weblog\Posts\Domain\QueryResults\Post;

final class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Post $data */
        $data = $this;

        return [
            'id' => $data->getId()->getValue(),
            'userId' => $data->getUserId()->getValue(),
            'title' => $data->getTitle(),
            'slug' => $data->getSlug(),
            'body' => $data->getBody(),
            'tags' => TagResource::collection($data->getTags()),
            'publishedAt' => $data->getPublishedAt() ? $data->getPublishedAt()->format('Y-m-d') : null,
        ];
    }
}
