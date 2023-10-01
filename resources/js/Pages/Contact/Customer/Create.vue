<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
</script>

<template>
    <AppLayout>
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Multi Columns Form</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label"
                                    >Your Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control p-1 rounded-sm"
                                    id="inputName5"
                                />
                            </div>
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label"
                                    >Your Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control p-1 rounded-sm"
                                    id="inputName5"
                                />
                            </div>
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label"
                                    >Your Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control p-1 rounded-sm"
                                    id="inputName5"
                                />
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="text"
                                    class="form-control p-1 rounded-sm"
                                    id="inputName5"
                                />
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"
                                    >State</label
                                >
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="gridCheck"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="gridCheck"
                                    >
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Reset
                                </button>
                            </div>
                        </form>
                        <!-- End Multi Columns Form -->
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
