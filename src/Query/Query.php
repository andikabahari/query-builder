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
   * @param string $query
   *
   * @return QueryBuilder
   */
  public function query(string $query)
  {
    return is_array($query)
      ? new self(implode('; ', $query).' ')
      : new self($query.' ');
  }
}
