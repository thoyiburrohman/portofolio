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
use Ramsey\Uuid\Type\Decimal;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'phosphor-suitcase-simple-duotone';

    protected static ?string $activeNavigationIcon = 'phosphor-suitcase-simple-fill';

    protected static ?string $navigationLabel = 'Projects';

    protected static ?string $navigationGroup = 'Apps';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('client')
                    ->required(),
                Forms\Components\TextInput::make('revenue')
                    ->required(),
                Forms\Components\DatePicker::make('deadline')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'In Progress' => 'In Progress',
                        'Complete' => 'Complete',
                        'Hold' => 'Hold',
                    ])
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('tech')
                    ->options([
                        'Frontend' => [
                            'HTML' => 'HTML',
                            'CSS' => 'CSS',
                            'javaScript' => 'JavaScript',
                            'bootstrap' => 'Bootstrap',
                            'tailwindCSS' => 'TailwindCSS',
                            'reactJs' => 'ReactJs',
                            'nextJs' => 'NextJs',
                            'flutter' => 'Flutter',
                        ],
                        'Backend' => [
                            'PHP' => 'PHP',
                            'nodeJs' => 'NodeJs',
                            'laravel' => 'Laravel',
                            'codeigniter' => 'Codeigniter',
                        ],
                        'Other' => [
                            'mySql' => 'MySql',
                            'postgreeSql' => 'PostgreeSql',
                            'mongoDB' => 'MongoDB',
                        ],
                    ])
                    ->multiple()
                    ->searchable()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('revenue')
                    ->money('IDR', locale: 'id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deadline')
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'In Progress' => 'In Progress',
                        'Complete' => 'Complete',
                        'Hold' => 'Hold',
                    ])
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
                Tables\Actions\EditAction::make()
                    ->color('warning'),
                Tables\Actions\DeleteAction::make()
                    ->color('danger'),
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
