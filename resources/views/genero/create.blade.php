<x-app-layout>

    <form method="POST" action="{{ route('genero.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="cod_genero" :value="__('Codigo')" />
            <x-text-input id="cod_genero" class="block mt-1 w-full" type="text" name="cod_genero" :value="old('cod_genero')"  />
            <x-input-error :messages="$errors->get('cod_genero')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="des_genero" :value="__('Descripcion')" />
            <x-text-input id="des_genero" class="block mt-1 w-full" type="text" name="des_genero" :value="old('des_genero')" />
            <x-input-error :messages="$errors->get('des_genero')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>