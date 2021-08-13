<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Cassiano R. Castro">
        <title>Design Patterns</title>
    </head>
    <body>
        <header>
            <h1>Design Patterns</h1>
        </header>
        <main>
            <article>
                <section>
                    <h2>Creational</h2>
                    <pre>
                        <?php
                            use Creational\CreationalFacade;

                            ini_set('display_errors', 1);
                            ini_set('display_startup_errors', 1);
                            error_reporting(E_ALL);

                            require_once './Loader.php';


                        ?>
                    </pre>
                </section>
                <section>
                    <h2>Comportamental</h2>
                    <pre>
                        <?php
                            use Comportamental\NullObject\Test as NullObject;

                            echo "<h3>Object NULL:</h3>";
                            $nullObject = new NullObject();
                            $nullObject->testNullObject();
                            $nullObject->testStdLogger();
                        ?>
                    </pre>
                </section>
                <section>
                    <h2>Estrutural</h2>
                    <pre>
                        <?php
                            use Estrutural\DependencyInjection\Test as DI;

                            echo "<h3>Dependency Injection:</h3>";
                            $di = (new DI())->testDependencyInjection();
                        ?>
                    </pre>
                </section>
            </article>
        </main>
    </body>
</html>
