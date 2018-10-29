
<div class="container my-5" style=max-width:940px>
<form action="" method=post enctype='multipart/form-data'>
    <label>Name</label>
    <input type=text class='form-control my-2' name=name value=<?php echo $product['product_name']?$product['product_name']:''?>>
    <label>Price</label>
    <input type=number class='form-control my-2' name=price value=<?php echo $product['price']?$product['price']:''?>>
    <label>Number of Colors</label>
    <input type=number class='form-control my-2' name=colors value=<?php echo $product['colors']?$product['colors']:''?>>
    <label>Feature</label>
    <input type=text class='form-control my-2' name=feature value=<?php echo $product['feature']?$product['feature']:''?>>
    <label>New</label>
    <input type=checkbox class='my-2' name=new value=<?php echo $product['new']==1?'checked':''?>>
    <br>
    <input type=hidden name=product_img value=<?php echo $product['product_img'];?>>
    <img class=img-fluid src="static/images/<?php echo $product['product_img'];?>">
    <br>
    <input type="file" name="image">
    <br>
    <input type=submit name=submit class="btn my-2" value="Update Product" style="background:rgb(255, 0, 0);color:white">
</form>
</div>