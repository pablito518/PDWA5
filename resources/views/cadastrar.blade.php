<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="/cadastrar">
        @csrf

        <!-- Brand -->
        <div>
            <x-input-label for="brand" :value="__('Brand')" />
            <x-text-input id="brand" class="block mt-1 w-full" type="text" name="brand" :value="old('brand')" required autofocus autocomplete="brand" />
            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
        </div>

        <!-- Color -->
        <div class="mt-4">
            <x-input-label for="color:" :value="__('Color')" />
            <x-text-input id="color" class="block mt-1 w-full" type="text" name="color" :value="old('color')" required autocomplete="color" />
            <x-input-error :messages="$errors->get('color')" class="mt-2" />
        </div>

         <!-- Style -->
        <div class="mt-4">
            <x-input-label for="style:" :value="__('Style')" />
            <x-text-input id="style" class="block mt-1 w-full" type="text" name="style" :value="old('style')" required autocomplete="style" />
            <x-input-error :messages="$errors->get('style')" class="mt-2" />
        </div>


        <!-- Material -->
        <div class="mt-4">
            <x-input-label for="material:" :value="__('Material')" />
            <x-text-input id="material" class="block mt-1 w-full" type="text" name="material" :value="old('material')" required autocomplete="material" />
            <x-input-error :messages="$errors->get('material')" class="mt-2" />
        </div>

         <!-- Price -->
         <div class="mt-4">
            <x-input-label for="price" :value="__('Price')" />

            <x-text-input id="price" class="block mt-1 w-full"
                            type="number"
                            name="price"
                            any="any"
                            pattern="[0-9]+([\.,][0-9]+)?" 
                            step="0.01"
                            required autocomplete="price" />

            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>                </div>
            </div>
        </div>
    </div>
</x-app-layout>
