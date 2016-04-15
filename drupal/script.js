/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {
    $(document).ready(function () {     
      $('.larger').click(function(){
        $('body').addClass('larger');
        $('.landing .contentBox').css("height","650px");
        $('.wtg .contentBox').css("height", "850px");
        $('.adSection').css("height","auto");
      });
      $('.smaller').click(function(){
        $('body').removeClass('larger');
        $('.landing .contentBox').css("height","410px");
        $('.wtg .contentBox').css("height", "750px");
      });
      //Move top links section into anchor section
      $('.anchorSectionLinks a').each(function(){
        var li='<li><a href="'+$(this).attr('href')+'">'+$(this).html()+'</a></li>';
        $(li).appendTo('#simple-table-of-contents ul');
        $(this).remove();
      });
      //Mobile menu toggle
      $('.mobileToggle').click(function(){
        $(this).toggleClass('open');
        $('.mainNav').slideToggle();
         console.log('start');
      });
      //Recommended read more links
      $('.recommended span a').each(function(){
          theHref=$(this).attr('href');
          $('<a class="readMore" href="'+theHref+'">Read More >></a>').insertAfter($(this).parent().parent().next());
      });
      //Search
      $('.search a').click(function(){
          $('.searchBox').slideToggle();
          $(this).toggleClass('open');
      });        
      $('#donateShow').click(function(){
          $('#donateLinkShow').slideToggle();
      });
      //WAYS TO GIVE PAGE
      $(".wtg .blockContent .readMoreContainer a:contains('Donate')").addClass('orange');
      

      //SHARE YOUR STORY
      //var storychkbox = '<label for"edit-field-use-story-und"></label>';
      //$('#edit-field-use-story-und').wrap('<div class="chkbox"></div>');
      //$(storychkbox).appendTo('.form-item-field-use-story-und .chkbox');
      //$('.form-item-field-use-story-und .chkbox').appendTo('.form-item-field-use-story-und');
      $('article.node-45').insertBefore('#block-formblock-personal-story');

      //PD LIBRARY
      $('#edit-submit-pd-library-search-results').val('Search'); 
      $('.view-pd-library-search-results .views-row .field-content .file a').text('Download PDF');       
      //HASH THE QUERY STRING AND IN ORDER TO TEST FOR KEYS
      function qs(key) {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++){
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
        }
        return vars[key];
      }
      var search = qs('search');
      //IF NO KEYS NEW  FOR SEARCH HIDE THE CONTENTS        
      if(search == 'false') {
        $('.view-pd-library-search-results .view-content').css("display", "none");
      }        

      //NAVIGATION DROP DOWN
      $('.subnav ul').addClass('left');

      //Landing Page        
      i=0;
      var elementWidth = $(window).width();
      var dynamicHeight=elementWidth*0.2625;
      $('.adSection').css('height',dynamicHeight+'px');
      $('.contentBox .blockContent a').parent().addClass('readMoreContainer');
      $('.contentBox:nth-last-child(-n+3)').addClass('noBorderBottom');
        
      //HIDING TIL NEW BLOG IS LAUNCHED
      //$('#blogRSSFeed').rssfeed('http://parkinson.org/Insite/AllRss.aspx', {
            //limit: 3,
            //header:false
        //});
      $('.region-image-slider').jshowoff({effect:'slideLeft',controls:true,controlText:{play:'',pause:'',previous:'previous',next:'next'},links:false,autoPlay:false});
      var theHref=$('.findEventLink a').attr('href');
      var theHTML=$('.upcomingEventsHeader.desktop').html();
      $('.upcomingEventsHeader.desktop').html('<a href="'+theHref+'">'+theHTML+'</a>');
      $('.upcomingEventsHeader.mobile a').click(function(){
        $('.upcomingEvents table').slideToggle();
        $('.upcomingEvents .findEventLink').slideToggle();
      });
      
      if(elementWidth < 761) {
        $('.latestNews h1').click(function(){
          $('.newsContainer').slideToggle();
          $('.latestNews .button').slideToggle('medium', function(){
            if($('.latestNews .button').is(':visible')) 
              $(this).css('display','block');              

          });
        });
        $('.blogFeed h1').click(function(){
          $('.rssFeed').slideToggle();
          $('.blogFeed .button').slideToggle('medium', function(){
            if($('.blogFeed .button').is(':visible')) 
              $(this).css('display','block');              

          });
        });
      }
      //add links to entire content box on landing and ways to give
      $('.landing .contentBox').each(function(){
        var url = $(this).children('.blockContent').children('.readMoreContainer').html();
        var theHref = $(url).attr('href');
        if(theHref == undefined) {
          console.log('not adding link to empty box');
        }else{
          $(this).wrap('<a href="'+theHref+'"></a>');
        }        
      });


      });//end doc ready
//Resizing images
 window.addEventListener('resize', function(e) {
          var elementWidth = $(window).width();
          var dynamicHeight=elementWidth*0.2625;
          var dynamicPadding=elementWidth*0.01;
          $('.adSection').css('height',dynamicHeight+'px');
          $('.adContent').css('padding',dynamicPadding+'px 0');
        });
    }
};

})(jQuery, Drupal, this, this.document);
function launchVideo(video){
  $('.mobileVideo,.playVideoIcon').hide();
  $('.videoContainer iframe').show();
  $('.videoContainer iframe').attr('src',video);
}