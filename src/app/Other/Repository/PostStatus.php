<?php
declare(strict_types=1);

namespace App\Other\Repository;

use ValueError;

/**
 *
 */
final class PostStatus
{

    public const STATE_DRAFT_ID     = 1;
    public const STATE_PUBLISHED_ID = 2;
    public const STATE_DRAFT        = "draft";
    public const STATE_PUBLISHED    = "published";

    private const VALID_STATES = [

        self::STATE_DRAFT_ID     => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED

    ];

    private int $id;
    private string $name;

    private function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @throws ValueError
     */
    static public function fromInt(int $statusID): self
    {
        if (self::isValidID($statusID))
        {
            return new self($statusID, self::VALID_STATES[$statusID]);
        }
        throw new ValueError("Invalid Status ID given!");
    }

    /**
     * @throws ValueError
     */
    static public function fromString(string $statusName): self
    {
        if (self::isValidName($statusName))
        {
            $state = array_search($statusName, self::VALID_STATES, true);

            if ($state)
            {
                return new self($state, $statusName);
            }
        }
        throw new ValueError("Invalid Status Name given!");
    }

    static private function isValidID(int $status): bool
    {
        return in_array($status, array_keys(self::VALID_STATES), true);
    }

    static private function isValidName(string $status): bool
    {
        return in_array($status, self::VALID_STATES, true);
    }
}