<?php include "header.php"?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1 class="w-100 text-center text-warning">Poltry Cost Calculator</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="">
        <div class="row">
            <div class="col-md-6 col-12">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kid price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kid_price" name="kid_price" value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kid Quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kid_quatity" name="kid_quatity" value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Feed Per Beg Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="feed_per_beg_price" name="feed_per_beg_price"  value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Stuff Cost</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stuff_cost" name="stuff_cost" value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">If Selling Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="if_selling_price" name="if_selling_price" value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">If Live Kids</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="if_live_kid" name="if_live_kid" value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">If Weight Gain(1.8 or 2 kg)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="if_weight_gain" name="if_weight_gain" value="0.0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">If days</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="if_days" name="if_days" value="0.0">
                        </div>
                    </div>

                    <div class="form-group row purchased_market_input_extra_field">
                        <div class="col-sm-10">
                            <button onclick="calculateCost();" class="btn btn-success" type="button">Calculate</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-12">
                <h4>Total Costing: <span id="show_total_cost">0.0</span></h4>
                <p>Total Kidding Cost: <span id="show_total_kidding_cost">0.0</span></p>
                <p>Total Feed Need: <span id="show_total_feed_need">0.0</span></p>
                <p>Total Feed Beg: <span id="total_feed_beg">0.0</span></p>
                <p>Total Feeding Cost: <span id="show_total_feeding_cost">0.0</span></p>
                <p>Total Medicine Cost: <span id="show_total_medicine_cost">0.0</span></p>
                <p>Total Current Cost: <span id="show_total_current_cost">0.0</span></p>
                <p>Total Others Cost: <span id="show_total_others_cost">0.0</span></p>
                <p>Days: <span id="show_days">0.0</span></p>
                <p>Staff: <span id="show_stuff_cost">0.0</span></p>
                <p><span id="show_live_kid"></span>% kid: <span id="percent_kid">0.0</span></p>
                <p><span id="show_live_kid_01"></span>% kid weight: <span id="kid_wights">0.0</span></p>


                <h4>Total Selling Price(<span id="show_selling_price_input"></span>): <span id="show_selling_price">0.0</span></h4>
                <h4>Profit: <span id="show_profit" class="text-danger">0.0</span></h4>

<!--                <p><b>90tk </b>selling Price:  151000</p>
                <p><b>100tk </b>selling Price:  151000</p>
                <p><b>110tk </b>selling Price:  151000</p>
                <p><b>120tk </b>selling Price:  151000</p>
                <p><b>130tk </b>selling Price:  151000</p>
                <p><b>140tk </b>selling Price:  151000</p>
                <p><b>150tk </b>selling Price:  151000</p>
                <p><b>160tk </b>selling Price:  151000</p>
                <p><b>170tk </b>selling Price:  151000</p>
                <p><b>180tk </b>selling Price:  151000</p>-->
            </div>

        </div>
    </div>
</div>





<!--
<div class="container-fluid">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

-->
<?php include "footer.php"?>
