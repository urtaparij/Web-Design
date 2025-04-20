@extends('layouts.main')

@section('title', "About Us")

@section('content')

<main>
    <div class="space"></div>
    <div class="box-container-about">

        
        <div class="box-about">
            <nav class="name-about">Galactic V</nav>
            <nav class="des-about">Founded in 2042, Galactic V has rapidly ascended as a global technology powerhouse, earning recognition as a Forbes "Top 10 Most Disruptive Tech Firms" (2098) and recipient of the Quantum Innovation Award (2099).</nav>
            <nav class="des-about"> Our journey began with a mission to bridge human potential with machine intelligence – today, we stand as a trusted partner to 3 Fortune 500 companies and 12 government space agencies.</nav>
            <div class="vision">
                <nav class="vision-top">Vision</nav>
                <nav>
                    To redefine technological possibilities and create a smarter, faster, and more connected world.
                </nav>
            </div>
            <div class="join">
                <nav class="join-top">Join the Galactic V Revolution</nav> 
                <nav>
                    Explore our products, partnerships, and career opportunities at <a href="/model">www.galacticv.com</a>
                </nav>
            </div>
            <div class="speech">
                <nav class="speech-1">"We don’t just adapt to the future – we architect it."</nav>
                <nav>Jirapat Ruathaitong, Founder & CEO</nav>
            </div>
        </div>
        <div class="walls">
            <img src="{{ asset('image/bg-about.jpg')}}" class="wallspic">
        </div>
    </div>
    <nav class="help">ประสบปัญหาใช่มั้ย?<a href="/model" class="helpdes">ติดต่อที่นี่</a></nav>
</main>

@endsection