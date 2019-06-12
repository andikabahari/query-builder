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
   * @param string $table
   *
   * @return QueryBuilder
   */
  public function from(string $table)
  {
    $this->query .= 'FROM '.$table.' ';

    return $this;
  }
}
