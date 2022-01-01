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
                                    <a class="dropdown-item" href="#">
                                        <span class="badge badge-info">
                                            <i class="fas fa-eye"></i>
                                            Details
                                        </span>
                                    </a>
                                    <a class="dropdown-item" href="#">
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
</template>

<script>
export default {
    name: "CustomerItem",
    props: ["customerData"],
};
</script>
