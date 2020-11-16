<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;

/**
 * Trait CsvReader
 * @package App\Traits
 */
trait CsvReader
{
    /**
     * @param $path
     * @return mixed
     */
    public function read($path)
    {
        $path = Storage::disk('public')
            ->path($path);
        $csv = Reader::createFromPath($path, 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        return $records;
    }
}