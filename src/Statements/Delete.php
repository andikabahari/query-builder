<?php

namespace QueryBuilder\Statements;

/**
 * Delete
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Delete
{

  /**
   * @param string $table
   *
   * @return QueryBuilder
   */
  public static function delete(string $table)
  {
    return new self('DELETE FROM '.$table.' ');
  }
}
