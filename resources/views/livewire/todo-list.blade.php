<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div>
    <h2>Lista de Tarefas</h2>

    <ul>
        @foreach ($$provincies as $p)
            <li>{{ $p->name }}</li>
        @endforeach
    </ul>

    <input wire:model="newProvince" type="text" placeholder="new Province"/>
    <button wire:click="addProvince">Add Province</button>
</div>

</div>
