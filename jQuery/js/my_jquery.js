$(document).ready(function () {

    // console.log("I'am in a new file.");
    console.log("We are using jQuery.");
    // $('selector').action()

    // $('p').click(); // click on p

    // $('p').click(function () {
    //     console.log('you clicked on p', this);
    //     // $('p').hide();   // all p tag will be hide
    //     // $(this).hide();     // jena par click karo te hide thay
    // }); // click on p


    //Events in jQuiry
    // Mouse events = click, dbclick, mouseenter, mouseleave
    // Keyboard events = keypress, keydown, MediaKeyStatusMap
    // form events = submit, change, resize, scroll, unload
    // document/window events = load, resize, scroll, unload

    // Double click
    // $('p').dblclick(function(){
    //     console.log('You double clicked on p')
    // });

    // Mouse enter
    // $('p').mouseenter(function () {
    //     console.log('You enterd: ', this);
    // });

    // Mouse leave
    // $('p').mouseleave(function () {
    //     console.log('You leaved.', this);
    // });

    // Demoing the on method
    // $('p').on(
    //     {
    //         click: function() {
    //             console.log("Thanks for clicking.", this);
    //         },

    //         mouseleave: function(){
    //             console.log("mouseleave", this);
    //         }
    //     })

    // Toggle
    $('#but').click(function(){
        $('#wiki').toggle(1000);
    })

    // Fade out
    // $('#but').click(function () {
    //     $('#wiki').fadeOut(10000);
    // })

    //Animation
    // $('#wiki').animate({
    //     opacity:0.3,
    //     height: '150px',
    //     width:'350px'
    // },5000);

    // $('#wiki').animate({opacity:0.9},1000);
    // $('#wiki').animate({opacity:0.8},1000);
    // $('#wiki').animate({opacity:0.7},1000);
    // $('#wiki').animate({opacity:0.6},1000);
    // $('#wiki').animate({opacity:0.5},1000);
    // $('#wiki').animate({opacity:0.4},1000);
    // $('#wiki').animate({opacity:0.3},1000);
    // $('#wiki').animate({opacity:0.2},1000);
    // $('#wiki').animate({opacity:0.1},1000);
    // $('#wiki').animate({opacity:0.0},1000);

    // $('#wiki').text();
    // $('#wiki').remove();

    // Add class, Remove class
    // $('#wiki').addClass('myclass1');
    // $('#wiki').removeClass('myclass1');
    
    // Get css propertie value
    // $('#wiki').css('background-color');
    
    // Set css propertie value
    // $('#wiki').css('background-color','aqua');
    



});