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


var customizer = {
    save:function(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var data = new FormData();
      $('form').each(function(index) {
          var that = $(this);
          console.log(index);
          data.append(that.attr('id'),that.serialize());
      });
      data.append('slug',event);
        console.log(data);
      $.ajax({
        url: baseUrl+"/customizer/save",
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data);
        },
      });

    }

};
