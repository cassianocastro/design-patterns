<?php
declare(strict_types=1);

namespace Tests\Behavioral;

use App\Comportamental\Observer\{ UserObserver, User };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class ObserverTest extends TestCase
{

    /**
     * @test
     */
    public function changeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();
        $user     = new User();
        $user->attach($observer);
        $user->changeEmail("foo@bar.com.br");

        self::assertCount(1, $observer->getChangedUsers());
    }
}