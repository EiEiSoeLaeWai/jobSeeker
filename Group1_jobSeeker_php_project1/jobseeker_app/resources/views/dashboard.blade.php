<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <br>
                    @if(auth()->check() && auth()->user()->role_id == 1)
                    <div>
                        <a href="{{ route('company.index') }}">Go to Admin Page</a>
                    </div>
                    @elseif(auth()->check() && auth()->user()->role_id == 2)
                    <div>
                        <a href="{{ route('company_user.index') }}">Go to User Resource</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
