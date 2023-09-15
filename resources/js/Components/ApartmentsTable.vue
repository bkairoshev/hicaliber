<script setup>
defineProps([
    "items", "loading"
])
</script>
<template>
    <el-table :data="items" style="width: 100%" v-loading="loading">
        <el-table-column prop="name" label="Name" />
        <el-table-column prop="price" label="Price" />
        <el-table-column prop="bedrooms" label="Bedrooms" />
        <el-table-column prop="bathrooms" label="Bathrooms" />
        <el-table-column prop="storeys" label="Storeys" />
        <el-table-column prop="garages" label="Garages" />
    </el-table>
</template>

