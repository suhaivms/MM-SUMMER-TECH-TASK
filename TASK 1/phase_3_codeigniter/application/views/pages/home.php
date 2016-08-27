<div class='container'>
	<div class="col-md-3 leftnav">
						<div class="well">		
							<div class="row">
							<h6><strong>RECOMMENDED</strong></h6>
							</div>

							<div class="row">
  
							    <div class="thumbnail">
							      <a href="#"><img src="img/National/5.jpg" alt="In Mann Ki Baat, PM Modi Congratulates 'Sports Minister' Sonowal">
							      <div class="caption">
							        
							        <p>In Mann Ki Baat, PM Modi Congratulates 'Sports Minister' Sonowal</p>
							        
							      </div></a>
							    </div>
							  
							</div>
							<div class="row">
  							    <div class="thumbnail">
							      <a href="#"><img src="img/National/6.jpg" alt="Trump Supporter Calls Sikh Councillor In US 'Terrorist'. He Hits Back">
							      <div class="caption">
							        
							        <p>Trump Supporter Calls Sikh Councillor In US 'Terrorist'. He Hits Back</p>
							        
							      </div></a>
							    </div>
							  
							</div>
						</div>	
						</div>	
						
					
					<!--2nd column-->
					<div class="col-md-6 mid">
					<?php $count=0;?>
					<?php foreach ($recent_articles as $news) : ?>
						
						<?php if(($count++)%4==0) :?>
							
							<div class="row">
							 <div class="thumbnail">
							 <div class="well">
							 	
							 	<h2><?php echo $news['title']; ?></h2>
							     <a href="<?php echo site_url('index.php/website/view/'.$news['id']); ?>">
							     <img src="data:image/jpeg;base64,<?php echo base64_encode( $news['image'] ); ?>" alt="<?php echo $news['title']; ?>">
							    <div class="caption">
							        
							        <p><?php echo substr($news['article'],0,100); ?> <strong><u>Read full story</u></strong></a></p>
							        
							 	</div></a>
							</div>
							</div>
							</div>
							<div class="row">
					<?php else :?>
							
							
						  <!--makes new row everytime thats why shows error-->
							<div class="col-md-4 other">
								<a href="<?php echo site_url('index.php/website/view/'.$news['id']); ?>">
								<img src="data:image/jpeg;base64,<?php echo base64_encode( $news['image'] ); ?>" alt="<?php echo $news['title']; ?>">
								<h5><strong><?php echo substr($news['article'],0,100); ?></strong></h5>
								</a>	
							</div>
						<?php endif; ?>
						<?php if(($count)%4==0) :?></div><?php endif; ?>
					<?php endforeach ; ?>
					
 					</div>
					
					<!--3rd column-->
					<div class="col-md-2 rightnav">
						<div class="well">	
							 <div class="row">
								<h6><strong>TOP TRENDING</strong></h6>
							</div>
							<div class="row">
	  							<div class="thumbnail">
								     <a href="#"><img src="img/Others/1.jpg" alt="Run barefoot to boost your memory">
								    <div class="caption">
								        
								        <p>Run barefoot to boost your memory</p>
								        
								 	</div></a>
								</div>
							</div>
								<div class="row">
	  								<div class="thumbnail">
								     	<a href="#"><img src="img/Sports/5.jpg" alt="United claim FA Cup with extra-time win over Crystal Palace">
								    	<div class="caption">
								        
								        <p>United claim FA Cup with extra-time win over Crystal Palace</p>
								        
								 		</div></a>
									</div>
								  
								</div>
						</div>
					</div>
				</div>

		</div>	
			<hr/>

	