jQuery.noConflict();

function setLocation(url)
{
    location.href = url;
}

function initDetailsTabs()
{
    jQuery('.product-details-tab').hide();
    jQuery('#product-details-tab0').show();
    jQuery('#product-details-button0').addClass('product-details-menu-current');

    jQuery('#product-details-menu').children().click(function(){
        jQuery('.product-details-menu-current').removeClass('product-details-menu-current');
        jQuery(this).addClass('product-details-menu-current');

        var id = '#product-details-tab' + jQuery(this).attr('mage-tab');
        jQuery('.product-details-tab').hide();
        jQuery(id).show();

        return false;
    });
}
