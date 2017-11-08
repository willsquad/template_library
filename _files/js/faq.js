$(document).ready(function() {
    
    $('.show_content').on('click', function(e) {
        e.preventDefault();
        var self = $(this);
        $(this).closest('.faq_accordion').find('.faq_content').toggle('fast', 'swing', function() {
            if(self.text() == 'arrow_downward') {
                self.text('arrow_upward').css('color', '#ff5722');
            } else if(self.text() == 'arrow_upward') {
                self.text('arrow_downward').css('color', '#8BC34A');
            }
            if(self.text() == 'keyboard_arrow_down') {
                self.text('keyboard_arrow_up');
            } else if(self.text() == 'keyboard_arrow_up') {
                self.text('keyboard_arrow_down');
            }
        });
    });
    
    
    $('.show_content_add').on('click', function(e) {
        e.preventDefault();
        var self = $(this);
        $(this).closest('.faq_accordion').find('.faq_content').toggle('fast', 'swing', function() {
            if(self.text() == 'add') {
                self.text('remove');
                self.closest('.faq_accordion').addClass('active');
            } else if(self.text() == 'remove') {
                self.text('add');
                self.closest('.faq_accordion').removeClass('active');
            }
        });
    });
    
});