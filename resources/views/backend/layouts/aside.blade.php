<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Customer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('customer.all') }}">

                        <i class="bi bi-circle"></i><span>All Customer</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Packages</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('package.add') }}">
                        <i class="bi bi-circle"></i><span>Create Pakages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('package.all') }}">
                        <i class="bi bi-circle"></i><span>All Packages</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="order-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('orders.all') }}">
                        <i class="bi bi-circle"></i><span>New Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.approved') }}">
                        <i class="bi bi-circle"></i><span>Approved Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.paid') }}">
                        <i class="bi bi-circle"></i><span>Paid Orders</span>
                    </a>
                </li>


            </ul>
        </li>

        {{-- Reports --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('sellOrderReport') }}">
                        <i class="bi bi-circle"></i><span>Sell Orders Estimation</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('newOrderReport') }}">
                        <i class="bi bi-circle"></i><span>Filter New Orders</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside><!-- End Sidebar-->
