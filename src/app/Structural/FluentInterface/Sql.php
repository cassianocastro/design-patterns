<?php
declare(strict_types=1);

namespace App\Structural\FluentInterface;

use Stringable;

/**
 *
 */
final class Sql implements Stringable
{

    private array $fields;
    private array $from;
    private array $where;

    public function __construct()
    {
        $this->fields = [];
        $this->from   = [];
        $this->where  = [];
    }

    public function select(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function from(string $table, string $alias): self
    {
        $this->from[] = "$table AS $alias";

        return $this;
    }

    public function where(string $condition): self
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            "SELECT %s FROM %s WHERE %s",
            implode(", ", $this->fields),
            implode(", ", $this->from),
            implode(" AND ", $this->where)
        );
    }
}