/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

$(document).ready(function() {
     $('.input_select_2 select').niceSelect();
});

$(document).ready(function() {
    [].slice.call( document.querySelectorAll('.input_select_3 select.cs-select, .input_select_4 select.cs-select, .input_select_5 select.cs-select, .input_select_6 select.cs-select, .input_select_7 select.cs-select, .input_select_8 select.cs-select') ).forEach( function(el) {	
        new SelectFx(el);
    });
    
    [].slice.call( document.querySelectorAll( '.input_select_9 select.cs-select' ) ).forEach( function(el) {	
        new SelectFx(el, {
            stickyPlaceholder: false,
            onChange: function(val){
                document.querySelector('.input_select_9 span.cs-placeholder').style.backgroundColor = val;
            }
        });
    } );
    
    [].slice.call( document.querySelectorAll( '.input_select_10 select.cs-select' ) ).forEach( function(el) {	
        new SelectFx(el, {
            stickyPlaceholder: false,
            onChange: function(val){
                var img = document.createElement('img');
                img.src = '../img/'+val+'.png';
                img.onload = function() {
                    document.querySelector('.input_select_10 span.cs-placeholder').style.backgroundImage = 'url(../img/'+val+'.png)';
                };
            }
        });
    } );
});

