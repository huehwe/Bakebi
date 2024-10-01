<template>
  <div class="min-h-screen flex items-center justify-center bg-[#f5ede6] p-4">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
      <h2 class="text-2xl font-semibold text-center mb-6">{{ title }}</h2>
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
defineProps({
  title: String
})
</script>