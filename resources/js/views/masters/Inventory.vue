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
                                    Master Data Inventory
                                </h6>
                                <nav
                                    aria-label="breadcrumb"
                                    class="d-none d-md-inline-block ml-md-4"
                                >
                                    <ol
                                        class="breadcrumb breadcrumb-links breadcrumb-dark"
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
                                            Inventory
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                <a
                                    data-toggle="modal"
                                    data-target="#modal-create-supplier"
                                    class="btn btn-sm btn-neutral"
                                    >New Inventory Data</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- alert -->
                <div v-if="alert_modal" class="container-fluid">
                    <div class="alert" :class="alert_type" role="alert">
                        <strong>{{ alert_message }}</strong>
                        {{ alert_sub_message }}
                    </div>
                </div>
                <!-- end alert -->
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="mb-0">
                                            <i class="fas fa-box"></i>
                                            Inventory / Items Data List
                                        </h3>
                                    </div>
                                    <div>
                                        <form
                                            class="navbar-search navbar-search-light form-inline mr-sm-3"
                                            id="navbar-search-main"
                                        >
                                            <div class="form-group mb-0">
                                                <div
                                                    class="input-group input-group-alternative input-group-merge"
                                                >
                                                    <div
                                                        class="input-group-prepend"
                                                    >
                                                        <span
                                                            class="input-group-text"
                                                            ><svg
                                                                class="svg-inline--fa fa-search fa-w-16"
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
                                                INVENTORY CODE
                                            </th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="budget"
                                            >
                                                INVENTORY NAME
                                            </th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="status"
                                            >
                                                PART NUMBER
                                            </th>
                                            <th scope="col">INFORMATION</th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="completion"
                                            >
                                                STOCK
                                            </th>
                                            <th
                                                scope="col"
                                                class="sort"
                                                data-sort="completion"
                                            >
                                                <div class="text-center">
                                                    BARCODE
                                                </div>
                                            </th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr
                                            v-for="dataInventory in allInventoryData"
                                            :key="dataInventory.code"
                                        >
                                            <th scope="row">
                                                {{ dataInventory.code }}
                                            </th>
                                            <td class="budget">
                                                {{
                                                    dataInventory.inventory_name
                                                }}
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-dot mr-4"
                                                >
                                                    <i class="bg-success"></i>
                                                    <span class="status">{{
                                                        dataInventory.inventory_part_number
                                                    }}</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div>
                                                    <span
                                                        class="badge badge-dot mr-4"
                                                    >
                                                        <i
                                                            class="bg-success"
                                                        ></i>
                                                        <span class="status">
                                                            Inventory Price :
                                                            {{
                                                                rupiahFormat(
                                                                    dataInventory.inventory_price
                                                                )
                                                            }}
                                                        </span>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="badge badge-dot mr-4"
                                                    >
                                                        <i
                                                            class="bg-primary"
                                                        ></i>
                                                        <span
                                                            class="badge badge-primary"
                                                        >
                                                            Packaging Type 1 :
                                                            {{
                                                                dataInventory.inventory_unit_1
                                                            }}</span
                                                        >
                                                    </span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="badge badge-dot mr-4"
                                                    >
                                                        <i
                                                            class="bg-warning"
                                                        ></i>
                                                        <span
                                                            class="badge badge-info"
                                                        >
                                                            Packaging Type 2 :
                                                            {{
                                                                dataInventory.inventory_unit_2
                                                            }}</span
                                                        >
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">
                                                    current Stok :
                                                    <p
                                                        class="text-primary text-white"
                                                    >
                                                        {{
                                                            dataInventory.inventory_stok
                                                        }}
                                                    </p>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <img
                                                        class="barcode rounded mx-auto d-block"
                                                        :src="
                                                            getBarcodeUrl(
                                                                dataInventory.inventory_barcode
                                                            )
                                                        "
                                                        alt=""
                                                        style="max-width: 70px"
                                                    />
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a
                                                        class="btn btn-sm btn-icon-only text-light"
                                                        href="#"
                                                        role="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i
                                                            class="fas fa-ellipsis-v"
                                                        ></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                                                    >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#modal-detail-supplier"
                                                            @click.prevent="
                                                                suppData(
                                                                    dataInventory.code
                                                                )
                                                            "
                                                        >
                                                            <span
                                                                class="badge badge-info"
                                                            >
                                                                <i
                                                                    class="fas fa-eye"
                                                                ></i>
                                                                Details
                                                            </span>
                                                        </a>
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#modalEdit"
                                                            @click.prevent="
                                                                suppData(
                                                                    dataInventory.code
                                                                )
                                                            "
                                                        >
                                                            <span
                                                                class="badge badge-warning"
                                                            >
                                                                <i
                                                                    class="fas fa-pen"
                                                                ></i>
                                                                Edit This Data
                                                            </span>
                                                        </a>
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#modalDelete"
                                                            @click.prevent="
                                                                deleteModal(
                                                                    dataInventory.code
                                                                )
                                                            "
                                                        >
                                                            <span
                                                                class="badge badge-danger"
                                                            >
                                                                <i
                                                                    class="fas fa-trash"
                                                                ></i>
                                                                Delete
                                                            </span></a
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
                                        class="pagination justify-content-end mb-0"
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
    <!-- modal create supllier -->
    <div
        class="modal"
        :class="modal"
        id="modal-create-supplier"
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
                            class="d-flex justify-content-between align-self-center"
                        >
                            <div class="">
                                <i class="fas fa-dolly text-blue"></i>
                            </div>
                            <div class="mx-2 text-blue">
                                Create New Inventory
                            </div>
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
                    <vee-form
                        role="form"
                        :validation-schema="inventorySchema"
                        ref="anyName"
                        @submit="createForm"
                    >
                        <div class="form-group">
                            <label
                                for="inventory_name"
                                class="form-control-label"
                                >Inventory Name</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Inventory Name, Example. Cloth, Bag, T-Shirt. etc"
                                id="inventory_name"
                                name="inventory_name"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="inventory_name"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="inventory_description"
                                class="form-control-label"
                                >Inventory Description</label
                            >
                            <vee-field
                                as="textarea"
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Inventory Information"
                                id="inventory_description"
                                name="inventory_description"
                                rows="5"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="inventory_description"
                            />
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label"
                                    >Type Inventory</label
                                >
                                <vee-field
                                    as="select"
                                    name="inventory_type_1"
                                    id="inventory_type_1"
                                    class="form-control form-control-sm"
                                >
                                    <option value="">
                                        Select Type Inventory
                                    </option>
                                    <option value="PCS">PCS</option>
                                    <option value="MTR">MTR</option>
                                    <option value="ROLL">ROLL</option>
                                    <option value="LOT">LOT</option>
                                </vee-field>
                                <ErrorMessage
                                    class="text-danger text-xs"
                                    name="inventory_type_1"
                                />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Unit</label>
                                <vee-field
                                    type="number"
                                    name="inventory_unit_1"
                                    class="form-control form-control-sm"
                                    placeholder="1 / 6 / 30 / 12"
                                />
                                <ErrorMessage
                                    class="text-danger text-xs"
                                    name="inventory_unit_1"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label"
                                    >Type Inventory</label
                                >
                                <vee-field
                                    as="select"
                                    name="inventory_type_2"
                                    id="inventory_type_2"
                                    class="form-control form-control-sm"
                                >
                                    <option value="">
                                        Select Type Inventory
                                    </option>
                                    <option value="BOX">BOX</option>
                                    <option value="KG">KG</option>
                                    <option value="PACK">PACK</option>
                                </vee-field>
                                <ErrorMessage
                                    class="text-danger text-xs"
                                    name="inventory_type_2"
                                />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Unit</label>
                                <vee-field
                                    type="number"
                                    name="inventory_unit_2"
                                    class="form-control form-control-sm"
                                    placeholder="1 / 6 / 30 / 12"
                                />
                                <ErrorMessage
                                    class="text-danger text-xs"
                                    name="inventory_unit_2"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                for="inventory_price"
                                class="form-control-label"
                                >Inventory Price</label
                            >
                            <input
                                class="form-control form-control-sm"
                                ref="inputan"
                                type="text"
                                placeholder="Inventory Price"
                                id="inventory_price"
                                name="inventory_price"
                                @keyup="priceInput"
                            />

                            <ErrorMessage
                                class="text-danger text-xs"
                                name="inventory_price"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_phone"
                                class="form-control-label"
                                >Supplier Phone</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx"
                                maxlength="13"
                                id="supplier_phone"
                                name="supplier_phone"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_phone"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_faxmile"
                                class="form-control-label"
                                >Supplier Faxmile</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx (Supplier Fax Number)"
                                maxlength="13"
                                id="supplier_faxmile"
                                name="supplier_faxmile"
                            />

                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_faxmile"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_email"
                                class="form-control-label"
                                >Supplier Email</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="email"
                                placeholder="email@email.com"
                                id="supplier_email"
                                name="supplier_email"
                            />

                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_email"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_tax_number"
                                class="form-control-label"
                                >Supplier Tax / NPWP</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="XX.XXX.XXX.X-XXX.XXX"
                                maxlength="15"
                                id="supplier_tax_number"
                                name="supplier_tax_number"
                            />

                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_tax_number"
                            />
                        </div>
                        <div class="form-group">
                            <label for="supplier_pic" class="form-control-label"
                                >Supplier Contact Person / Person In
                                Charge</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Sdri. Bunga Anggita"
                                maxlength="15"
                                id="supplier_pic"
                                name="supplier_pic"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_pic"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_pic_phone"
                                class="form-control-label"
                                >Contact Person Phone</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="021 xxxx xxxx (Optional)"
                                maxlength="13"
                                id="supplier_pic_phone"
                                name="supplier_pic_phone"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_pic_phone"
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Save changes
                        </button>
                    </vee-form>
                </div>
            </div>
        </div>
    </div>
    <!-- end supllier modal -->
    <!-- modal detail supplier -->
    <div
        class="modal fade"
        id="modal-detail-supplier"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modal-detail-supplierTitle"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-detail-supplierTitle">
                        Detail Supplier Data
                    </h5>
                </div>
                <div class="">
                    <table class="table table-responsive">
                        <tbody>
                            <tr>
                                <th>Supplier Code</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_code }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier Name</th>
                                <td class="fw-bold text-uppercase">
                                    <strong>{{ supplier_name }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier Email</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_email }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier Address</th>
                                <td class="fw-bold">
                                    <textarea
                                        readonly
                                        class="form-control bg-white text-default"
                                        name=""
                                        id=""
                                        cols="30"
                                        rows="5"
                                        v-model="supplier_address"
                                    >
                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier Country</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_country }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier Phone</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_phone }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier Fax Number</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_faxmile }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier NPWP</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_tax_number }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier PIC Name</th>
                                <td class="fw-bold">
                                    <strong> Sdr/i. {{ supplier_pic }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Supplier PIC Phone</th>
                                <td class="fw-bold">
                                    <strong>{{ supplier_pic_phone }}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end MODAL detail supplier -->
    <!-- Modal Edit Supplier -->
    <div
        class="modal fade"
        :class="modal"
        id="modalEdit"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalEditTitle"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <vee-form role="form" @submit="updateAction">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">
                            Update Supplier Data
                        </h5>
                    </div>
                    <div class="">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Supplier Name</th>
                                    <td class="fw-bold text-uppercase">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="PT.Maju Mundur Sentosa"
                                            id="supplier_name"
                                            name="supplier_name"
                                            v-model="supplier_name"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_name"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supplier Email</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="email"
                                            placeholder="email@email.com"
                                            id="supplier_email"
                                            name="supplier_email"
                                            v-model="supplier_email"
                                        />

                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_email"
                                        />
                                    </td>
                                </tr>
                                <tr class="w-full">
                                    <th>Supplier Address</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            as="textarea"
                                            class="form-control"
                                            type="text"
                                            placeholder="Jl. Jakarta Timur, DKI JAKARTA"
                                            id="supplier_address"
                                            name="supplier_address"
                                            rows="5"
                                            v-model="supplier_address"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_address"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supplier Country</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="Indonesia"
                                            id="supplier_country"
                                            name="supplier_country"
                                            v-model="supplier_country"
                                        />

                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_country"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supplier Phone</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx"
                                            maxlength="13"
                                            id="supplier_phone"
                                            name="supplier_phone"
                                            v-model="supplier_phone"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_phone"
                                        />
                                    </td>
                                </tr>

                                <tr>
                                    <th>Supplier Fax Number</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx (Supplier Fax Number)"
                                            maxlength="13"
                                            id="supplier_faxmile"
                                            name="supplier_faxmile"
                                            v-model="supplier_faxmile"
                                        />

                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_faxmile"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supplier NPWP</th>
                                    <td class="fw-bold">
                                        <strong>
                                            <vee-field
                                                class="form-control form-control-sm"
                                                type="text"
                                                placeholder="XX.XXX.XXX.X-XXX.XXX"
                                                maxlength="15"
                                                id="supplier_tax_number"
                                                name="supplier_tax_number"
                                                v-model="supplier_tax_number"
                                        /></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supplier PIC Name</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="Sdri. Bunga Anggita"
                                            maxlength="15"
                                            id="supplier_pic"
                                            name="supplier_pic"
                                            v-model="supplier_pic"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_pic"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supplier PIC Phone</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx (Optional)"
                                            maxlength="13"
                                            id="supplier_pic_phone"
                                            name="supplier_pic_phone"
                                            v-model="supplier_pic_phone"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="supplier_pic_phone"
                                        />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                        >
                            Tutup
                        </button>
                    </div>
                </div>
            </vee-form>
        </div>
    </div>
    <!-- End Modal Supplier Edit -->
    <!-- Modal Delete -->
    <div
        class="modal fade"
        :class="modal"
        id="modalDelete"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalDeleteTitle"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <vee-form role="form" @submit="deleteSupplier">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title text-danger"
                            id="modalDeleteTitle"
                        >
                            Are You Sure To Delete Data ?
                        </h5>
                    </div>
                    <div class="mx-auto">
                        <h5>Delete This Data {{ this.supplier_code }}</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">
                            Yes, Delete
                        </button>
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                        >
                            Tutup
                        </button>
                    </div>
                </div>
            </vee-form>
        </div>
    </div>
    <!-- End Modal Delete -->
</template>
<script>
import Sidebar from "../../components/Sidebar.vue";
import Navigasi from "../../components/Navigasi.vue";
export default {
    name: "Inventory",
    components: {
        Sidebar,
        Navigasi,
    },
    created() {
        // get user login info
        const userInfoData = localStorage.getItem("user");
        if (userInfoData) {
            const userData = JSON.parse(userInfoData);
            // set infouser ke state dengan commit
            this.$store.commit("setUserData", userData);
        }
    },
    mounted() {
        // console.log("Mounted Function Called");
        this.getAllInventoryData();
    },
    data() {
        return {
            userData: JSON.parse(localStorage.getItem("user")),
            sum: 0,
            modal_open: true,
            modal: "",
            inventory_code: "",
            inventory_name: "",
            inventory_type: "",
            inventory_unit_1: "",
            inventory_unit_2: "",
            inventory_price: 0,
            inventory_stok: "",
            inventory_part_number: "",
            inventory_images: "",
            alert_modal: false,
            alert_message: "",
            alert_type: "",
            alert_sub_message: "",
            allInventoryData: {},
            inputCureencyActive: false,
            inventorySchema: {
                inventory_name: "required",
                inventory_type: "required",
                inventory_unit_1: "required",
                inventory_unit_2: "",
                inventory_price: "",
                inventory_stok: "",
                inventory_part_number: "required",
                inventory_images: "required",
            },
        };
    },
    computed: {},
    methods: {
        createForm(values, { resetForm }) {
            axios({
                method: "post",
                url: "http://module.test/api/supplier/",
                data: {
                    inventory_name: values.inventory_name,
                    inventory_type: values.inventory_type,
                    inventory_unit_1: values.inventory_unit_1,
                    inventory_unit_2: values.inventory_unit_2,
                    inventory_price: values.inventory_price,
                    inventory_stok: values.inventory_stok,
                    inventory_part_number: values.inventory_part_number,
                    inventory_images: values.inventory_images,
                },
            })
                .then((resp) => {
                    // console.log(resp);
                    resetForm();
                    this.modal = "fade hide";
                    // $("#modal-create-supplier").modal("hide");
                    this.alert_modal = true;
                    this.alert_message = "Berhasil";
                    this.getAllInventoryData();
                    this.alert_sub_message =
                        "Your Supplier Data Succesfully Added";
                    this.alert_type = "alert-success";
                    setTimeout(() => {
                        this.alert_modal = false;
                    }, 4000);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getAllInventoryData() {
            axios({
                method: "get",
                url: "http://module.test/api/inventory/",
            }).then((responData) => {
                this.allInventoryData = responData.data.inventory;
            });
        },
        suppData(id) {
            axios({
                method: "get",
                url: `http://module.test/api/supplier/${id}`,
            }).then((response) => {
                this.supplier_code = response.data.supplier.code;
                this.supplier_name = response.data.supplier.supplier_name;
                this.supplier_address = response.data.supplier.supplier_address;
                this.supplier_country = response.data.supplier.supplier_country;
                this.supplier_phone = response.data.supplier.supplier_phone;
                this.supplier_faxmile = response.data.supplier.supplier_faxmile;
                this.supplier_email = response.data.supplier.supplier_email;
                this.supplier_tax_number =
                    response.data.supplier.supplier_tax_number;
                this.supplier_pic = response.data.supplier.supplier_pic;
                this.supplier_pic_phone = response.data.supplier.supplier_phone;
            });
        },
        updateAction() {
            axios({
                method: "put",
                url: `http://module.test/api/supplier/${this.supplier_code}`,
                data: {
                    supplier_code: this.code,
                    supplier_name: this.supplier_name,
                    supplier_address: this.supplier_address,
                    supplier_country: this.supplier_country,
                    supplier_phone: this.supplier_phone,
                    supplier_faxmile: this.supplier_faxmile,
                    supplier_email: this.supplier_email,
                    supplier_tax_number: this.supplier_tax_number,
                    supplier_pic: this.supplier_pic,
                    supplier_pic_phone: this.supplier_phone,
                },
            }).then((res) => {
                // console.log(res);
                this.modal = "fade hide";
                this.alert_modal = true;
                this.getAllInventoryData();
                this.alert_message = "Berhasil Update Data,";
                this.alert_sub_message = res.data.message;
                this.alert_type = "alert-success";
                setTimeout(() => {
                    this.alert_modal = false;
                }, 4500); // 4.5 Detik
            });
        },
        deleteModal(code) {
            this.supplier_code = code;
        },
        deleteSupplier() {
            axios({
                method: "delete",
                url: `http://module.test/api/supplier/d/${this.supplier_code}`,
            }).then((res) => {
                // console.log(res.data.message);
                this.modal = "fade hide";
                this.alert_modal = true;
                this.getAllInventoryData();
                this.alert_message = "Berhasil Hapus Data,";
                this.alert_sub_message = res.data.message;
                this.alert_type = "alert-danger";
                setTimeout(() => {
                    this.alert_modal = false;
                }, 4500); // 4.5 Detik
            });
        },
        getBarcodeUrl(imagesData) {
            var images = "/inventory/qrcode/" + imagesData;
            return images;
        },
        // rupiah format
        rupiahFormat(value) {
            if (typeof value !== "number") {
                return value;
            }
            var formatter = new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0,
            });
            return formatter.format(value);
        },
        // input rupiah
        priceInput() {
            var number_string = this.$refs.inputan.value
                .replace(/[^,\d]/g, "")
                .toString();
            var split = number_string.split(",");
            var sisa = split[0].length % 3;
            var rupiah = split[0].substr(0, sisa);
            var ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                var separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }
            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            // console.log(rupiah);
            this.$refs.inputan.value = "Rp. " + rupiah;
            this.inventory_price = number_string;
            console.log(this.inventory_price);
        },
    },
};
</script>
