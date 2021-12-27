<template>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">
                            <slot name="title"> Total Trafic </slot>
                        </h5>
                        <span class="h2 font-weight-bold mb-0">
                            <slot name="sum">350,897</slot>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div
                            class="
                                icon icon-shape
                                bg-gradient-red
                                text-white
                                rounded-circle
                                shadow
                            "
                        >
                            <slot name="icons"
                                ><i class="ni ni-active-40"></i
                            ></slot>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"
                        ><i class="fa fa-arrow-up"></i>
                        <slot name="presentase">3.48%</slot>
                    </span>
                    <span class="text-nowrap">
                        <slot name="monthStatus">Since last month</slot>
                    </span>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Panel Info",
};
</script>
