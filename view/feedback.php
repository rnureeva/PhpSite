
<h2>Feedback</h2>

<?=$error?>

<form action="/feedback/<?=$action?>/" method="post">
    Write review: <br>
    <input type="text" name="name" placeholder="Name" value="<?=$name?>"><br>
    <input type="text" name="message" placeholder="Message" value="<?=$feedtext?>"><br>
    <input type="submit" value="<?=$buttonText?>">
</form>

<?foreach ($feedback as $item): ?>
    <p>
        <b><?=$item['name']?>:</b><?=$item['feedback']?>
        <a href="/feedback/edit/<?=$item['id']?>">[edit]</a>
        <a href="/feedback/delete/<?=$item['id']?>">[x]</a><br>
    </p>
<?endforeach;?>
