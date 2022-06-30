<?php
declare(strict_types=1);

namespace Tests\Behavioral;

use App\Behavioral\Mediator\{ Ui, UserRepository, UserRepositoryUiMediator };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class MediatorTest extends TestCase
{

    /**
     * @test
     */
    public function canGetHello(): void
    {
        $mediator = new UserRepositoryUiMediator(
            new UserRepository(), new Ui()
        );

        $this->expectOutputString("User: Test");
        $mediator->printInfoAbout("Test");
    }
}