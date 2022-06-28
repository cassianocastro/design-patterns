<?php
declare(strict_types=1);

namespace App\Other\Repository;

/**
 *
 */
final class Post
{

    private PostID $id;
    private PostStatus $status;
    private string $title;
    private string $text;

    public function __construct(PostID $id, PostStatus $status, string $title, string $text)
    {
        $this->id     = $id;
        $this->status = $status;
        $this->title  = $title;
        $this->text   = $text;
    }

    public function getID(): PostID
    {
        return $this->id;
    }

    public function getStatus(): PostStatus
    {
        return $this->status;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    static public function draft(PostID $id, string $title, string $text): self
    {
        $status = PostStatus::fromString(PostStatus::STATE_DRAFT);

        return new self($id, $status, $title, $text);
    }

    static public function fromState(array $state): self
    {
        return new self(
            PostID::fromInt($state["id"]),
            PostStatus::fromInt($state["status"]),
            $state["title"],
            $state["text"]
        );
    }
}