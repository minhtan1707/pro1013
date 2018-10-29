<div class="container my-5" style=max-width:940px>
        <div class=ml-auto style=width:150px>
<a href="http://localhost:8012/du-an-mau/index.php?page=add" class="btn btn-primary mb-5">Add Product</a>
</div>
        <table class=table>
        <?php foreach($products as $obj):?>
       <tr> 
        <th></th>
        <th>Name</th>
        <th>Colors</th>
        <th>Price</th>
        <th>Feature</th>
        <th>New</th>
        <th></th>
        </tr>
        <tr>
            <td><img class=img-fluid src="static/images/<?php echo $obj['product_img'];?>" width=150px><br></td>
        
            <td><p>   <?php echo $obj['name']?></p></td>
            <td><p><?php echo $obj['colors']>0?$obj['colors'].' Colors':''?></p></td>
            <td><p class=price>$<?php echo $obj['price']?></p></td>
            
            <td><p><?php echo $obj['feature']!=''?$obj['feature']:''?></p></td>
            <td><input type=checkbox <?php echo $obj['new']=1?"checked":'';?> class="myCheck" disabled></td>
            <td>
                    <form action="http://localhost:8012/du-an-mau/index.php?page=delete" method=post>
            <a href="http://localhost:8012/du-an-mau/index.php?page=update&id=<?php echo $obj['id']?>" class="btn btn-primary mt-3">Edit</a>
            <input type=hidden name=id value=<?php echo $obj['id']?>>
            <input type=submit class="btn btn-danger mt-3" value=Delete>
</form>
</tr>
        <?php endforeach;?>
</div>

