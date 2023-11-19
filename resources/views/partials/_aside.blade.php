<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="/">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#stagiares" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Stagiaires</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="stagiares" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('stagiaires.index') }}">
            <i class="bi bi-circle"></i><span>Stagiaires</span>
          </a>
        </li>
        <li>
          <a href="{{ route('stagiaires.create') }}">
            <i class="bi bi-circle"></i><span>Ajouter</span>
          </a>
        </li>
        
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#absences" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Absences</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="absences" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('absences.index') }}">
            <i class="bi bi-circle"></i><span>Absences</span>
          </a>
        </li>
        <li>
          <a href="{{ route('absences.create') }}">
            <i class="bi bi-circle"></i><span>Ajouter</span>
          </a>
        </li>
        
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#stage" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Stages</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="stage" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('stages.index') }}">
            <i class="bi bi-circle"></i><span>Stages</span>
          </a>
        </li>
        <li>
          <a href="{{ route('stages.create') }}">
            <i class="bi bi-circle"></i><span>Ajouter</span>
          </a>
        </li>
        
      </ul>
    </li>


  </ul>

</aside><!-- End Sidebar-->
