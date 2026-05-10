<?php
namespace App\Filament\Resources\WorkPostResource\Pages;
use App\Filament\Resources\WorkPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
class ListWorkPosts extends ListRecords {
    protected static string $resource = WorkPostResource::class;
    protected function getHeaderActions(): array { return [Actions\CreateAction::make()->label('+ Posting Hasil Pekerjaan')]; }
}
