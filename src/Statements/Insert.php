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
   * @param mixed $values
   *
   * @return QueryBuilder
   */
  public static function insert(string $table, $columns)
  {
    $keys   = array_keys($columns);
    $values = array_values($columns);

    return is_array($columns)
      ? new self('INSERT INTO '.$table.' ('.implode(',', $columns).') ')
      : new self('INSERT INTO '.$table.' ('.$columns.') ');
  }

  /**
   * @param mixed $values
   *
   * @return QueryBuilder
   */
  public function values($values)
  {
    $this->query .= 'VALUES ('.$this->raw($values).') ';

    return $this;
  }
}
