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
                                    Master Data Suppliers
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
                                            Suppliers
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                <a
                                    data-toggle="modal"
                                    data-target="#modal-create-supplier"
                                    class="btn btn-sm btn-neutral"
                                    >New Suppliers Data</a
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
                            <customer-item
                                :customerData="allCutsomerDta"
                            ></customer-item>
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
        class="modal show"
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
                            class="
                                d-flex
                                justify-content-between
                                align-self-center
                            "
                        >
                            <div class="">
                                <i class="fas fa-dolly text-blue"></i>
                            </div>
                            <div class="mx-2 text-blue">
                                Create New Supplier
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
                        :validation-schema="supplierSchema"
                        ref="anyName"
                        @submit="createForm"
                    >
                        <div class="form-group">
                            <label
                                for="supplier_name"
                                class="form-control-label"
                                >Supplier Name</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="PT.Maju Mundur Sentosa"
                                id="supplier_name"
                                name="supplier_name"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_name"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_address"
                                class="form-control-label"
                                >Supplier Adress</label
                            >
                            <vee-field
                                as="textarea"
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Jl. Jakarta Timur, DKI JAKARTA"
                                id="supplier_address"
                                name="supplier_address"
                                rows="5"
                            />
                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_address"
                            />
                        </div>
                        <div class="form-group">
                            <label
                                for="supplier_country"
                                class="form-control-label"
                                >Supplier Country</label
                            >
                            <vee-field
                                class="form-control form-control-sm"
                                type="text"
                                placeholder="Indonesia"
                                id="supplier_country"
                                name="supplier_country"
                                rows="5"
                            />

                            <ErrorMessage
                                class="text-danger text-xs"
                                name="supplier_country"
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
</template>
<script>
import Sidebar from "../../components/Sidebar.vue";
import Navigasi from "../../components/Navigasi.vue";
import CustomerItem from "./CustomerItem.vue";
export default {
    name: "MasterCustomers",
    components: {
        Sidebar,
        Navigasi,
        CustomerItem,
    },
    created() {
        // get user login info
        const userInfoData = localStorage.getItem("user");
        if (userInfoData) {
            const userData = JSON.parse(userInfoData);
            // set infouser ke state dengan commit
            this.$store.commit("setUserData", userData);
        }
        // panggil function
        this.getAllUserData();
    },
    data() {
        return {
            userData: JSON.parse(localStorage.getItem("user")),
            sum: 0,
            modal_open: true,
            modal: "",
            alert_modal: false,
            alert_message: "",
            alert_type: "",
            alert_sub_message: "",
            allCutsomerDta: {},
            customerSchema: {
                supplier_name: "required",
                supplier_address: "required|min:10",
                supplier_country: "required",
                supplier_phone: "required",
                supplier_phone_1: "",
                supplier_faxmile: "",
                supplier_tax_number: "",
                supplier_pic: "required",
                supplier_pic_phone: "required",
            },
        };
    },
    methods: {
        async createForm(values, { resetForm }) {
            axios
                .post("http://module.test/api/create-customers", {
                    supplier_name: values.supplier_name,
                    supplier_address: values.supplier_address,
                    supplier_country: values.supplier_country,
                    supplier_phone: values.supplier_phone,
                    supplier_phone_1: values.supplier_phone_1,
                    supplier_faxmile: values.supplier_faxmile,
                    supplier_email: values.supplier_email,
                    supplier_tax_number: values.supplier_tax_number,
                    supplier_pic: values.supplier_pic,
                    supplier_pic_phone: values.supplier_pic_phone,
                })
                .then(function (response) {
                    resetForm();
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            await this.reload();
            this.modal = "fade d-none";
            this.alert_modal = true;
            this.alert_message = "Berhasil";
            this.alert_sub_message = "Your Customer Data Succesfully Added";
            this.alert_type = "alert-success";
            setTimeout(() => {
                this.alert_modal = false;
            }, 4000);
        },
        getAllUserData() {
            axios.get("/get-all-customers").then((res) => {
                this.allCutsomerDta = res.data.customers;
            });
        },
        async reload() {
            // this.$forceUpdate();
            this.$router.go(this.$router.currentRoute);
        },
    },
};
</script>
