<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cart Component (Under Construction)
                        <div>
                            <router-link to="/orderbook" class="nav-link">
                                <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">
                                    <b>Go</b> <i class="fas fa-minus-circle"></i> <b>Back</b>
                                </button>
                            </router-link>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="cart-section container">
                            <div>
                                <h2>1 item(s) in Shopping Cart</h2>
                                <div class="cart-table">
                                    <div class="cart-table-row">
                                        <div class="cart-table-row-left">
                                            <a href="#"><img src="" alt="item" class="cart-table-img"></a>
                                            <div class="cart-item-details">
                                                <div class="cart-table-item"><a href="#">name</a></div>
                                                <div class="cart-table-description">details</div>
                                            </div>
                                        </div>
                                        <div class="cart-table-row-right">
                                            <div class="cart-table-actions">
                                                <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="remove">
                                                    <button type="submit" class="cart-options">Remove</button>
                                                </form>

                                                <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="saveForLater">
                                                    <button type="submit" class="cart-options">Save for Later</button>
                                                </form>
                                            </div>
                                            <div>
                                                <select class="quantity" data-id="" data-productQuantity="">
                                                    <!-- @for ($i = 1; $i < 5 + 1 ; $i++)
                                                        <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                    @endfor -->
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                            <div>200</div>
                                        </div>
                                    </div> <!-- end cart-table-row -->
                                </div> <!-- end cart-table -->
                                    <a href="#" class="have-code">Have a Code?</a>
                                    <div class="have-code-container">
                                         <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="coupon">
                                            <input type="text" name="coupon_code" id="coupon_code">
                                            <button type="submit" class="button button-plain">Apply</button>
                                        </form>
                                    </div> <!-- end have-code-container -->
                                <div class="cart-totals">
                                    <div class="cart-totals-left">
                                        Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                                    </div>

                                    <div class="cart-totals-right">
                                        <div>
                                            Subtotal <br>
                                                <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="subTotal">
                                                    <button type="submit" style="font-size:14px;">Remove</button>
                                                </form>
                                                <hr>
                                                New Subtotal <br>
                                            Tax 1%)<br>
                                            <span class="cart-totals-total">Total</span>
                                        </div>
                                        <div class="cart-totals-subtotal">
                                            Present Price <br>
                                            - Discount <br>&nbsp;<br>
                                                <hr>
                                                <br>
                                            Final Price <br>
                                            <span class="cart-totals-total">1000</span>
                                        </div>
                                    </div>
                                </div> <!-- end cart-totals -->

                                <div class="cart-buttons">
                                    <a href="#" class="button">Continue Shopping</a>
                                    <a href="#" class="button-primary">Proceed to Checkout</a>
                                </div>
                                    <h3>No items in Cart!</h3>
                                    <div class="spacer"></div>
                                    <a href="#" class="button">Continue Shopping</a>
                                    <div class="spacer"></div>

                                <h2>1 item(s) Saved For Later</h2>

                                <div class="saved-for-later cart-table">
                                    <div class="cart-table-row">
                                        <div class="cart-table-row-left">
                                            <a href="#"><img src="" alt="item" class="cart-table-img"></a>
                                            <div class="cart-item-details">
                                                <div class="cart-table-item"><a href="#">name</a></div>
                                                <div class="cart-table-description">details</div>
                                            </div>
                                        </div>
                                        <div class="cart-table-row-right">
                                            <div class="cart-table-actions">
                                                <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="remove">
                                                    <button type="submit" class="cart-options">Remove</button>
                                                </form>

                                                <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="moveToCart">
                                                    <button type="submit" class="cart-options">Move to Cart</button>
                                                </form>
                                            </div>

                                            <div></div>
                                        </div>
                                    </div> <!-- end cart-table-row -->
                                </div> <!-- end saved-for-later -->
                                <h3>You have no items Saved for Later.</h3>
                            </div>
                        </div> <!-- end cart-section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
