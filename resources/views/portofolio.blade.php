<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')

    <section class="section">
        <h2 class="section-header">Portofolio</h2>
        <div class="gallery">
          <figure class="images">
            <a href="/blog/dicoding">
            <img src="../assets/img/dicoding.png" class="gallery-img" />
            </a>
            <figcaption>
              <h5 class="name">Project Dicoding
              <span>
                  <a href="/blog/dicoding">Detail</a>
                </span>
              </h5>
            </figcaption>
          </figure>
          <figure class="images">
            <a href="/blog/ats">
            <img src="../assets/img/ats.png" class="gallery-img" />
            </a>
            <figcaption>
              <h5 class="name">Project ATS
              <span>
                  <a href="blog/ats">Detail</a>
                </span>
              </h5>
            </figcaption>
          </figure>
          <figure class="images">
            <a href="/blog/webshop">
            <img src="../assets/img/webshop.png" class="gallery-img" />
            </a>
            <figcaption>
              <h5 class="name">Project Webshop
                <span>
                  <a href="/blog/webshop">Detail</a>
                </span>
              </h5>
            </figcaption>
          </figure>
        </div>
    </section>
 
@endsection