$(document).ready(function() {
    
    $("#mobile_4 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        }

        
    });

    $("#mobile_7 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        }

        
    });

    $("#mobile_8 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        }

        
    });

    $("#mobile_9 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        } 
    });

    $("#mobile_10 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        }

        
    });
    $("#mobile_11 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        }  
    });
    $("#mobile_12 .menu_item").on('click', function(e) {
        e.preventDefault();

        var self = $(this);
        
        var categories_string = self.attr('data-categories');
        var category_array = categories_string.split(',');

        var arraylength = category_array.length;
        var expanded_menu_items = '';
        
        
        
        if(!self.hasClass('active')){
            self.addClass('active');
            if(arraylength>1){
                for(i=0; i<arraylength; i++){
                    expanded_menu_items += '<a href="">'+category_array[i]+'<i class="fa fa-chevron-right"></i></a>';
                }
            }
            
            self.after('<div class="expanded_menu">'+expanded_menu_items+'</div>');
            
        } else { // has class 'active'
            $('.expanded_menu').html('');
            self.removeClass('active');
        }  
    });
});