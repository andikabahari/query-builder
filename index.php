<?php

require_once __DIR__.'/vendor/autoload.php';

use QueryBuilder\QueryBuilder;

/*
|--------------------------------------------------------------------------
| SQL Queries Example
|--------------------------------------------------------------------------
*/
$queries = [];

$queries[] = QueryBuilder::query(['SQL QUERY ...'])->finish();

$queries[] = QueryBuilder::query(['SQL QUERY ...', 'SQL QUERY ...'])->finish();

$queries[] = QueryBuilder::select([
                            'column1 AS c1',
                            'column2 AS c2'
                          ])
                        ->from('table')
                        ->where('column=value')
                        ->finish();

$queries[] = QueryBuilder::insert('users')->value(["'john'", '?', '?'])->finish();

print_r($queries);
