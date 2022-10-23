<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
import { ref } from 'vue';

const visible = ref(false)
</script>

<template>
  <AppLayout>
    <div class="m-4">
      <h3>ログイン成功!!</h3>
    </div>
  </AppLayout>
</template>