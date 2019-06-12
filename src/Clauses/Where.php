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
   * @return QueryBuilder
   */
  public function where($where)
  {
    $this->query .= is_array($where)
      ? 'WHERE '.key($where).'='.$where[key($where)].' '
      : 'WHERE '.$where.' ';

    return $this;
  }
}
