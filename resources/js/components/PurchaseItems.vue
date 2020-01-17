<template>
    <tbody>
        <tr>
            <td>{{product_name}}</td>
            <td>$ {{price}}</td>
            <td>{{qty}}</td>
            <td>$ {{subTotal}}</td>
        </tr>
    </tbody>
</template>
<script>
export default {
    props: ['product_name','price','qty'],

    computed: {
        subTotal(){
            return this.price * this.qty
        }
    }
}
</script>