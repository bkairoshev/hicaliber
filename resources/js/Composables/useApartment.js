import { ref, onBeforeMount } from "vue"
import { getApartments } from "../Api/apartment.js"

export function useApartment() {
    const apartments = ref(null)

    onBeforeMount(async () => {
        apartments.value = await getApartments()
    })

    const filter = async (params) => {
        apartments.value = await getApartments(params)
    }

    return { apartments, filter }
}


