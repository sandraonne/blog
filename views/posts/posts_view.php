<div class="controller">
    <div class="well">
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading"><?=$post['post_subject']?></h4>
                <p class="text-right"><?=$post['name']?></p>
                <p><?=$post['post_text']?></p>
                <ul class="list-inline list-unstyled">
                    <li><span><i class="glyphicon glyphicon-calendar"></i><?=$post['post_created']?></span></li>
                    <li>|</li>
                    <?php foreach ($tags as $tag):?>
                    <li><a href="<?BASE_URL?>tags/view/<?=$tag['tag_name']?>">
                        <span class="label label-info">
                            <?=$tag['tag_name']?>
                        </span>
                        </a>&nbsp;</li>
                    <?php endforeach?>
                    <li>|</li>
                    <span><i class="glyphicon glyphicon-comment"></i> ? comments</span>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="media comment-box">
            <div class="media-body">
                <? foreach($comments as $comment): ?>
                    <h4 style="font-size:24px"><?=$comment['comment_author']?></h4>
                    <p><?=$comment['comment_text']?></p>
                    <span class="badge badge-success">Commented on <?=$comment['comment_created']?></span>

                    <hr>
                <? endforeach ?>
                <form class="form-inline" method="post" role="form">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Your comments" name="data[comment_text]"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>