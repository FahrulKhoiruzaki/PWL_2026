<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // KIRI (2/3)
                Group::make([
                    Section::make("Post Details")
                        ->description("Fill in the details of the post")
                        ->icon('heroicon-o-document-text')
                        ->schema([
                            Group::make([
                                TextInput::make('title')
                                    ->required()
                                    ->rules(['min:5'])
                                    ->validationMessages([
                                        'min' => 'Title minimal 5 karakter'
                                    ]),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique()
                                    ->rules(['min:3'])
                                    ->validationMessages([
                                        'min' => 'Slug minimal 3 karakter',
                                        'unique' => 'Slug harus unik',
                                    ]),
                                Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->options(Category::all()->pluck("name", "id"))
                                    ->required()
                                    // ->preload()
                                    ->searchable(),
                                ColorPicker::make('color'),
                            ])->columns(2),

                            MarkdownEditor::make("content")
                                ->columnSpanFull(),
                        ]),
                ])->columnSpan(2),

                // KANAN (1/3)
                Group::make([
                    Section::make("Image Upload")
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make("image")
                                ->required()
                                ->disk("public")
                                ->directory("posts"),
                        ]),

                    Section::make("Meta Information")
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            TagsInput::make("tags"),
                            Checkbox::make("published"),
                            DateTimePicker::make("published_at"),
                        ]),
                ])->columnSpan(1),
            ])
            ->columns(3);
    }
}
