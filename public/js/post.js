
document.addEventListener('DOMContentLoaded', function () {
    // 編集ボタン（アイコンクリック）
    document.querySelectorAll('.editBtnTrigger').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const postItem = btn.closest('.post');
            const modal = postItem.querySelector('.editModal');
            modal.classList.add('show');
        });
    });

    // 削除ボタン（アイコンクリック）
    document.querySelectorAll('.deleteBtnTrigger').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const postItem = btn.closest('.post');
            const modal = postItem.querySelector('.deleteModal');
            modal.classList.add('show');
        });
    });

    // キャンセルボタン
    document.querySelectorAll('.cancelBtn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const modal = btn.closest('.modal');
            modal.classList.remove('show');
        });
    });
});
