
		
				<!--1st column-->
				<div class="row">
					<div class="nam">
					<h5><strong>NEWS.COM</strong></h5>
					</div>
				</div>

				<div class="row art">
					<div class="col-md-8 main-article">
						<h2><?php echo $article['title']; ?></h2>
						        <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode( $article['image'] ).'"/>'; ?> <br/><br/>
						<article> <?php echo $article['article']; ?> </article>
					</div>
					<div class="col-md-3 rightnav">
					 	<div class="well">	
							<div class="row">
								<h6>Related News</h6>
							</div>
							<div class="row">
							  	
							    	<a href="#" class="thumbnail">
							     	 <img src="<?php echo site_url('img/National/2.jpg');?>" alt="BJP's Roopa Ganguly Attacked, Allegedly By Trinamool Workers Near Kolkata">
							     	 <div class="caption">
								        
								        <p>BJP's Roopa Ganguly Attacked, Allegedly By Trinamool Workers Near Kolkata</p>
								        
								 	</div>
							    	</a>
							   	
							 </div>
							 <div class="row">
							  
							    	<a href="#" class="thumbnail">
							     	 <img src="<?php echo site_url('img/National/3.jpg');?>" alt="Former Delhi Top Cop Kiran Bedi Appointed Puducherry Lieutenant Governor">
							     	 <div class="caption">
								        
								        <p>Former Delhi Top Cop Kiran Bedi Appointed Puducherry Lieutenant Governor</p>
								        
								 	</div>
							    	</a>
							 </div>
						 </div>
					</div>		
				</div>
			</div>
			<hr/>