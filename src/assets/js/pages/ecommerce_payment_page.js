/*
*  altair admin
*  @version v2.12.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  ecommerce_payment_page.js - ecommerce_payment_page.html
*/

$(function() {
    $('[name="pm"]').on('ifChecked',function() {
        var $this = $(this);
        $('.js-pm_info').not($this).slideUp('fast');
        $('.' + $this.attr('id')).slideDown('fast');
    })
});