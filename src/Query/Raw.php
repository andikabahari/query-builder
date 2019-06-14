<?php

namespace QueryBuilder\Query;

/**
 * Raw
 *
 * @author Andika Bahari
 * @license MIT License
 */
trait Raw
{

  /**
   * @param string $raw
   *
   * @return QueryBuilder
   */
  public function raw(string $raw)
  {
    $this->query .= $raw.' ';

    return $this;
  }
}
