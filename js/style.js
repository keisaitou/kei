'use strict';
//------ハンバーガーメニュー　
//ボタンを押したら表示非表示
const hamburgerBtn = document.querySelector('.hamburgerBtn');
const hamburgerMenu = document.querySelector('.hamburgerMenu');
const menuBack = document.querySelector('.menuBack');

hamburgerBtn.addEventListener('click', function (){
    hamburgerBtn.classList.toggle('active');
    hamburgerMenu.classList.toggle('active');
    menuBack.classList.toggle('active');
});
//背景を押したら閉じる
menuBack.addEventListener('click', function(){
  menuBack.classList.remove('active');
  hamburgerMenu.classList.remove('active');
});

//-------スクロールしたらふわっと表示
window.addEventListener('scroll', function(){
    // スクロール量を取得
    const scroll = window.scrollY;
    // 画面の高さを取得
    const windowHeight = window.innerHeight;
    // すべての.boxを取得
    const boxes = document.querySelectorAll('.modal');
  
    boxes.forEach(function(box) {
      // boxまでの高さを取得
      const distanceToBox = box.offsetTop;
      // 下記条件が成り立つときだけboxにis-activeクラスを付与する
      if(scroll + windowHeight > distanceToBox) {
        box.classList.add('scrollactive');
      }
    });
  });

  window.addEventListener('scroll', function(){
    // スクロール量を取得
    const scroll = window.scrollY;
    // 画面の高さを取得
    const windowHeight = window.innerHeight;
    // すべての.boxを取得
    const boxes = document.querySelectorAll('.workInner');
  
    boxes.forEach(function(box) {
      // boxまでの高さを取得
      const distanceToBox = box.offsetTop;
      // 下記条件が成り立つときだけboxにis-activeクラスを付与する
      if(scroll + windowHeight > distanceToBox) {
        box.classList.add('scrollactive');
      }
    });
  });


  //-------トップに戻るボタン
const toTop = document.querySelector('.toTop');

window.addEventListener('scroll', () => { 
  //console.log(window.scrollY);
  if(scrollY > 200){
    toTop.classList.add('active');
  } else {
    toTop.classList.remove('active');
  }
});

toTop.addEventListener('click',()=>{
  window.scroll({
    top:0, behavior: "smooth"
  });
});

//-------スクロールしてヘッダーを表示

const hdHidden = document.querySelector('.hdHidden');
window.addEventListener('scroll', () => { 
  //console.log(window.scrollY);
  if(scrollY > 300) {
    hdHidden.classList.add('active');
  } else {
    hdHidden.classList.remove('active');
  }
});


//-------モーダル
const modales = document.querySelectorAll('.modal');
const modalBk = document.querySelector('.modalBk');
const modalImges = document.querySelectorAll('.modalImg');

for( let i = 0; i < modales.length; i++){
  modales[i].addEventListener('click', () => {
      if(modales.length === modalImges.length){
          modalImges[i].classList.add('active');
          console.log(modalImges[i]);
      }
      modalBk.classList.add('active');
  });
} 

modalImges.forEach((image) => {
    image.addEventListener('click', () => {
        // クリックされた画像がすでに 'active' クラスを持っていれば、外す
        if (image.classList.contains('active')) {
            image.classList.remove('active');
        } else {
            // クリックされた画像に 'active' クラスを追加
            image.classList.add('active');
        }
        
        // バックグラウンドもクリックされた画像に合わせてトグルする場合
        if (image.classList.contains('active')) {
            modalBk.classList.add('active');
        } else {
            modalBk.classList.remove('active');
        }
    });
});


//-------ローディング画面
const load = document.getElementById('load');
window.onload = function() {
  if(load) {
    load.classList.add('close');
  }
}