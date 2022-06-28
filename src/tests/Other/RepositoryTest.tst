<?php
declare(strict_types=1);

namespace Tests\Behavioral;

use OutOfBoundsException;
use PHPUnit\Framework\TestCase;
use App\Other\Repository\{
    Post,
    PostID,
    PostStatus,
    PostRepository,
    InMemoryPersistence
};

/**
 *
 */
final class RepositoryTest extends TestCase
{

    private PostRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new PostRepository(new InMemoryPersistence());
    }

    /**
     * @test
     */
    public function canGenerateID(): void
    {
        self::assertEquals(1, $this->repository->generateID()->toInt());
    }

    /**
     * @test
     */
    public function throwsExceptionWhenTryingToFindPostWhichDoesNotExist(): void
    {
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage("Post with ID 42 doesn't exists");

        $this->repository->findById(PostId::fromInt(42));
    }

    /**
     * @test
     */
    public function canPersistPostDraft(): void
    {
        $postID = $this->repository->generateID();
        $post = Post::draft(
            $postID,
            "Repository Pattern",
            "Design Patterns PHP"
        );

        $this->repository->save($post);
        $foundPost = $this->repository->findByID($postID);

        $this->assertEquals($postID, $foundPost->getId());

        $this->assertEquals(
            PostStatus::STATE_DRAFT,
            $post->getStatus()->__toString()
        );
    }
}