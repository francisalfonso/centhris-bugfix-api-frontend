Technical Exam Frontend Developer 

You are given this bug in a real CentHRIS module:

<template>
‹div v-for="emp in employees" : key="emp. id">
{emp. full_name }}
</div>
</ template>
<script setup>
import { ref, watch ) from 'vue';
const search = ref ('');
const employees = ref ( [l);
watch (search, async () => {
const res = await
fetch (/api/employees?search=$(search.value)');
employees.value = res. data; // • TypeError: res. data
undefined
)) ;
</ script>

Identify at least 3 issues and fix them.
