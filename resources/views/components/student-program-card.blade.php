<div class="px-10 py-20 justify-center bg-white grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
    @forelse ($subscribes as $subscribe)

    <div class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500">
        <div class="py-4 px-4 bg-white">
            <h3 class="text-sm font-semibold text-gray-500">{{$subscribe->program->grade->name}}</h3>

            <div class="mt-2">
                <p class="text-lg font-thin text-center"> {{$subscribe->program->subject->name}}</p>
            </div>

            <div class="mt-2">
                <span class="text-sm text-sky-600">Instructor by : </span>
                <p class="text-md">{{$subscribe->program->teacher->fullName}}</p>
            </div>

            <div class="mt-2">
                <span class="text-sm text-sky-600">Start at :</span>
                <p class="text-center">{{$subscribe->program->start_at->toDayDateTimeString()}}</p>
            </div>

            <span class="flex item-center justify-center mt-4">
                <a href="{{route('un.subscribe', $subscribe->getRouteKey())}}" class="text-center font-semibold text-gray-800 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">Un Subscribe</a>
            </span>
        </div>
    </div>
    @empty
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
        <strong class="font-bold">oops!</strong>
        <span class="block sm:inline">No classes have been subscribed yet.</span>
    </div>
    @endforelse
</div>
