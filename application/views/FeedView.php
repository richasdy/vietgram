<?php if ($this->input->get('search')): ?>
    <div class="photo">
            <header class="photo__header">
                <img src="images/black-lotus.png" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">
                        <?php 
                            echo $data["username"];
                        ?>
                    </span>
                    <span class="photo__location">Amsterdam, Netherlands</span>
                </div>
            </header>
            <img src="<?php echo $feed1["url"]; ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">
                    <?php 
                        echo $feed1["likes"];
                    ?> likes
                </span>
                <div class="photo__cap">
                <?php 
                    if(isset($_POST["search"])) {
                        echo highlightKeywords($feed1["caption"], $keyword);
                    } else {
                        echo $feed1["caption"];
                    } 
                ?> </div>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">randomlynobl3</span> relatable...
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">watersheep</span> omg lol
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">pewdiepie</span> XD
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">meme_god</span> me most of the times
                    </li>
                </ul>
                <span class="photo__time-ago">12 minutes ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="photo">
            <header class="photo__header">
                <img src="images/felix.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">felix_kjellberg</span>
                    <span class="photo__location">Goteberg, Sweden</span>
                </div>
            </header>
            <img src="<?php echo $feed2["url"]; ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                    <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                </div>
                <span class="photo__likes">
                    <?php 
                        echo $feed2["likes"];
                    ?> likes
                </span>
                <div class="photo__cap">
                <?php 
                    if(isset($_POST["search"])) {
                        echo highlightKeywords($feed2["caption"], $keyword);
                    } else {
                        echo $feed2["caption"];
                    }  
                ?> </div>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">serranoarevalo</span> did you do it?
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">pewdiepie</span> rofl
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">mr.beast64</span> it has to be done
                    </li>
                </ul>
                <span class="photo__time-ago">34 minutes ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="photo">
            <header class="photo__header">
                <img src="images/varona.png" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">varona33</span>
                    <span class="photo__location">Tokyo, Japan</span>
                </div>
            </header>
            <img src="<?php echo $feed3["url"]; ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                    <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                </div>
                <span class="photo__likes">
                    <?php 
                        echo $feed3["likes"]; 
                    ?> likes
                </span>
                <div class="photo__cap">
                <?php 
                    if(isset($_POST["search"])) {
                        echo highlightKeywords($feed3["caption"], $keyword);
                    } else {
                        echo $feed3["caption"];
                    }  
                ?> </div>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">tigragaizka</span> 10/10
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">paperlove</span> is this annabelle from the seven sins?
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">watersheep</span> amazing work as always!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">isabelle_12</span> EPIC
                    </li>
                </ul>
                <span class="photo__time-ago">39 minutes ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
<?php endif ?>