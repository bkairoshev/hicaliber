import { get } from "./api.js"
export const getApartments = async (params = {}) => {
    const response = await get('apartments', params)
    return response.data
}
