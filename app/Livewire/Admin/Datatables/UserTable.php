<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserTable extends DataTableComponent
{//SE COMENTA PARA PERSONALIZAR CONSULTA
    //protected $model = User::class;

    //DEFINE EL MODELO Y SU CONSULTA
    public function builder(): Builder
    {
        return User::query()->with('roles');
    }
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Numero de id", "id_number")
                ->sortable(),
            Column::make("Teléfono", "phone")
                ->sortable(),
            Column::make("Rol", "roles")
                ->label(function($row){
                    return $row->roles->first()?->name ??'Sin rol';
                }),
            Column::make("Acciones")
                ->label(function($row){
                    return view('admin.usuarios.actions',
                    ['user'=>$row]);
                    })

        ];
    }
}
