<?php
namespace App\Filament\Resources\WorkPostResource\Pages;
use App\Filament\Resources\WorkPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
class EditWorkPost extends EditRecord {
    protected static string $resource = WorkPostResource::class;
    protected function getHeaderActions(): array { return [Actions\DeleteAction::make()]; }
}
