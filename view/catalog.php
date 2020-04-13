
<h4>Catalog</h4>
<?foreach($catalog as $item):?>
<div>
    <a href="/catalogcontent/<?=$item['id']?>"><img src="/images/products/<?echo $item['images']?>" width="150" height="100"/></a>
    <a href="/addlike/<?=$item['id']?>"><?=$item['likes']?></a><br>
    <p><?=$item['name']?></p>
    <p> Price: <?=$item['price']?> $</p>
    <button id="<?=$item['id']?>">Buy</button><br>
</div>
<?endforeach;?>
