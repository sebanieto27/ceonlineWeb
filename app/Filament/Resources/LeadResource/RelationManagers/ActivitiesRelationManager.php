<?php

namespace App\Filament\Resources\LeadResource\RelationManagers;

use App\Models\Activity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class ActivitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'activities';

    protected static ?string $title = 'Historial de actividades';

    protected static ?string $recordTitleAttribute = 'description';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->label('Tipo')
                    ->options([
                        'call'          => '📞 Llamada',
                        'email'         => '✉️ Email',
                        'whatsapp'      => '💬 WhatsApp',
                        'demo'          => '🖥️ Demo',
                        'meeting'       => '🤝 Reunión',
                        'note'          => '📝 Nota',
                        'status_change' => '🔄 Cambio de estado',
                    ])
                    ->required()
                    ->default('call'),

                Forms\Components\Textarea::make('description')
                    ->label('Descripción')
                    ->placeholder('Ej: Llamada de 15 min. Interesado en el plan Pro. Agendamos demo para el jueves.')
                    ->rows(3)
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\DateTimePicker::make('performed_at')
                    ->label('Fecha y hora')
                    ->default(now())
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('description')
            ->defaultSort('performed_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->label('')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'call'          => '📞 Llamada',
                        'email'         => '✉️ Email',
                        'whatsapp'      => '💬 WhatsApp',
                        'demo'          => '🖥️ Demo',
                        'meeting'       => '🤝 Reunión',
                        'note'          => '📝 Nota',
                        'status_change' => '🔄 Estado',
                        default         => $state,
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'call'          => 'info',
                        'email'         => 'primary',
                        'whatsapp'      => 'success',
                        'demo'          => 'warning',
                        'meeting'       => 'warning',
                        'note'          => 'gray',
                        'status_change' => 'danger',
                        default         => 'gray',
                    }),
                Tables\Columns\TextColumn::make('description')
                    ->label('Actividad')
                    ->limit(80)
                    ->tooltip(fn (Activity $record): string => $record->description)
                    ->wrap(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Por')
                    ->placeholder('Sistema')
                    ->badge()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('performed_at')
                    ->label('Fecha')
                    ->dateTime('d/m/Y H:i')
                    ->since()
                    ->sortable(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Registrar actividad')
                    ->icon('heroicon-o-plus')
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['user_id'] = Auth::id();
                        return $data;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->iconButton(),
                Tables\Actions\DeleteAction::make()->iconButton(),
            ])
            ->bulkActions([])
            ->emptyStateHeading('Sin actividades registradas')
            ->emptyStateDescription('Registrá llamadas, emails, demos y notas para hacer seguimiento del lead.')
            ->emptyStateIcon('heroicon-o-phone');
    }
}
