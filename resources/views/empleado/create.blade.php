<x-app-layout>


    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Nuevo Empleado</h2>
    <form action="{{ route('empleado.store') }}" method="POST">
        @csrf
        <div class="grid gap-3 sm:grid-cols-3">
            <div class="w-full">
                <x-input-label for="cedula" :value="__('Cedula')" />
                <x-text-input id="cedula" class="block mt-1 w-full" type="text" name="cedula" :value="old('cedula')" />
                <x-input-error :messages="$errors->get('cedula')" class="mt-2" />
            </div>
        </div>


        <div class="grid gap-2 sm:grid-cols-2">

            <div class="w-full">
                <x-input-label for="primer_nombre" :value="__('Primer Nombre')" />
                <x-text-input id="primer_nombre" class="block mt-1 w-full" type="text" name="primer_nombre"
                    :value="old('primer_nombre')" />
                <x-input-error :messages="$errors->get('primer_nombre')" class="mt-2" />
            </div>
            <div class="w-full">
                <x-input-label for="segundo_nombre" :value="__('Segundo Nombre')" />
                <x-text-input id="segundo_nombre" class="block mt-1 w-full" type="text" name="segundo_nombre"
                    :value="old('segundo_nombre')" />
                <x-input-error :messages="$errors->get('segundo_nombre')" class="mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="primer_apellido" :value="__('Primer Apellido')" />
                <x-text-input id="primer_apellido" class="block mt-1 w-full" type="text" name="primer_apellido"
                    :value="old('primer_apellido')" />
                <x-input-error :messages="$errors->get('primer_apellido')" class="mt-2" />
            </div>
            <div class="w-full">
                <x-input-label for="segundo_apellido" :value="__('Segundo Apellido')" />
                <x-text-input id="segundo_apellido" class="block mt-1 w-full" type="text" name="segundo_apellido"
                    :value="old('segundo_apellido')" />
                <x-input-error :messages="$errors->get('segundo_apellido')" class="mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="genero_id" :value="__('Genero')" />
                <select name="genero_id" id=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="#" selected disabled>SELECCIONAR UNA OPCION</option>
                    @foreach ($generos as $g)
                        <option  value="{{ $g->id }}">{{ $g->des_genero }}</option>
                    @endforeach

                </select>
                <x-input-error :messages="$errors->get('genero_id')" class="mt-2" />

            </div>

            <div class="w-full">
                <x-input-label for="cargo_id" :value="__('Cargo')" />
                <select name="cargo_id" id=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled value="#">SELECCIONAR UNA OPCION</option>
                    @foreach ($cargos as $c)
                        <option value="{{ $c->id }}">{{ $c->des_cargo }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('cargo_id')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>

    </form>

</x-app-layout>
