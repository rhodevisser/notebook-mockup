<x-layout>

        @if($ideas->count())
            <div class="mt-6 text-white">
                <h2 class="font-bold ">
                    Your ideas:
                </h2>

                <ul class="mt-5">
                    @foreach($ideas as $idea)
                        <li>
                            <a
                                href="/ideas/{{ $idea->id }}"
                                class="text-sm">
                                {{ $idea->description }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @else
            <p>
                You have no ideas yet!
                <a
                    href="/ideas/create"
                    class="text-blue-500 underline">
                    Create your idea here...
                </a>
            </p>
        @endif

</x-layout>
