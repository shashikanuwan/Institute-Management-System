<div class="px-10 py-20 bg-gray-100 grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
    @forelse ($programs as $program)

    <div class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500">
        <div>
            <img src="https://www.apple.com/newsroom/images/product/mac/standard/Apple_MacBook-Pro_16-inch-Screen_10182021_big_carousel.jpg.large.jpg" alt="" />
        </div>
        <div class="py-4 px-4 bg-white">
            <h3 class="text-sm font-semibold text-gray-500">{{$program->grade->name}}</h3>

            <div class="mt-2 items-center justify-center">
                <span class="text-sm">Subject :</span>
                <p class="text-lg font-thin"> {{$program->subject->name}}</p>
            </div>

            <div class="mt-2 items-center justify-center">
                <span class="text-sm">Instructor by : </span>
                <p>{{$program->teacher->first_name}} {{$program->teacher->last_name}}</p>
            </div>

            <div class="mt-2">
                <span class="text-sm text-sky-600">Start at :</span>
                <p class="text-center">{{$program->start_date_time->toDayDateTimeString()}}</p>
            </div>

            <span class="flex item-center justify-center mt-4 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">
                <button type="button" class="font-semibold text-gray-800">Subscribe</button>
            </span>
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
