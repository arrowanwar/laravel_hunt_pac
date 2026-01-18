@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 border-b flex justify-between items-center">
            <h3 class="text-lg font-bold text-gray-700">All Users</h3>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add New User</button>
        </div>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="px-6 py-3 text-sm font-medium text-gray-500">ID</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-500">Name</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-500">Email</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-500">Status</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-500 text-right">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <!-- Sample Row -->
                <!-- Table Row -->
                 @foreach ($users as $user )
                 
                
                <tr class="group hover:bg-slate-50 transition-all duration-200">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->id }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full object-cover border-2 border-white shadow-sm"
                                src="https://ui-avatars.com" alt="">
                            <div class="ml-4">
                                <div class="text-sm font-bold text-gray-900">{{ $user->name }}</div>
                                <div class="text-xs text-gray-500">Joined Jan 2026</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                            <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-emerald-500"></span>
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right text-sm font-medium">
                        <div class="flex justify-end gap-3">
                            <!-- Edit Button (Icon with Tooltip effect) -->
                            <a href="#"
                                class="p-2 text-indigo-600 bg-indigo-50 rounded-lg hover:bg-indigo-600 hover:text-white transition-colors shadow-sm"
                                title="Edit User">
                                <svg xmlns="http://www.w3.org" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>

                            <!-- Delete Button (Icon with Tooltip effect) -->
                            <button onclick="confirmDelete()"
                                class="p-2 text-red-600 bg-red-50 rounded-lg hover:bg-red-600 hover:text-white transition-colors shadow-sm"
                                title="Delete User">
                                <svg xmlns="http://www.w3.org" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                 @endforeach

            </tbody>
        </table>

        <div class="p-4 bg-gray-50 border-t">
            <!-- Pagination Links -->
            <div class="flex justify-end space-x-2">
                <button class="px-3 py-1 border rounded bg-white hover:bg-gray-100 text-sm">Previous</button>
                <button class="px-3 py-1 border rounded bg-white hover:bg-gray-100 text-sm">Next</button>
            </div>
        </div>
    </div>
@endsection

