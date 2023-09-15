import { ref, onBeforeMount } from "vue"
import { getApartments } from "../Api/apartment.js"

export function useApartment() {
    const apartments = ref(null)
    const loading = ref(false)

    onBeforeMount(async () => {
        loading.value = true
        apartments.value = await getApartments()
        loading.value = false
    })

    const filter = async (params) => {
        loading.value = true
        apartments.value = await getApartments(params)
        loading.value = false
    }

    return { apartments, filter, loading }
}


