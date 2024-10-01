<template>
  <GuestLayout title="Tạo lại mật khẩu">
    <form @submit.prevent="handleSubmit">
      <div class="mb-4">
        <label for="new-password" class="sr-only">Mật khẩu mới</label>
          <input id="new-password" name="password" type="password" required="" 
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
                 placeholder="Mật khẩu mới"/>
      </div>
      <div class="mb-4">
        <label for="password_repeat" class="sr-only">Nhập lại mật khẩu mới</label>
          <input id="password_repeat" name="password_repeat" type="password_repeat" required=""
                 class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
                 placeholder="Nhập lại mật khẩu mới"/>
      </div>
      <button
        type="submit"
        class="w-full bg-[#b8a79c] text-white py-2 rounded-md hover:bg-[#a69589] transition duration-300"
      >
        Xác nhận
      </button>
    </form>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from '../components/GuestLayout.vue'

const handleSubmit = () => {
  // Handle form submission
  console.log('Reset password form submitted')
}
</script>