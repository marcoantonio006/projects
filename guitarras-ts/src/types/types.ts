export type Guitar = {
    id: number
    name: string
    image: string
    description: string
    price: number
}

/* Con interface: 
    interface Guitar {
        id: number
        name: string
        image: string
        description: string
        price: number
    }
*/

export type CartItem = Guitar & {
    quantity: number
}

/* Types
    export type GuitarItem = Pick<Guitar, 'id' | 'name' | 'price'> & {
        quantity: number
}
*/

/* Herencia con Interface
    export interface GuitarItem extends Guitar & {
    quantity: number
}


*/