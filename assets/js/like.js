$(function() {
  $(document).on('click', '.js-like', function() {
    var user_id = $(this).siblings('.user-id').text();
    var signin_user_id = $('.signin-user').text();
    console.log(signin_user_id);
    var like_btn = $(this);

    $.ajax({
      // 送信先や送信するデータなど
      url: 'likeUpdate.php',
      type: 'POST',
      dataType: 'json',
      data: {
        'user_id': user_id,
        'signin_user_id': signin_user_id
      }
    }).done(function (data) {
      console.log(user_id);
      // 成功時の処理
      if (data === true) {
        like_btn.removeClass('js-like');
  	    like_btn.addClass('js-unlike');
  	    like_btn.children('span').text('LIKEを取り消す');
	    // console.log(123);

      }

    }).fail(function (e) {
      // 失敗時の処理
      console.log(e);
    })
  });
});

$(document).on('click', '.js-unlike', function() {
  var user_id = $(this).siblings('.user-id').text();
  var signin_user_id = $('.signin-user').text();
  var like_btn = $(this);

  $.ajax({
    url: 'likeUpdate.php',
    type: 'POST',
    dataType: 'json',
    data: {
      'user_id': user_id,
      'signin_user_id': signin_user_id,
      'is_unlike': true
    }
  }).done(function (data) {
    console.log(user_id);
    if (data === true) {
    like_btn.removeClass('js-unlike');
    like_btn.addClass('js-like');
    like_btn.children('span').text('LIKE')
      // console.log(456);
    }
  }).fail(function (e) {
    console.log(e);
  })
});

