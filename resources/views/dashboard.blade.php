<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

            {{-- @dd(auth()->user()->hasAnyPermission(['edit articles', 'publish articles', 'unpublish articles'])) --}}
               
            @can('edit articles')
                <a href="#">Edit</a> <br>
            @endcan

            @can('delete articles')
                <a href="#">Delete</a> <br>
            @endcan

            @can('publish articles')
                <a href="#">Publish</a> <br>
            @endcan

            @can('unpublish articles')
                <a href="#">Unpublish</a> <br>
            @endcan
               
               
            </div>
        </div>
    </div>
</x-app-layout>
