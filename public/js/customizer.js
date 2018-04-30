var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

$(document).ready(function(){
    $('form input').on("keyup",function(){
        customizer.update(this);
    });
});
var customizer = {
    iframe:$('iframe').contents().find("body"),
    speakerCount:speakerCount+1,
    speakersJson:speaksersJson,
    save:function(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var data = new FormData();
      $('form').each(function(index) {
          var that = $(this);
          var obj = {"speakers":that.serialize()};

          if(that.attr('id') != "speakers-data"){
              data.append(that.attr('id'),that.serialize());
          }else{
              var counter = 0;
                for(var j = 0; j<that.serializeArray().length;j+=2){

                  counter++;

                  customizer.speakersJson["speaker"+counter].name = that.serializeArray()[j].value;
                  customizer.speakersJson["speaker"+counter].job = that.serializeArray()[j+1].value;

                }

              data.append(that.attr('id'),JSON.stringify(customizer.speakersJson));
          }

      });
      data.append('slug',event);

      $.ajax({
        url: baseUrl+"/customizer/save",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function(data){
            $('iframe').attr("src", $('iframe').attr("src"));
        },
      });

    },
    update:function(self){
        /*console.log($(customizer.iframe).find('.'+$(self).attr('name')).html());
        $(customizer.iframe).find('.'+$(self).attr('name')).html($(self).val());*/
    },
    addSpeaker:function(self){
      customizer.speakersJson["speaker"+customizer.speakerCount] = {
          name:"",
          job:""
      };
      $('#speakers-data').append('<div class="form-group">'+
          '<label for="">Speaker '+customizer.speakerCount+'</label>'+
          '<input type="text" name="speaker'+customizer.speakerCount+'Name" value="" class="form-control" placeholder="Enter name">'+
            '<input type="text" name="speaker'+customizer.speakerCount+'Job" value="" class="form-control" placeholder="Enter job">'+
      '</div>');

      $(self).parent().parent().parent().css({maxHeight:$(self).parent().parent().parent().prop('scrollHeight')  + "px"}) ;
      customizer.speakerCount++;

    }

};
