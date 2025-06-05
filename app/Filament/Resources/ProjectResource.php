<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'phosphor-suitcase-duotone';

    protected static ?string $activeNavigationIcon = 'phosphor-suitcase-fill';

    protected static ?string $navigationLabel = 'Projects';

    protected static ?string $navigationGroup = 'Apps';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->onIcon('phosphor-check-circle-duotone')
                    ->offIcon('phosphor-x-circle-duotone')
                    ->inline(false)
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('tech')
                    ->options([
                        'Laravel' => 'Laravel',
                        'Bootstrap' => 'Bootstrap',
                        'TailwindCSS' => 'TailwindCSS',
                        'NextJs' => 'NextJs',
                        'VueJs' => 'VueJs',
                        'Codeigniter' => 'Codeigniter',
                        'Filament' => 'Filament',
                        'ReactJs' => 'ReactJs',
                        'NodeJs' => 'NodeJs',
                        'TelegramApi' => 'TelegramApi',
                        'Firebase' => 'Firebase',
                        'MySql' => 'MySql',
                        'PostgreeSql' => 'PostgreeSql',
                    ])
                    ->required()
                    ->multiple()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('github_url')
                    ->label('Link Github'),
                Forms\Components\TextInput::make('demo_url')
                    ->label('Link Demo'),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('github_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('demo_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
