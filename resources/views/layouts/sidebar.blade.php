<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">HisCare</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('diseases.index') }}">
                    <i class="align-middle" data-feather="users"></i> <span
                        class="align-middle">Diseases</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('hospitals.index') }}">
                    <i class="align-middle" data-feather="percent"></i> <span
                        class="align-middle">Hospitals</span>
                </a>
            </li>
        </ul>
    </div>
</nav>