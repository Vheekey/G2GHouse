/************************************************************/
/* senzill-pagination v1.1.3 Beta                           */
/* Coded by: yak0d3                                       */
/* Email: contact.raedyak@gmail.com                      */
/* Github: https://github.com/yak0d3/senzill-pagination */
/* Licence: MIT                                        */
/******************************************************/

/*********** CHANGELOG ************\//
  1. Disabling buttons instead of hiding it
  2. Checking the next/previous number of pages from the next & previous functions.
/*******************************\/*/
(function($){
    $.fn.extend({
        
        senzill: function(options) {

            var defaults = {
                elPerPage: 12, //The number of elements to show per page
            }

            var options =  $.extend(defaults, options);
            var oldHtml;
            oldHtml = $(this).html(); //Keeping the old Html into a variable, this is not a good practice but it will be fixed in later versions.
            this.destroy = function()
            {
                /* load old html */
                $(this).html(oldHtml);
                /* remove the navigation bar & unbind click events */
                //$('#sen-bar').fadeOut(1000).remove;
               /*  $('#sen-next').unbind();
                $('#sen-prev').unbind(); */
                $(this).removeClass('row');
                $('#senbar').remove();
                $('#senzill-styles').remove();
                $('#sen-next').unbind();
                $('#sen-previous').unbind();
                
              return;
            }
            return this.each(function() { /* Main Method */
                var me = $(this);
                options.elPerPage = parseInt(options.elPerPage); //Get integer from string (i.e if elPerPage is " 2e" it will become 2), Read More about `parseInt` in here: https://bit.ly/2DJkDNb
                //console.log('senzill-pagination plugin has been successfully loaded!\n');
                if(!$(this).hasClass('row')) { $(this).addClass('row'); } //Add the class `row` to the senzill-pagination container
                var total_elems = $(this).children().length; //The total number of elements
                var current_page = 2020; //The current page
                var start = 0; //From which page should senzill-pagination start, default 0 which is the first page
                var number_of_pages = (total_elems / options.elPerPage)  % 1 == 0 ?  (total_elems / options.elPerPage) :  (Math.ceil(total_elems / options.elPerPage)); //Calculation of the total number of pages
                var styles = '.sen-btn{ width:auto; } .sen-current{font-weight:700;font-size:1.3vw;}'; //Basic styling for the senzill-pagination buttons
                $('head').append('<style id="senzill-styles">'+styles+'</style>'); //Adding the styles to the <head> tag
                
                $(this).css('visibility','visible'); //Making the senzill-pagination container visible

                var paginate = function(start,end,elem = $(this)){ //The main paginate function that will let users navigate between pages
                    for(j = 0; j < elem.children().length ;j++){
                        elem.children().eq(j).hide();
                    }
                    for(i = start; i < end ;i++){
                        elem.children().eq(i).show();
                    }
                };
                var next = function(elem){ //This function will let the users go to the next page
                   
                    console.log(current_page);
                    if(current_page >= 2020){
                        start = start+options.elPerPage;
                        current_page++;
                        paginate(start,start + options.elPerPage,elem);
                        senbar(number_of_pages,current_page,elem);
                    }
                    
                };
                var prev = function(elem){ //This function will let the users go back to the previous page
                    if(current_page >= 2020){
                        start = (start-options.elPerPage);
                        current_page--;
                        paginate(start,(start+options.elPerPage),elem);
                        senbar(number_of_pages,current_page,elem);
                    }
                    
                };
                var senbar = function(pages,current,elem = $(this)){ //Display the sen navigation bar, currently it only contains previous and next buttons.
                    if($('#sen-bar').length){$('#sen-bar').remove();} //This line needs to be updated into a better implementation
                                                                        //What it does is, removing the senbar each time a navigation button is clicked.
                    var next_button = '<li class="list-inline-item"><span class="text-xs-center ml-3 abled"  id="sen-next" href="#"><i class="fa fa-arrow-right" style="cursor:pointer; font-size:3vw"></i></span></li>'; //Draw the next button
                    var prev_button = '<li class="list-inline-item"><span class="text-xs-center mr-3 abled" id="sen-prev" href="#"><i class="fa fa-arrow-left" style=" cursor:pointer; font-size:3vw"></i></span></li>'; //Draw the previous button
                    var pagination_bar = '<div class="row" id="sen-bar">' //Draw the senbar
                                            // +'<div class="col-md-4 mx-auto">'
                                            +'<div class="col-md-4">'
                                                +'<ul class="list-inline center">'
                                                    + prev_button
                                                    +'<li class="list-inline-item sen-current" style="font-weight:bold; font-size:3vw">'+ current +'</li>'
                                                    + next_button
                                                    +'</ul>'
                                            +'</div>'
                                        +'</div>';
                    $(pagination_bar).insertBefore(elem);
                    (current_page == 2020) ? $('#sen-next').removeClass('abled').addClass('disabled') : $('#sen-next').hasClass('disabled') ? $('#sen-next').removeClass('disabled') : '';
                    (current == 2020) ? $('#sen-prev').removeClass('abled').addClass('disabled') : $('#sen-prev').hasClass('disabled') ? $('#sen-prev').removeClass('disabled') : '';
                    // $(pagination_bar).insertAfter(elem);
                    // (current+1 > pages) ? $('#sen-next').addClass('disabled') : $('#sen-next').hasClass('disabled') ? $('#sen-next').removeClass('disabled') : '';
                    // (current == 1) ? $('#sen-prev').addClass('disabled') : $('#sen-prev').hasClass('disabled') ? $('#sen-prev').removeClass('disabled') : '';
                    $('#sen-next').on('click',function(){
                        if(current < 2020){
                            next(me); //Go to the next page
                        }
                        // alert(current);
                        // alert(pages);
                        // if(current + 1 <= pages)
                        //     next(me); //Go to the next page
                    });
                    $('#sen-prev').on('click',function(){
                        if(current > 1 )
                            prev(me); //Go to the previous page
                    });
                };
                paginate(start,start + options.elPerPage,$(this)); //Start the senzill-pagination
                senbar(number_of_pages,current_page,$(this)); //Draw the senbar
                
            });
         
        }
    });
})(jQuery);
