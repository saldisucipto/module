<template>
    <div>
        <!-- Sidenav -->
        <sidebar />
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <navigasi />
            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0">
                                    Master Data Customers
                                </h6>
                                <nav
                                    aria-label="breadcrumb"
                                    class="d-none d-md-inline-block ml-md-4"
                                >
                                    <ol
                                        class="
                                            breadcrumb
                                            breadcrumb-links
                                            breadcrumb-dark
                                        "
                                    >
                                        <li class="breadcrumb-item">
                                            <a href="#"
                                                ><i class="fas fa-home"></i
                                            ></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Master</a>
                                        </li>
                                        <li
                                            class="breadcrumb-item active"
                                            aria-current="page"
                                        >
                                            Customers
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                <a
                                    data-toggle="modal"
                                    data-target="#modal-create-customer"
                                    class="btn btn-sm btn-neutral"
                                    >New Customers Data</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="mb-0">
                                            <i class="fas fa-users"></i>
                                            Customers Data List
                                        </h3>
                                    </div>
                                    <div>
                                        <form
                                            class="
                                                navbar-search
                                                navbar-search-light
                                                form-inline
                                                mr-sm-3
                                            "
                                            id="navbar-search-main"
                                        >
                                            <div class="form-group mb-0">
                                                <div
                                                    class="
                                                        input-group
                                                        input-group-alternative
                                                        input-group-merge
                                                    "
                                                >
                                                    <div
                                                        class="
                                                            input-group-prepend
                                                        "
                                                    >
                                                        <span
                                                            class="
                                                                input-group-text
                                                            "
                                                            ><svg
                                                                class="
                                                                    svg-inline--fa
                                                                    fa-search
                                                                    fa-w-16
                                                                "
                                                                aria-hidden="true"
                                                                focusable="false"
                                                                data-prefix="fas"
                                                                data-icon="search"
                                                                role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512"
                                                                data-fa-i2svg=""
                                                            >
                                                                <path
                                                                    fill="currentColor"
                                                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                                                                ></path></svg
                                                            ><!-- <i class="fas fa-search"></i> Font Awesome fontawesome.com --></span
                                                        >
                                                    </div>
                                                    <input
                                                        class="form-control"
                                                        placeholder="Search"
                                                        type="text"
                                                    />
                                                </div>
                                            </div>
                                            <button
                                                type="button"
                                                class="close"
                                                data-action="search-close"
                                                data-target="#navbar-search-main"
                                                aria-label="Close"
                                            >
                                                <span aria-hidden="true"
                                                    >×</span
                                                >
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table
                                    class="table align-items-center table-flush"
                                >
                                    <thead class="thead-light">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="name"
                                            >
                                                Project
                                            </th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="budget"
                                            >
                                                Budget
                                            </th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="status"
                                            >
                                                Status
                                            </th>
                                            <th scope="col">Users</th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="completion"
                                            >
                                                Completion
                                            </th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <th scope="row">
                                                <div
                                                    class="
                                                        media
                                                        align-items-center
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar
                                                            rounded-circle
                                                            mr-3
                                                        "
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/bootstrap.jpg"
                                                        />
                                                    </a>
                                                    <div class="media-body">
                                                        <span
                                                            class="
                                                                name
                                                                mb-0
                                                                text-sm
                                                            "
                                                            >Argon Design
                                                            System</span
                                                        >
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="budget">$2500 USD</td>
                                            <td>
                                                <span
                                                    class="badge badge-dot mr-4"
                                                >
                                                    <i class="bg-warning"></i>
                                                    <span class="status"
                                                        >pending</span
                                                    >
                                                </span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Ryan Tompson"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-1.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Romina Hadid"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-2.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Alexander Smith"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-3.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Jessica Doe"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-4.jpg"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="
                                                        d-flex
                                                        align-items-center
                                                    "
                                                >
                                                    <span
                                                        class="completion mr-2"
                                                        >60%</span
                                                    >
                                                    <div>
                                                        <div class="progress">
                                                            <div
                                                                class="
                                                                    progress-bar
                                                                    bg-warning
                                                                "
                                                                role="progressbar"
                                                                aria-valuenow="60"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"
                                                                style="
                                                                    width: 60%;
                                                                "
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a
                                                        class="
                                                            btn
                                                            btn-sm
                                                            btn-icon-only
                                                            text-light
                                                        "
                                                        href="#"
                                                        role="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i
                                                            class="
                                                                fas
                                                                fa-ellipsis-v
                                                            "
                                                        ></i>
                                                    </a>
                                                    <div
                                                        class="
                                                            dropdown-menu
                                                            dropdown-menu-right
                                                            dropdown-menu-arrow
                                                        "
                                                    >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Another action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Something else
                                                            here</a
                                                        >
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div
                                                    class="
                                                        media
                                                        align-items-center
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar
                                                            rounded-circle
                                                            mr-3
                                                        "
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/angular.jpg"
                                                        />
                                                    </a>
                                                    <div class="media-body">
                                                        <span
                                                            class="
                                                                name
                                                                mb-0
                                                                text-sm
                                                            "
                                                            >Angular Now UI Kit
                                                            PRO</span
                                                        >
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="budget">$1800 USD</td>
                                            <td>
                                                <span
                                                    class="badge badge-dot mr-4"
                                                >
                                                    <i class="bg-success"></i>
                                                    <span class="status"
                                                        >completed</span
                                                    >
                                                </span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Ryan Tompson"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-1.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Romina Hadid"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-2.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Alexander Smith"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-3.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Jessica Doe"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-4.jpg"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="
                                                        d-flex
                                                        align-items-center
                                                    "
                                                >
                                                    <span
                                                        class="completion mr-2"
                                                        >100%</span
                                                    >
                                                    <div>
                                                        <div class="progress">
                                                            <div
                                                                class="
                                                                    progress-bar
                                                                    bg-success
                                                                "
                                                                role="progressbar"
                                                                aria-valuenow="100"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"
                                                                style="
                                                                    width: 100%;
                                                                "
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a
                                                        class="
                                                            btn
                                                            btn-sm
                                                            btn-icon-only
                                                            text-light
                                                        "
                                                        href="#"
                                                        role="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i
                                                            class="
                                                                fas
                                                                fa-ellipsis-v
                                                            "
                                                        ></i>
                                                    </a>
                                                    <div
                                                        class="
                                                            dropdown-menu
                                                            dropdown-menu-right
                                                            dropdown-menu-arrow
                                                        "
                                                    >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Another action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Something else
                                                            here</a
                                                        >
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div
                                                    class="
                                                        media
                                                        align-items-center
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar
                                                            rounded-circle
                                                            mr-3
                                                        "
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/sketch.jpg"
                                                        />
                                                    </a>
                                                    <div class="media-body">
                                                        <span
                                                            class="
                                                                name
                                                                mb-0
                                                                text-sm
                                                            "
                                                            >Black
                                                            Dashboard</span
                                                        >
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="budget">$3150 USD</td>
                                            <td>
                                                <span
                                                    class="badge badge-dot mr-4"
                                                >
                                                    <i class="bg-danger"></i>
                                                    <span class="status"
                                                        >delayed</span
                                                    >
                                                </span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Ryan Tompson"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-1.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Romina Hadid"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-2.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Alexander Smith"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-3.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Jessica Doe"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-4.jpg"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="
                                                        d-flex
                                                        align-items-center
                                                    "
                                                >
                                                    <span
                                                        class="completion mr-2"
                                                        >72%</span
                                                    >
                                                    <div>
                                                        <div class="progress">
                                                            <div
                                                                class="
                                                                    progress-bar
                                                                    bg-danger
                                                                "
                                                                role="progressbar"
                                                                aria-valuenow="72"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"
                                                                style="
                                                                    width: 72%;
                                                                "
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a
                                                        class="
                                                            btn
                                                            btn-sm
                                                            btn-icon-only
                                                            text-light
                                                        "
                                                        href="#"
                                                        role="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i
                                                            class="
                                                                fas
                                                                fa-ellipsis-v
                                                            "
                                                        ></i>
                                                    </a>
                                                    <div
                                                        class="
                                                            dropdown-menu
                                                            dropdown-menu-right
                                                            dropdown-menu-arrow
                                                        "
                                                    >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Another action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Something else
                                                            here</a
                                                        >
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div
                                                    class="
                                                        media
                                                        align-items-center
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar
                                                            rounded-circle
                                                            mr-3
                                                        "
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/react.jpg"
                                                        />
                                                    </a>
                                                    <div class="media-body">
                                                        <span
                                                            class="
                                                                name
                                                                mb-0
                                                                text-sm
                                                            "
                                                            >React Material
                                                            Dashboard</span
                                                        >
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="budget">$4400 USD</td>
                                            <td>
                                                <span
                                                    class="badge badge-dot mr-4"
                                                >
                                                    <i class="bg-info"></i>
                                                    <span class="status"
                                                        >on schedule</span
                                                    >
                                                </span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Ryan Tompson"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-1.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Romina Hadid"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-2.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Alexander Smith"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-3.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Jessica Doe"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-4.jpg"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="
                                                        d-flex
                                                        align-items-center
                                                    "
                                                >
                                                    <span
                                                        class="completion mr-2"
                                                        >90%</span
                                                    >
                                                    <div>
                                                        <div class="progress">
                                                            <div
                                                                class="
                                                                    progress-bar
                                                                    bg-info
                                                                "
                                                                role="progressbar"
                                                                aria-valuenow="90"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"
                                                                style="
                                                                    width: 90%;
                                                                "
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a
                                                        class="
                                                            btn
                                                            btn-sm
                                                            btn-icon-only
                                                            text-light
                                                        "
                                                        href="#"
                                                        role="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i
                                                            class="
                                                                fas
                                                                fa-ellipsis-v
                                                            "
                                                        ></i>
                                                    </a>
                                                    <div
                                                        class="
                                                            dropdown-menu
                                                            dropdown-menu-right
                                                            dropdown-menu-arrow
                                                        "
                                                    >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Another action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Something else
                                                            here</a
                                                        >
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div
                                                    class="
                                                        media
                                                        align-items-center
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar
                                                            rounded-circle
                                                            mr-3
                                                        "
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/vue.jpg"
                                                        />
                                                    </a>
                                                    <div class="media-body">
                                                        <span
                                                            class="
                                                                name
                                                                mb-0
                                                                text-sm
                                                            "
                                                            >Vue Paper UI Kit
                                                            PRO</span
                                                        >
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="budget">$2200 USD</td>
                                            <td>
                                                <span
                                                    class="badge badge-dot mr-4"
                                                >
                                                    <i class="bg-success"></i>
                                                    <span class="status"
                                                        >completed</span
                                                    >
                                                </span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Ryan Tompson"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-1.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Romina Hadid"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-2.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Alexander Smith"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-3.jpg"
                                                        />
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="
                                                            avatar avatar-sm
                                                            rounded-circle
                                                        "
                                                        data-toggle="tooltip"
                                                        data-original-title="Jessica Doe"
                                                    >
                                                        <img
                                                            alt="Image placeholder"
                                                            src="/assets/img/theme/team-4.jpg"
                                                        />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="
                                                        d-flex
                                                        align-items-center
                                                    "
                                                >
                                                    <span
                                                        class="completion mr-2"
                                                        >100%</span
                                                    >
                                                    <div>
                                                        <div class="progress">
                                                            <div
                                                                class="
                                                                    progress-bar
                                                                    bg-success
                                                                "
                                                                role="progressbar"
                                                                aria-valuenow="100"
                                                                aria-valuemin="0"
                                                                aria-valuemax="100"
                                                                style="
                                                                    width: 100%;
                                                                "
                                                            ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a
                                                        class="
                                                            btn
                                                            btn-sm
                                                            btn-icon-only
                                                            text-light
                                                        "
                                                        href="#"
                                                        role="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i
                                                            class="
                                                                fas
                                                                fa-ellipsis-v
                                                            "
                                                        ></i>
                                                    </a>
                                                    <div
                                                        class="
                                                            dropdown-menu
                                                            dropdown-menu-right
                                                            dropdown-menu-arrow
                                                        "
                                                    >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Another action</a
                                                        >
                                                        <a
                                                            class="
                                                                dropdown-item
                                                            "
                                                            href="#"
                                                            >Something else
                                                            here</a
                                                        >
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul
                                        class="
                                            pagination
                                            justify-content-end
                                            mb-0
                                        "
                                    >
                                        <li class="page-item disabled">
                                            <a
                                                class="page-link"
                                                href="#"
                                                tabindex="-1"
                                            >
                                                <i
                                                    class="fas fa-angle-left"
                                                ></i>
                                                <span class="sr-only"
                                                    >Previous</span
                                                >
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"
                                                >2
                                                <span class="sr-only"
                                                    >(current)</span
                                                ></a
                                            >
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i
                                                    class="fas fa-angle-right"
                                                ></i>
                                                <span class="sr-only"
                                                    >Next</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="modal-create-customer"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modal-default"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal- modal-dialog-centered modal-"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">
                        <div
                            class="
                                d-flex
                                justify-content-between
                                align-self-center
                            "
                        >
                            <div class="">
                                <i class="fas fa-user text-blue"></i>
                            </div>
                            <div class="mx-2 text-blue">Create New Data</div>
                        </div>
                    </h6>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span class="text-danger" aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label
                                for="customer_name"
                                class="form-control-label"
                                >Customer Name</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="PT.Maju Mundur Sentosa"
                                id="customer_name"
                                name="customer_name"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_address"
                                class="form-control-label"
                                >Customer Adress</label
                            >
                            <textarea
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Jl. Jakarta Timur, DKI JAKARTA"
                                id="customer_address"
                                name="customer_address"
                                rows="5"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_country"
                                class="form-control-label"
                                >Customer Country</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Indonesia"
                                id="customer_country"
                                name="customer_country"
                                rows="5"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_phone"
                                class="form-control-label"
                                >Customer Phone</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx"
                                maxlength="13"
                                id="customer_phone"
                                name="customer_phone"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_phone_1"
                                class="form-control-label"
                                >Customer Phone +</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx (Optional)"
                                maxlength="13"
                                id="customer_phone_1"
                                name="customer_phone_1"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_faxmile"
                                class="form-control-label"
                                >Customer Faxmile</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx (Customer Fax Number)"
                                maxlength="13"
                                id="customer_faxmile"
                                name="customer_faxmile"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_email"
                                class="form-control-label"
                                >Customer Email</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="email"
                                placeholder="email@email.com"
                                maxlength="13"
                                id="customer_email"
                                name="customer_email"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_tax_number"
                                class="form-control-label"
                                >Customer Tax / NPWP</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="XX.XXX.XXX.X-XXX.XXX"
                                maxlength="15"
                                id="customer_tax_number"
                                name="customer_tax_number"
                            />
                        </div>
                        <div class="form-group">
                            <label for="customer_pic" class="form-control-label"
                                >Customer Contact Person / Person Incase</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Sdri. Bunga Anggita"
                                maxlength="15"
                                id="customer_pic"
                                name="customer_pic"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="customer_pic_phone"
                                class="form-control-label"
                                >Contact Person Phone</label
                            >
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx (Optional)"
                                maxlength="13"
                                id="customer_pic_phone"
                                name="customer_pic_phone"
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Save changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Sidebar from "../../components/Sidebar.vue";
import Navigasi from "../../components/Navigasi.vue";

export default {
    name: "MasterCustomers",
    components: {
        Sidebar,
        Navigasi,
    },
    created() {
        // Created LifeCycle Hook Pertama Yang Diakses ketika components di mount
        // get user login info
        const userInfoData = localStorage.getItem("user");
        if (userInfoData) {
            const userData = JSON.parse(userInfoData);
            // set infouser ke state dengan commit
            this.$store.commit("setUserData", userData);
        }
    },

    data() {
        return {
            userData: JSON.parse(localStorage.getItem("user")),
            sum: 0,
        };
    },
};
</script>
