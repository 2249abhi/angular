$(document).ready(function(){



//-----------------------------------
$('.summernot').summernote({
	height: 250,
});

	$("#postform").validate({
      rules: {
        "post_title": {
          required: true,
        },  
        "post_content": {
          required: true,
        }
      },

      messages:{
        post_title:{
          required:"Please enter title."
        },
        post_content:{
          required:"Please enter content."
        }
      },
      submitHandler: function(e) {
        //$('#loading').show();
        $.ajax({
          url:'http://localhost/git/laravel/crud/public/ajaxtest/',
          type:'POST',
          data:$('#postform').serialize(),
          success: function(data){
            //var res = $.parseJSON(data);
            $('#loading').hide();
            console.log(data);
            //alert(data);
            /*if(res==1)
            {
             //alert(res);
              $('.alert-success').show();
              $('#loading').hide();
              //alert('Updated successfully');
              $('.alert-success').show();
            }
            else
            {
                $('#loading').hide();
              //alert('Unable to insert data, please try again later');
              $('.alert-info').show();
            }*/
          }
        });
      }
    });
});