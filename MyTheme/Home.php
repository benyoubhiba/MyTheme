<?php get_header(); ?>

 
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
			<h2></h2>
      
        	<?php the_post_thumbnail(); ?>
            
 <h1 style=" font-size: 50pt;
          margin-top: 10%;
          margin-left: 25%;
    color: #bde1e8;
    font-family: 'Pacifico', cursive;
    " >Dossier santé mentale</h1>
    
        
      </div>  
 <div><div class="card" style="width: 30rem; margin-top: 7%;margin-left: 30%; margin-bottom:6% ; border-radius: 27px;
    
    -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, inset 48px -6px 28px -30px rgba(25,18,21,0); 
      box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, inset 48px -6px 28px -30px rgba(25,18,21,0);
     ">
     <img src="<?php echo get_template_directory_uri(); ?> /img/GettyImages-894377512-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Comment détecter des signes de dépression sévère, comment aider à prévenir le suicide ?</h5>
      <p class="card-text">Avec environ 10 000 décès par an, la France présente un des taux les plus élevés de suicide en Europe. Le taux de décès liés au suicide atteint 27, 7 décès pour 100 000 habitants chez les hommes et 8,1 pour 100 000 habitants chez les femmes. Le nombre de tentatives de suicide est en revanche plus important chez les femmes (données 2018 de l’Observatoire National du Suicide).</p>
    </div>
    <ul class="list-group list-group-flush">
    <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> <?php comments_number(); ?>
            </p>
            
    
    </ul>
    <div class="card-body">
      <a href="https://www.qare.fr/blog/aider-a-prevenir-le-suicide/" class="card-link">lire la suite</a>
 
    </div>
  </div></div>
  <nav aria-label="Page navigation example"style=" margin-top:2%; ">
    <ul class="pagination" style=" width: 160px;margin-left:40%;" >
     
      <li class="page-item"><a class="page-link"  href="<?php the_permalink(); ?> http://localhost/wp_theme/blog/">1</a></li>
     
      <li class="page-item"><a class="page-link" href="<?php the_permalink(); ?>http://localhost/wp_theme/blog3/">2</a></li>

    </ul>
  </nav>

           
      		<?php the_excerpt(); ?>
              
      	
		</article>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>