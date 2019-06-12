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

  public static function query($query)
  {
    return is_array($query)
      ? new self(implode('; ', $query).' ')
      : new self($query.' ');
  }
}
