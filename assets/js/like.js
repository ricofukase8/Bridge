$(function() {
  $(document).on('click', '.js-like', function() {
    var user_id = $(this).siblings('.user-id').text();
    // console.log(user_id);
    var signin_user_id = $('#signin-user').text();
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
      console.log(data);
      // 成功時の処理
      if (data === true) {
        like_btn.removeClass('js-like');
  	    like_btn.addClass('js-unlike');
  	    like_btn.children('span').text('いいねを取り消す');
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
  var signin_user_id = $('#signin-user').text();
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
    console.log(data);
    if (data === true) {
    like_btn.removeClass('js-unlike');
    like_btn.addClass('js-like');
    like_btn.children('span').text('いいね！')
      // console.log(456);
    }
  }).fail(function (e) {
    console.log(e);
  })
});

