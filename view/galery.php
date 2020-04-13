<h4>Gallery</h4>
<?foreach($images as $item):?>
<a href="/galerycontent/<?=$item['id']?>"><img src="/images/small/<?echo $item['images']?>" width="150" height="100"/></a>
<?=$item['likes']?>
<?endforeach;?>
