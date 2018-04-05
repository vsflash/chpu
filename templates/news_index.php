<section>
<?php foreach ($data as $value):?>
 
    <h2><a href="news/<?=$value['id'];?>"><?=$value['title']?></a></h2>
    
<?php endforeach; ?>
</section>
