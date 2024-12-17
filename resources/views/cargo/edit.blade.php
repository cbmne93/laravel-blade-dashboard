<x-app-layout>

    <form  class="max-w-sm mx-auto" method="POST" action="{{ route('cargo.update', $cargo) }}">
        @csrf
        @method('PUT')

        
        <div>
            <x-input-label for="des_cargo" :value="__('Descripcion')" />
            <x-text-input id="des_cargo" class="block mt-1 w-full" type="text" name="des_cargo"
                value="{{ old('des_cargo', $cargo->des_cargo) }}" />
            <x-input-error :messages="$errors->get('des_cargo')" class="mt-2" />
        </div>

       <div class="mt-4">
        <x-input-label for="state" :value="__('Estado')" />
        <select name="state" id=""
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option @selected(old('ACTIVO', $cargo->state == 'ACTIVO')) value="ACTIVO">ACTIVO</option>
            <option @selected(old('INACTIVO', $cargo->state == 'INACTIVO')) value="INACTIVO">INACTIVO</option>
        </select>
       </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Actualizar') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>
