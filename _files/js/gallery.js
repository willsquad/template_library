$(document).ready(function() {
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });
    
    var $grid = $('.grid').imagesLoaded( function() {
      // init Masonry after all images have loaded
      $grid.masonry({
          // set itemSelector so .grid-sizer is not used in layout
          itemSelector: '.grid-item',
          // use element for option
          columnWidth: '.grid-sizer',
          percentPosition: true
      });
    });
    
    var $grid2 = $('.grid2').imagesLoaded( function() {
      // init Masonry after all images have loaded
      $grid2.isotope({
          // set itemSelector so .grid-sizer is not used in layout
          itemSelector: '.grid-item',
          percentPosition: true,
          layoutMode: 'masonry',
           masonry: {
            columnWidth: '.grid-sizer'
          }
      });
        
        //data-category="categoryName" of the items has nothing to do with the filtering. It's the class names that matter. 
        //data-filter=".buildings" <= Attribute given in the button points to the buildings class.
        
        // bind filter button click
        $('.filters-button-group').on( 'click', 'button', function() {
          var filterValue = $( this ).attr('data-filter');
          // use filterFn if matches value
          $grid2.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
          });
        });
    });
    
    
});