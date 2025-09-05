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
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" value="{{ $user->name }}" name="name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" value="{{ $user->email }}" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Role</label>
                            <select class="form-select" id="inputGroupSelect01" name="role">
                                @if ($user->role == 'user')
                                    <option value="user" selected>User</option>
                                    <option value="admin">Admin</option>
                                @elseif ($user->role == 'admin')
                                    <option value="user">User</option>
                                    <option value="admin" selected>Admin</option>
                                @endif
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" value="" name="password" placeholder="Enter here">
                        </div>
                        <div class="gap-3">
                            <a class="btn btn-secondary" href="{{ route('users') }}" role="button">Go Back</a>
                            <button type="submit" class="btn btn-success">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>