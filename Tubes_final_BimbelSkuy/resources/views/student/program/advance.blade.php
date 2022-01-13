@extends('layout.main')

@section('title', 'Program')

@section('body')
  <div class="container-fluid">
    <h3 style="text-align: center">Sudah Advance</h3>
    <div class="row gap-5 mt-5">
      <div class="col-lg-7 d-flex flex-column justify-content-center">
        <p style="text-align: justify">Java sebagai salah satu bahasa pemrograman yang sudah ada sejak era 1990-an, kini
          semakin berkembang dan melebarkan dominasinya di berbagai bidang. Salah satu penggunaan terbesar Java adalah
          dalam pembuatan aplikasi native untuk Android. Selain itu Java pun menjadi pondasi bagi berbagai bahasa
          pemrograman seperti Kotlin, Scala, Clojure, Groovy, JRuby, Jython, dan lainnya yang memanfaatkan Java Virtual
          Machine sebagai rumahnya.
        </p>

        <p style="text-align: justify">Java pun akrab dengan dunia sains dan akademik. Cukup banyak akademisi di Indonesia
          yang menggunakan Java sebagai alat bantu untuk menyelesaikan skripsi atau tugas akhir dengan berbagai topik yang
          didominasi kecerdasan buatan, data mining, enterprise architecture, aplikasi mobile, dan lainnya. Di dunia web
          development sendiri, Java memiliki berbagai web framework unggulan seperti Spring, Play Framework, Spark,
          Jakarta Struts, dan Java Server Pages.</p>
      </div>
      <div class="col">
        <img src="/resource/img/java.png" alt="" style="max-width: 100%">
      </div>
    </div>
  </div>
@endsection
