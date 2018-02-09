<?foreach($posts as $post):?>
<div class="span8">
    <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><h2><?=$post['post_subject']?></h2></a>
    <p><?=$post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted <?=$post['post_created']?></span>
        <div class="pull-right">
            <span class="label"><?=$post['user_id']?></span>
            <span class="label">story</span> <span class="label">blog</span>
            <span class="label">personal</span></div>
    </div>
    <hr>
</div>
<?endforeach?>
