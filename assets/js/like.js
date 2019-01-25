$(function() {
  $(document).on('click', '.js-like', function() {
    var user_id = $(this).siblings('.user-id').text();
    var sigin_user_id = $('#signin-user').text();
     var like_btn = $(this);
    // var like_count = $(this).siblings('.like_count').text();

    // console.log(user_id);

    $.ajax({
      // 送信先や送信するデータなど
      url: 'hoge.php',
      type: 'POST',
      datatype: 'json',
      data: {
        'user_id': user_id,
        'signin_user_id': sigin_user_id
      }
    }).done(function (data) {
      // 成功時の処理
      if (data == 'true') {
        // like_count++;
        // like_btn.siblings('.like_count').text(like_count);
        like_btn.removeClass('js-like');
  	    like_btn.addClass('js-unlike');
  	    like_btn.children('button').text('いいねを取り消す');
	    //console.log(123);

      }

    }).fail(function (e) {
      // 失敗時の処理
      console.log(e);
    })
  });
});

$(document).on('click', '.js-unlike', function() {
  var user_id = $(this).siblings('.feed-id').text();
  var sigin_user_id = $('#signin-user').text();
  var like_btn = $(this);
  // var like_count = $(this).siblings('.like_count').text();

  $.ajax({
    url: 'hoge.php',
    type: 'POST',
    datatype: 'json',
    data: {
      'user_id': user_id,
      'signin_user_id': signin_user_id,
      'is_unlike': true
    }
  }).done(function (data) {
    if (data == 'true') {
      // like_count--;
      // like_btn.siblings('.like_count').text(like_count);
      like_btn.removeClass('js-unlike');
    like_btn.addClass('js-like');
    like_btn.children('button').text('いいね！')

    }
  }).fail(function (e) {
    console.log(e);
  })
});

