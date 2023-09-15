<script setup>
import { ref } from 'vue'

const emit = defineEmits(["submit"])

const form = ref({})

const onSubmit = () => {
    for (const key in form.value) {
        if (form.value[key] === null) {
            delete form.value[key];
        }
    }
    emit("submit", form.value)
}

const onReset = () => {
    form.value = {}
    emit("submit", {})
}

</script>

<template>
    <el-form :inline="true" :model="form" class="demo-form-inline">
        <el-form-item label="Name">
            <el-input v-model="form.name" placeholder="Name" clearable />
        </el-form-item>
        <el-form-item label="Min price">
            <el-input-number v-model="form.price_min" :min="0" />
        </el-form-item>
        <el-form-item label="Max price">
            <el-input-number v-model="form.price_max" :min="form.price_min" />
        </el-form-item>
        <el-form-item label="Bedrooms">
            <el-input-number v-model="form.bedrooms" :min="0" />
        </el-form-item>
        <el-form-item label="Bathrooms">
            <el-input-number v-model="form.bathrooms" :min="0" />
        </el-form-item>
        <el-form-item label="Storeys">
            <el-input-number v-model="form.storeys" :min="0" />
        </el-form-item>
        <el-form-item label="Garages">
            <el-input-number v-model="form.garages" :min="0" />
        </el-form-item>
        <el-form-item>
            <el-button type="primary" @click="onSubmit">Filter</el-button>
            <el-button type="info" @click="onReset">Reset</el-button>
        </el-form-item>
    </el-form>
</template>
