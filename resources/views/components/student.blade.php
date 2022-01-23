<section class="antialiased px-4 mt-6">
    <div class="flex flex-col justify-center h-full">
        <div class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">All Students</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">User Detail</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">User Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Registered At</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Subscriptions</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y">
                            @forelse ($users as $user)
                            <tr>
                                <td class="p-2 ">
                                    <div class="">
                                        <div class="font-medium">Full Name : {{$user->full_name}}</div>
                                        <div class="font-medium text-gray-800">NIC : {{$user->nic}}</div>
                                        <div class="font-medium text-gray-800">DOB : {{$user->dob}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="">{{$user->user_name}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">{{$user->created_at->format('M d ,Y - h:i a')}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{route('student.subscribe', $user)}}" class="font-medium text-lime-600">View</a>
                                </td>
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                <strong class="font-bold">oops!</strong>
                                <span class="block sm:inline">Students are not yet registered</span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-6">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
