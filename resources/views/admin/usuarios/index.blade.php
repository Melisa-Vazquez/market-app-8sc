<x-admin-layout title="Roles | Healthify" :breadcrumbs="[

    ['name' => 'Dashboard',
        'href' => route('admin.dashboard')
        ],

    ['name' => 'Usuarios'
    
    ],
    
    ]">
<x-slot name="action">
    
    <x-wire-button blue href="{{ route('admin.usuarios.create') }}" >
       
        <i class="fa-solid fa-plus text-sm"></i>
        Nuevo
    
</x-wire-button>

   </x-slot>



    
</x-admin-layout>