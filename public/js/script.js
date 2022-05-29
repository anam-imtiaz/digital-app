function submit_login(){
    $('#error_msg').hide();
    let name = $('#name').val();
    if(name == ""){
        $('#error_msg').show()
        $('#error_msg').text('Please enter name')
    }else{
        var request = $.ajax({
            url: base_url+'/api/login_validation',
            type: "POST",
            data: JSON.stringify({name : name}),
            contentType: "application/json",
            dataType: "json",
            success: function(response) {
                if(response.error_msg != ""){
                    $('#error_msg').show()
                    $('#error_msg').text(response.error_msg)
                }else{
                    window.location.href = base_url + '/quiz';
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
        
    }

}

function check_next_question(){
 
    $('#error_msg').hide();
    let question_counter = parseInt($('.question_counter').text());
    
    let user_id = $('#user_id').val();
    let question_id = $('#question_id').val();
    let answer_id = $('input[name="question_answer_options"]:checked').val();
   
    if(answer_id == "" || answer_id == undefined){
        $('#error_msg').show()
        $('#error_msg').text('Please select the answer')
    }else{ 
        
        
        
        var request = $.ajax({
            url: base_url+'/api/submit_answers',
            type: "POST",
            data: JSON.stringify({question_id : question_id,'user_id':user_id,'answer_id':answer_id,'type':'answer'}),
            contentType: "application/json",
            dataType: "json",
            success: function(response) {
                if(response.error_msg != ""){
                    $('#error_msg').show()
                    $('#error_msg').text(response.error_msg)
                }else{
                    if(question_counter < 10){
                        $('#question_id').val(response.question_data.id);
                        $('.question_title').text(response.question_data.question_title);
                        $('.question_answer_div').empty();
                        $.each(response.answer_data,function(key,value){
                            $('.question_answer_div').append(' <div class="radio"><label><input type="radio" name="question_answer_options" id="question_answer_options" value="'+value.id+'" >"'+value.answer_title+'"</label></div>');
                        })
                     }else{
                        $('.btn_results').show();
                        $('.btn_skip').hide();
                        $('.btn_next').hide();
                        $('.question_title').text('Please check the results by clicking this button');
                        $('.question_answer_div').empty();
                        $('.question_counter').text('');
                        $('.question_heading').text('Digital App Quiz');
                        return false;
                    }
                  
                }
            },
            error: function(response) {

            }
        });
        if(question_counter ==10){
            $('.btn_results').show();
            $('.btn_skip').hide();
            $('.btn_next').hide();
            $('.question_title').text('Please check the results by clicking this button');
            $('.question_answer_div').empty();
            $('.question_counter').text('');
            $('.question_heading').text('Digital App Quiz');

            return false;
        }     
        $('.question_counter').text(question_counter+1);
    }
}

    function check_skip_question(){
        let question_counter = parseInt($('.question_counter').text());
    
            let user_id = $('#user_id').val();
            let question_id = $('#question_id').val();
            let answer_id = $('input[name="question_answer_options"]:checked').val();
            
            var request = $.ajax({
                url: base_url+'/api/submit_answers',
                type: "POST",
                data: JSON.stringify({question_id : question_id,'user_id':user_id,'answer_id':answer_id,'type':'skip'}),
                contentType: "application/json",
                dataType: "json",
                success: function(response) {
                    if(response.error_msg != ""){
                        $('#error_msg').show()
                        $('#error_msg').text(response.error_msg)
                    }else{
                        if(question_counter < 10){
                            $('#question_id').val(response.question_data.id);
                            $('.question_title').text(response.question_data.question_title);
                            $('.question_answer_div').empty();
                            $.each(response.answer_data,function(key,value){
                                $('.question_answer_div').append(' <div class="radio"><label><input type="radio" name="question_answer_options" id="question_answer_options" value="'+value.id+'" >'+value.answer_title+'</label></div>');
                            })
                        }else{
                            $('.btn_results').show();
                            $('.btn_skip').hide();
                            $('.btn_next').hide();
                            $('.question_title').text('Please check the results by clicking this button');
                            $('.question_answer_div').empty();
                            $('.question_counter').text('');
                            $('.question_heading').text('Digital App Quiz');
            
                            return false;
                        }
                        $('.question_counter').text(question_counter+1);
                      
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });   
    }


    function check_results(){
        $('#error_msg').hide();
        let user_id = $('#user_id').val();
        var request = $.ajax({
            url: base_url+'/api/check_results',
            type: "POST",
            data: JSON.stringify({'user_id':user_id}),
            contentType: "application/json",
            dataType: "json",
            success: function(response) {
                $('.btn_results').hide();
                $('.btn_logout').show();
                   $('.question_heading').val('Quiz Results');
                   $('.question_title').html('Correct Answers = '+response.results_data.correct_count + ' <br> InCorrect Answers = '+response.results_data.incorrect_count+ ' <br> Skip Answers = '+response.results_data.skip_count );
                   $('.question_answer_div').empty();
            },
            error: function(response) {
                console.log(response);
            }
        });   
    }

    function logout_quiz(){
        $('#error_msg').hide();
        let user_id = $('#user_id').val();
        var request = $.ajax({
            url: base_url+'/api/logout',
            type: "POST",
            data: JSON.stringify({'user_id':user_id}),
            contentType: "application/json",
            dataType: "json",
            success: function(response) {
                $('.btn_results').hide();
                $('.btn_logout').show();
                window.location.href = base_url + '/';
            },
            error: function(response) {
                console.log(response);
            }
        });   
    }


