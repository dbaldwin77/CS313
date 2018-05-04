function calculate() {
        var num1 = document.getElementById('cost1').innerHTML;
        var num2 = document.getElementById('cost2').innerHTML;
        var num3 = document.getElementById('cost3').innerHTML;
        
        var sum = Number(num1) + Number(num2) + Number(num3);
        
        var tax = sum * 0.05;
        var shipping = sum * 0.10;
        var totalSum = sum + tax + shipping;
        document.getElementById('tax').innerHTML = tax.toFixed(2);
        document.getElementById('shipping').innerHTML = shipping.toFixed(2);
        document.getElementById('total').innerHTML = totalSum.toFixed(2);
}

function addToCart(str) {
    var res1 = str.match(/100/);
    if (res1 !== null)
    {
         document.getElementById('cartItem1').innerHTML = "Box of 100 pencils";
         document.getElementById('cost1').innerHTML = 5.99;
    }
    var res2 = str.match(/200/);
    if (res2 !== null)
    {
         document.getElementById('cartItem1').innerHTML = "Box of 200 pencils";
         document.getElementById('cost1').innerHTML = 9.99;
    }
    var res3 = str.match(/300/);
    if (res3 !== null)
    {
         document.getElementById('cartItem1').innerHTML = "Box of 300 pencils";
         document.getElementById('cost1').innerHTML = 13.99;
    }
    var res4 = str.match(/400/);
    if (res4 !== null)
    {
         document.getElementById('cartItem1').innerHTML = "Box of 400 pencils";
         document.getElementById('cost1').innerHTML = 16.99;
    }
    calculate();
    checkItem();
}

function addToCart2(str) {
    var res1 = str.match(/5/);
    if (res1 !== null)
    {
         document.getElementById('cartItem2').innerHTML = "Box of 5 erasers";
         document.getElementById('cost2').innerHTML = 5.99;
    }
    var res2 = str.match(/10/);
    if (res2 !== null)
    {
         document.getElementById('cartItem2').innerHTML = "Box of 10 erasers";
         document.getElementById('cost2').innerHTML = 9.99;
    }
    var res3 = str.match(/15/);
    if (res3 !== null)
    {
         document.getElementById('cartItem2').innerHTML = "Box of 15 erasers";
         document.getElementById('cost2').innerHTML = 13.99;
    }
    var res4 = str.match(/20/);
    if (res4 !== null)
    {
         document.getElementById('cartItem2').innerHTML = "Box of 20 erasers";
         document.getElementById('cost2').innerHTML = 16.99;
    }
    calculate();
    checkItem();    
}

function addToCart3(str) {
    var res1 = str.match(/10/);
    if (res1 !== null)
    {
         document.getElementById('cartItem3').innerHTML = "Box of 10 pens";
         document.getElementById('cost3').innerHTML = 5.99;
    }
    var res2 = str.match(/20/);
    if (res2 !== null)
    {
         document.getElementById('cartItem3').innerHTML = "Box of 20 pens";
         document.getElementById('cost3').innerHTML = 9.99;
    }
    var res3 = str.match(/30/);
    if (res3 !== null)
    {
         document.getElementById('cartItem3').innerHTML = "Box of 30 pens";
         document.getElementById('cost3').innerHTML = 13.99;
    }
    var res4 = str.match(/40/);
    if (res4 !== null)
    {
         document.getElementById('cartItem3').innerHTML = "Box of 40 pens";
         document.getElementById('cost3').innerHTML = 16.99;
    }
    calculate();
    checkItem();
}

function removeItem1()
{
         document.getElementById('cartItem1').innerHTML = " ";
         document.getElementById('cost1').innerHTML = " ";
    calculate();
    checkItem();
}
function removeItem2()
{
         document.getElementById('cartItem2').innerHTML = " ";
         document.getElementById('cost2').innerHTML = " ";
    calculate();
    checkItem(); 
}
function removeItem3()
{
         document.getElementById('cartItem3').innerHTML = " ";
         document.getElementById('cost3').innerHTML = " ";
    calculate();
    checkItem();
}

function checkItem() {
               var item1 = document.getElementById('cartItem1').innerHTML;
                document.getElementById('itemOne').value = item1;
                var item2 = document.getElementById('cartItem2').innerHTML;
                document.getElementById('itemTwo').value = item2;
                var item3 = document.getElementById('cartItem3').innerHTML;
                document.getElementById('itemThree').value = item3;
                var myTotal =  document.getElementById('total').innerHTML;
                document.getElementById('totalAmount').value = myTotal;
}

$(document).ready(function(){
        $("#cart").hide();
});

$(document).ready(function(){
    $("button").click(function(){
        $("#cart").show();
});
});
    