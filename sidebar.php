
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php the_author_meta('desctiption');?></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
             <?php wp_get_archives('type=monthly');?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/valheimPlus/ValheimPlus">GitHub</a></li>
              <li><a href="https://twitter.com/valheimgame">Twitter</a></li>
              <li><a href="https://www.facebook.com/valheimgame/">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->