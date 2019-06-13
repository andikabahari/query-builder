<?php

namespace QueryBuilder\Query;

/**
 * Query
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Query
{

  /**
   * @param mixed $query
   *
   * @return QueryBuilder
   */
  public function query($query)
  {
    return is_array($query)
      ? new self(implode('; ', $query).' ')
      : new self($query.' ');
  }
}
