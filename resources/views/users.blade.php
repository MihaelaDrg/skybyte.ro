<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hub') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("These are the users ") }}
{{--                    @dd($users)--}}
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nume user</th>
                                <th>Tip user</th>
                                <th>Creat la data</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->userType}}</td>
                            <td>{{\Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
