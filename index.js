
$(document).ready(function(){
   $("#banner-area .owl-carousel").owlCarousel({
      dots:true,
      items:1
   });
});
$(document).ready(function(){
   $("#top-sale .owl-carousel").owlCarousel({
      loop:true,
      nav:true,
      dots:false,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
      }
   });


   $("#new-phones .owl-carousel").owlCarousel({
      loop:true,
      nav:false,
      dots:true,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
      }
   });

   

   // isotop filter 

   var $grid = $(".grid").isotope({
      itemSelector:'.grid-item',
      layoutMode: 'fitRows'
   });


   $('.button-group').on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
   });

   $("#blogs .owl-carousel").owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      }
    }
 });

// Product qty count 
 let $qty_up =$(".qty_up");
 let $qty_down =$(".qty_down");
//  let $input =$(".qty_input");

//  Up button 
 $qty_up.click(function(e){
    $input =$(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >=1 && $input.val() <=9){
        $input.val(function(i, oldval){
            return ++oldval;
        })
    }
 });

//  Down button 
 $qty_down.click(function(e){
    $input =$(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() > 1 && $input.val() <=10){
        $input.val(function(i, oldval){
            return --oldval;
        })
    }
 });











});