
	<script>
	  $(function() {
		  var masonryNode = $('.gif-grid');
		  masonryNode.imagesLoaded(function(){
			  masonryNode.masonry({
				  itemSelector: '.gif-item',
				  columnWidth: '.gif-item'
			  });
		  });
	  
		  var masonryNode2 = $('.gif-grid-2');
		  masonryNode2.imagesLoaded(function(){
			  masonryNode2.masonry({
				  itemSelector: '.gif-item',
				  columnWidth: '.gif-item'
			  });
		  });
	  });
	</script>
{cms_tj}