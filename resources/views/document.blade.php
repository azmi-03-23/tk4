@extends('layout.app')

@section('title', 'Ikut Bergabung')
@section('subtitle', 'Menjadi member belajarNyetir')

@section('content')
    <div style="margin: 50px; ">
        <p>Please fill the form below</p>
       <form action="/form/submit">
            <label for="name">Name:</label><br>
            <input style="border: 1px solid black;" type="text" id="name" name="name"><br>
            <label for="age">Age:</label><br>
            <input style="border: 1px solid black;" type="number" id="age" name="age"><br>
            <label for="email">Email:</label><br>
            <input style="border: 1px solid black;" type="email" id="email" name="email"><br>
            <label for="phone">Phone:</label><br>
            <input style="border: 1px solid black;" type="number" id="phone" name="phone"><br><br>
            <input type="submit" value="Submit"><br>
       </form>
       <p>If this page show up again, please fill the form again</p>
    </div>
@endsection
