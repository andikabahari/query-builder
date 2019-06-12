<?php

namespace QueryBuilder\Statements;

/**
 * Select
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Select
{

  /**
   * @return QueryBuilder
   */
  public static function select($columns)
  {
    return is_array($columns)
      ? new self('SELECT '.implode(', ', $columns).' ')
      : new self('SELECT '.$columns.' ');
  }
}
