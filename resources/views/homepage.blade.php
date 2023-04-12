@extends('layout.app')

@section('title', 'Home')
@section('subtitle','Jangan Balik Dulu')

@section('main-action')
    <form action='/form/fill'>
        <input id="main-action" type="submit" value="Mulai belajar nyetir!">
    </form>
@endsection

@section('content')
    <!--Paket-->
        <div id="paket">
            <h1 id="judul">Paket</h1>
            <div class="container">
                <div class="row" id="content">
                @foreach ($pakets as $paket)
                    <div class="col-lg-4 col-sm-6" id="diff">
                        <h3>{{  $paket['nama']  }}</h3>
                        <p>{{   $paket['deskripsi'] }}</p>
                        <p>{{   $paket['harga']  }}</p>
                     </div>
                @endforeach
                </div>
            </div>
        </div>
     <!--Trainer-->
        <div id="trainer">
            <h1 id="judul">Trainer</h1>
            <div class="container">
                <div class="row" id="content">
                @foreach ($trainers as $trainer)
                    <div class="col-lg-4 col-sm-6" >
                        <h3>{{  $trainer['nama'] }}</h3>
                        @foreach ($trainer['pengalamans'] as $pengalaman)
                        <p>{{  $pengalaman }}</p>
                        @endforeach
                    </div>
                @endforeach
                </div>
            </div>
            <form style="text-align: center; padding: 15px;"><input type="button" value="See more"></form>
        </div>
    <!--Kendaraan-->
        <div id="kendaraan">
            <h1 id="judul">Kendaraan</h1>
            <div class="container">
                <div class="row" id="content">
                    @foreach ($kendaraans as $kendaraan)
                    <div class="col-lg-4 col-sm-12" id="diff">
                    <h5>{{  $kendaraan['nama']  }}</h5>
                    <p>{{   $kendaraan['tipe']   }}</p>
                    <a href="{{ $kendaraan['deskripsi'] }}">Lihat lebih lanjut ></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <form style="text-align: center; padding: 15px; border-radius: 5px;"><input type="button" value="See more"></form>
        </div>
    <!--Jadwal-->
        <div id="jadwal">
            <h1 id="judul">Jadwal</h1>
            <table>
                <thead>
                    <tr>
                        <th>Jadwal</th>
                        <th>Kendaraan</th>
                        <th>Trainer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                    <tr>
                        <td>
                            {{  $jadwal['hari'] }}
                            @foreach ($jadwal['jams'] as $jam)
                            <br>{{  $jam    }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($jadwal['trainers'] as $trainer)
                            {{  $trainer    }}<br>
                            @endforeach
                        </td>
                        <td>{{  $jadwal['kendaraan']    }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    <!--Action-->
    <div class="container" style="margin: 20px; padding: 20px;">
        <div style="width:50%; float: left; text-align:center; padding: 70px 0;">
            <h3>Tunggu apalagi???<br>Segera <mark>daftar</mark>!!!</h3>
        </div>
        <div style="width:50%; float: right;">
            <form>
                <fieldset>
                    <legend>Your Detail:</legend>
                    <textarea cols="30" rows="5" name="whatever"></textarea><br>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>
@endsection
