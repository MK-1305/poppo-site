// 配列の方が後々取り出す要素が取り出しやすいためスプレッド構文で書く（普通に書くとnodelistで取れる）
let imagesItems = [...document.querySelectorAll(".img-wrap")];
let titles = [...document.querySelectorAll(".text")];
const contact = document.querySelector('.contact');
const mainImage = document.querySelector('.recommend-image img');
const thumbImages = document.querySelectorAll('.recommend-thumbnails img');

// 監視対象になったらactiveをつける処理
let setItemActive = (entries) => {
  // mapでもOK
  entries.map((entry) => {
    //   もしentryが監視対象になれば
    if (entry.isIntersecting) {
      //   entryのtarget（.title）にactiveクラスをつける
      entry.target.classList.add("active");
      // 画面外の時はactiveクラスを消しておく（戻った時にもアニメーションさせたい時）
    } else {
      entry.target.classList.remove("active");
    }
  });
};

let options = {
  threshold: 0.5,
};

// どこにいるのか監視し、特定の位置に来たら関数を呼ぶ
let observer = new IntersectionObserver(setItemActive, options);

// img-wrapは偶数と奇数で出現する場所を変える
imagesItems.map((item, index) => {
  // テンプレート文字列でitemに背景画像を設定していく
  item.children[0].style.backgroundImage = `url(./images/${index + 1}.jpg)`;
  // 三項演算子で偶数番目なら右に奇数なら左に配置する処理(0スタート)
  index % 2 == 0 ? (item.style.left = "55%") : (item.style.left = "5%");
  observer.observe(item);
});

titles.map((title, index) => {
  index % 2 == 0 ? (title.style.transform = "translateX(5%)") : (title.style.transform = "translateX(102%)");
  observer.observe(title);
});
// 何を監視するか
observer.observe(contact);

// recommend
thumbImages.forEach((thumbImage) => {
    thumbImage.addEventListener('mouseover', (event) => {
      mainImage.src = event.target.src;
      mainImage.animate({opacity: [0,1]}, 500);
    });
});