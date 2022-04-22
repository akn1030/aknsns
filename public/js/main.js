$(function(){
	$('.js-modal-open').on('click',function(){
		$('.js-modal').fadeIn();

    var post=$(this).attr("post");
		console.log(post);
    $('.edittext').text(post);

    var id=$(this).attr("id");
    $('.post_id').val(id);
    return false;
	});

	$('.js-modal-close').on('click',function(){
		$('.js-modal').fadeOut();
		return false;
	});
});

// let modalMenu = false;
//
// //HTMLからの引数から投稿IDを取得
// let editModal = function(id) {
//
// //.editModal-投稿IDと一致するものを定数に格納
//  let checkForm = document.querySelector('.editModal-' + id);
//  scrollTo(0,0);
//  if(modalMenu === false) {
//    checkForm.style.display = "flex";
//    modalMenu = true;
//   }
//  else if(modalMenu === true) {
//    checkForm.style.display = "none";
//    modalMenu = false;
//   }
// }
