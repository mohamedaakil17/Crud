$(function(){
    var $form = $("#form");
    if($form.length){
        $form.validate({
            rules:{
                name:{
                    required: true
                }
            },
            message:{
                name:{
                    required: 'First Name is Required'
                }
            }
        })
    }
})