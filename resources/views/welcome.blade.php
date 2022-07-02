<x-app-layout>
    <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">Crece con los nuevos cursos online</span>
                <span class="block text-red-600 xl:inline">100% practico</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                fugiat veniam occaecat fugiat aliqua.</p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-end">
                <div class="rounded-md shadow">
                    <a href="{{ route('courses.index') }}"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                        Empieza ya </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="{{ route('register') }}"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-rose-700 bg-rose-100 hover:bg-rose-200 md:py-4 md:text-lg md:px-10">
                        Registrate YA!! </a>
                </div>
            </div>
        </div>

        <div class="mt-16 py-4 border-t-2 border-gray-600">
            <h1 class="text-center font-semibold text-2xl">CURSOS DISPONIBLES</h1>
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($courses as $course)
                    <article class="card flex flex-col">
                        <img class="h-36 w-full object-cover" src="{{asset('img/foto.jpg') }}"
                            alt="">
                        <div class="card-body flex-1 flex flex-col">
                            <h1 class="card-title">{{ Str::limit($course->title, 35) }}</h1>
                            <p class="text-gray-500 text-sm mb-2 mt-auto">Prof: {{ $course->teacher->name }}
                                {{ $course->teacher->lastname }}</p>
                            <div class="flex">
                                <ul class="flex text-sm">
                                    <li class="mr-1"><i
                                            class="fas fa-star text-{{ $course->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1"><i
                                            class="fas fa-star text-{{ $course->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1"><i
                                            class="fas fa-star text-{{ $course->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1"><i
                                            class="fas fa-star text-{{ $course->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                    <li class="mr-1"><i
                                            class="fas fa-star text-{{ $course->rating == 5 ? 'yellow' : 'gray' }}-400"></i>
                                    </li>
                                </ul>
                                <p class="text-sm text-gray-500 ml-auto">
                                    <i class="fas fa-users"></i>
                                    ({{ $course->students_count }})
                                </p>
                            </div>
                            @if ($course->price->value == 0)
                                <p class="my-2 text-green-600 font-bold">GRATIS!!!</p>
                            @else
                                <p class="my-2 text-gray-500 font-bold">US$ {{ $course->price->value }}</p>
                            @endif

                            <a href="{{ route('courses.show', $course) }}"
                                class="bg-red-600 p-2 w-full rounded text-white text-center font-bold">
                                Ver Curso
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

</x-app-layout>
