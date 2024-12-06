let clickCount = 0
let timer = null
const timeout = 100
const hogeElement = document.getElementById('func3')

// クリック回数によって動作を分岐
hogeElement.addEventListener('click', () => {
    clickCount += 1
    if (clickCount >= 1) {
        timer = setTimeout(() => {
            if (clickCount %2 === 1) {
              document.getElementById('contents').style.zIndex = -9999;
            }
            if (clickCount %2 === 0) {
              document.getElementById('contents').style.zIndex = 0;
            }
            timer = null
        }, timeout)
    }
})

/*ホームページが最初に表示されたときにmasonryを一回だけ実行。整列させる*/
var $container = $('#contents'); //タイトル状に配置するコンテンツの親要素の指定

$container.imagesLoaded(function(){ 
  $container.masonry({
    itemSelector: '.grid-item', //タイトル状に配置する要素のclassの指定
    columnWidth: 250,
    gutterWidth: 25,
	//isFitWidth: true,　//親要素の幅に合わせてタイル状のコンテンツ数を自動調整
	//isAnimated: true,　//伸縮時のアニメーションの設定
    //percentPosition: true,
    isResizable: true,
    horizontalOrder: true,
    transitionDuration: '1.5s'
  });
});

const categoryLabel = '.js-category-label';
const categoryItem = '.grid-item';
const hideClass = 'is-hide';
const activeClass = 'is-active';

document.addEventListener('DOMContentLoaded', function () {
    const categoryLabels = document.querySelectorAll(categoryLabel);
    // 絞り込みを変更した時
    categoryLabels.forEach(function (item) {
        item.addEventListener('click', function () {
            categoryLabels.forEach(function (item) {
                item.classList.remove(activeClass);
            });
            this.classList.add(activeClass);
            const category = this.dataset.category;
            search_filter(category);
        
        var $container = $('#contents'); //タイトル状に配置するコンテンツの親要素の指定

        $container.masonry()

        $container.imagesLoaded(function(){ 
            $container.masonry({
            itemSelector: '.grid-item', //タイトル状に配置する要素のclassの指定
            columnWidth: 250,
            gutterWidth: 25,
            //isFitWidth: true,　//親要素の幅に合わせてタイル状のコンテンツ数を自動調整
            //isAnimated: true,　//伸縮時のアニメーションの設定
            //percentPosition: true,
            isResizable: true,
            originLeft: true,
            horizontalOrder: true,
            transitionDuration: '1.5s',
          });
        });
    });
    });
});

function search_filter(category) {
    const categoryItems = document.querySelectorAll(categoryItem);
    // 非表示状態を解除
    categoryItems.forEach(function (item) {
        item.classList.remove(hideClass);
    });

    // 値が空の場合はすべて表示
    if (category === '') {    
        $container.masonry({
            itemSelector: '.grid-item', //タイトル状に配置する要素のclassの指定
            columnWidth: '.grid-item',
            gutterWidth: 0,
            //isFitWidth: true,　//親要素の幅に合わせてタイル状のコンテンツ数を自動調整
            isAnimated: true,　//伸縮時のアニメーションの設定
            percentPosition: true,
            isResizable: true,
            originLeft: true,
            transitionDuration: '1.5s'
          });
        return;
    }
    // リスト内の各アイテムをチェック
    categoryItems.forEach(function (item) {
        const itemData = item.dataset.category;
        // 絞り込み対象かどうかを調べる
        if (itemData !== category) {
            item.classList.add(hideClass);
        }
    });
}

/*メニュー*/
$(function () {
  $(".drawer__button").click(function () {
    $(this).toggleClass("active");
    $(".drawer__nav").toggleClass("active");
  });
  // function
});

$(function(){
  //windowの高さを取得して、header+footerの280pxを引く
  var h = $(window).height() - 364;
  
  //contentsにheightを追加
  $('.grid').css('min-height',+ h +'px');
});



//スライダー
$('.slide-items').slick({
  autoplay: true, //自動スクロール
  autoplaySpeed: 0, //自動再生時のスライド切り替えの時間
  speed: 20000, //スライドが流れるスピード
  arrows: false, //左右の矢印を非表示
  swipe: false, //スワイプ禁止
  slidesToShow: 2, //表示するスライドの数
  cssEase: 'linear', //画像切り替えのアニメーション"linearは等速"
  pauseOnFocus: false, //フォーカスしても止めない
  pauseOnHover: false, //マウスホバーしても止めない
  rtl: false //逆向きを有効（true）にする
});