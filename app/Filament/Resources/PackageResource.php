<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationLabel = 'Paket';
    protected static ?string $pluralLabel = 'Paket';
    protected static ?string $modelLabel = 'Paket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Paket')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->label('Nama Paket')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('price')
                            ->label('Harga')
                            ->numeric()
                            ->prefix('Rp')
                            ->required(),

                        Forms\Components\Select::make('type')
                            ->label('Kategori Paket')
                            ->options([
                                'hemat' => 'Hemat',
                                'populer' => 'Populer',
                                'premium' => 'Premium',
                                'event' => 'Event',
                            ])
                            ->required(),

                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->directory('packages')
                            ->imageEditor()
                            ->required(),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Best Seller')
                            ->default(false),

                    ]),

                Forms\Components\Section::make('Fitur Paket')
                    ->schema([

                        Forms\Components\Repeater::make('features')
                            ->label('Daftar Fitur')
                            ->schema([
                                Forms\Components\TextInput::make('text')
                                    ->label('Fitur')
                                    ->required(),
                            ])
                            ->addActionLabel('Tambah Fitur')
                            ->reorderable()
                            ->required(),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->square(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Paket')
                    ->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('type')
                    ->label('Kategori')
                    ->colors([
                        'success' => 'hemat',
                        'warning' => 'populer',
                        'primary' => 'premium',
                        'danger' => 'event',
                    ]),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Best Seller')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([

                Tables\Filters\SelectFilter::make('type')
                    ->label('Filter Kategori')
                    ->options([
                        'hemat' => 'Hemat',
                        'populer' => 'Populer',
                        'premium' => 'Premium',
                        'event' => 'Event',
                    ]),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Best Seller'),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}