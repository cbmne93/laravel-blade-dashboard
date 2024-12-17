<x-app-layout>

    <form method="POST" action="{{ route('cargo.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="des_cargo" :value="__('Codigo')" />
            <x-text-input id="des_cargo" class="block mt-1 w-full" type="text" name="des_cargo" :value="old('des_cargo')" />
            <x-input-error :messages="$errors->get('des_cargo')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>
