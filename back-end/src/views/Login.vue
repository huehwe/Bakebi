<template>
  <GuestLayout title="Đăng nhập">
    <form @submit.prevent="handleSubmit">
      <div class="space-y-4">
        <input
          type="email"
          placeholder="Email"
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
          required
        />
        <input
          type="password"
          placeholder="Password"
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
          required
        />
      </div>
      <button
        type="submit"
        class="w-full bg-[#b8a79c] text-white py-2 rounded-md hover:bg-[#a69589] transition duration-300 mt-6"
      >
        Đăng nhập
      </button>
      <div class="mt-4 text-center">
        <a href="#" class="text-sm text-[#b8a79c] hover:underline">Đăng kí tài khoản mới</a>
        <span class="mx-2 text-gray-500">|</span>
        <router-link to ="/request-password" class="text-sm text-[#b8a79c] hover:underline">Quên mật khẩu?</router-link>
      </div>
    </form>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from '../components/GuestLayout.vue'

const handleSubmit = () => {
  // Handle form submission
  console.log('Login form submitted')
}
</script>