// core version + navigation, pagination modules:
import Swiper, {Navigation, Pagination, Manipulation} from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

let sliderRecipesContainer = $('.recipes-list .swiper-wrapper');

// init Swiper:
const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination, Manipulation],
    direction: 'horizontal',
    loop: true,
    slidesPerView: 4,
    speed: 400,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    },
});

function getSwiperActiveIndex() {
    return $('.sd-swiper-active').index();
}

$('.sd-test').click(function () {

});
$('.recipes-list__enchant-button').click(function () {
    $('.recipes-list__enchant-button_active').removeClass('recipes-list__enchant-button_active');
    $(this).addClass('recipes-list__enchant-button_active');
    $('.sd-active-recipe').removeClass('sd-active-recipe');
    let recipe = $(this).closest('.swiper-slide');
    recipe.addClass('sd-active-recipe');
    let url = recipe.find('div > a').attr('href');
    let gradeImg = recipe.find('div > img').attr('src');
    let img = recipe.find('div > a > img').attr('src');
    let title = recipe.find('div > a > img').attr('alt');
    let enchantmentItem = $('.enchantment-item');
    let pAttack = recipe.attr('data-p-attack');
    let mAttack = recipe.attr('data-m-attack');
    let categoryId = recipe.attr('data-category-id');
    let grade = recipe.attr('data-grade');
    let isTwoHands = recipe.attr('data-is-two-hands');
    let soulshotImg = recipe.find('.recipe__soulshot-img').attr('src');
    let spiritshotImg = recipe.find('.recipe__spiritshot-img').attr('src');

    enchantmentItem.attr('data-p-attack', pAttack);
    enchantmentItem.attr('data-m-attack', mAttack);
    enchantmentItem.attr('data-grade', grade);
    enchantmentItem.attr('data-category-id', categoryId);
    enchantmentItem.attr('data-is-two-hands', isTwoHands);

    enchantmentItem.find('div > a').attr('href', url);
    enchantmentItem.find('div > img').attr('src', gradeImg);
    enchantmentItem.find('div > a > img').attr('src', img);
    enchantmentItem.find('div > a > img').attr('alt', title);
    enchantmentItem.find('.enchantment-item__title').text(title);
    enchantmentItem.find('.enchantment-item__p-attack').text(pAttack);
    enchantmentItem.find('.enchantment-item__m-attack').text(mAttack);
    enchantmentItem.find('.enchantment-item__soulshot-img').attr('src', soulshotImg);
    enchantmentItem.find('.enchantment-item__spiritshot-img').attr('src', spiritshotImg);

    $('.sd-color-green').removeClass('sd-color-green');
    $('.enchantment-item__change-value').val(0);
    enchantmentChangeByValue(0);

    $('.enchantment-item-container').show();
});

$('.enchantment-category-button').click(function () {
    $('.swiper').addClass('d-none').removeClass('sd-swiper-active');
    let key = $(this).attr('data-key');
    let swiper = $('.swiper[data-key=' + key + ']');
    swiper.removeClass('d-none').addClass('sd-swiper-active');
    $('.enchantment-item-container').hide();
    $('.enchantment-category-button_active').removeClass('enchantment-category-button_active');
    $(this).addClass('enchantment-category-button_active');
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

function enchantmentChangeByValue(enchantmentValue) {
    if (enchantmentValue < 0 || enchantmentValue > 16) {
        return false;
    }
    let item = $('.enchantment-item');
    let isMage = $('.sd-active-recipe').attr('data-is-mage') === 'true';
    let primaryPAttack = parseInt(item.attr('data-p-attack'));
    let primaryMAttack = parseInt(item.attr('data-m-attack'));
    let grade = item.attr('data-grade');
    let categoryId = item.attr('data-category-id');
    let isTwoHands = item.attr('data-is-two-hands') === '1';

    let displayPAttack = item.find('.enchantment-item__p-attack');
    let displayMAttack = item.find('.enchantment-item__m-attack');
    let attackExtraP = item.find('.enchantment-item__p-attack-extra');
    let attackExtraM = item.find('.enchantment-item__m-attack-extra');


    let bonusPerEnchant = getEnchantmentBonus(grade, categoryId, isTwoHands);
    let bonusEnchantAttackP, bonusEnchantAttackM;

    setEnchantmentChance(item, enchantmentValue);

    if (enchantmentValue < 4) {
        bonusEnchantAttackP = bonusPerEnchant['p'] * enchantmentValue;
        bonusEnchantAttackM = bonusPerEnchant['m'] * enchantmentValue;
    } else {
        /**
         * Enchantment after +3 is double bonus
         */
        bonusEnchantAttackP = bonusPerEnchant['p'] * 3;
        bonusEnchantAttackP += bonusPerEnchant['p'] * (enchantmentValue - 3) * 2;

        bonusEnchantAttackM = bonusPerEnchant['m'] * 3;
        bonusEnchantAttackM += bonusPerEnchant['m'] * (enchantmentValue - 3) * 2;
    }
    let attackValue;
    let totalPAttack = primaryPAttack + bonusEnchantAttackP;
    let totalMAttack = primaryMAttack + bonusEnchantAttackM;
    if (isMage) {
        attackValue = totalMAttack;
    } else {
        attackValue = totalPAttack;
    }
    slideToClosestAttack(attackValue, isMage);

    displayPAttack.text(totalPAttack);
    displayMAttack.text(totalMAttack);

    attackExtraP.text('(+' + bonusEnchantAttackP + ')');
    attackExtraM.text('(+' + bonusEnchantAttackM + ')');
}
$("#enchantment-change-value").change(function () {
    let enchantmentValue = parseInt($(this).val());
    enchantmentChangeByValue(enchantmentValue);
});


/**
 *
 *
 *
 * @param grade
 * @param categoryId
 * @param isTwoHands
 */
function getEnchantmentBonus(grade, categoryId, isTwoHands) {


    let oneHandIncreaseAttackP, twoHandIncreaseAttackP, bowIncreaseAttackP;
    let weaponIncreaseAttackM = 3;

    switch (grade) {
        case 'C':
        case 'B':
            oneHandIncreaseAttackP = 3;
            twoHandIncreaseAttackP = 4;
            bowIncreaseAttackP = 6;
            break;
        case 'A':
            oneHandIncreaseAttackP = 4;
            twoHandIncreaseAttackP = 5;
            bowIncreaseAttackP = 8;
            break;
        case 'S':
            oneHandIncreaseAttackP = 5;
            twoHandIncreaseAttackP = 6;
            bowIncreaseAttackP = 10;
            weaponIncreaseAttackM = 4;
            break;
        default:
            return null;
    }

    /**
     * Categories:
     * 32 - sword
     * 35 - blunt
     * 36 - bow
     * 37 - dagger
     * 38 - polearm
     * 39 - fist
     * 43 - dual swords
     * 44 - dual daggers
     */


    let enchantmentAttackP;
    let enchantmentAttackM = weaponIncreaseAttackM;
    categoryId = parseInt(categoryId);
    switch (categoryId) {

        case 32:
        case 35:
            if (isTwoHands) {
                enchantmentAttackP = twoHandIncreaseAttackP;
            } else {
                enchantmentAttackP = oneHandIncreaseAttackP;
            }
            break;
        case 43:
        case 44:
        case 39:
            enchantmentAttackP = twoHandIncreaseAttackP;
            break;
        case 36:
            enchantmentAttackP = bowIncreaseAttackP;
            break;
        default:
            enchantmentAttackP = oneHandIncreaseAttackP;
            break;
    }

    let enchantmentAttacks = [];
    enchantmentAttacks['p'] = enchantmentAttackP;
    enchantmentAttacks['m'] = enchantmentAttackM;

    return enchantmentAttacks;
}


function setEnchantmentChance(item, enchantmentValue) {
    let enchantmentChanceContainer = item.find('.enchantment-item__chance');
    let enchantmentChanceValue = item.find('.enchantment-item__chance-value');
    if (enchantmentValue > 0) {
        enchantmentChanceContainer.show();
        let enchantmentChance = getEnchantmentChance(enchantmentValue);
        enchantmentChanceValue.text(enchantmentChance);
    } else {
        enchantmentChanceContainer.hide();
    }
}

// enchant weapon chance 64
function getEnchantmentChance(enchantmentValue) {
    let safeEnchantment = 3;
    if (enchantmentValue <= safeEnchantment) {
        return 100;
    }
    let baseChance = 0.64;

    return (Math.pow(baseChance, enchantmentValue - safeEnchantment) * 100).toFixed(2);
}

function slideToClosestAttack(currentAttack, isMage = false) {
    let swiperActiveIndex = getSwiperActiveIndex();
    if (swiperActiveIndex.length === 0) {
        return;
    }

    let attackType;
    if (isMage) {
        attackType = 'm';
    } else {
        attackType = 'p';
    }

    let swiperSlides = $('.sd-swiper-active .swiper-slide');
    let bestDifferent = null;
    let bestDifferentIndex;
    swiperSlides.each(function (index, value) {
        let weaponAttack = $(value).attr('data-' + attackType + '-attack');
        let different = Math.abs(parseInt(currentAttack) - parseInt(weaponAttack));

        if ((bestDifferent === null || bestDifferent > different) && currentAttack >= weaponAttack) {
            bestDifferent = different;
            bestDifferentIndex = index;
        }
    });
    $('.sd-color-green').removeClass('sd-color-green');
    $(swiperSlides[bestDifferentIndex]).find('.recipe__' + attackType + '-attack span').addClass('sd-color-green');


    swiper[swiperActiveIndex].slideTo(bestDifferentIndex);
}
