<template>
  <GuestLayout title="Request Password">
    <form @submit.prevent="handleSubmit">
      <div class="mb-4">
        <input
          type="email"
          placeholder="Email"
          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#b8a79c]"
          required
        />
      </div>
      <button
        type="submit"
        class="w-full bg-[#b8a79c] text-white py-2 rounded-md hover:bg-[#a69589] transition duration-300"
      >
        Gửi mã OTP đến email
      </button>
    </form>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from '../components/GuestLayout.vue'

const handleSubmit = () => {
  // Handle form submission
  console.log('Request password form submitted')
}
</script>