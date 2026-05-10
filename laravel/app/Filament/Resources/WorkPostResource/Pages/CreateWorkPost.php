<?php
namespace App\Filament\Resources\WorkPostResource\Pages;
use App\Filament\Resources\WorkPostResource;
use Filament\Resources\Pages\CreateRecord;
class CreateWorkPost extends CreateRecord {
    protected static string $resource = WorkPostResource::class;
    protected function getRedirectUrl(): string { return $this->getResource()::getUrl('index'); }
}
