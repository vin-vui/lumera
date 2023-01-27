<x-guest-layout>

    <h1>Styleguide</h1>

    @foreach (App\Models\CaseStudy::all() as $case)
        {{ $case->title }}

        <img class="" src="{{ Storage::disk('uploads')->url($case->logo) }}" alt="">

        {{ $case->description }}

        @foreach ($case->tags as $tag)
            {{ $tag->label }}
        @endforeach
    @endforeach

</x-guest-layout>
