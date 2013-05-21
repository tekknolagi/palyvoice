(function($) {
  $.fn.konami = function(callback, code) {
    if(code == undefined) code = "38,38,40,40,37,39,37,39,66,65";
    return this.each(function() {
      var kkeys = [];
      $(this).keydown(function(e){
        kkeys.push( e.keyCode );
        while (kkeys.length > code.split(',').length) {
          kkeys.shift();
        }
        if ( kkeys.toString().indexOf( code ) >= 0 ){
          $(this).unbind('keydown', arguments.callee);
          callback(e);
        }
      }, true);
    });
  }
})(jQuery);

function Spotlight() {
  this.index = 1;
  this.rotating = true;

  $slider = $('#main-switcher');
  $controls = $('<div id="controls"></div>');
  $boxes = $('<div id="boxes"></div>');

  this.container = $slider.find('ul');
  this.slides = $slider.find('li');
  this.width = $slider.width();

  var self = this;

  this.forward = function() {
    if(this.index == (this.slides.length)) {
      this.container.animate({ marginLeft: '+=' + width * (this.slides.length - 1 )}).removeClass('active').eq(0).addClass('active');
      $boxes.find('div').removeClass('active').eq(0).addClass('active');
      this.index = 1;
    } else {
      this.container.animate({ marginLeft: '-=' + width });
      $boxes.find('div.active').removeClass('active').next().addClass('active');
      this.index++;
    }
  }

  this.backward = function() {
    if(this.index == 1) {
      this.container.animate({ marginLeft: '-=' + width * (this.slides.length - 1 )}).removeClass('active').eq(0).addClass('active');
      $boxes.find('div').removeClass('active').eq(this.slides.length - 1).addClass('active');
      this.index = this.slides.length;
    } else {
      this.container.animate({ marginLeft: '+=' + width });
      $boxes.find('div.active').removeClass('active').prev().addClass('active');
      this.index--;
    }
  }

  this.autoSwitch = function() {
    if(self.rotating) {
      this.forward();
      setTimeout('this.autoSwitch()', 8000);
    }
  }

  var append = '';
  $slider.find('ul li').each(function() {
    append += '<div class="box"></div>';
  });

  $boxes.append(append).find('.box:first').addClass('active');
  $controls.append('<a href="#" id="prev" class="control-arrow">Previous</a><a href="#" id="next" class="control-arrow">Next</a>').append($boxes);
  $slider.append($controls);

  $slider.mouseenter(function() {
     $controls.show(250);
  }).mouseleave(function() {
     $controls.hide();
     $boxes.show(250);
  });

  $controls.find('.box').click(function() {
    $(this).siblings().removeClass('active');
    $(this).addClass('active')
    var boxIndex = $(this).parent().children().index($(this));

    margin = -(width * boxIndex);

    self.container.animate({marginLeft: margin}).removeClass('active').eq(0).addClass('active');

    self.index = boxIndex + 1;
    self.rotating = false;
  });

  $slider.find('#next').click(function() {
    self.rotating = false;
    self.forward();
  });

  $slider.find('#prev').click(function() {
    self.rotating = false;
    self.backward();
  });

  setTimeout('this.autoSwitch()', 8000);
}

$(document).ready(function() {
  Spotlight();
  $('.jump_list').change(function() {
    var val = $(this).val();
    
    if(val != '') {
      window.location = val;
    }
    
    return false;
  });

  $('.ticker ul').cycle({
    fx: 'scrollDown'
  });

  $('.view-archive-list tr').mouseover(function() {
    $(this).addClass('over');
  }).mouseout(function() {
    $(this).removeClass('over');
    }).click(function() {
    loc = $(this).find('.views-field-field-headline-value a').attr('href');
    window.location = loc;
  });
  
  $(window).konami(function() {
    easter_egg();
  });
});

function easter_egg() {
  $("#this.container, footer").remove();
  console.log("NYAN");
  window.location.replace("http://nyan.cat");
}