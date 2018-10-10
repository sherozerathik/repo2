
$(document).on('click', '#box_freq_1', function() {
    select_frequency(1);
});
$(document).on('click', '#box_freq_2', function() {
    select_frequency(2);
});
$(document).on('click', '#box_freq_3', function() {
    select_frequency(3);
});

$(document).on('click', '#box_curr_1', function() {
    select_currency(1);
});
$(document).on('click', '#box_curr_2', function() {
    select_currency(2);
});
$(document).on('click', '#box_curr_3', function() {
    select_currency(3);
});
$(document).on('click', '#box_curr_4', function() {
    select_currency(4);
});
$(document).on('click', '#box_curr_5', function() {
    select_currency(5);
});

$(document).on('click', '#box_plan_1', function() {
    select_plan(1);
});
$(document).on('click', '#box_plan_2', function() {
    select_plan(2);
});
$(document).on('click', '#box_plan_3', function() {
    select_plan(3);
});


function select_frequency(n) {

    var total_freq = $('#total_freq').val();

    for(var a = 1; a <= total_freq; a++){
        var clasFreq = "inner-box";
        if(n == a){ clasFreq = "inner-box inner-box-selected"; }
        $('#box_freq_'+a).attr('class', clasFreq);
    }

    $('#selected_freq').val(n);
    console.log(freqSelection[(n-1)]);
    var selected_curr = $('#selected_curr').val();
    if(selected_curr > 0){
        select_currency(selected_curr);
    }else{
        getTotalPrice();
    }
}

function select_currency(n) {
    var total_curr = $('#total_curr').val();

    for(var a = 1; a <= total_curr; a++){
        var clasCurr = "inner-box-2";
        if(n == a){ clasCurr = "inner-box-2 inner-box-2-selected"; }
        $('#box_curr_'+a).attr('class', clasCurr);
    }

    $('#selected_curr').val(n);
    console.log(currSelection[(n-1)]);
    change_plan_currency(n);
    getTotalPrice();
}

function change_plan_currency(curr) {
    var currTxt = currSelection[(curr-1)];
    var total_plan = $('#total_plan').val();

    var sel_freq = $('#selected_freq').val();

    for(var a = 1; a <= total_plan; a++){
        var currVal = pricingTable[(a-1)][(curr-1)];
        var textPrice = '<font style="text-transform:uppercase;">'+currTxt+'</font> '+currVal.toFixed(2)+' / Month';

        if(sel_freq == 2){
            var disc = 20;
            currVal2 = parseFloat(currVal) - (parseFloat(currVal) * disc / 100)
            textPrice = '<font style="text-transform:uppercase;text-decoration:line-through;">'+currTxt+' '+currVal.toFixed(2)+'</font> '
                        + '<font style="color:#666;">'+disc+'% off</font><br>'
                        + '<font style="text-transform:uppercase;">'+currTxt+'</font> '+currVal2.toFixed(2)+' / Month';
        } else if(sel_freq == 3){
            var disc = 40;
            currVal2 = parseFloat(currVal) - (parseFloat(currVal) * disc / 100)
            textPrice = '<font style="text-transform:uppercase;text-decoration:line-through;">'+currTxt+' '+currVal.toFixed(2)+'</font> '
                + '<font style="color:#666;">'+disc+'% off</font><br>'
                + '<font style="text-transform:uppercase;">'+currTxt+'</font> '+currVal2.toFixed(2)+' / Month';
        }

        $('#plan_price_'+a).html(textPrice);
    }

}

function select_plan(n) {
    var total_plan = $('#total_plan').val();

    for(var a = 1; a <= total_plan; a++){
        var clasPlan = "inner-box";
        if(n == a){ clasPlan = "inner-box inner-box-selected"; }
        $('#box_plan_'+a).attr('class', clasPlan);
    }

    $('#selected_plan').val(n);
    console.log(planSelection[(n-1)]);
    getTotalPrice();
}

function getTotalPrice(){

    var sel_freq = $('#selected_freq').val();
    var sel_curr = $('#selected_curr').val();
    var sel_plan = $('#selected_plan').val();

    var price = 0;

    if(sel_freq != 0 && sel_freq > 0 && sel_curr != 0 && sel_curr > 0 && sel_plan != 0 && sel_plan > 0){
        var monthly_price = pricingTable[(sel_plan-1)][(sel_curr-1)];

        var months = 0;
        if(sel_freq == 1){ months = 1; }
        else if(sel_freq == 2){ months = 12; }
        else if(sel_freq == 3){ months = 24; }

        var disc = 0;
        if(sel_freq == 2){ disc = 20; }
        else if(sel_freq == 3){ disc = 40; }

        price = parseFloat(monthly_price) * parseFloat(months);
        if(disc > 0){
            price = parseFloat(price) - (parseFloat(price) * parseFloat(disc) / 100);
        }

        $('#monthly_price').val(monthly_price.toFixed(2));
        $('#total_months').val(months);
        $('#discount').val(disc);

        console.log(planSelection[(sel_plan-1)]+'-'+currSelection[(sel_curr-1)]+'-'+freqSelection[(sel_freq-1)]);
    }
    $('#total_value').val(price.toFixed(2));

}