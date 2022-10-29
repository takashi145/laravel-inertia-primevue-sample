<script setup>
import { Inertia } from '@inertiajs/inertia';
import { onMounted, ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import Menubar from 'primevue/menubar';
import Button from 'primevue/button';
import Menu from 'primevue/menu';
import Dropdown from 'primevue/dropdown';
import Logo from '../Components/Logo.vue';
import Message from 'primevue/message';

const menu = ref()

const items = ref([
  {
    label: "ホーム",
    url: '/home'
  },
  {
    label: "投稿一覧",
    url: '/posts'
  },
])

const menu_items = ref([
    {
        label: 'My Page',
        command: () => {
          Inertia.get(`/user/${Inertia.page.props.auth.user.id}`)
        }
    },
    {
        label: 'Logout',
        command: () => {
          logout()
        }
    }
]);

const logout = () => {
  Inertia.post('/logout');
}

const toggle = (event) => {
  menu.value.toggle(event)
}

</script>

<template>
  <div class="h-screen">
    <header class="surface-100 shadow flex justify-content-between">
      <div class="flex m-3">
        <Logo />
        <div v-for="item in items" :key="item" class="mx-3 mt-1">
          <Link :href="item.url" v-bind:class="{'border-bottom-2 border-blue-200':$page.url == item.url}" class="text-700 hover:text-blue-300">{{ item.label }}</Link>
        </div>
      </div>
      
      <div class="mt-2 mr-4">
          <Button @click="toggle" icon="pi pi-user" class="p-button-rounded p-button-info p-button-text"></Button>
      </div>
      <Menu id="overlay_menu" ref="menu" :model="menu_items" :popup="true">
        <template #item="{item}">
          <div class="my-2">
            <Link v-if="item.command" @click="item.command" class="text-gray-600 hover:text-blue-300 m-3">{{ item.label }}</Link>
            <Link v-else :href="item.url" class="m-3 p-1">{{ item.label }}</Link> 
          </div>
        </template>
      </Menu>
    </header>

    <Message v-if="this.$page.props.flash.message" severity="success">{{ this.$page.props.flash.message }}</Message>
    <Message v-if="this.$page.props.flash.alert" severity="error">{{ this.$page.props.flash.alert }}</Message>
    
    <div class="p-4">
      <slot />
    </div>

  </div>
</template>
