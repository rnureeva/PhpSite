News
<br>
<?=$error?>
<br>
<?foreach ($news as $item):?>
<p><a href="/newscontent/<?=$item['id']?>"><?=$item['prev']?></a>
    <a href="/news/delete/<?=$item['id']?>">[x]</a><br>
</p>
<?endforeach;?>
