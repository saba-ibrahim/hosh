<?php 
/*
 * Template Name: الصفحة الرئيسية
 */
get_header(); ?>

<div class="home-page">
<img src="<?php echo get_template_directory_uri() ;?>/img/001_960_280.jpg" alt="صورة الجامعة" width="1000px" height="1000px">

</div>


<div class="container">
    <div class="slider_owl owl-carousel owl-theme">

      <?php
          $args = array(
              'posts_per_page'    => 10,
              'post_type'     => 'slider',  //choose post type here
              'order' => 'DESC',
          );
      $query = new WP_Query( $args );

      if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
      $query->the_post();
      ?>

        <?php the_post_thumbnail(''); ?>

      <?php } } ?>



    </div>

    
<div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6">
            <?php get_sidebar();  ?>
            
        </div>
        <div class="col-lg-9 col-md-8 col-sm-6">
            <div class="table_home">
                <h2>اهم الأحداث</h2>
                <p>وظائف ... وظائف ... وظائف
وعاجل جدا

جهة في ولاية الخرطوم تطلب مبرمج في ال #C و مبرمج في الاودو خبرة من 6 أشهر على الأقل في مشاريع فعليه.

الراتب من 10 الف الى 15 الف حسب الخيرة .

يفضل خريج وخريجة .
للتقديم ارسل السيرة الذاتية على واتس اب 00971509260862</p>
                <br>
<p>*فرصة رائعة*

شراكة جديدة بين الحوش الكبير وشركة SoftACT Integrated Solutions تهدف لاستيعاب خريجين جدد في برامج تدريبية عملية On Site Training على ال Odoo ستكون مدة كل فترة تدريبة 6 شهور كاملة في بيئات عمل فعلية تطبق الاودو ولها متطلبات متجددة و مستمرة.

التدريب سيتم تحت رعاية مباشرة من خبراء في الاودو سيكون بعده المتدرب قادرا على المنافسة في سوق العمل داخل السودان وخارجه.</p> 
                <div class="read-more">
                <a href="https://web.facebook.com/AGFOFMS/posts/2318633064914689">قراءة المزيد</a>
                </div>
              

                        
                    
                    
                    
                    
                    </div>
            
            <div class="home-tab">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="home-out">

<img src="<?php echo get_template_directory_uri() ;?>/img/123.jpg" alt="صورة الجامعة" >
                <a href="#">اول مبادرة من مبادرات قروب الحوش الكبير على الواتس اب

4 دورات مجانية مدة كل دورة اسبوع 3 ساعات يوميا عملي بشكل كامل، وعدد المستفيدين ح يكون بين 15 إلى 20.

مكان انعقاد الدورة: الخرطوم الهدف من الدورة تمكين المتدرب واكسابه المهارات خلال شهر من انشاء موقع إلكتروني تفاعلي ومواقع الهاتف المحمول بشكل تام باستخدام نظام ادارة المواقع وردبرس WordPress.

محتوى الاربع دورات :</a>
                    <div class="read-more">
                        <a href="#"> see more</a>
                    
                    </div>
                    </div>
                    
               
</div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="home-out">

<img src="<?php echo get_template_directory_uri() ;?>/img/70644734_2263985980379398_4458936009056321536_n.jpg" alt="صورة الجامعة">
                <a href="#">منظمة رياض الجنة للتنمية البشرية والمجتمعية نعلن اننا على استعداد لتحمل مصاريف ترخيص شركتين ومنحهم خطاب استضافة (بدل استئجار مقر) واستضافة اجتماعتهم الدورية بمقر المنظمة لمدة سنتين وتوفير البنية التحتية المطلوبة لهم (سيرفر تطبيقات وسيرفر قواعد بيانات)
وتوفير خدمة السكرتاريا لهم والرقم المجاني للمنظمة لتلقي اتصلاتهم لمدة عامين كامليين....</a>
                    <div class="read-more">
                        <a href="#"> see more</a>
                    
                    </div>
                    
                </div>             
</div>
            
            
</div>
    </div>
                
                
                
                </div>
            
    </div>
</div>
</div>

                
            
            
            


<?php
get_footer();?>
