<?php

namespace QueryBuilder\Clauses;

/**
 * Where
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Where
{

  /**
   * @param mixed $condition
   *
   * @return QueryBuilder
   */
  public function where($condition)
  {
    $this->query .= is_array($condition)
      ? 'WHERE '.$this->concat([key($condition) => $condition[key($condition)]]).' '
      : 'WHERE '.$condition.' ';

    return $this;
  }
}
