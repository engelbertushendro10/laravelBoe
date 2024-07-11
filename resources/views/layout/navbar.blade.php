<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <img class="img-fluid rounded-circle" src="{{asset('img/logo.jpg')}}" width="60px" alt="" srcset="">
        <a class="navbar-brand" href="#">Projects BOE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('project_index')}}">project</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
