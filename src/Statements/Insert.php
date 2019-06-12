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
   * @return QueryBuilder
   */
  public static function insert(string $table)
  {
    // return new self('INSERT INTO '.$table.' ('..')');
  }

  /**
   * @return QueryBuilder
   */
  public function value($values)
  {
    // $this->query .= is_array($values)
    //   ? 'VALUES ('.implode(', ', $values).') '
    //   : 'VALUES ('.$values.') ';

    return $this;
  }
}
