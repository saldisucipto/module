<template>
    <div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">
                            ID CUSTOMERS
                        </th>
                        <th scope="col" class="sort" data-sort="budget">
                            CUSTOMERS NAME
                        </th>
                        <th scope="col" class="sort" data-sort="status">
                            CUSTOMER PIC NAME
                        </th>
                        <th scope="col">CUSTOMER CONTACTS</th>
                        <th scope="col" class="sort" data-sort="completion">
                            COUNTRY
                        </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr v-for="dataCust in customerData" :key="dataCust.code">
                        <th scope="row">
                            {{ dataCust.code }}
                        </th>
                        <td class="budget">{{ dataCust.customer_name }}</td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">{{
                                    dataCust.customer_pic
                                }}</span>
                            </span>
                        </td>
                        <td>
                            <div>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i>
                                    <span class="status">
                                        Company Phone :
                                        {{ dataCust.customer_phone }}</span
                                    >
                                </span>
                            </div>
                            <div>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-primary"></i>
                                    <span class="status">
                                        PIC Phone :
                                        {{ dataCust.customer_pic_phone }}</span
                                    >
                                </span>
                            </div>
                            <div>
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">
                                        PIC Phone :
                                        {{ dataCust.customer_email }}</span
                                    >
                                </span>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-info">
                                {{ dataCust.customer_country }}</span
                            >
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
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div
                                    class="
                                        dropdown-menu
                                        dropdown-menu-right
                                        dropdown-menu-arrow
                                    "
                                >
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        @click.prevent="custData(dataCust.code)"
                                        data-toggle="modal"
                                        data-target="#modalDetailCustomer"
                                    >
                                        <span class="badge badge-info">
                                            <i class="fas fa-eye"></i>
                                            Details
                                        </span>
                                    </a>
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        data-toggle="modal"
                                        data-target="#modalEdit"
                                        @click.prevent="
                                            updateCustData(dataCust.code)
                                        "
                                    >
                                        <span class="badge badge-warning">
                                            <i class="fas fa-pen"></i>
                                            Edit This Data
                                        </span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge badge-danger">
                                            <i class="fas fa-trash"></i>
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
    </div>
    <!-- Modal -->
    <div
        class="modal fade"
        id="modalDetailCustomer"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalDetailCustomerTitle"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailCustomerTitle">
                        Detail Customers Data
                    </h5>
                </div>
                <div class="">
                    <table class="table table-responsive">
                        <tbody>
                            <tr>
                                <th>Customer Code</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_code }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Name</th>
                                <td class="fw-bold text-uppercase">
                                    <strong>{{ customer_name }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Email</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_email }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Address</th>
                                <td class="fw-bold">
                                    <textarea
                                        readonly
                                        class="
                                            form-control
                                            bg-white
                                            text-default
                                        "
                                        name=""
                                        id=""
                                        cols="30"
                                        rows="5"
                                        v-model="customer_address"
                                    >
                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Country</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_country }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Phone</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_phone }}</strong>
                                    <br />
                                    <strong>{{ customer_phone_1 }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer Fax Number</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_faxmile }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer NPWP</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_tax_number }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer PIC Name</th>
                                <td class="fw-bold">
                                    <strong> Sdr/i. {{ customer_pic }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Customer PIC Phone</th>
                                <td class="fw-bold">
                                    <strong>{{ customer_pic_phone }}</strong>
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
    <!-- Modal Edit  -->
    <div
        class="modal fade"
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
                            Update Customer Data
                        </h5>
                    </div>
                    <div class="">
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th>Customer Name</th>
                                    <td class="fw-bold text-uppercase">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="PT.Maju Mundur Sentosa"
                                            id="customer_name"
                                            name="customer_name"
                                            v-model="customer_name"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_name"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer Email</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="email"
                                            placeholder="email@email.com"
                                            id="customer_email"
                                            name="customer_email"
                                            v-model="customer_email"
                                        />

                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_email"
                                        />
                                    </td>
                                </tr>
                                <tr class="w-full">
                                    <th>Customer Address</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            as="textarea"
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="Jl. Jakarta Timur, DKI JAKARTA"
                                            id="customer_address"
                                            name="customer_address"
                                            rows="5"
                                            v-model="customer_address"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_address"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer Country</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="Indonesia"
                                            id="customer_country"
                                            name="customer_country"
                                            rows="5"
                                            v-model="customer_country"
                                        />

                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_country"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer Phone</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx"
                                            maxlength="13"
                                            id="customer_phone"
                                            name="customer_phone"
                                            v-model="customer_phone"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_phone"
                                        />
                                        <br />
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx"
                                            maxlength="13"
                                            id="customer_phone_1"
                                            name="customer_phone_1"
                                            v-model="customer_phone_1"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_phone_1"
                                        />
                                    </td>
                                </tr>

                                <tr>
                                    <th>Customer Fax Number</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx (Customer Fax Number)"
                                            maxlength="13"
                                            id="customer_faxmile"
                                            name="customer_faxmile"
                                            v-model="customer_faxmile"
                                        />

                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_faxmile"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer NPWP</th>
                                    <td class="fw-bold">
                                        <strong>
                                            <vee-field
                                                class="
                                                    form-control form-control-sm
                                                "
                                                type="text"
                                                placeholder="XX.XXX.XXX.X-XXX.XXX"
                                                maxlength="15"
                                                id="customer_tax_number"
                                                name="customer_tax_number"
                                                v-model="customer_tax_number"
                                        /></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer PIC Name</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="Sdri. Bunga Anggita"
                                            maxlength="15"
                                            id="customer_pic"
                                            name="customer_pic"
                                            v-model="customer_pic"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_pic"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer PIC Phone</th>
                                    <td class="fw-bold">
                                        <vee-field
                                            class="form-control form-control-sm"
                                            type="text"
                                            placeholder="021 xxxx xxxx (Optional)"
                                            maxlength="13"
                                            id="customer_pic_phone"
                                            name="customer_pic_phone"
                                            v-model="customer_pic_phone"
                                        />
                                        <ErrorMessage
                                            class="text-danger text-xs"
                                            name="customer_pic_phone"
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
    <!-- End Modal Edit -->
</template>

<script>
export default {
    name: "CustomerItem",
    created() {
        // get user login info
        const userInfoData = localStorage.getItem("user");
        if (userInfoData) {
            const userData = JSON.parse(userInfoData);
            // set infouser ke state dengan commit
            this.$store.commit("setUserData", userData);
        }
    },
    props: ["customerData"],
    data() {
        return {
            customer_code: "",
            customer_name: "",
            customer_address: "",
            customer_country: "",
            customer_phone: "",
            customer_phone_1: "",
            customer_faxmile: "",
            customer_email: "",
            customer_tax_number: "",
            customer_pic: "",
            customer_pic_phone: "",
        };
    },
    methods: {
        custData(codeCustomer) {
            axios({
                method: "get",
                url: `http://module.test/api/customer/${codeCustomer}`,
            }).then((Response) => {
                (this.customer_code = codeCustomer),
                    (this.customer_name = Response.data.customer.customer_name),
                    (this.customer_email =
                        Response.data.customer.customer_email),
                    (this.customer_address =
                        Response.data.customer.customer_address),
                    (this.customer_country =
                        Response.data.customer.customer_country),
                    (this.customer_phone =
                        Response.data.customer.customer_phone),
                    (this.customer_phone_1 =
                        Response.data.customer.customer_phone_1);
                this.customer_faxmile = Response.data.customer.customer_faxmile;
                this.customer_tax_number =
                    Response.data.customer.customer_tax_number;
                this.customer_pic = Response.data.customer.customer_pic;
                this.customer_pic_phone =
                    Response.data.customer.customer_pic_phone;
            });
        },
        updateCustData(customer_code) {
            this.customer_code = customer_code;
            this.custData(customer_code);
        },
        updateAction() {
            axios({
                method: "put",
                url: `http://module.test/api/customer/${codeCustomer}`,
                data: {
                    customer_name: this.customer_name,
                    customer_address: this.customer_address,
                    customer_country: this.customer_country,
                    customer_phone: this.customer_phone,
                    customer_phone_1: this.customer_phone_1,
                    customer_faxmile: this.customer_faxmile,
                    customer_email: this.customer_email,
                    customer_tax_number: this.customer_tax_number,
                    customer_pic: this.customer_pic,
                    customer_pic_phone: this.customer_pic_phone,
                },
            }).then((response) => {
                console.log(response);
            });
        },
    },
};
</script>
