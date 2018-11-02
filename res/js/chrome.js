console.clear();

var tab = 0;
var pageData = [
   {
      url: "https://codepen.io/z-/",
      title: "Zed Dash on CodePen",
      special: null,
      info: "https",
      back_btn: true,
      forward_btn: false,
      bookmarked: true,
      address_bar_selected: false,
      extensions:[
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:1
         },
         {
            notifications:0
         }
      ]
   },
   {
      url: "https://duckduckgo.com/",
      title: "DuckDuckGo — Privacy, simplified.",
      special: "Duck Duck Go, Inc. [US]",
      info: "https",
      back_btn: true,
      forward_btn: true,
      bookmarked: false,
      address_bar_selected: false,
      extensions:[
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         }
      ]
   },
   {
      url: null,
      title: "New Tab",
      special: null,
      back_btn: false,
      forward_btn: false,
      bookmarked: false,
      address_bar_selected: true,
      extensions:[
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         },
         {
            notifications:0
         }
      ]
   }
];

$("#windowed").click(function() {
   $("#tab-bar").toggleClass("windowed");
   $("#chrome-bar").toggleClass("windowed");
   if ($("#windowed").attr("fullscreen") == 0) {
      $("#windowed").attr("fullscreen", 1);
      $("#windowed-fullscreen-button-img").attr(
         "src",
         "https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/windows-window.png"
      );
   } else {
      $("#windowed").attr("fullscreen", 0);
      $("#windowed-fullscreen-button-img").attr(
         "src",
         "https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/windows-full-screen.png"
      );
   }
});
$(".tab-container").click(function() {
   $(".tab-container").removeClass("active");
   $(this).addClass("active");
   tab = parseInt($(this).attr("tab-id"));
   var tabInfo = pageData[tab];
   console.log(tabInfo);

   if (tabInfo.url != null) {
      var protocol = /[a-z]*:\/\//.exec(tabInfo.url)[0];
      var domain = /[0-9a-z]*\.[a-z]*/.exec(tabInfo.url);
      var extension = tabInfo.url.replace(/[a-z]*:\/\/[a-z]+\.[a-z]+/, "");
      $("#address").html(
         `<span class="protocol">${protocol}</span><span class="domain">${domain}</span><span class="extension">${extension}</span>`
      );
      $(`#info >*:not(.${tabInfo.info})`).addClass("hide");
      $(`#info >.${tabInfo.info}`).removeClass("hide");
   } else {
      $("#address").html(``);
      $("#info >*:not(.favicon)").addClass("hide");
      $("#info >.favicon").removeClass("hide");
   }
   if (tabInfo.special != null) {
      $("#info").addClass("show-special");
      $(".special")
         .html(tabInfo.special)
         .removeClass("hide");
   } else {
      $("#info").removeClass("show-special");
      $(".special").addClass("hide");
   }
   if(tabInfo.back_btn) {
      $("#back-button").removeAttr('disabled');
   } else {
      $("#back-button").attr('disabled','');
   }
   if(tabInfo.forward_btn) {
      $("#forward-button").removeAttr('disabled');
   } else {
      $("#forward-button").attr('disabled','');
   }
   if(tabInfo.bookmarked) {
      $(".not-favourite").addClass('hide');
      $(".favourite").removeClass('hide');
   } else {
      $(".favourite").addClass('hide');
      $(".not-favourite").removeClass('hide');
   }
   if(tabInfo.address_bar_selected) {
      $("#address-bar").addClass('selected');
      $("#info").attr('disabled','');
   } else {
      $("#address-bar").removeClass('selected');
      $("#info").removeAttr('disabled');
   }
   for(var i = 0; i < tabInfo.extensions.length; i++) {
      if(tabInfo.extensions[i].notifications > 0) {
         $(`.button.extension[extension-id=${i}]`).attr('data-notifications',tabInfo.extensions[i].notifications);
      } else {
         $(`.button.extension[extension-id=${i}]`).removeAttr('data-notifications');
      }
   }
});
$("#bookmark").click(function(){
   pageData[tab].bookmarked = !pageData[tab].bookmarked;
      $(".not-favourite").toggleClass('hide');
      $(".favourite").toggleClass('hide');
});
