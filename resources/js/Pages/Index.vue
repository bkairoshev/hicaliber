<script setup>
import { useApartment } from "../Composables/useApartment.js"
import ApartmentsFilter from "../Components/ApartmentsFilter.vue"
import ApartmentsTable from "../Components/ApartmentsTable.vue"

const { apartments, filter, loading } = useApartment()

</script>
<template>
    <ApartmentsFilter @submit="filter" />
    <ApartmentsTable :items="apartments" :loading="loading" />
</template>

