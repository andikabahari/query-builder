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
  {
    return is_array($query)
      ? new self(implode('; ', $query).' ')
      : new self($query.' ');
  }
}
