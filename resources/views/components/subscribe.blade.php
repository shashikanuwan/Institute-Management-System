<nav class="px-6 mt-10 text-sm text-gray-500">
    <ol class="flex items-center">
        <li class="inline-flex items-center">
            <a href="{{route('admin.dashboard')}}" class="underline">Dashboard</a>
            <span class="px-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>
        </li>

        <li>
            Student Subscribe
        </li>
    </ol>
</nav>

<section class="antialiased px-4 mt-6">
    <div class="flex flex-col justify-center h-full">
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">All Students</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Teacher Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Grade / Subject</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Aubscribe At</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-500">
                            @forelse ($subscribes as $subscribe)
                            <tr>
                                <td class="p-2 ">
                                    <div class="">
                                        <div class="font-medium">{{$subscribe->program->teacher->full_name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium text-gray-800">{{$subscribe->program->grade->name}}</div>
                                    <div class="font-medium text-gray-800">{{$subscribe->program->subject->name}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">{{$subscribe->created_at->format('M d ,Y - h:i a')}}</div>
                                </td>
                            </tr>
                            @empty
                            <div>
                                The student has not subscribed to any class
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
