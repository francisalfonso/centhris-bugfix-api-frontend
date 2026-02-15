<template>
  <div v-for="employee in employees" :key="employee.id">
    {{ employee.full_name }}
  </div>
</template>

<script setup>
import { ref, watch, onMounted } from 'vue'

const search = ref('')
const employees = ref([])

const fetchEmployees = async () => {
  try {
    const response = await fetch(`/api/employees?search=${search.value}`)
    if (!response.ok) throw new Error('Failed to fetch employees')
    employees.value = await response.json()
  } catch (error) {
    console.error('Error fetching employees:', error)
  }
}

// Fetch on page load just to make sure the employees are being fetched properly from the api
onMounted(fetchEmployees)
watch(search, fetchEmployees)
</script>
