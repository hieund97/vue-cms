<template>
<div class="side-bar">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Vue CMS</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" v-for="(menu, k) in list_menu" :key="k">
            <a class="nav-link collapsed" v-bind:href="menu.url" v-bind:data-toggle="menu.child ? 'collapse' : ''" v-bind:data-target="'#collapse-' + k"
                aria-expanded="true" aria-controls="collapseTwo">
                <i v-bind:class="menu.icon"></i>
                <span>{{ menu.name }}</span>
            </a>
            <div v-if="menu.child" v-bind:id="'collapse-' + k" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div  class="bg-white py-2 collapse-inner rounded">
                    <a v-for="(child, index) in menu.child" :key="index" class="collapse-item" v-bind:href="child.url">{{ child.name }}</a>
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