<?php
declare(strict_types=1);

namespace App\Behavioral\Mediator;

/**
 *
 */
final class UserRepositoryUiMediator implements Mediator
{

    private UserRepository $repository;
    private Ui $ui;

    public function __construct(UserRepository $repository, Ui $ui)
    {
        $this->repository = $repository;
        $this->ui         = $ui;

        $this->init();
    }

    private function init(): void
    {
        $this->repository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user): void
    {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $userName): string
    {
        return $this->repository->getUserName($userName);
    }
}