<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <div class="m-8">
    <h1 class="text-7xl">Welcome!!</h1>
    <p class="text-xl mb-3">
      Laravel + Inertia + Vue + PrimeVueのサンプルCRUDアプリ
    </p>
    <div class="text-xl">
      <div v-if="$page.props.auth.user">
        <Link href="/home" class="text-blue-400 hover:text-blue-500 underline">Home</Link>
      </div>
      <div v-else>
        <Link href="/login" class="text-blue-400 hover:text-blue-500 underline">login</Link> <br>
        <Link href="/register" class="text-blue-400 hover:text-blue-500 underline">register</Link>
      </div>  
    </div>
    
  </div>
  
</template>