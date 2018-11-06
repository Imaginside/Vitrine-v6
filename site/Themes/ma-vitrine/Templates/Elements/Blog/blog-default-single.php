<?php
use II\Utilities\Configure;
/**
 * Affichage standard
 */


echo '
<div id="blog" class="single-post">
    <!-- Post single item-->
    <div class="post-item">
        <div class="post-item-wrap">
            <div class="post-image">
                <a href="#">
                    <img alt="" src="/site/Medias/img/actualites/' . $NewsPicture . '">
                </a>
            </div>
            <div class="post-item-description">
                <h2>' . $NewsTitle . '</h2>
                <div class="post-meta">
                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>' . $NewsDatePost . '</span>
                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>' . $NewsNbComment . ' Commentaires</a></span>
                    <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>' . implode(', ',$NewsCategories) . '</a></span>
                    <div class="post-meta-share">
                        <a class="btn btn-xs btn-slide btn-facebook" href="#">
                            <i class="fa fa-facebook"></i>
                            <span>Facebook</span>
                        </a>
                        <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                            <i class="fa fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                        <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                            <i class="fa fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                        <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                            <i class="fa fa-envelope"></i>
                            <span>Mail</span>
                        </a>
                    </div>
                </div>
                ' . $NewsContent . '
            </div>

            <div class="post-tags">
                <a href="#">Life</a>
                <a href="#">Sport</a>
                <a href="#">Tech</a>
                <a href="#">Travel</a>
            </div>
            <div class="post-navigation">
                <a href="blog-single-slider.html" class="post-prev">
                    <div class="post-prev-title"><span>Article précédent</span>Post with a slider and lightbox</div>
                </a>
                <a href="/actualites/" class="post-all">
                    <i class="fa fa-th"></i>
                </a>
                <a href="blog-single-video.html" class="post-next">
                    <div class="post-next-title"><span>Article suivant</span>Post with YouTube Video</div>
                </a>
            </div>';

            if(Configure::read('Blog.Comments') === true && $NewsComments === true) {
            echo '
            <!-- Comments -->
            <div class="comments" id="comments">
                <div class="comment_number">
                    Commentaires <span>(2)</span>
                </div>
                <div class="comment-list">
                    <!-- Comment -->
                    <div class="comment" id="comment-1">
                        <div class="image"><img alt="" src="/site/Medias/img/actualites/author.jpg" class="avatar"></div>
                        <div class="text">
                            <h5 class="name">John Doe</h5>
                            <span class="comment_date">Posté à 15h32, le 6 novembre</span>
                            <a class="comment-reply-link" href="#">Répondre</a>
                            <div class="text_holder">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <!-- end: Comment -->

                        <!-- Comment -->
                        <div class="comment" id="comment-1-1">
                            <div class="image"><img alt="" src="/site/Medias/img/actualites/author2.jpg" class="avatar"></div>
                            <div class="text">
                                <h5 class="name">John Doe</h5>
                                <span class="comment_date">Posté à 15h32, le 6 novembre</span>
                                <a class="comment-reply-link" href="#">Répondre</a>
                                <div class="text_holder">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                                </div>
                            </div>
                        </div>
                        <!-- end: Comment -->

                        <!-- Comment -->
                        <div class="comment" id="comment-1-2">
                            <div class="image"><img alt="" src="/site/Medias/img/actualites/author3.jpg" class="avatar"></div>
                            <div class="text">
                                <h5 class="name">John Doe</h5>
                                <span class="comment_date">Posté à 15h32, le 6 novembre</span>
                                <a class="comment-reply-link" href="#">Répondre</a>
                                <div class="text_holder">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end: Comment -->
                    </div>
                    <!-- end: Comment -->

                    <!-- Comment -->
                    <div class="comment" id="comment-2">
                        <div class="image"><img alt="" src="/site/Medias/img/actualites/author2.jpg" class="avatar"></div>
                        <div class="text">
                            <h5 class="name">John Doe</h5>
                            <span class="comment_date">Posté à 15h32, le 6 novembre</span>
                            <a class="comment-reply-link" href="#">Répondre</a>
                            <div class="text_holder">
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end: Comment -->
                </div>
            </div>
            <!-- end: Comments -->

            <!-- Form comment -->
            <div class="respond-form" id="respond">
                <div class="respond-comment">
                    Laissez un <span>commentaire</span></div>
                <form class="form-gray-fields">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="upper" for="name">Nom</label>
                                <input class="form-control required" name="senderName" placeholder="Votre nom" id="name" aria-required="true" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="upper" for="email">Email</label>
                                <input class="form-control required email" name="senderEmail" placeholder="Votre email" id="email" aria-required="true" type="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="upper" for="website">Site internet</label>
                                <input class="form-control website" name="senderWebsite" placeholder="Votre site internet" id="website" aria-required="false" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="upper" for="comment">Commentaire</label>
                                <textarea class="form-control required" name="comment" rows="9" placeholder="Votre commentaire" id="comment" aria-required="true"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button class="btn" type="submit">Postez votre commentaire</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end: Form comment -->';
            }
            
        echo '
        </div>
    </div>';
                    
?>