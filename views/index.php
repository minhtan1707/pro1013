
<div class="box100pt">
	<div class="boxcenter">
    <!-- <p class="bg-success text-center text-white p-2" id='message'>
        <?php if(isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }else{
            echo "";
            }?>
    </p> -->
    	<H2>ALL SPORT</H2>
        <p class="">
        Your destination for the world's sexiest sport bras, plus performance sportswear and activewear for every workout. 
        </p>
        <div class="row">
        <?php foreach($products as $obj):?>
        <div class="col-3 boxnews br minheight370">
        	<img class=img-fluid src="static/images/<?php echo $obj['product_img'];?>"><br>
            <p><?php echo $obj['new']=1?"NEW! ":'';?>   <?php echo $obj['product_name']?></p>
            <p class=price>$<?php echo $obj['price']?></p>
            <p><?php echo $obj['colors']>0?$obj['colors'].' Colors':''?></p>
            <p><?php echo $obj['feature']!=''?$obj['feature']:''?></p>
        </div>
        <?php endforeach;?>
    </div>
    </div>
</div>


</body>
</html>