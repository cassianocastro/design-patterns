<?php
declare(strict_types=1);

namespace App\Other\Repository;

use OutOfBoundsException;

/**
 *
 */
final class PostRepository
{

    private Persistence $persistence;

    public function __construct(Persistence $persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateID(): PostID
    {
        return PostID::fromInt(
            $this->persistence->generateID()
        );
    }

    public function findByID(PostID $id): Post
    {
        try {
            $data = $this->persistence->retrieve($id->toInt());
        } catch (OutOfBoundsException $e) {
            throw new OutOfBoundsException(
                "Post with ID {$id->toInt()} doesn't exists.", 0, $e
            );
        }
        return Post::fromState($data);
    }

    public function save(Post $post): void
    {
        $this->persistence->persist(
            [
                "id"     => $post->getID()->toInt(),
                "status" => $post->getStatus()->toInt(),
                "title"  => $post->getTitle(),
                "text"   => $post->getText()
            ]
        );
    }
}