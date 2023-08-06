console.log($('.question:first-child'));
let isPhysic, isArcher, is83, is78, isSummoner, isUseFinalServitor, jsText;
let jsTextWhyNotPPBefore83Default = 'Самый значимый скил у ПП для физов Counter Critical на 83 лвле, но т.к. ты не планируешь качать сапортов до этого уровня, то Warcryer лучший выбор из-за Chant of Victory, который даёт мощь крита и хп, а с помощью Gate Chant можно быстро регрупать пати. Необходимо обзавестись пухами для бафа.';

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

    jsText = 'Ключевая способность ПП, которая перекрывает все сомнения при выборе баффера это - Counter Critical (на 83 лвле), а так же ПП более приятный в прокачке за счёт того, что у него больше бафов, они появляются раньше, есть точечный захил, рес, piece - позволяет скинуть агро мобов.';
    addJsText('.why-not__wc', jsText);

    chosePP();
});


$('.chose-buffer button[data-answer="not-78"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    is78 = false;

    jsText = 'Сила варка в его кове (Chant of Victory), но, т.к. ты не планируешь качать сапортов выше 78 уровня, то кова не будет, а ПП более приятный в прокачке за счёт того, что у него больше бафов, они появляются раньше, есть точечный захил, рес, piece - позволяет скинуть агро мобов.';
    addJsText('.why-not__wc', jsText);

    chosePP();
});

$('.chose-buffer button[data-answer="78"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    is78 = true;

    if (isPhysic && isArcher === false && is83 === false) {
        $('.is-summoner').show();
    } else {

        if (isArcher) {
            $('.why-not-pp-before-83-default').removeClass('d-none');
            jsText = 'Самый значимый скил у ПП для физов Counter Critical на 83 лвле, но он не работает на лучников, поэтому Warcryer лучший выбор из-за Chant of Victory, который даёт мощь крита и хп, а с помощью Gate Chant можно быстро регрупать пати. Необходимо обзавестись пухами для бафа.';
        } else {
            jsText = jsTextWhyNotPPBefore83Default;
        }

        // addJsText('.why-not__pp', jsText);
        choseWC();
    }
});

$('.chose-buffer button[data-answer="not-summoner"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isSummoner = false;
    addJsText('.why-not__pp', jsTextWhyNotPPBefore83Default);
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
    jsText = 'Сила варка в его кове (Chant of Victory), но, т.к. у суммонера есть точно такой же скил для сумма и ты его будешь кидать сам, то ПП более приятный в прокачке за счёт того, что у него больше бафов, они появляются раньше, есть точечный захил, рес, piece - позволяет скинуть агро мобов.';
    addJsText('.why-not__wc', jsText);
    chosePP();
});

$('.chose-buffer button[data-answer="not-use-final-servitor"]').click(function (e) {
    $(this).addClass('disabled');
    $(this).closest('.question').hide();
    isUseFinalServitor = true;
    addJsText('.why-not__pp', jsTextWhyNotPPBefore83Default);
    choseWC();
});


function choseWC() {
    $('.chose__wc').fadeIn();
    $('.chose-buffer button[data-answer="why-not-pp"]').delay(3000).fadeIn();
}

function chosePP() {
    $('.chose__pp').fadeIn();
    $('.chose-buffer button[data-answer="why-not-wc"]').delay(3000).fadeIn();
}

function choseSE() {
    $('.chose__se').fadeIn();
    $('.chose-buffer button[data-answer="why-not-ee"]').delay(3000).fadeIn();
}

function addJsText(parentSelector, text) {
    $(parentSelector + ' .js-text').text(text);
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

