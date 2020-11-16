<?php

namespace App\Contracts;

/**
 * Interface CsvRepositoryInterface
 * @package App\Contracts
 */
interface CsvRepositoryInterface
{
    /**
     * @param $path
     * @return mixed
     */
    public function getData($path);
}