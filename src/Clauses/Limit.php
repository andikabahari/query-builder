<?php

namespace QueryBuilder\Clauses;

/**
 * Limit
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Limit
{

  /**
   * @param int $number
   * @param int $offset
   *
   * @return QueryBuilder
   */
  public function limit(int $number = 0, int $offset = null)
  {
    $this->query .= is_null($offset)
      ? 'LIMIT '.$number.' '
      : 'LIMIT '.$number.' OFFSET '.$offset.' ';

    return $this;
  }
}
