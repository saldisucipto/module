<template>
    <app-layouts>
        <template v-slot:header_content>
            <div class="header bg-primary pb-6 py-4">
                <div class="container-fluid">
                    <div class="header-body">
                        <!-- Card stats -->
                        <h1 class="text-white py-3">
                            Company Informations Data
                        </h1>
                    </div>
                </div>
            </div>
        </template>
        <template v-slot:main_content_page>
            <div class="container-fluid mt--6">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="my-2">
                            <div class="modal-content">
                                <div class="modal-header my-1">
                                    <h6
                                        class="modal-title"
                                        id="modal-title-default"
                                    >
                                        <div
                                            class="d-flex justify-content-between align-self-center"
                                        >
                                            <div class="">
                                                <i
                                                    class="fas fa-building text-blue"
                                                ></i>
                                            </div>
                                            <div class="mx-2 text-blue">
                                                Edit Company Informations
                                            </div>
                                        </div>
                                    </h6>
                                </div>
                                <div class="modal-body">
                                    <vee-form
                                        role="form"
                                        :validation-schema="inventorySchema"
                                        @submit="createForm"
                                    >
                                        <div class="form-row">
                                            <div class="form-group col-4">
                                                <label
                                                    for="company_name"
                                                    class="form-control-label"
                                                    >Company Name</label
                                                >
                                                <vee-field
                                                    class="form-control form-control-sm text-uppercase"
                                                    type="text"
                                                    placeholder="PT. MAJU MUNDUR SOLUSI SEJAHTERA"
                                                    id="company_name"
                                                    name="company_name"
                                                />
                                                <ErrorMessage
                                                    class="text-danger text-xs"
                                                    name="company_name"
                                                />
                                            </div>
                                            <div class="form-group col-8">
                                                <label
                                                    for="company_name_tag"
                                                    class="form-control-label"
                                                    >Company Tagline</label
                                                >
                                                <vee-field
                                                    class="form-control form-control-sm"
                                                    type="text"
                                                    placeholder="Solutions For All Your Problem"
                                                    id="company_name_tag"
                                                    name="company_name_tag"
                                                />
                                                <ErrorMessage
                                                    class="text-danger text-xs"
                                                    name="company_name_tag"
                                                />
                                            </div>
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
                                                <label
                                                    class="form-control-label"
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
                                                    <option value="PCS">
                                                        PCS
                                                    </option>
                                                    <option value="MTR">
                                                        MTR
                                                    </option>
                                                    <option value="ROLL">
                                                        ROLL
                                                    </option>
                                                    <option value="LOT">
                                                        LOT
                                                    </option>
                                                </vee-field>
                                                <ErrorMessage
                                                    class="text-danger text-xs"
                                                    name="inventory_type_1"
                                                />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label
                                                    class="form-control-label"
                                                    >Unit</label
                                                >
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
                                                <label
                                                    class="form-control-label"
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
                                                    <option value="BOX">
                                                        BOX
                                                    </option>
                                                    <option value="KG">
                                                        KG
                                                    </option>
                                                    <option value="PACK">
                                                        PACK
                                                    </option>
                                                </vee-field>
                                                <ErrorMessage
                                                    class="text-danger text-xs"
                                                    name="inventory_type_2"
                                                />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label
                                                    class="form-control-label"
                                                    >Unit</label
                                                >
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
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-2">
                                                <label
                                                    for="inventory_stok"
                                                    class="form-control-label"
                                                    >Stok</label
                                                >
                                                <vee-field
                                                    class="form-control form-control-sm"
                                                    type="number"
                                                    placeholder="Stock"
                                                    maxlength="4"
                                                    id="inventory_stok"
                                                    name="inventory_stok"
                                                />
                                                <ErrorMessage
                                                    class="text-danger text-xs"
                                                    name="inventory_stok"
                                                />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label
                                                    for="inventory_part_number"
                                                    class="form-control-label"
                                                    >Inventory Part
                                                    Number</label
                                                >
                                                <vee-field
                                                    class="form-control form-control-sm"
                                                    type="text"
                                                    placeholder="Part Number"
                                                    maxlength="13"
                                                    id="inventory_part_number"
                                                    name="inventory_part_number"
                                                />

                                                <ErrorMessage
                                                    class="text-danger text-xs"
                                                    name="inventory_part_number"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="inventory_images"
                                                class="form-control-label"
                                                >Inventory Images</label
                                            >
                                            <vee-field
                                                class="form-control"
                                                ref="imagesFile"
                                                type="file"
                                                id="inventory_images"
                                                name="inventory_images"
                                                @change="imageUpload"
                                            />
                                        </div>
                                        <div
                                            v-if="imagePreviewURL"
                                            class="form-group"
                                        >
                                            <img
                                                class="img-thumbnail rounded mx-auto d-block"
                                                :src="imagePreviewURL"
                                                alt=""
                                            />
                                        </div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Save changes
                                        </button>
                                    </vee-form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <img
                            class="img-fluid"
                            src="/assets/img/company-info.png"
                            alt="Company Informations"
                        />
                    </div>
                </div>
                <!-- Dark table -->
            </div>
        </template>
    </app-layouts>
</template>
<script>
import AppLayouts from "../components/layouts/AppLayouts.vue";

export default {
    name: "CompanyInfo",
    components: {
        AppLayouts,
    },
    data() {
        return {};
    },
};
</script>
