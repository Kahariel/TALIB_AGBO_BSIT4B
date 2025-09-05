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
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="text" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Role</span>
                        <input type="text" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1" value="{{ $user->role }}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Created At</span>
                        <input type="text" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1" value="{{ $user->created_at }}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Updated At</span>
                        <input type="text" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1" value="{{ $user->updated_at }}" disabled>
                    </div>
                    <a class="btn btn-secondary" href="{{ route('users') }}" role="button">Go Back</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>