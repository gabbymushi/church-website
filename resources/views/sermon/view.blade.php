  @extends('layouts.main')
  @section('content')
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <div class="pull-right sermon-actions"> <a href="https://vimeo.com/19564018" class="play-video-link" data-placement="top" data-toggle="tooltip" data-original-title="Video" ><i class="fa fa-video-camera"></i></a> <a href="audio/Miaow-02-Hidden.mp3" class="play-audio-link" data-placement="top" data-toggle="tooltip" data-original-title="Audio" ><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download Audio" ><i class="fa fa-download"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF" ><i class="fa fa-book"></i></a> </div>
              <h2 class="post-title">{{$sermon->title}}</h2>
            </header>
            <article class="post-content">
              <div class="video-container">
                <iframe width="200" height="150" frameborder="0" src="http://player.vimeo.com/video/19564018?title=0&amp;byline=0&autoplay=0&amp;color=007F7B"></iframe>
              </div>
              <div class="audio-container">
                <audio class="audio-player" src="audio/Miaow-02-Hidden.mp3" type="audio/mp3" controls></audio>
              </div>
              <p>{{$sermon->content}}.</p>
              <div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Faith</a>, <a href="#">Heart</a>, <a href="#">Love</a>, <a href="#">Praise</a>, <a href="#">Sin</a>, <a href="#">Soul</a> </div>
            </article>
            <!-- <section class="post-comments">
              <h3><i class="fa fa-comment"></i> Comments (4)</h3>
              <ol class="comments">
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                </li>
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                  <ul>
                    <li>
                      <div class="post-comment-block">
                        <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                        <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                        <h5>John Doe says</h5>
                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                        <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                      </div>
                    </li>
                    <li>
                      <div class="post-comment-block">
                        <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                        <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                        <h5>John Doe says</h5>
                        <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                        <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="post-comment-block">
                    <div class="img-thumbnail"> <img src="http://placehold.it/40x40&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                    <a href="#" class="btn btn-primary btn-xs pull-right">Reply</a>
                    <h5>John Doe says</h5>
                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                  </div>
                </li>
              </ol>
            </section> -->
            <!-- <section class="post-comment-form">
              <h3><i class="fa fa-share"></i> Post a comment</h3>
              <form>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control input-lg" placeholder="Your name">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control input-lg" placeholder="Your email">
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="url" class="form-control input-lg" placeholder="Website (optional)">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <textarea cols="8" rows="4" class="form-control input-lg" placeholder="Your comment"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                    </div>
                  </div>
                </div>
              </form>
            </section> -->
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Categories</h3>
              </div>
              <ul>
                <li><a href="#">Faith</a> (10)</li>
                <li><a href="#">Missions</a> (12)</li>
                <li><a href="#">Salvation</a> (34)</li>
                <li><a href="#">Worship</a> (14)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Speakers</h3>
              </div>
              <ul>
                <li><a href="#">John Doe</a> (5)</li>
                <li><a href="#">Mandra Patrick</a> (13)</li>
                <li><a href="#">Sophie Chandol</a> (34)</li>
                <li><a href="#">John Doe</a> (2)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Sermon Tags</h3>
              </div>
              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection