@extends('dashboard.layouts.master')

@section('admin-content')
    @if (Session::has('success'))
        <div class="rounded-md bg-green-50 pl-12 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/check-circle -->

                </div>
                <div class="ml-3">
                    <div class="mt-2 text-sm text-green-800">
                        <p> {{ Session::get('success') }}</p>
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="rounded-md bg-red-50 pl-12 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/x-circle -->
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Whoops! There were some problems with your input.</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"
        class="space-y-8 divide-y divide-gray-200 p-12">
        @csrf
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Create a User</h3>
                </div>
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> First name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {!! Form::text('first_name', null, [
                                'placeholder' => 'First Name',
                                'class' =>
                                    'block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                            ]) !!}
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Last name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {!! Form::text('last_name', null, [
                                'placeholder' => 'Last Name',
                                'class' =>
                                    'block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                            ]) !!}
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Email
                            address </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {!! Form::text('email', null, [
                                'placeholder' => 'Email',
                                'class' =>
                                    'block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                            ]) !!}
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="roles" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Role
                        </label>
                        {!! Form::select(
                            'roles[]',
                            $roles,
                            [],
                            [
                                'class' =>
                                    'block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md with-border',
                                'multiple',
                            ],
                        ) !!}
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Password
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {!! Form::text('password', null, [
                                'placeholder' => 'Password',
                                'class' =>
                                    'block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                            ]) !!}

                            {{-- <input id="password" name="password" type="password" autocomplete="password"
                                class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md"> --}}
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Confirm
                            Password </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {!! Form::text('confirm-password', null, [
                                'placeholder' => 'Confirm Password',
                                'class' =>
                                    'block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                            ]) !!}

                            {{-- <input id="password" name="password" type="password" autocomplete="password"
                                class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md"> --}}
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
        </div>
    </form>
@endsection
