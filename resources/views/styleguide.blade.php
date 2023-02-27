<x-guest-layout>

    <div class="g-container">
        <div class="g-row -c1 -pc1 mgb-3">
            <h1>Styleguide</h1>
        </div>
        <div class="g-row -c1 -pc1 -gc0">
            <h2>Grid</h2>
            <hr>
        </div>
        <div class="g-row -c12 mgb-1">
            @for ($i = 0; $i < 12; $i++)
                <div class="{{ $i % 2 == 0 ? 'bg-cgray' : 'bg-cgraydark' }}">
                    &nbsp;
                    <br>
                    <br>
                </div>
            @endfor
        </div>
        <div class="g-row -c11 -pc1 mgb-1">
            @for ($i = 0; $i < 11; $i++)
                <div class="{{ $i % 2 == 0 ? 'bg-cgraydark' : 'bg-cgray' }}">
                    &nbsp;
                    <br>
                    <br>
                </div>
            @endfor
        </div>
        <div class="g-row -c5 -pc1 -gc3 mgb-1">
            @for ($i = 0; $i < 5; $i++)
                <div class="bg-cgray">
                    &nbsp;
                    <br>
                    <br>
                </div>
            @endfor
        </div>
        <div class="g-row -c4 -pc1 -gc2 mgb-1">
            @for ($i = 0; $i < 4; $i++)
                <div class="bg-cgray">
                    &nbsp;
                    <br>
                    <br>
                </div>
            @endfor
        </div>
        <div class="g-row -c3 -pc1 -gc2 mgb-1">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-cgray">
                    &nbsp;
                    <br>
                    <br>
                </div>
            @endfor
        </div>
        <div class="g-row -c2 -pc1 -gc1 mgb-1">
            @for ($i = 0; $i < 2; $i++)
                <div class="bg-cgray">
                    &nbsp;
                    <br>
                    <br>
                </div>
            @endfor
        </div>
        <div class="g-row -c1 -pc1 -gc0">
            <h2>Typography</h2>
            <hr>
        </div>
        <div class="g-row -c1 -pc1">
            <h1>Title 1</h1>
            <h2>Title 2</h2>
            <h3>Title 3</h3>
            <h4>Title 4</h4>
            <h5>Title 5</h5>
            <h6>Title 6</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, magnam. Praesentium, optio amet <strong>laudantium</strong> numquam fugiat nulla, qui <a href="#">explicabo natus</a> quia dolorem quisquam officiis consequatur incidunt cum voluptatem, inventore culpa?</p>
            <ul>
                <li>item a</li>
                <li>item b</li>
                <li>item c</li>
            </ul>
            <ol>
                <li>item 1</li>
                <li>item 2</li>
                <li>item 3</li>
            </ol>
        </div>
    </div>

    <div class="g-container mgb-3">
        <div class="g-row -c1 -pc1 -gc0">
            <h2>Colors</h2>
            <hr>
        </div>
        <div class="g-row -c4 -pc1 -gc1">
            <div class="bg-corange text-cwhite text-center pgy-1">
                <span class="a-text">
                    Orange
                    <br>
                    #F39143
                </span>
            </div>
            <div class="bg-cred text-cwhite text-center pgy-1">
                <span class="a-text">
                    Red
                    <br>
                    #EF675E
                </span>
            </div>
            <div class="bg-cblue text-cwhite text-center pgy-1">
                <span class="a-text">
                    Blue
                    <br>
                    #EF675E
                </span>
            </div>
            <div class="bg-cpurple text-cwhite text-center pgy-1">
                <span class="a-text">
                    Purple
                    <br>
                    #555ADB
                </span>
            </div>
            <div class="bg-cgraydark text-cwhite text-center pgy-1">
                <span class="a-text">
                    Gray Dark
                    <br>
                    #575757
                </span>
            </div>
            <div class="bg-cgray text-center pgy-1">
                <span class="a-text">
                    Gray
                    <br>
                    #F4F4F4
                </span>
            </div>
            <div class="bg-cblack text-cwhite text-center pgy-1">
                <span class="a-text">
                    Black
                    <br>
                    #000
                </span>
            </div>
            <div class="bg-cwhite text-center pgy-1">
                <span class="a-text">
                    White
                    <br>
                    #FFF
                </span>
            </div>
        </div>
    </div>

    <div class="g-container">
        <div class="g-row -c1 -pc1 -gc0">
            <h2>Buttons</h2>
            <hr>
        </div>
        <div class="g-row -c3 -pc1 -gc1 mgb-3">
            <div>
                <a href="#" class="a-button -primary">Button primary</a>
            </div>
            <div>
                <a href="#" class="a-button -secondary">Button secondary</a>
            </div>
        </div>
        <div class="g-row -c3 -pc1 -gc1">
            <div>
                <a href="#" class="a-button -round"><span>Button round</span></a>
            </div>
            <div>
                <a href="#" class="a-button -round -big"><span>Button <br>round <br>big</span></a>
            </div>
            <div>
                <a href="#" class="a-button -round -small"><span>Btn round small</span></a>
            </div>
        </div>
    </div>

    @foreach (App\Models\CaseStudy::all() as $case)
        {{ $case->title }}

        <img class="" src="{{ Storage::disk('uploads')->url($case->logo) }}" alt="">

        {{ $case->description }}

        @foreach ($case->tags as $tag)
            {{ $tag->label }}
        @endforeach
    @endforeach

</x-guest-layout>
