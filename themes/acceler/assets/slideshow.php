    <div id="slides-container" class="slides-container width">
        <div id="slides">
		<?php global $acceler; ?>
            <?php LoadSlides(); ?>
 
         
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
        <div id="myController" class="hidden">
		<!-- COPY AND PASTE SLIDE CONTROL FOR EACH NEW SLIDE -->
<?php LoadSlideNav(); ?>
	</div>
    </div>