</ul class="list-group">
    <? foreach ($tags as $tag): ?>
    <!--<a href="#"><li class="list-group-item"><?=$tag['tag_name']?></li></a>-->
    <li class="list-group-item"><a href="tags/view/<?=$tag['tag_name'] ?>"><?=$tag['tag_name']?></a></li>
    <? endforeach ?>
</ul>