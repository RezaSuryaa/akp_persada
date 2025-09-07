<?php

namespace App\Filament\Resources\KategoriAlatResource\Pages;

use App\Filament\Resources\KategoriAlatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriAlat extends CreateRecord
{
    protected static string $resource = KategoriAlatResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); 
    }
}
