<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
import Button from 'primevue/button';
import Sidebar from 'primevue/sidebar';
import { ref } from 'vue';

const visible = ref(false)
</script>

<template>
  <AppLayout>
    <Button icon="pi pi-align-justify" @click="visible = true" class="mr-2 p-button-outlined"></Button>

    <Sidebar v-model:visible="visible" :base-z-index="10000">
			<h3></h3>
		</Sidebar>

    <div class="m-8">
      ダッシュボード
    </div>
  </AppLayout>
</template>