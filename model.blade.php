@extends('layouts.main')

@section('title', "Galactic V")

@section('content')

<main>
    <div>
        <nav class="top">Galactic V</nav>
        <nav class="top1">Pioneering the Future of Technology</nav>
    </div>
    <div class="box01-container">
        <div class="box101">
            <a href="/details/apollo-11">
                <img src="{{ asset('image/nasa.png')}}" class="nasa">
                <nav class="n101">Apollo XI</nav>
                <nav class="des101">NASA</nav>
                <nav class="des102">Lunar Landing</nav>
                <img src="{{ asset('image/ap11nobg.png')}}" class="ap11">
            </a>
        </div>
        
        <div class="box102">
            <img src="{{ asset('image/porsche-logo.png')}}" class="p-lg">
            <nav class="n102">Porsche 911</nav>
            <nav class="des201">GT3 RS</nav>
            <nav class="des202">THB 26,400,000.00</nav>
            <img src="{{ asset('image/porsche.png')}}" class="p911">
        </div>

        <div class="box103">
            <img src="{{ asset('image/madrid.png')}}" class="madrid">
            <nav class="n103">CR7</nav>
            <nav class="des301">Cristiano Ronaldo</nav>
            <nav class="des302">King Of Football</nav>
            <img src="{{ asset('image/cr7.png')}}" class="cr7">
        </div>
    </div>
    <div class="detail-group">
        <a href="/details/apollo-11"><nav class="clicknext1">รายละเอียด</nav></a>
        <nav class="clicknext2">รายละเอียด</nav>
        <nav class="clicknext3">รายละเอียด</nav>
    </div>
    <nav class="help">ประสบปัญหาใช่มั้ย?<a href="/model" class="helpdes">ติดต่อที่นี่</a></nav>

</main>

@endsection