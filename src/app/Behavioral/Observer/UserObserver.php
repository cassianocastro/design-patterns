<?php
declare(strict_types=1);

namespace App\Behavioral\Observer;

use SplObserver, SplSubject;

/**
 *
 */
final class UserObserver implements SplObserver
{

    /**
     * @var SplSubject[]
     */
    private array $changedUsers;

    public function __construct()
    {
        $this->changedUsers = [];
    }

    /**
     * It is called by the Subject, usually by Subject::notify()
     */
    public function update(SplSubject $subject): void
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}