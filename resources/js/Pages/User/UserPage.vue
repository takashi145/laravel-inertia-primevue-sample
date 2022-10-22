<script setup>
import { onMounted, ref } from '@vue/runtime-core';
import AppLayout from '../../Layouts/AppLayout.vue';

const props = defineProps([
  'user'
])

onMounted(() => {
  console.log(props.user)
})


</script>

<template>
  <AppLayout>
    ユーザー: {{ props.user.name }}
  </AppLayout>
</template>