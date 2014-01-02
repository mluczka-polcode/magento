function setLocation(url)
{
    location.href = url;
}

function initDetailsTabs()
{
    $('.product-details-tab').hide();
    $('#product-details-tab0').show();
    $('#product-details-button0').addClass('product-details-menu-current');

    $('#product-details-menu').children().click(function(){
        $('.product-details-menu-current').removeClass('product-details-menu-current');
        $(this).addClass('product-details-menu-current');

        var id = '#product-details-tab' + $(this).attr('mage-tab');
        $('.product-details-tab').hide();
        $(id).show();

        return false;
    });
}
