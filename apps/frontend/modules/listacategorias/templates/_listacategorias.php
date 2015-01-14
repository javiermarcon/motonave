<?php //var_dump($cates->toArray()); ?>
<!-- <ul>
<?php //foreach ($cates as $cate): ?>
    <li>
	<span class="amarillo" style="<?php //echo 'margin-left: '.($cate['level'] * 1.3).'em' ?>">
	    »
	</span>
	<?php //echo link_to($cate->getNombre(), 'listacategorias', array('id' => $cate->getId())) ?>
    </li>
<?php //endforeach; ?>
</ul> -->


<?php
function MyRenderTree ( $tree = array(array('name'=>'','depth'=>'')) ){

$current_depth = 0;
$counter = 0;

$result = '<ul id="menu">';

foreach($tree as $node){
    $node_depth = $node['level'];
    $node_name = $node['nombre'];
    $node_id = $node['id'];

    if($node_depth == $current_depth){
        if($counter > 0) $result .= '</li>';            
    }
    elseif($node_depth > $current_depth){
        $result .= '<ul>';
        $current_depth = $current_depth + ($node_depth - $current_depth);
    }
    elseif($node_depth < $current_depth){
        $result .= str_repeat('</li></ul>',$current_depth - $node_depth).'</li>';
        $current_depth = $current_depth - ($current_depth - $node_depth);
    }
    $result .= '<li id="c'.$node_id.'"';
    //$result .= $node_depth < 2 ?' class="closed"':'';
    $result .= '>'.link_to($node_name, 'listacategorias', array('id' => $node_id));
    ++$counter;
}
 $result .= str_repeat('</li></ul>',$node_depth).'</li>';

$result .= '</ul>';

return $result;

}


print MyRenderTree($cates->toArray(false));

?>
