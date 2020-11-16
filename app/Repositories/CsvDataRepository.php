<?php

namespace App\Repositories;

use App\Contracts\CsvRepositoryInterface;
use App\Traits\CsvReader;

class CsvDataRepository implements CsvRepositoryInterface
{
    /**
     * Traits use
     */
    use CsvReader;

    /**
     * Get all data
     *
     * @return mixed
     */
    public function getData($path)
    {
        return $this->read($path);
    }
}