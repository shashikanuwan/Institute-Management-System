<section class="antialiased px-4 mt-6">
    <div class="flex flex-col justify-center h-full">
        <div class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">All Classes</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Teacher Detail</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Grade / Subject</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Start At</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Update</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Delete</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y">
                            @forelse ($programs as $program)
                            <tr>
                                <td class="p-2 ">
                                    <div class="">
                                        <div class="font-medium">Full Name : {{$program->teacher->full_name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="">{{$program->grade->name}}</div>
                                    <div class="">{{$program->subject->name}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">{{$program->start_at->format('M d ,Y  h:i a')}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{route('program.edit', $program)}}" class="font-medium text-violet-600">Update</a>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <form action="{{route('program.destroy', $program)}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="font-medium text-rose-600">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                <strong class="font-bold">oops!</strong>
                                <span class="block sm:inline">Classes have not yet been created</span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
