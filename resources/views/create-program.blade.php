<x-guest-layout>

    <nav class="px-6 mt-10 text-sm text-gray-500">
        <ol class="flex items-center">
            <li class="inline-flex items-center">
                <a href="{{route('program.index')}}" class="underline">Class</a>
                <span class="px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            </li>

            <li>
                Create Class
            </li>
        </ol>
    </nav>

    <x-create-program />
</x-guest-layout>
