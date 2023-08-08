console.log($('.question:first-child'));
let isPhysic, isArcher, is83, is78, isSummoner, isUseFinalServitor;

$('.chose-buffer button[data-answer="physic"]').not('.disabled').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isPhysic = true;
    $('.is-archer').show();
});

$('.chose-buffer button[data-answer="mage"]').not('.disabled').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isPhysic = false;
    choseSE();
});

$('.chose-buffer button[data-answer="not-archer"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isArcher = false;
    $('.is-lvl-83').show();
});

$('.chose-buffer button[data-answer="archer"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isArcher = true;
    $('.is-lvl-78').show();
});


$('.chose-buffer button[data-answer="not-83"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    is83 = false;
    $('.is-lvl-78').show();
});

$('.chose-buffer button[data-answer="83"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    is83 = true;


    chosePP();
});


$('.chose-buffer button[data-answer="not-78"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    is78 = false;

    chosePP('not-78');
});

$('.chose-buffer button[data-answer="78"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    is78 = true;
    let reason = '';
    if (isPhysic && isArcher === false && is83 === false) {
        $('.is-summoner').show();
    } else {

        if (isArcher) {
            reason = 'archer';
        }


        choseWC(reason);
    }
});

$('.chose-buffer button[data-answer="not-summoner"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isSummoner = false;
    choseWC();
});

$('.chose-buffer button[data-answer="summoner"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isSummoner = true;
    $('.is-use-final-servitor').show();
});


$('.chose-buffer button[data-answer="use-final-servitor"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isUseFinalServitor = true;
    chosePP('useFinalServitor');
});

$('.chose-buffer button[data-answer="not-use-final-servitor"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isUseFinalServitor = true;
    choseWC();
});


function choseWC(reason = '') {
    let defaultText = $('.why-not__pp-default').html();
    $('.why-not__for-pp-default').html(defaultText);
    let textBlock;
    if (reason === 'archer') {

        textBlock = $('.why-not-pp-archer');
    } else {
        textBlock = $('.why-not-pp-before-83-default');
    }
    textBlock.removeClass('d-none');
    $('.chose__wc').fadeIn();
    $('.chose-buffer button[data-answer="why-not-pp"]').delay(3000).fadeIn();
}

function chosePP(reason = '') {
    let defaultText = $('.why-not__wc-default').html();
    let textBlock;
    $('.why-not__for-wc-default').html(defaultText);
    if (reason === 'not-78') {
        textBlock = $('.why-not-wc-not-78');
    } else if (reason === 'useFinalServitor') {
        textBlock = $('.why-not-wc-use-final-servitor');
    } else {
        textBlock = $('.why-not-wc-on-83-default');
    }
    textBlock.removeClass('d-none');
    $('.chose__pp').fadeIn();
    $('.chose-buffer button[data-answer="why-not-wc"]').delay(3000).fadeIn();
}

function choseSE() {
    $('.chose__se').fadeIn();
    $('.chose-buffer button[data-answer="why-not-ee"]').delay(3000).fadeIn();
}


$('.chose-buffer button[data-answer="why-not-ee"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.chose').hide();
    $('.why-not__ee').show();
});

$('.chose-buffer button[data-answer="why-not-pp"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.chose').hide();
    $('.why-not__pp').show();
});


$('.chose-buffer button[data-answer="why-not-wc"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.chose').hide();
    $('.why-not__wc').show();
});

