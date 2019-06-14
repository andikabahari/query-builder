<?php

namespace QueryBuilder\Statements;

/**
 * Insert
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Insert
{

  /**
   * @param string $table
   * @param mixed $columns
   *
   * @return QueryBuilder
   */
  public static function insert(string $table, $columns = null)
  {
    if (is_null($columns))
    {
      return new self('INSERT INTO '.$table.' ');
    }

    if (is_string($columns))
    {
      return new self('INSERT INTO '.$table.' ('.$columns.') ');
    }

    $keys = self::isAssoc($columns)
      ? array_keys($columns)
      : null;

    $values = ! is_null($columns)
      ? array_values($columns)
      : null;

    return is_array($keys)
      ? new self('INSERT INTO '.$table.' ('.implode(',', $keys).') VALUES ('.self::quote($values).') ')
      : new self('INSERT INTO '.$table.' ('.implode(',', $columns).') ');
  }

  /**
   * @param mixed $values
   *
   * @return QueryBuilder
   */
  public function values($values)
  {
    $this->query .= 'VALUES ('.$this->quote($values).') ';

    return $this;
  }
}
