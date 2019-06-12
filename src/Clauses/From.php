<?php

namespace QueryBuilder\Clauses;

/**
 * From
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait From
{

  /**
   * @return QueryBuilder
   */
  public function from($table)
  {
    $this->query .= 'FROM '.$table.' ';

    return $this;
  }
}
