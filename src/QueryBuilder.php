<?php

namespace QueryBuilder;

use QueryBuilder\Query\Query;

use QueryBuilder\Statements\Select;
use QueryBuilder\Statements\Insert;
use QueryBuilder\Statements\Update;
use QueryBuilder\Statements\Delete;

use QueryBuilder\Clauses\From;
use QueryBuilder\Clauses\Where;
// use QueryBuilder\Clauses\OrderBy;
// use QueryBuilder\Clauses\Like;
// use QueryBuilder\Clauses\Limit;

/**
 * QueryBuilder Class
 *
 * @author Andika Bahari
 * @license MIT License
 */
class QueryBuilder extends AbstractQueryBuilder
{

  use Query;

  use Select,
      Insert,
      Update,
      Delete;

  use From,
      Where;

  /**
   * @var string
   */
  public $query;

  public function __construct(string $query)
  {
    $this->query = $query;
  }

  /**
   * @return string
   */
  public function finish(): string
  {
    return trim($this->query, ' ').';';
  }
}
