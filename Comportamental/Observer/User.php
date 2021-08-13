<?php
namespace Comportamental\Observer;
use SplSubject;
use SplObjectStorage;
use SplObserver;
/**
 *
 */
class User implements SplSubject
{

    private SplObjectStorage $observers;

    function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email)
    {
        $this->notify();
    }

    public function notify()
    {
        /*
        * @var SplObserver $observer
        */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

?>
