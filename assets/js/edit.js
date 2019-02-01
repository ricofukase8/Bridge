$(function() {

   Parsley.options.trigger = "keyup focusout change input";

   
$( 'input[name="input_career"]:radio').change(function() {
      let radioval = $(this).val();
      if(radioval == 2){
         $('#company_name').removeAttr('required');
         $('.step2_form').prop('disabled' , true);
         $('.step2_label').addClass('disabled');
         $('.parsley-required').addClass('hidden');
         $('#company_name').removeClass('parsley-error');
         $('#label_job_offer_contents').addClass('disabled');
         $('#job_offer_contents').prop('disabled' , true);
         $('#job_offer_contents').removeClass('parsley-error');
      }else{
         $("#company_name").prop('required' , true);
         $('.step2_form').removeProp('disabled' , true);
         $('.step2_label').removeClass('disabled');
         $('.parsley-required').removeClass('hidden');
         $('#company_name').addClass('parsley-error');

         
         let hoge = $('.radio-career').prop('checked');
         console.log(hoge);


         if ($('input[name="input_job_offer"]:radio').val()) {
           $('#label_job_offer_contents').removeClass('disabled');
           $('#job_offer_contents').removeProp('disabled' , true);
         }
         

      }
      })
   $('input[name="input_job_offer"]:radio').change(function() {
      let job_offer_radio = $(this).val();
      console.log(job_offer_radio);
      if(job_offer_radio == 1){
         $('#job_offer_contents').prop('required', true);
         $('#job_offer_contents').removeProp('disabled' , true);
         $('#label_job_offer_contents').removeClass('disabled');
         $('.parsley-required').removeClass('hidden');
         $('#job_offer_contents').addClass('parsley-error');
      }else{
         $('#job_offer_contents').removeAttr('required' , true);
         $('#job_offer_contents').prop('disabled' , true);
         $('#job_offer_contents').addClass('disabled');
         $('#label_job_offer_contents').addClass('disabled');
         $('.parsley-required').addClass('hidden');
         $('#job_offer_contents').removeClass('parsley-error');
      }
   })

$('#select_img').change(
    function () {
        if (!this.files.length) {
            return;
        }
        $(".img").addClass("hidden");
        let file = document.getElementById('select_img').files;
        let reader = new FileReader();
        reader.addEventListener('load', function(e) {
          document.getElementById('img').src = reader.result;
          document.getElementById('result_img_name').src = reader.result;
       }, true);
       reader.readAsDataURL(file[0]);
})


   $(document).on('click', '#next-btn', function() {
    	$('html,body').scrollTop(0);
   })


 	// $(document).on('click', '#panel-btn', function() {
  //     $("#company-toggle").slideToggle(400);
  //     $('#panel-btn-icon').toggleClass('close');
  //   	return false;
  //  })

   $(document).on('click', '#next-btn', function() {

      let name = $("#name").val(); 
      $('#result_name').text(name);

      let email = $('#email').val();
      $('#result_email').text(email);


      let status = $('#status option:selected').text();
      $('#result_status').text(status);
      console.log(status);


      let batchnumber = $('#batchnumber').val();
      $('#result_batchnumber',).text(batchnumber + 'batch');

      let period = $('#period option:selected').text();
      $('#result_period').text(period);

      let course = $('#course option:selected').text();
      $('#result_course').text(course);

      let profile = $('#profile').val();
      $('#result_profile').text(profile);

      let fb = $('#fb').val();
      $('#result_fb').text(fb);

      let career = $("input[name='input_career']:checked").parent().text();
      $('#result_career').text(career);

      let company_name = $('#company_name').val();
      $('#result_company_name').text(company_name);

      let position = $('#position').val();
      $('#result_position').text(position);

      let career_year = $('#select_box_year').val();
      $('#result_career_year').text(career_year + '年');

      let career_month = $('#select_box_month').val();
      $('#result_career_month').text(career_month + '月~');

      let career_year_end = $('#select_box_year_end').val();
      $('#result_career_year_end').text(career_year_end + '年');

      let career_month_end = $('#select_box_month_end').val();
      $('#result_career_month_end').text(career_month_end + '月');

      let job_status = $("input[name='input_job_status']:checked").parent().text();
      $('#result_job_status').text(job_status);

      let job_contents = $('#job_contents').val();
      $('#result_job_contents').text(job_contents);


         // 職歴２
      // let career_2 = $('[name="input_career_2"]:checked').val();
      // $('#result_career_2').text(career_2);

      // let company_name_2 = $('#company_name_2').val();
      // $('#result_company_name_2').text(company_name_2);

      // let position_2 = $('#position_2').val();
      // $('#result_position_2').text(position_2);

      // let career_year_2 = $('#select_box_year_2').val();
      // $('#result_career_year_2').text(career_year_2 + '年');

      // let career_month_2 = $('#select_box_month_2').val();
      // $('#result_career_month_2').text(career_month_2 + '月~');

      // let career_year_end_2 = $('#select_box_year_end_2').val();
      // $('#result_career_year_end_2').text(career_year_end_2 + '年');

      // let career_month_end_2 = $('#select_box_month_end_2').val();
      // $('#result_career_month_end_2').text(career_month_end_2 + '月');

      // let job_status_2 = $('[name=input_job_status_2]:checked').val();
      // $('#result_job_status_2').text(job_status_2);

      // let job_contents_2 = $('#job_contents_2').val();
      // $('#result_job_contents_2').text(job_contents_2);
       // 職歴２

      let job_offer = $("input[name='input_job_offer']:checked").parent().text();
      $('#result_job_offer').text(job_offer);

      let job_offer_contents = $('#job_offer_contents').val();
      $('#result_job_offer_contents').text(job_offer_contents);

      var advices = [];
      $('input[name="advice[]"]:checked').each(function() {
         advices.push($(this).val());
      });
      $('#result_advice').text(advices);

      let portfolio = $('#portfolio').val();
      $('#result_portfolio').text(portfolio);

      let portfolio_name = $('#portfolio_name').val();
      $('#result_portfolio_name').text(portfolio_name);

      let portfolio_status = $("input[name='input_portfolio_status']:checked").parent().text();
      $('#result_portfolio_status').text(portfolio_status);

      let portfolio_contents = $('#portfolio_contents').val();
      $('#result_portfolio_contents').text(portfolio_contents);
   })

})