/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var $ =jQuery.noConflict();
jQuery(document).ready(function($){
  
    
         




    $('.pop').magnificPopup({delegate: 'a',type:'image'});
  //Initialize for wordpress galleries
    $('.mp_gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true
        }
    });
    
    
   

});

