<div class="flex mx-3 justify-center mt-6 sm:px-6 lg:px-8">
    <div>
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
            <p class="mt-6 text-center text-xl font-extrabold text-gray-900">
                Create a New Class
            </p>
        </div>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-alart class="mt-4" />

        <div>
            <form class="mt-8 space-y-6" action="{{route('program.store')}}" method="POST">
                @csrf
                <div class="md:grid md:grid-cols-3 gap-6 mt-4">
                    <div class="mt-5 md:mt-2">
                        <label for="">Start Date</label>
                        <input id="start_at" name="start_at" type="dateTime-local" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required>
                    </div>

                    <div class="mt-5 md:mt-2">
                        <label for="">Teacher</label>
                        <select name="user_id" id="user_id" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required>
                            <option selected disabled>Select Teacher</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->full_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-5 md:mt-2">
                        <label for="">Grade</label>
                        <select name="grade_id" id="grade_id" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required>
                            <option selected disabled>Select garade</option>
                            @foreach ($garades as $garade)
                            <option value="{{ $garade->id }}">
                                {{ $garade->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-5 md:mt-2">
                        <label for="">Subject</label>
                        <select name="subject_id" id="subject_id" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required>
                            <option selected disabled>Select subject</option>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">
                                {{ $subject->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create Class
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
