<template>
<div class="side-bar">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" v-for="menu in list_menu" :key="menu.id">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" v-bind:data-target="'#collapseTwo' + menu.id"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>{{ menu.name }}</span>
            </a>
            <div v-bind:id="'collapseTwo' + menu.id" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="buttons.html">Buttons</a>
                    <a class="collapse-item" href="cards.html">Cards</a>
                </div>
            </div>
        </li>
    </ul>
</div>
  
</template>

<script>
export default {
    data() {
        return {
            menu: {
                name: '',
                group: '',
                parent_id: 0,
                priority: 0,
            },
            list_menu: [],
            errors: []
        }
    },

    created() {
        this.getListMenu()
    },

    methods: {
        getListMenu() {
            axios.get('/admin/get-list-menu')
            .then(response => {
                this.list_menu = response.data
            })
            .catch(error => {
                
            })
        }
    }
}
</script>

<style>
    .sidebar {
        min-height: 260vh;
    }
</style>