<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('items.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" name="name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Price</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" name="price">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Description</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" name="description">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Quantity</span>
                            <input type="text" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1" name="quantity">
                        </div>
                        <div class="gap-3">
                            <a class="btn btn-secondary" href="{{ route('users') }}" role="button">Go Back</a>
                            <button type="submit" class="btn btn-success">
                                Create
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>