#! /usr/bin/env bash

function executeUnit()
{
    ./vendor/bin/phpunit --configuration ./phpunit.xml
}

function executeTestScriptFromComposer()
{
    echo "Executing Composer..."
    composer test
}

executeTestScriptFromComposer