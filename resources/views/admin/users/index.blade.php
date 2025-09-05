<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="usersTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <a class="btn btn-primary" href="{{ route('user.show', ['id' => $user->id]) }}"
                                                role="button">View</a>
                                            <a class="btn btn-warning" href="{{ route('user.edit', ['id' => $user->id]) }}"
                                                role="button">Edit</a>
                                            <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                                class="d-inline-block" onsubmit="return confirm('Remove User?')">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#usersTable').dataTable({
        })
    </script>
</x-app-layout>