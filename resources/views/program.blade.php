<x-guest-layout>
    <x-admin-navigation />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart class="mt-4" />

    <div>
        <a href="{{route('program.create')}}" class="rounded-md border-rose-500">Create Class</a>
    </div>

    <x-fetch-program />
</x-guest-layout>
