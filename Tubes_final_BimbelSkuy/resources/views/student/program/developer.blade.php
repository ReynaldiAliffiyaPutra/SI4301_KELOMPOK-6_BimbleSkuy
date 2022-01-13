@extends('layout.main')

@section('title', 'Program')

@section('body')
  <div class="container-fluid">
    <h3 style="text-align: center">Jadi Developer</h3>
    <div class="row gap-5 mt-5">
      <div class="col-lg-7 d-flex flex-column justify-content-center">
        <p style="text-align: justify">
          Hypertext Markup Language atau HTML adalah bahasa markup standar yang digunakan untuk membuat halaman website
          dan aplikasi web.
        </p>

        <p style="text-align: justify">
          Sejarah HTML dimulai oleh Tim Berners-Lee, seorang ahli fisika di lembaga penelitian CERN yang berlokasi di
          Swiss. Versi pertamanya dirilis pada tahun 1991, dengan 18 tag. Sejak saat itu, setiap kali ada versi barunya,
          pasti akan selalu ada tag dan attribute (tag modifier) yang juga baru.
        </p>

        <p style="text-align: justify">
          Ketika bekerja dengan bahasa markup ini , Anda menggunakan struktur kode sederhana (tag dan attribute) untuk
          mark up halaman website. Misalnya, Anda membuat sebuah paragraf dengan menempatkan enclosed text di antara tag
          pembuka &lt;p&gt; dan tag penutup &lt;/p&gt;
        </p>

        <p style="text-align: justify">
          &lt;p&gt;This is how you add a paragraph in HTML.&lt;/p&gt;
        </p>

        <p style="text-align: justify">
          &lt;p&gt;You can have more than one!&lt;/p&gt;
        </p>

        <p style="text-align: justify">
          Berkat popularitasnya yang terus meningkat, bahasa markup ini kini dianggap sebagai standar web resmi.
          Spesifikasi
          HTML dikelola dan dikembangkan oleh World Wide Web Consortium (W3C). Berdasarkan HTML Element Reference milik
          Mozilla Developer Network, saat ini ada 140 tag HTML, meskipun sebagiannya sudah tidak lagi didukung oleh
          beberapa
          versi terbaru browser.
        </p>
      </div>
      <div class="col">
        <img src="/resource/img/html.png" alt="" style="max-width: 100%">
      </div>
    </div>
  </div>
@endsection
