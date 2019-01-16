$(function() {
   $(document).on('click', '#next-btn', function() {
         let name = $("#name").val(); //idがnameの値を変数nameに代入
         // console.log(name);
         $('#result_name').text(name); //idのresult_nameにnameの値を入れる
      })
   $(document).on('click', '#next-btn', function() {
         let email = $('#email').val();
         $('#result_email').text(email);
      })
      $(document).on('click', '#next-btn', function() {
         let password = $('#password').val();
         $('#result_password').text(password);
      })
      $(document).on('click', '#next-btn', function() {
         let img_name = $('#img_name').val();
         $('#result_img_name').html('<img src="assets/img/categories/let img_name" class="img-responsive img-thumbnail">');
      })
      $(document).on('click', '#next-btn', function() {
         let status = $('#status').val();
         $('#result_status').text(status);
      })
      $(document).on('click', '#next-btn', function() {
         let batchnumber = $('#batchnumber').val();
         $('#result_batchnumber',).text(batchnumber + 'batch');
      })
      $(document).on('click', '#next-btn', function() {
         let period = $('#period').val();
         $('#result_period').text(period);
      })
      $(document).on('click', '#next-btn', function() {
         let course = $('#course').val();
         $('#result_course').text(course);
      })
      $(document).on('click', '#next-btn', function() {
         let plofile = $('#plofile').val();
         $('#result_plofile').text(plofile);
      })
      $(document).on('click', '#next-btn', function() {
         let fb = $('#fb').val();
         $('#result_fb').text(fb);
      })

})