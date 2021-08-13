<?php
namespace Comportamental\Observer;
use Comportamental\Observer\{
    User,
    UserObserver
};

/**
 *
 */
class Test
{

    public function ChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();
        $user = new User();
        $user->attach($observer);
        $user->changeEmail("foo@bar.com.br");

        echo __METHOD__ . ":" . PHP_EOL;
        echo "observer->getChangedUsers() === 1" . PHP_EOL;
        var_dump($observer->getChangedUsers() === 1);
    }
}

?>
