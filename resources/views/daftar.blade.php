@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-center">
        Kompetensi Manajerial
      </div>
      <table class="table">
        <td>
          <ul>
            <a href="/kamus" class="color"><li>M.01 - INTEGRITAS</li></a>
              <a href="/kamus1" class="color"><li>M.02 - KERJASAMA</li></a>
              <a href="/kamus2"class="color"><li>M.03 - KOMUNIKASI</li></a>
              <a href="/kamus3"class="color"><li>M.04 - ORIENTASI PADA HASIL</li></a>
              <a href="/kamus4"class="color"><li>M.05 - PELAYANAN PUBLIK</li></a>
              <a href="/kamus5"class="color"><li>M.06 - PENGEMBANGAN DIRI DAN ORANG LAIN</li></a>
              <a href="/kamus6"class="color"><li>M.07 - MENGELOLA PERUBAHAN</li></a>
              <a href="/kamus7"class="color"><li>M.08 - PENGAMBILAN KEPUTUSAN</li></a>
          </ul>
        </td>
      </table>
      <div class="card-header text-center">
        Kompetensi Struktural
      </div>

      <table class="table">
        <td>
          <ul>
            <a href="/kamus8"class="color"><li>SK.01 - PEREKAT BANGSA</li></a>
          </ul>
        </td>

      </table>


      </div>

    </div>

  </div>

@endsection
