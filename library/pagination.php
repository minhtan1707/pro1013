<?php
function pagination($limit,$page,$total)
{
    $pagination['current_page']=$page;
    $pagination['previous_page']=$page - 1;
    $pagination['next_page']=$page + 1;
    if(($total/$limit)>=1){
        $pagination['total_page']=floor($total%$limit!=0?($total/$limit)+1:$total/$limit);
    }else{
        $pagination['total_page']=floor($total/$limit)+1;
    }
    return $pagination;
}

?>