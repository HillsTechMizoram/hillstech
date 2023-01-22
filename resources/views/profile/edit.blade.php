{{-- @extends('layouts.app')

@section('content') --}}
<x-app-layout>

    {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot> --}}


    <div class="row">
        <div class="col-12 grid-margin">
            <div class="">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="col-12">
            <div class="">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        {{-- <div class="col-12">
            <div class="">
                @include('profile.partials.delete-user-form')
            </div>
        </div> --}}
    </div>

</x-app-layout>
{{-- <p class="text-white">This is edit</p> --}}
{{-- @endsection --}}
