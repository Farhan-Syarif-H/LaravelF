<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
 
      <div id="content-img">
        <div class="content1">
          <img src="assets/img/me.png">
          <h2 class="content-header">Farhan Syarif Hidayatulloh
          </h2><br>
          <p class="content-text">
            <b>Students at Wikrama Vocational Highschool</b>
          </p>

        </div>
      </div>
      <!-- Short Description -->
      <section class="section section-small">
        <h2 class="section-header">About</h2>
        <p>I am a student from Wikrama Vocational Highschool Bogor, I majored in software and game development, and I am learning to create a portfolio website using Laravel</p>
      </section>
      <hr>
      <!-- Skill Table -->
      <section class="section">
        <h2 class="section-header">Skill</h2>
          <div class="responsive-table">
            <table>
              <tr class="tr-header">
                <th>&nbsp;</th>
                <th>Percent</th>
              </tr>
              <tr>
                <td class="text-left">HTML</td>
                <td>95%</td>
              </tr>
              <tr>
                <td class="text-left">CSS</td>
                <td>85%</td>
              </tr>
              <tr>
                <td class="text-left">JAVASCRIPT</td>
                <td>85%</td>
              </tr>
              <tr>
                <td class="text-left">PHP</td>
                <td>80%</td>
              </tr>
            </table>
          </div>
      </section>
      <hr>
      <!-- Education List -->
      <section class="section section-small">
      </section>
 
@endsection