@extends('dashboard.layouts.master')

@section('admin-content')

    <div class="px-4 mt-5 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Grades</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the events of NextGen Publication items including the
                    image, title and description.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('grades.create') }}"> <button type="button"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                        Grade</button></a>
            </div>
        </div>
        @if (Session::has('success'))
            <div class="rounded-md bg-green-100 pl-12 p-8">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <div class="mt-1 text-sm text-gray-800">
                            <p class="font-bold">{{ Session::get('success') }}
                            </p>
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


        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Name</th>



                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($grades as $grade)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-md  font-semibold text-gray-900 sm:pl-6">
                                            {{ ++$i }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-md font-semibold text-black">
                                            {{ $grade->name }}
                                        </td>



                                        <td
                                            class="flex flex-row items-center justify-end relative  whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            @can('grade-edit')
                                                <a href="{{ route('grades.edit', $grade->id) }}"
                                                    class=" bg-green-400 mx-2 py-2 rounded-md shadow-sm text-white hover:text-indigo-900 text-md px-5 ">Edit</a>
                                            @endcan
                                            @can('grade-delete')
                                                <form id="delete_form" action="{{ route('grades.destroy', $grade->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" id="delete-btn"
                                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete
                                                    </button>
                                                </form>
                                            @endcan

                                        </td>
                                    </tr>
                                @endforeach

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-js')
@endsection
