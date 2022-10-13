<script setup>
import Menubar from 'primevue/menubar';
import Button from 'primevue/button';
import Dropdown from 'primevue/dropdown';
import { Inertia } from '@inertiajs/inertia';

const items = [
  {
    label: "Dashboard",
    url: '/dashboard'
  },
]

const logout = () => {
  Inertia.post('/logout');
}
</script>

<template>
  <div class="h-screen">
    <Menubar :model="items" class="bg-surface-300 shadow">
      <template #start>
        <div class="text-xl">Logo</div>
      </template>
      <template #item="{item}">
        <div class="mx-3">
          <Link :href="item.url">{{ item.label }}</Link>
        </div>
      </template>
      <template #end>
        <Button @Click="logout()" class="mx-3">ログアウト</Button>
      </template>
    </Menubar>

    <div class="p-4">
      <slot />
    </div>

  </div>
</template>
