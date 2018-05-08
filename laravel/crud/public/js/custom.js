$(document).ready(function(){

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


//-----------------------------------
$('.summernot').summernote({
	height: 250,
});

    $("#profile").validate({
      rules: {
        "phone": {
          required: true,
        },  
        "country": {
          required: true,
        },  
        "city": {
          required: true,
        },  
        "address": {
          required: true,
        },  
        "pincode": {
          required: true,
        }
      },

      messages:{
        phone:{
          required:"Please enter phone."
        },
        country:{
          required:"Please enter country."
        },
        city:{
          required:"Please enter city."
        },
        address:{
          required:"Please enter address."
        },
        pincode:{
          required:"Please enter pincode."
        }
      },
      submitHandler: function(e) {
        //alert('success');
        //$('#loading').show();
        var udata = $('#profile').serialize()
        $.ajax({
          url:'http://localhost/git/laravel/crud/public/profileajax',
          type:'POST',
          data:{
            '_token': $('input[name=_token]').val(),
            'udata': 'test'            
          },
          success: function(data){
            //var res = $.parseJSON(data);
            $('#loading').hide();
            console.log(data);
            alert(data);
            // if(res==1)
            // {
            //  //alert(res);
            //   $('.alert-success').show();
            //   $('#loading').hide();
            //   //alert('Updated successfully');
            //   $('.alert-success').show();
            // }
            // else
            // {
            //     $('#loading').hide();
            //   //alert('Unable to insert data, please try again later');
            //   $('.alert-info').show();
            // }
          }
        });
      }
    });


/*	$("#postform").validate({
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
            if(res==1)
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
            }
          }
        });
      }
    });*/
});