@extends('layouts.main')

@section('title', "Apollo 11")

@section('content')

<main>
    <div class="box101-ap11">
            <div class="box102-ap11">
                <h1>Apollo 11</h1>
                <nav>The primary objective of Apollo 11 was to complete a national goal set by President John F. Kennedy on May 25, 1961: perform a crewed lunar landing and return to Earth.</nav>

                <h2>Apollo 11 Mission Overview</h2>
                <nav>“The Eagle has landed…” Mission Objective The primary objective of Apollo 11 was to complete a national goal set by…</nav>
                <nav>
                    <a href="https://www.nasa.gov/history/apollo-11-mission-overview/" target="_blank">
                        Read The Story
                        <img src="{{ asset('image/more.png')}}" class="new-tab-click">
                    </a>
                </nav>
            </div>
            <div class="ap11-short">
                <div class="ap11-mission">
                    <h3>Mission Type</h3>
                    <nav>Lunar Landing</nav>
                </div>
                <div class="ap11-start">
                    <h3>Launch</h3>
                    <nav>July 16, 1969</nav>
                </div>
                
                <div class="ap11-end">
                    <h3>Splashdown</h3>
                    <nav>July 24, 1969</nav>
                </div>
            </div>
    </div>
    <div class="box201-ap11">
        <div class="astro-bg01">
            <div class="ap11-astro">
                <div class="astro-detail">
                    <h1>Neil Armstrong</h1>
                    <h2>First human to set foot on the Moon.</h2>
                    <nav>Neil A. Armstrong is probably best known as the commander for the Apollo 11 mission. He joined NASA’s predecessor, the NACA, as an aeronautical research scientist and pilot in 1955. Armstrong was one of nine men chosen of NASA’s second astronaut group in 1962, and flew to space on the Gemini 8 mission in 1966 before being assigned to the Apollo 11 mission.</nav>
                    <nav>
                        <a href="https://www.nasa.gov/humans-in-space/astronauts/former-astronauts/former-astronaut-neil-a-armstrong/" target="_blank">
                            Read About Neil Armstrong
                            <img src="{{ asset('image/more.png')}}" class="tab-astro">
                        </a>
                    </nav>
                </div>
                <div class="astro-img-detail">
                    <img src="{{ asset('image/armstrong.jpg')}}" class="astro-img">
                    <nav>Portrait of Astronaut Neil A. Armstrong, commander of the Apollo 11 Lunar Landing mission.</nav>
                    <nav class="nasa-small">NASA</nav>
                </div>
            </div>
        </div>
            <div class="ap11-astro">
                <div class="astro-detail">
                    <h1>Edwin “Buzz” Aldrin</h1>
                    <h2>The second human to set foot on the Moon</h2>
                    <nav>An engineer and fighter pilot in the Korean War, Dr. Edwin E. “Buzz” Aldrin was selected in NASA’s third astronaut class in 1963 and went to space on Gemini XII before becoming the lunar module pilot for Apollo 11.</nav>
                    <nav>
                        <a href="https://www.nasa.gov/former-astronaut-edwin-buzz-aldrin/" target="_blank">
                            Read About Buzz Aldrin
                            <img src="{{ asset('image/more.png')}}" class="tab-astro">
                        </a>
                    </nav>
                </div>
                <div class="astro-img-detail">
                    <img src="{{ asset('image/aldrin.jpg')}}" class="astro-img" >
                    <nav>S69-31743 (July 1969) — Astronaut Edwin E. Aldrin Jr.</nav>
                    <nav class="nasa-small">NASA</nav>
                </div>
            </div>
        <div class="astro-bg02">
            <div class="ap11-astro">
                <div class="astro-detail">
                    <h1>Michael Collins</h1>
                    <h2>Collins served as command module pilot on Apollo 11.</h2>
                    <nav>Michael Collins was one of the third group of astronauts named by NASA in October 1963. He first flew to space on Gemini X in 1966 before his assignment to the Apollo 11 mission. He logged over 266 hours in space.</nav>
                    <nav>
                        <a href="https://www.nasa.gov/former-astronaut-michael-collins/" target="_blank">
                            Read About Michael Collins
                            <img src="{{ asset('image/more.png')}}" class="tab-astro">
                        </a>
                    </nav>
                </div>
                <div class="astro-img-detail">
                    <img src="{{ asset('image/collins.jpg')}}" class="astro-img">
                    <nav>Official NASA portrait of astronaut Michael Collins.</nav>
                    <nav class="nasa-small">NASA</nav>
                </div>
            </div>
        </div>
    </div>
    <nav class="nasa-footer">NASA explores the unknown in air and space, innovates for the benefit of humanity, and inspires the world through discovery.</nav>
</main>

@endsection