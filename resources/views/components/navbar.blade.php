<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-2 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-4 d-flex align-items-center gap-2" href="{{ route('tasks.index') }}">
            <i class="bi bi-check2-square text-white"></i>
            <span>To-Do List</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="nav nav-pills flex-column flex-lg-row gap-2 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-center {{ active_link('tasks.*') }}" href="{{ route('tasks.index') }}">
                        Tareas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ active_link('categories.*') }}" href="#">
                        Categorías
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ active_link('tags.*') }}" href="#">
                        Etiquetas
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>