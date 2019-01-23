$(function() {
   $(document).on('click', '#next-btn', function() {
      $('html,body').scrollTop(0);
   })


   // $(document).on('click', '#panel-btn', function() {
   //    $("#company-toggle").slideToggle(400);
   //    $('#panel-btn-icon').toggleClass('close');
   //    return false;
   // })

   $(document).on('click', '#next-btn', function() {

      let name = $("#name").val(); //idがnameの値を変数nameに代入
      $('#result_name').text(name); //idのresult_nameにnameの値を入れる

      let email = $('#email').val();
      $('#result_email').text(email);


      let file = document.getElementById('img_name').files;
      let reader = new FileReader();
      reader.addEventListener('load', function(e) {
         document.getElementById('result_img_name').src = reader.result;
       }, true);
       reader.readAsDataURL(file[0]);

      let status = $('#status option:selected').text();
      $('#result_status').text(status);


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
      // console.log(career);

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