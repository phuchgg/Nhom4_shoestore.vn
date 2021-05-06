if(localStorage.length <=3){
    $("#listcart").html("<tr><td colspan='6'><h4>Bạn chưa có sản phẩm nào trong giỏ hàng!!!</h4><br><a href='shop.html'>Tiếp tục mua sắm.</a></td></tr>");
}
else{

   if(localStorage.getItem('tennike1') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_nike1' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='nike1' src=''></a></td><td class='product-name'><a href='single-product.html' class='nike1'></a> </td><td class='product-price'><span class='nike1'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='nike1' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='nike1'><b></span></span></td></tr>");    

            $("img.nike1").attr("src",rshanike1);
            $("a.nike1").text(rstennike1);
            $("span.nike1").text(rsdgnike1);
            $("b.nike1").text(Tongtiennike1);
            $("input.nike1").attr("value",rsslnike1);
    }
    if(localStorage.getItem('tennike2') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_nike2' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='nike2' src=''></a></td><td class='product-name'><a href='single-product.html' class='nike2'></a> </td><td class='product-price'><span class='nike2'></td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='nike2' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='nike2'><b></span></span></td></tr>");    

            $("img.nike2").attr("src",rshanike2);
            $("a.nike2").text(rstennike2);
            $("span.nike2").text(rsdgnike2);
            $("b.nike2").text(Tongtiennike2);
            $("input.nike2").attr("value",rsslnike2);
    }
    if(localStorage.getItem('tenbitits1') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_bitits1' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='bitits1' src=''></a></td><td class='product-name'><a href='single-product.html' class='bitits1'></a> </td><td class='product-price'><span class='bitits1'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='bitits1' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='bitits1'><b></span></span></td></tr>");    

            $("img.bitits1").attr("src",rshabitits1);
            $("a.bitits1").text(rstenbitits1);
            $("span.bitits1").text(rsdgbitits1);
            $("b.bitits1").text(Tongtienbitits1);
            $("input.bitits1").attr("value",rsslbitits1);
    }
    if(localStorage.getItem('tenbitits2') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_bitits2' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='bitits2' src=''></a></td><td class='product-name'><a href='single-product.html' class='bitits2'></a> </td><td class='product-price'><span class='bitits2'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='bitits2' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='bitits2'><b></span></span></td></tr>");    

            $("img.bitits2").attr("src",rshabitits2);
            $("a.bitits2").text(rstenbitits2);
            $("span.bitits2").text(rsdgbitits2);
            $("b.bitits2").text(Tongtienbitits2);
            $("input.bitits2").attr("value",rsslbitits2);
    }
    if(localStorage.getItem('tenbitits3') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_bitits3' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='bitits3' src=''></a></td><td class='product-name'><a href='single-product.html' class='bitits3'></a> </td><td class='product-price'><span class='bitits3'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='bitits3' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='bitits3'><b></span></span></td></tr>");    

            $("img.bitits3").attr("src",rshabitits3);
            $("a.bitits3").text(rstenbitits3);
            $("span.bitits3").text(rsdgbitits3);
            $("b.bitits3").text(Tongtienbitits3);
            $("input.bitits3").attr("value",rsslbitits3);
    }
    if(localStorage.getItem('tenadidas1') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_adidas1' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='adidas1' src=''></a></td><td class='product-name'><a href='single-product.html' class='adidas1'></a> </td><td class='product-price'><span class='adidas1'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='adidas1' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='adidas1'><b></span></span></td></tr>");    

            $("img.adidas1").attr("src",rshaadidas1);
            $("a.adidas1").text(rstenadidas1);
            $("span.adidas1").text(rsdgadidas1);
            $("b.adidas1").text(Tongtienadidas1);
            $("input.adidas1").attr("value",rssladidas1);
    }
    if(localStorage.getItem('tenadidas2') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_adidas2' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='adidas2' src=''></a></td><td class='product-name'><a href='single-product.html' class='adidas2'></a> </td><td class='product-price'><span class='adidas2'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='adidas2' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='adidas2'><b></span></span></td></tr>");    

            $("img.adidas2").attr("src",rshaadidas2);
            $("a.adidas2").text(rstenadidas2);
            $("span.adidas2").text(rsdgadidas2);
            $("b.adidas2").text(Tongtienadidas2);
            $("input.adidas2").attr("value",rssladidas2);
    }
    if(localStorage.getItem('tenadidas3') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_adidas3' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='adidas3' src=''></a></td><td class='product-name'><a href='single-product.html' class='adidas3'></a> </td><td class='product-price'><span class='adidas3'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='adidas3' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='adidas3'><b></span></span></td></tr>");    

            $("img.adidas3").attr("src",rshaadidas3);
            $("a.adidas3").text(rstenadidas3);
            $("span.adidas3").text(rsdgadidas3);
            $("b.adidas3").text(Tongtienadidas3);
            $("input.adidas3").attr("value",rssladidas3);
    }
    if(localStorage.getItem('tenadidas4') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_adidas4' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='adidas4' src=''></a></td><td class='product-name'><a href='single-product.html' class='adidas4'></a> </td><td class='product-price'><span class='adidas4'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='adidas4' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='adidas4'><b></span></span></td></tr>");    

            $("img.adidas4").attr("src",rshaadidas4);
            $("a.adidas4").text(rstenadidas4);
            $("span.adidas4").text(rsdgadidas4);
            $("b.adidas4").text(Tongtienadidas4);
            $("input.adidas4").attr("value",rssladidas4);
    }
    if(localStorage.getItem('tenpuma1') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_puma1' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='puma1' src=''></a></td><td class='product-name'><a href='single-product.html' class='puma1'></a> </td><td class='product-price'><span class='puma1'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='puma1' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='puma1'><b></span></span></td></tr>");    

            $("img.puma1").attr("src",rshapuma1);
            $("a.puma1").text(rstenpuma1);
            $("span.puma1").text(rsdgpuma1);
            $("b.puma1").text(Tongtienpuma1);
            $("input.puma1").attr("value",rsslpuma1);
    }
    if(localStorage.getItem('tenpuma2') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_puma2' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='puma2' src=''></a></td><td class='product-name'><a href='single-product.html' class='puma2'></a> </td><td class='product-price'><span class='puma2'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='puma2' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='puma2'><b></span></span></td></tr>");    

            $("img.puma2").attr("src",rshapuma2);
            $("a.puma2").text(rstenpuma2);
            $("span.puma2").text(rsdgpuma2);
            $("b.puma2").text(Tongtienpuma2);
            $("input.puma2").attr("value",rsslpuma2);
    }
    if(localStorage.getItem('tenpuma3') != null){
        $("#listcart").append("<tr class='cart_item'><td class='product-remove'><a title='Remove this item' class='remove_puma3' href='cart.html'>×</a> </td><td class='product-thumbnail'><a href='single-product.html'><img width='145' id='row1' height='145' alt='poster_1_up' class='puma3' src=''></a></td><td class='product-name'><a href='single-product.html' class='puma3'></a> </td><td class='product-price'><span class='puma3'></span> </td><td class='product-quantity'><div class='quantity buttons_added'><input type='button' id='minus' class='minus' value='-'><input type='number' size='4' class='puma3' title='Qty' value='1' min='0' step='1'><input type='button' id='plus' class='plus' value='+'></div></td><td class='product-subtotal'><span id='product-subtotal' class='amount'><b class='puma3'><b></span></span></td></tr>");    

            $("img.puma3").attr("src",rshapuma3);
            $("a.puma3").text(rstenpuma3);
            $("span.puma3").text(rsdgpuma3);
            $("b.puma3").text(Tongtienpuma3);
            $("input.puma3").attr("value",rsslpuma3);
    }
}