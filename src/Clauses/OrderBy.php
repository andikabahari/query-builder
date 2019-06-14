<?php

namespace QueryBuilder\Clauses;

/**
 * OrderBy
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait OrderBy
{

  /**
   * @param string $column
   * @param string $sort
   *
   * @return QueryBuilder
   */
  public function orderBy(string $column, string $sort = 'ASC')
  {
    $this->query .= 'ORDER BY '.$column.' '.$sort.' ';

    return $this;
  }
}
