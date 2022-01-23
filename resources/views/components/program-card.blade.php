<div class="my-4 py-10 justify-center items-center">
    <p class="text-center text-xl text-sky-600 font-bold">All Classes</p>
</div>

<div class="justify-center px-10 py-10 bg-white grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
    @forelse ($programs as $program)

    <div class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 border-b-2 border-orange-500">

        <div class="py-4 px-4 bg-white">
            <h3 class="text-sm font-semibold text-gray-500">{{$program->grade->name}}</h3>

            <div class="mt-2">
                <p class="text-lg font-thin text-center"> {{$program->subject->name}}</p>
            </div>

            <div class="mt-2">
                <span class="text-sm text-sky-600">Instructor by : </span>
                <p class="text-md">{{$program->teacher->fullName}}</p>
            </div>

            <div class="mt-2">
                <span class="text-sm text-sky-600">Start at :</span>
                <p class="text-md text-center">{{$program->start_at->toDayDateTimeString()}}</p>
            </div>

            @unlessrole('teacher|admin')
            <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                <input type="hidden" name="program_id" value="{{ $program->getRouteKey() }}">
                <span class="flex item-center justify-center mt-4">
                    <button type="submit" class="font-semibold text-gray-800 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">Subscribe</button>
                </span>
            </form>
            @endunlessrole
        </div>
    </div>
    @empty
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
        <strong class="font-bold">oops!</strong>
        <span class="block sm:inline">Still no class. Coming Soon!</span>
    </div>
    @endforelse
</div>

<div class="px-5 py-5 bg-gray-100 border-t flex flex-col xs:flex-row items-center xs:justify-between">
    {{ $programs->links() }}
</div>
