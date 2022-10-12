<script setup>
import { Inertia } from '@inertiajs/inertia';
import Button from 'primevue/button';
import Menubar from 'primevue/menubar';
import { Link } from '@inertiajs/inertia-vue3';

const items = [
  {
    label: "Dashboard",
    url: '/dashboard'
  },
]

const logout = () => {
  Inertia.post("logout");
}
</script>

<template>
  <div>
    <Menubar :model="items">
      <template #start>
        <div class="text-xl">Logo</div>
      </template>
      <template #item="{item}">
        <div class="mx-3">
          <Link :href="item.url">{{ item.label }}</Link>
        </div>
      </template>
      <template #end>
        <Button @Click="logout" class="mx-3">ログアウト</Button>
      </template>
    </Menubar>
  </div>
</template>
