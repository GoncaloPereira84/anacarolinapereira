<?php
$area = "blog";
include "include/header.php";
if (isset($pathinfo[1])) {
?>
    <div class="post-wrapper movement">
        <?php
            $get_blog_posts_single = "SELECT * 
            from blog_posts
            order by date desc";
            
            $result_topics_single = mysqli_query($conn, $get_blog_posts_single);
            $posts_single = array();
            
            while ($row_single = mysqli_fetch_assoc($result_topics_single)) {
                $posts_single[] = $row_single;
            }

            foreach ($posts_single as $p) {
                if($p['url_code'] == $pathinfo[1]) {
                    $img = $p['img_src'];
                    $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                    $img_trimmed = str_replace($dots, '', $img);

                    $display_img = $p['img_src'] != null ? 'flex' : 'none';
                    $display_video = $p['video_src'] != null ? 'flex' : 'none';

                    $display_video_url = $p['video_src'] != null ? explode('v=', $p['video_src'])[1] : '';

                    $a_href = "https://www.facebook.com/sharer/sharer.php?u=https://www.anacarolinapereira.pt/blog/" . $p['url_code'];

                    echo '<div class="artigo">
                            <div class="container">
                                <h1 class="title-topic">'.$p['title'].'</h1>
                
                                <div class="date-topic">
                                    <span>'.date("d-m-Y", strtotime($p['date'])).'</span>
                                </div>
                                <div class="img" style="display:'.$display_img.'">
                                    <img src="https://www.anacarolinapereira.pt/' . $img_trimmed . '" alt="" />
                                </div>
                                <div class="video-post" style="display:'.$display_video.';"><iframe width="560" height="315" class="lazy" data-src="https://www.youtube.com/embed/' . $display_video_url . '" title="'.$p['title'].'" frameborder="0"></iframe></div>
                                <div class="copy-topic">' . $p['text'] . '</div>
                                <div class="fb-share-button" data-href="https://www.anacarolinapereira.pt/blog/'.$p['url_code'].'" data-layout="button" data-size="large">
                                    <img class="img" style="vertical-align: middle" src="https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/pXqmY8Ggh_m.png" alt="" width="16" height="16" />
                                    <a target="_blank" href="'.$a_href.'" class="fb-xfbml-parse-ignore">Partilhar</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        ';
                }
            }
        ?>
    </div>
<?php
} else {
?>
    <div class="slideshow-wrap-blog">
        <div id="slideshow">
            <div class="slide">
                <div class="copy">
                    <div class="line"></div>
                    <h1 class="title">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="apresentacao-wrapper-blog movement">
        <div>
            <div class="imgs">
                <img class="peao" src="<?php echo IMG_PATH;?>/illustrations/peao.svg" alt />
            </div>
            <div id="apresentacao">
                <?php
                $blog_apr_query = "SELECT * 
                    from blog_apresentacao";

                $result_ba = mysqli_query($conn, $blog_apr_query);
                $blog_apr = array();

                while ($row_ba = mysqli_fetch_assoc($result_ba)) {
                    $blog_apr[] = $row_ba;
                }

                foreach ($blog_apr as $p) {
                    echo '<div class="copy">' . $p['text'] . '</div>';
                }
                ?>

                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="blog-wrapper">
        <div class="filters-wrapper">
            <div class="container">
                <div id="categories" class="filter-categories">
                    <div class="title-filter">Categorias</div>
                    <?php
                    $get_cats = "SELECT * 
                        from blog_posts_categorias";

                    $r_cats = mysqli_query($conn, $get_cats);
                    $cats = array();

                    while ($row = mysqli_fetch_assoc($r_cats)) {
                        $cats[] = $row;
                    }

                    echo '<label for="category-all" class="check">
                        <input name="cat-checkbox" class="cat-checkbox filter-all" type="checkbox" id="category-all" value="category-all" checked />
                        <span class="title">Todas as categorias</span>
                        <span class="checkmark"></span>
                    </label>';
                    foreach ($cats as $c) {
                        echo '<label for="category-' . $c['id'] . '" class="check">
                            <input name="cat-checkbox" class="cat-checkbox" type="checkbox" id="category-' . $c['id'] . '" value="category-' . $c['id'] . '" />
                            <span class="title">' . $c['valor'] . '</span>
                            <span class="checkmark"></span>
                        </label>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="artigos-wrapper">
            <div>
            <?php
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 3;
                $offset = ($pageno-1) * $no_of_records_per_page;

                $total_pages_sql = "SELECT count(*)
                from blog_posts
                inner join blog_posts_categorias on blog_posts_categorias.id = blog_posts.categoria_id
                order by date desc";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $get_blog_posts = "SELECT *, MONTH(date) as month, YEAR(date) as year
                    from blog_posts
                    inner join blog_posts_categorias on blog_posts_categorias.id = blog_posts.categoria_id
                    order by date desc";
                    //LIMIT $offset, $no_of_records_per_page";

                $result_topics = mysqli_query($conn, $get_blog_posts);

                while ($row = mysqli_fetch_assoc($result_topics)) {
                            $post_notags = str_replace(['<p>', '</p>', '<b>', '</b>', '<i>', '</i>', '<u>', '</u>', '<a>', '</a>', '<br>', '<o:p>', '</o:p>'], '', $row['text']);
                            $post_trimmed = (strlen($post_notags) > 255) ? substr($post_notags, 0, 255) . '...' : $post_notags;

                            $img = $row['img_src'];
                            $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                            $img_trimmed = str_replace($dots, '', $img);

                            $display_img = $row['img_src'] != null ? 'flex' : 'none';
                            $display_video = $row['video_src'] != null ? 'flex' : 'none';

                            $display_video_url = $row['video_src'] != null ? explode('v=', $row['video_src'])[1] : '';

                            $arr = array();
                            $arrayCats = preg_split ("/\,/", $row['categoria_id']);
                            foreach ($arrayCats as $a) {
                                $a = 'category-' . $a;
                                array_push($arr, $a);
                            }

                            echo '<div class="artigos ' . implode(' ', $arr) . ' month-'.$row['month'].'-year-' . $row['year'] . ' moreBox">
                                    <div class="cat-artigo">
                                        <div>'.$row['valor'].'</div>
                                    </div>
                                    <a href="/blog/' . $row['url_code'] . '">
                                        <div class="img" style="display: ' . $display_img . '">
                                            <img src="https://www.anacarolinapereira.pt' . $img_trimmed . '" alt="" />
                                        </div>
                                        <div class="video" style="display: ' . $display_video . ';">
                                            <div class="video-container"><iframe class="lazy" data-src="https://www.youtube.com/embed/' . $display_video_url . '" width="560" height="315" title="'.$row['title'].'" frameborder="0"></iframe></div>
                                        </div>
                                    </a>
                                    <div class="container">
                                        <a href="/blog/' . $row['url_code'] . '">
                                            <div class="title-topic">' . $row['title'] . '</div>
                                        </a>
                        
                                        <div class="date-topic">';
                                            $day_date = explode('-', $row['date'])[2];
                                            $month_date = explode('-', $row['date'])[1];
                                            $year_date = explode('-', $row['date'])[0];
                                            switch ($month_date) {
                                                case '1':
                                                    $m = 'Janeiro';
                                                    break;
                                                case '2':
                                                    $m = 'Fevereiro';
                                                    break;
                                                case '3':
                                                    $m = 'Março';
                                                    break;
                                                case '4':
                                                    $m = 'Abril';
                                                    break;
                                                case '5':
                                                    $m = 'Maio';
                                                    break;
                                                case '6':
                                                    $m = 'Junho';
                                                    break;
                                                case '7':
                                                    $m = 'Julho';
                                                    break;
                                                case '8':
                                                    $m = 'Agosto';
                                                    break;
                                                case '9':
                                                    $m = 'Setembro';
                                                    break;
                                                case '10':
                                                    $m = 'Outubro';
                                                    break;
                                                case '11':
                                                    $m = 'Novembro';
                                                    break;
                                                case '12':
                                                    $m = 'Dezembro';
                                                    break;
                                            }
                                            echo '<span>'.$day_date.' de '.$m.' de '.$year_date.'</span>
                                        </div>
                                        <div class="copy-topic">' . $post_trimmed . '</div>
                                        <a class="btn" href="/blog/' . $row['url_code'] . '">
                                            <div class="txt">Saiba mais</div>
                                        </a>
                                    </div>
                                </div>';
                }
            ?>
            </div>
            <div class="filter-no-item">Não há artigos que correspondam ao conjunto de filtros seleccionados.</div>
            <div class="filter-mask" style="display: flex; justify-content: center;"><span style="margin-top: 20px;">A carregar...</span></div>
        </div>
        <div class="filters-wrapper">
            <div id="categories" class="filter-categories1">
                <div class="title-filter">Arquivo</div>

                <?php
                $get_years = "SELECT distinct YEAR(date) as year
                    from blog_posts
                    order by date desc";

                $r_years = mysqli_query($conn, $get_years);

                while ($years = mysqli_fetch_array($r_years)) {
                    echo '<div class="years">';
                        echo '<div class="year">
                            <a>'.$years['year'].'</a>';
                            echo '<svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="4.743" height="7.308" viewBox="0 0 4.743 7.308">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="4.743" height="7.308" fill="none"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#0babc5"/>
                                </g>
                            </svg>';
                        echo '</div>';
                        echo '<div class="months">';
                            $get_months = "SELECT MONTH(date) as month,
                                count(*) as postcount
                                from blog_posts
                                where year(date) = ".$years['year']."
                                group by MONTH(date)";
                            $r_months = mysqli_query($conn, $get_months);

                            while($months = mysqli_fetch_array($r_months)){
                                switch ($months['month']) {
                                    case '1':
                                        $m = 'Janeiro';
                                        break;
                                    case '2':
                                        $m = 'Fevereiro';
                                        break;
                                    case '3':
                                        $m = 'Março';
                                        break;
                                    case '4':
                                        $m = 'Abril';
                                        break;
                                    case '5':
                                        $m = 'Maio';
                                        break;
                                    case '6':
                                        $m = 'Junho';
                                        break;
                                    case '7':
                                        $m = 'Julho';
                                        break;
                                    case '8':
                                        $m = 'Agosto';
                                        break;
                                    case '9':
                                        $m = 'Setembro';
                                        break;
                                    case '10':
                                        $m = 'Outubro';
                                        break;
                                    case '11':
                                        $m = 'Novembro';
                                        break;
                                    case '12':
                                        $m = 'Dezembro';
                                        break;
                                }
                                echo '<label for="month-' . $months['month'] . '-year-'. $years['year'] .'" class="check">
                                    <input name="date-checkbox" class="cat-checkbox" type="checkbox" id="month-' . $months['month'] . '-year-'. $years['year'] .'" value="month-' . $months['month'] . '-year-' . $years['year'] . '" />
                                    <span class="title">' . $m . '</span>
                                    <span class="checkmark"></span>
                                </label>';
                            }
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- <span class="ig-title" style="color:#263843;width: 82%; text-align: left; margin-bottom: 20px;border-bottom: 1px solid #0babc5; height:25px; font-size: 1.0625rem;">Galeria Instagram</span> -->
            <!-- SnapWidget -->
            <!-- <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="https://snapwidget.com/embed/910167" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:82%; height: 100%;"></iframe> -->
            <!-- <iframe src="https://snapwidget.com/embed/903921" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:82%; "></iframe> -->
        </div>
    </div>    

    <div class="blog-wrapper-mobile">
        <div class="filters-section">
            <div class="btn">
                <div class="txt">Filtros</div>
            </div>
            <div class="filts">
                <div class="filters-wrapper-mobile">
                    <div class="container-mobile">
                        <div id="categories-mobile" class="filter-categories-mobile">
                            <div class="title-filter-mobile">Categorias</div>
                            <?php
                            $get_cats = "SELECT * 
                                from blog_posts_categorias";

                            $r_cats = mysqli_query($conn, $get_cats);
                            $cats = array();

                            while ($row = mysqli_fetch_assoc($r_cats)) {
                                $cats[] = $row;
                            }

                            echo '<label for="category-all-mobile" class="check-mobile">
                                <input name="cat-checkbox" class="cat-checkbox-mobile filter-all-mobile" type="checkbox" id="category-all-mobile" value="category-all-mobile" checked />
                                <span class="title">Todas as categorias</span>
                                <span class="checkmark-mobile"></span>
                            </label>';
                            foreach ($cats as $c) {
                                echo '<label for="category-' . $c['id'] . '-mobile" class="check-mobile">
                                    <input name="cat-checkbox" class="cat-checkbox-mobile" type="checkbox" id="category-' . $c['id'] . '-mobile" value="category-' . $c['id'] . '-mobile" />
                                    <span class="title">' . $c['valor'] . '</span>
                                    <span class="checkmark-mobile"></span>
                                </label>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="filters-wrapper-mobile">
                    <div class="container-mobile">
                        <div id="categories-mobile" class="filter-categories1-mobile">
                            <div class="title-filter-mobile">Arquivo</div>

                            <?php
                            $get_years = "SELECT distinct YEAR(date) as year
                                from blog_posts
                                order by date desc";

                            $r_years = mysqli_query($conn, $get_years);

                            while ($years = mysqli_fetch_array($r_years)) {
                                echo '<div class="years-mobile">';
                                    echo '<div class="year-mobile">
                                        <a>'.$years['year'].'</a>';
                                        echo '<svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="4.743" height="7.308" viewBox="0 0 4.743 7.308">
                                            <defs>
                                                <clipPath id="a">
                                                    <rect width="4.743" height="7.308" fill="none"/>
                                                </clipPath>
                                            </defs>
                                            <g clip-path="url(#a)">
                                                <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#0babc5"/>
                                            </g>
                                        </svg>';
                                    echo '</div>';
                                    echo '<div class="months-mobile">';
                                        $get_months = "SELECT MONTH(date) as month,
                                            count(*) as postcount
                                            from blog_posts
                                            where year(date) = ".$years['year']."
                                            group by MONTH(date)";
                                        $r_months = mysqli_query($conn, $get_months);

                                        while($months = mysqli_fetch_array($r_months)){
                                            switch ($months['month']) {
                                                case '1':
                                                    $m = 'Janeiro';
                                                    break;
                                                case '2':
                                                    $m = 'Fevereiro';
                                                    break;
                                                case '3':
                                                    $m = 'Março';
                                                    break;
                                                case '4':
                                                    $m = 'Abril';
                                                    break;
                                                case '5':
                                                    $m = 'Maio';
                                                    break;
                                                case '6':
                                                    $m = 'Junho';
                                                    break;
                                                case '7':
                                                    $m = 'Julho';
                                                    break;
                                                case '8':
                                                    $m = 'Agosto';
                                                    break;
                                                case '9':
                                                    $m = 'Setembro';
                                                    break;
                                                case '10':
                                                    $m = 'Outubro';
                                                    break;
                                                case '11':
                                                    $m = 'Novembro';
                                                    break;
                                                case '12':
                                                    $m = 'Dezembro';
                                                    break;
                                            }
                                            echo '<label for="month-' . $months['month'] . '-year-'.$years['year'].'-mobile" class="check-mobile">
                                                <input name="date-checkbox-mobile" class="cat-checkbox-mobile" type="checkbox" id="month-' . $months['month'] . '-year-'.$years['year'].'-mobile" value="month-' . $months['month'] . '-years-'.$years['year'].'-mobile" />
                                                <span class="title">' . $m . '</span>
                                                <span class="checkmark-mobile"></span>
                                            </label>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="artigos-wrapper-mobile">
            <div>
            <?php
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 3;
                $offset = ($pageno-1) * $no_of_records_per_page;

                $total_pages_sql = "SELECT count(*)
                from blog_posts
                inner join blog_posts_categorias on blog_posts_categorias.id = blog_posts.categoria_id
                order by date desc";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $get_blog_posts = "SELECT *, MONTH(date) as month, YEAR(date) as year
                    from blog_posts
                    inner join blog_posts_categorias on blog_posts_categorias.id = blog_posts.categoria_id
                    order by date desc";
                    //LIMIT $offset, $no_of_records_per_page";

                $result_topics = mysqli_query($conn, $get_blog_posts);

                while ($row = mysqli_fetch_assoc($result_topics)) {
                    $post_notags = str_replace(['<p>', '</p>', '<b>', '</b>', '<i>', '</i>', '<u>', '</u>', '<a>', '</a>', '<br>', '<o:p>', '</o:p>', '&nbsp;'], '', $row['text']);
                    $post_trimmed = (strlen($post_notags) > 255) ? substr($post_notags, 0, 255) . '...' : $post_notags;

                    $img = $row['img_src'];
                    $dots = '/var/www/vhosts/anacarolinapereira.pt/backoffice';
                    $img_trimmed = str_replace($dots, '', $img);

                    $display_img = $row['img_src'] != null ? 'flex' : 'none';
                    $display_video = $row['video_src'] != null ? 'flex' : 'none';

                    $arr = array();
                    $arrayCats = preg_split ("/\,/", $row['categoria_id']);
                    foreach ($arrayCats as $a) {
                        $a = 'category-' . $a . '-mobile';
                        array_push($arr, $a);
                    }

                    echo '<div class="artigos-mobile ' . implode(' ', $arr) . ' month-'.$row['month'].'-year-'.$row['year'].'-mobile moreBox">
                            <div class="cat-artigo-mobile">
                                <div>'.$row['valor'].'</div>
                            </div>
                            <a href="/blog/' . $row['url_code'] . '">
                                <div class="img-mobile" style="display: ' . $display_img . '">
                                    <img src="https://www.anacarolinapereira.pt/' . $img_trimmed . '" alt="" />
                                </div>
                                <div class="video-mobile" style="display: ' . $display_video . ';">
                                    <div class="video-container">' . $row['video_src'] . '</div>
                                </div>
                            </a>
                            <div class="container-mobile">
                                <a href="/blog/' . $row['url_code'] . '">
                                    <div class="title-topic-mobile">' . $row['title'] . '</div>
                                </a>
                
                                <div class="date-topic-mobile">';
                                    $day_date = explode('-', $row['date'])[2];
                                    $month_date = explode('-', $row['date'])[1];
                                    $year_date = explode('-', $row['date'])[0];
                                    switch ($month_date) {
                                        case '1':
                                            $m = 'Janeiro';
                                            break;
                                        case '2':
                                            $m = 'Fevereiro';
                                            break;
                                        case '3':
                                            $m = 'Março';
                                            break;
                                        case '4':
                                            $m = 'Abril';
                                            break;
                                        case '5':
                                            $m = 'Maio';
                                            break;
                                        case '6':
                                            $m = 'Junho';
                                            break;
                                        case '7':
                                            $m = 'Julho';
                                            break;
                                        case '8':
                                            $m = 'Agosto';
                                            break;
                                        case '9':
                                            $m = 'Setembro';
                                            break;
                                        case '10':
                                            $m = 'Outubro';
                                            break;
                                        case '11':
                                            $m = 'Novembro';
                                            break;
                                        case '12':
                                            $m = 'Dezembro';
                                            break;
                                    }
                                    echo '<span>'.$day_date.' de '.$m.' de '.$year_date.'</span>
                                </div>
                                <div class="copy-topic-mobile">' . $post_trimmed . '</div>
                                <a class="btn-mobile" href="/blog/' . $row['url_code'] . '">
                                    <div class="txt-mobile">Saiba mais</div>
                                </a>
                            </div>
                        </div>';
                }
            ?>
            </div>
            <div class="filter-no-item-mobile">Não há artigos que correspondam ao conjunto de filtros seleccionados.</div>
            <div class="filter-mask-mobile" style="display: flex; justify-content: center;"><span style="margin-top: 20px;">A carregar...</span></div>
        </div>
    </div>
<?php
}
include "include/footer.php";
?>