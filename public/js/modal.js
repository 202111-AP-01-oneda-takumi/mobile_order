const buttonOpen = document.getElementById('modalOpen');
const modal = document.getElementById('easyModal');
const buttonClose = document.getElementById('modalClose');


// ボタンがクリックされた時
buttonOpen.addEventListener('click', modalOpen);

function modalOpen() {
    modal.style.display = 'block';
}

// バツ印がクリックされた時
buttonClose.addEventListener('click', modalClose);

function modalClose() {
    console.log('ok');

    modal.style.display = 'none';
}

// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose);

function outsideClose(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
}







