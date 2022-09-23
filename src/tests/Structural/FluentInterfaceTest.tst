<?php
declare(strict_types=1);

namespace Tests\Structural;

use App\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class FluentInterfaceTest extends TestCase
{

    /**
     * @test
     */
    public function canBuildSQLQuery(): void
    {
        $sql = (
            new Sql()
        )->select(
            ["ID", "name", "email"]
        )->from(
            "user", "Users"
        )->where(
            "ID = ?"
        );

        self::assertSame(
            "SELECT ID, name, email FROM user AS Users WHERE ID = ?",
            $sql->__toString()
        );
    }
}