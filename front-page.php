<?php get_header(); ?>

<div class="jumbotron-fluid backgroundHeader mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class=" pt-6 text-light font-weight-light"><?php bloginfo('description'); ?><!-- show tagline --></h1>
                <p class="text-light">
                    <i class="fa fa-facebook fa-lg fa-fw shadow"></i>
                    <i class="fa fa-twitter fa-lg fa-fw shadow"></i>
                    <i class="fa fa-instagram fa-lg fa-fw shadow"></i>
                    <i class="fa fa-youtube fa-lg fa-fw shadow"></i>
                </p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="card border-0 mt-5">
                    <img class="card-img shadow rounded" src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" alt="Card image">
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container">
    
    <div class="row">
        <div class="col-md-12">
            <p class="display-5 ungu underBlue">
                <?php echo get_cat_name( $category_id = '2' );  //get kategori name by id -> Kegiatan idnya 4 ?> 
            </p>
            <div class="card-deck mt-4 mb-5">

                <?php
                    $kegiatan = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => 'Kegiatan'
                    );
                    $kegiatan2 = new wp_Query($kegiatan);

                    while ($kegiatan2->have_posts()) : $kegiatan2->the_post();
                        echo '<div class="card shadow">';
                        echo '<img class="card-img-top img-fluid"'.get_the_post_thumbnail($post->ID, 'category-thumb').'';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title ungu">'.the_title().'</h5>';
                        echo '<p class="card-text">'.the_date().'</p></div>';
                        echo '<div class="card-footer bg-transparent">';
                        echo '<a href="'.get_permalink().'" class="btn btn-primary">Sepenuhnya></a>';
                        echo '</div></div>';
                    endwhile;
                ?>

                <!-- <div class="card shadow" >
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1490818387583-1baba5e638af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1531&q=80" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title ungu">Bukber 2019</h5>
                        <p class="card-text">30 Februari 2019</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow" >
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title ungu">Wisuda 2019</h5>
                        <p class="card-text">33 Februari 2019</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card shadow" >
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title ungu">Bukber 2018</h5>
                        <p class="card-text">40 Februari 2018</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <p class="display-5 ungu underPink mb-4">
                <?php echo get_cat_name( $category_id = '3' );  //get kategori name by id -> artikel idnya 4 ?> 
            </p>
            <div class="card border-0 shadow mt-4 mb-5">
                <div class="card-body">
                    <?php
                        //ngambil category_name pakai array
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name'=>'Artikel',
                        );
                        $loop = new wp_Query($args);
                        
                        //di loop buat nampilin 
                        while($loop->have_posts()) : $loop->the_post();
                            echo '<p class="card-text"><a href="'.get_permalink().'">';
                            //echo get_the_post_thumbnail($post->ID, 'category-thumb');
                            the_title( '<h6>', '</h6>' );
                            echo '</a></p><hr>';
                        endwhile;
                    ?>
                    <!-- <p class="card-text">Menanggapi tulisan kartini</p><hr>
                    <p class="card-text">Gimana sih sistem kuliah di Malaysia...</p><hr>
                    <p class="card-text">Pengalaman summer exchange ke eropa</p><hr>
                    <p class="card-text">Peran pelajar di luar negeri</p><hr> -->
                    <div class="text-right"><a href="#" class="">Lihat semua></a></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <p class="display-5 ungu underGreen mb-4">Kalender</p>
            <div class="card border-0 shadow mt-4 mb-5">
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius id doloremque, nobis ut dolorum possimus nesciunt nihil distinctio quis repellendus est blanditiis suscipit laboriosam obcaecati atque saepe. Temporibus, repellat.
                    </p><hr>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- galeri -->
<div class="jumbotron-fluid bgGaleri py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="display-5 text-light underYellow">Galeri</p>
                <div class="card-deck mt-4">
                    <div class="card border-0 shadow">
                        <img class="card-img" src="https://images.unsplash.com/photo-1514369118554-e20d93546b30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Card image cap">
                    </div>
                    <div class="card border-0 shadow">
                        <img class="card-img" src="https://images.unsplash.com/photo-1580152102961-676c176007c1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Card image cap">
                    </div>
                    <div class="card border-0 shadow">
                        <img class="card-img" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Card image cap">
                    </div>
                    <div class="card border-0 shadow">
                        <img class="card-img" src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Card image cap">
                    </div>
                    <div class="card border-0 shadow">
                        <img class="card-img" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p><h5 class="text-right"><a href="" class="text-light">Lihat semua></a></h5></p>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>