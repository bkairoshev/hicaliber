const baseUrl = "http://127.0.0.1:8000/api/"

export const get = async (path, queryParams = {}) => {
    try {
        const url = baseUrl + path
        const queryString = new URLSearchParams(queryParams).toString()
        const fullUrl = queryString ? `${url}?${queryString}` : url

        const response = await fetch(fullUrl)

        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`)
        }

        const data = await response.json()

        return data
    } catch (error) {
        console.error('Fetch error:', error)
        throw error
    }
}
