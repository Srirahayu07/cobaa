@guest
  @if (Route::has('login'))
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
     <a class="navbar-brand" href="#" >PERSATUAN INDONESIA</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     </nav>

  @endif
@else
  <nav class="navbar navbar-fixed-top navbar-expand-md navbar-dark bg-dark">

   <div class=" container-fluid collapse navbar-collapse" id="navbarsExampleDefault">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item  ">
         <a class="nav-link navbar-brand text" href="/">Home</a>
       </li>
       <li class="nav-item dropdown">
      <a class="nav-link navbar-brand dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Jabatan Pegawai <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
            <a class="dropdown-item" href="/daftar">Daftar Kamus Kompetensi</a>
            {{-- <ul class="dropdown-menu">
              <li> <a class="dropdown-1 dropdown-item" href="#">Kompetensi Manajerial</a> </li>
              <li> <a class="dropdown-1 dropdown-item" href="#">Kompetensi Sosial Kultural</a> </li>
            </ul> --}}

          <li><a class="dropdown-item" href="#">Form Jabatan Kompetensi</a></li>
      </ul>
    </li>
       <li class="nav-item  ">
         <a class="nav-link navbar-brand text" href="/biodata">Kompetensi ASN</a>
       </li>
          </ul>

           <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown  ">
               <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-brand text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }}
               </a>

               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
               </div>
           </li>
            </ul>

   </div>
  </nav>

@endguest
