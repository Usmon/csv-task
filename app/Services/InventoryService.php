<?php

namespace App\Services;

use App\Contracts\InventoryServiceInterface;
use App\Repositories\CsvDataRepository;

class InventoryService implements InventoryServiceInterface
{
    /**
     * @property CsvDataRepository
     */
    private $repository;

    /**
     * InventoryService constructor.
     *
     * @param CsvDataRepository $repository
     */
    public function __construct(CsvDataRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get records
     *
     * @return mixed
     */
    public function getRecords()
    {
        return $this->repository->getData('data.csv');
    }
}