<template>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6 "> -->
                <table class="table">
                    <tr>
                        <td align="center" style="border:none;">
                            <img src="https://img.icons8.com/color/240/000000/ok--v1.png">
                        </td>
                    </tr>
                    <tr>
                        <td style="border:none;" align="center">Thank you for your purchase.</td>
                        <td style="border:none;" align="center"></td>
                    </tr>
                    <tr>
                        <td style="border:none;" align="center">Your order # is: {{order_id}}</td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="row">
                <h3 class="title is-4">Order Date: {{order_date}}</h3>
                <br>
                <table class="table">
                    <thead>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Sub Total</th>
                    </thead>
                    <slot></slot>
                    <tfoot>
                        <tr>
                            <td colspan="3" align="right">Grand Total</td>
                            <td>$ {{total_cost}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="" align="center">
                <a :href="product_url" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
</template>
<script>
export default {
    props: ['order_id','total_cost','product_url','order_date']
}
</script>