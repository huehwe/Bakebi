<template>
    <div class="grid grid-cols-3 gap-6">
      <div class="col-span-2 grid grid-cols-2 gap-6">
        <div v-for="stat in stats" :key="stat.name" class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-semibold">{{ stat.name }}</h3>
          <p class="text-2xl font-bold mt-2">{{ stat.value }}</p>
        </div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-4">Lượt bán</h3>
        <!-- Add chart component here -->
      </div>
      <div class="col-span-3">
        <h3 class="text-lg font-semibold mb-4">Category</h3>
        <div class="grid grid-cols-6 gap-4">
          <div v-for="category in categories" :key="category.name" class="bg-white p-4 rounded-lg shadow text-center">
            <component :is="category.icon" class="w-8 h-8 mx-auto mb-2" />
            <p>{{ category.name }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { CakeIcon, EllipsisHorizontalIcon, GiftIcon, BeakerIcon } from '@heroicons/vue/24/outline'
  
  export default {
    name: 'DashboardContent',
    components: {
      CakeIcon, EllipsisHorizontalIcon, GiftIcon, BeakerIcon
    },
    data() {
      return {
        stats: [
          { name: 'Sản Phẩm', value: '1,234' },
          { name: 'Thống kê Doanh số', value: '$56,789' },
          { name: 'Sản Phẩm', value: '5,678' },
          { name: 'Thống kê Doanh số', value: '$98,765' },
        ],
        categories: [
          { name: 'Bánh kem', icon: CakeIcon },
          { name: 'Bánh cuộn', icon: CakeIcon },
          { name: 'Bánh sinh nhật', icon: CakeIcon },
          { name: 'Khác', icon: EllipsisHorizontalIcon },
          { name: 'Phụ kiện', icon: GiftIcon },
          { name: 'Set người tiêu', icon: BeakerIcon },
        ]
      }
    }
  }
  </script>