$(".parallax").parallax('50%','.2');



function show(x) {
    if (x==0){
/*        $("#mm01").hide();
        $("#mm02").hide();*/
        $(".purchased_market_input_extra_field").show();
        $(".born_in_frame_input_extra_field").hide();
    }else {
/*        $("#mm01").show();
        $("#mm02").show();*/
        $(".purchased_market_input_extra_field").hide();
        $(".born_in_frame_input_extra_field").show();
    }


}


function calculateCost() {

    var kid_price = parseFloat(document.getElementById("kid_price").value);
    var kid_quatity = parseFloat(document.getElementById("kid_quatity").value);
    var feed_per_beg_price = parseFloat(document.getElementById("feed_per_beg_price").value);
    var stuff_cost = parseFloat(document.getElementById("stuff_cost").value);
    var if_selling_price = parseFloat(document.getElementById("if_selling_price").value);
    var if_live_kid = parseFloat(document.getElementById("if_live_kid").value);
    var if_weight_gain = parseFloat(document.getElementById("if_weight_gain").value);
    var if_days = parseFloat(document.getElementById("if_days").value);
    var kidding_price = kid_price*kid_quatity;

    var kid_percent = (kid_quatity*if_live_kid)/100;
    var total_weight = kid_percent*if_weight_gain;

    var totall_selling_price = total_weight*if_selling_price;


    var per_kid_having_feed = 90; //proti kid khabar khabe ak dine
    var total_kid_having_feed = (if_days*per_kid_having_feed*kid_quatity)/1000;
    var total_feed_beg = total_kid_having_feed/50;
    var per_kag_feeding_cost = feed_per_beg_price/50; // proti kg khaber dam
    var total_feeding_cost = per_kag_feeding_cost*total_kid_having_feed;

    var par_kids_medicine_cost = 6; //proti ta kid er medicine cost
    var per_kid_current_cost = 2.5; //proti ta kid er Current cost
    var per_kid_others_cost = 6; //proti ta kid er other cost

    var total_kids_medicine_cost = par_kids_medicine_cost*kid_quatity;
    var total_kid_current_cost = per_kid_current_cost*kid_quatity;
    var total_kid_others_cost = per_kid_others_cost*kid_quatity;



    var total_production_cost = kidding_price+total_feeding_cost+total_kids_medicine_cost+total_kid_current_cost+stuff_cost+total_kid_others_cost;

    var profit = totall_selling_price - total_production_cost;

    //alert(profit);


    document.getElementById("show_total_cost").innerHTML = total_production_cost;
    document.getElementById("show_total_kidding_cost").innerHTML = kidding_price;
    document.getElementById("show_total_feed_need").innerHTML = total_kid_having_feed;
    document.getElementById("show_total_feeding_cost").innerHTML = total_feeding_cost;
    document.getElementById("show_total_medicine_cost").innerHTML = total_kids_medicine_cost;
    document.getElementById("show_total_current_cost").innerHTML = total_kid_current_cost;
    document.getElementById("show_total_others_cost").innerHTML = total_kid_others_cost;
    document.getElementById("total_feed_beg").innerHTML = total_feed_beg;
    document.getElementById("show_stuff_cost").innerHTML = stuff_cost;

    document.getElementById("kid_wights").innerHTML = total_weight;
    document.getElementById("percent_kid").innerHTML = kid_percent;
    document.getElementById("show_selling_price").innerHTML = totall_selling_price;
    document.getElementById("show_selling_price_input").innerHTML = if_selling_price;
    document.getElementById("show_days").innerHTML = if_days;
    document.getElementById("show_profit").innerHTML = profit;
    document.getElementById("show_live_kid").innerHTML = if_live_kid;
    document.getElementById("show_live_kid_01").innerHTML = if_live_kid;





}