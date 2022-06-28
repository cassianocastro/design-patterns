<?php
declare(strict_types=1);

namespace App\Behavioral\Observer;

use SplSubject, SplObjectStorage, SplObserver;

/**
 *
 */
final class User implements SplSubject
{

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email): void
    {
        $this->notify();
    }

    public function notify(): void
    {
        /**
         * @var SplObserver $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}