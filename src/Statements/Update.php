<?php

namespace QueryBuilder\Statements;

/**
 * Update
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Update
{

  /**
   * @param string $table
   * @param mixed $columns
   *
   * @return QueryBuilder
   */
  public static function update(string $table, $columns = null)
  {
    if (is_null($columns))
    {
      return new self('UPDATE '.$table.' ');
    }

    if (is_string($columns))
    {
      return new self('UPDATE '.$table.' SET '.$columns.' ');
    }

    return self::isAssoc($columns)
      ? new self('UPDATE '.$table.' SET '.self::concat($columns).' ')
      : new self('UPDATE '.$table.' ');
  }

  /**
   * @param mixed $columns
   *
   * @return QueryBuilder
   */
  public function set($columns)
  {
    $this->query .= is_array($columns)
      ? 'SET '.$this->concat($columns).' '
      : 'SET '.$columns.' ';

    return $this;
  }
}
