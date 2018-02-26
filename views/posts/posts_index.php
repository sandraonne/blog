<div class="span8">
    <?foreach($posts as $post):?>
    <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><h2><?=$post['post_subject']?></h2></a>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted <?=$post['post_created']?></span></div>
    <div>
        <?foreach ($tags[$post['post_id']] as $tag):?>
            <a href="#"></a>
        <span class="label" style="background-color: #5bc0de"><?=$tag?></span>
    </div>
        <?endforeach?>
        <div class="pull-right">
            <span class="label"><?=$post['user_id']?></span>
            <span class="label">story</span> <span class="label">blog</span>
        </div>
    <hr>
    <?endforeach?>
</div>
