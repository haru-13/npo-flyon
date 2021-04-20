<?php get_header(); ?>



<!-- maim -->
<main>

  <div class="maintext">
    <h1>「様々な事情で学習塾に行けず、やりたい勉強ができない」、「ご家庭での子どもの学習へのサポートが不十分で、周りの子どもよりも勉強が遅れてしまった」そのような子どもたちのために、無料学習塾を開いて子どもの学習をサポートしています。</h1>
  </div>

  <section1>
    <ul class="mainlist">
      <li class="list1 tex">
        <img src="<?php echo get_template_directory_uri();?>/img/activities.jpg" width="100%" alt="">
        <h1>初めての方へ</h1>
        <p class="mainlisttext">テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入</p>
        <p><a href=""> →詳しくはこちら</a></p>
      </li>

      <li class="list2 tex">
        <img src="<?php echo get_template_directory_uri();?>/img/activities.jpg" width="100%" alt="">
        <h1>タイトル</h1>
        <p class="mainlisttext">テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト挿入テキスト</p>
        <p><a href="<?php echo home_url('first'); ?>">→無料学習塾はこちら</a></p>
        <p><a href="<?php echo home_url('development'); ?>">→教育系IT開発はこちら</a></p>
      </li>

      <li class="list3 tex">
        <img src="<?php echo get_template_directory_uri();?>/img//activities.jpg" width="100%" alt="">

        <h1>SNSリンク</h1>

        <div class="iconlist">
          <a href="https://www.instagram.com/flyonproject2020/">
            <i class="icon fab fa-instagram fa-3x"></i>
          </a>
          <a href="https://note.com/flyon2021/magazines">
            <i class="icon far fa-sticky-note fa-3x"></i>
          </a>
          <a href="https://embed.podcasts.apple.com/us/podcast/%E6%95%99%E8%82%B2%E5%A4%A7%E7%94%9F%E3%81%AE%E3%81%A4%E3%81%B6%E3%82%84%E3%81%8D%E3%83%88%E3%83%BC%E3%83%BC%E3%82%AF/id1542363940">
            <i class="icon fas fa-podcast fa-3x"></i>
          </a>
        </div>

      </li>
    </ul>
  </section1>

  <div class="border pom1"></div>

  <section2>
    <div class="burogulist">
      <ul class="infolist">
        <li class="listchi fast">
          <h1>最新情報</h1>
        </li>
        <?php 
        $args = array(
          'post_type'=>'blogs',
          'posts_per_page'=>5
        );
        $the_query=new WP_Query($args);
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
        ?>
            <li class="listchi">
              <h6><?php echo CFS()->get('b_data');?></h6>
              <p><a href="<?php the_permalink();?>"><?php echo CFS()->get('b_title'); ?></a></p>
            </li>
        <?php endwhile;
        endif; ?>
        <?php  wp_reset_postdata();?>
      </ul>
    </div>
    <div class="button">
      <button class="btn" type="button" onclick="location.href='<?php echo home_url('archive-blogs'); ?>'">＞ブログ一覧へ</button>

    </div>

  </section2>

  <section3>

    <div class="mmmlist">
      <div class="button1">
        <button class="btn1" type="button" onclick="location.href=''">あなたにできること</button>
      </div>
      <ul class="mmlist">
        <li class="mlist1 ta">
          <img src="<?php echo get_template_directory_uri();?>/img/top_slider1.jpg" width="100%" alt="">
          <p><a class="mlisth" href="<?php echo home_url('participation'); ?>">→活動への参加方法について</a></p>
        </li>

        <li class="mlist2 ta">
          <img src="<?php echo get_template_directory_uri();?>/img/top_slider1.jpg" width="100%" alt="">
          <p><a class="mlisth" href="<?php echo home_url('support'); ?>">→ご支援の方法について</a></p>
        </li>
      </ul>
    </div>

  </section3>

  <div class="border pom1"></div>

</main>
<?php get_footer(); ?>