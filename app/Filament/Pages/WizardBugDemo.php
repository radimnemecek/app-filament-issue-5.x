<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Components\Wizard\Step;

class WizardBugDemo extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-bug-ant';

    protected static ?string $title = 'Wizard Bug Demo';

    protected static string $view = 'filament.pages.wizard-bug-demo';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('wizardTest')
                ->label('Open Wizard')
                ->steps([
                    Step::make('Step 1')
                        ->schema([
                            TextInput::make('field_1')
                                ->label('Field 1')
                                ->required(),
                        ]),
                    Step::make('Step 2')
                        ->schema([
                            TextInput::make('field_2')
                                ->label('Field 2')
                                ->required(),
                        ]),
                    Step::make('Step 3')
                        ->schema([
                            TextInput::make('field_3')
                                ->label('Field 3')
                                ->required(),
                        ]),
                ])
                ->action(fn (array $data) => null),
        ];
    }
}
