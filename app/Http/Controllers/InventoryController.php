<?php

namespace App\Http\Controllers;

use App\Services\InventoryService;

class InventoryController extends Controller
{
    /**
     * @property InventoryService
     */
    private $service;

    /**
     * InventoryController constructor.
     * @param InventoryService $service
     */
    public function __construct(InventoryService $service)
    {
        $this->service = $service;
    }

    public function show()
    {
        $records = $this->service->getRecords();

        return view('welcome', compact('records'));
    }
}
