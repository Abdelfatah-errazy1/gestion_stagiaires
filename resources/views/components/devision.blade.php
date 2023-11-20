<div class="col-xxl-3 col-md-3">
  <div class="card info-card sales-card">
    <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item text-primary" href="{{ route('stagiaires.index') }}">Affichier Stgiaires</a></li>
          </ul>
      </div>
      <div class="card-body">
          <h5 class="card-title">{{ $titre }}</h5>

          <div class="d-flex align-items-center">
              <div class="rounded-circle d-flex align-items-center justify-content-center text-primary">
                  {{ $code }}
              </div>
              <div class="ps-3">
                  <h6>{{ $nombre }}</h6>
              </div>
              
          </div>
      </div>
  </div>
</div>