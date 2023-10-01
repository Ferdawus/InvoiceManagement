<script setup>
import { Link, router } from "@inertiajs/vue3";
</script>

<template>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    data-bs-target="#contact-nav"
                    data-bs-toggle="collapse"
                    href="#"
                >
                    <i class="bi bi-menu-button-wide"></i><span>Contact</span
                    ><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul
                    id="contact-nav"
                    class="nav-content collapse"
                    data-bs-parent="#sidebar-nav"
                >
                    <li>
                        <Link :href="route('admin.customer.index')">
                            <i class="bi bi-circle"></i><span>Customer</span>
                        </Link>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Supplier</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End contact Nav -->

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    data-bs-target="#products-nav"
                    data-bs-toggle="collapse"
                    href="#"
                >
                    <i class="bi bi-journal-text"></i><span>Products</span
                    ><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul
                    id="products-nav"
                    class="nav-content collapse"
                    data-bs-parent="#sidebar-nav"
                >
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i
                            ><span>Product Settings</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End products Nav -->

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    data-bs-target="#shop-nav"
                    data-bs-toggle="collapse"
                    href="#"
                >
                    <i class="bi bi-layout-text-window-reverse"></i
                    ><span>Shops</span
                    ><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul
                    id="shop-nav"
                    class="nav-content collapse"
                    data-bs-parent="#sidebar-nav"
                >
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Shop</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End shop Nav -->

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    data-bs-target="#invoice-nav"
                    data-bs-toggle="collapse"
                    href="#"
                >
                    <i class="bi bi-bar-chart"></i><span>Invoices</span
                    ><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul
                    id="invoice-nav"
                    class="nav-content collapse"
                    data-bs-parent="#sidebar-nav"
                >
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Invoice</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End invoice Nav -->

            <li class="nav-item">
                <a
                    class="nav-link collapsed"
                    data-bs-target="#icons-nav"
                    data-bs-toggle="collapse"
                    href="#"
                >
                    <i class="bi bi-gem"></i><span>Stock</span
                    ><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul
                    id="icons-nav"
                    class="nav-content collapse"
                    data-bs-parent="#sidebar-nav"
                >
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i
                            ><span>Opening Stock</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li>
            <!-- End Blank Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->
</template>
