<?php
namespace App\Contracts;

/**
 * Interface InventoryServiceInterface
 * @package App\Contracts
 */
interface InventoryServiceInterface
{
    /**
     * Return records
     *
     * @return mixed
     */
    public function getRecords();
}