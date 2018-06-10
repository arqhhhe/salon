jQuery(function ($) {

    result = {
        totalAmout: 0,
        discountRate: 0,
        discountAmount: 0,
        totalPaid: 0

    }

    refreshCalculation();

    $('body').on('click', '.billing-service', function () {
        var price = 0;
        $('.billing-service:checkbox:checked').each(function () {
            price += parseFloat($(this).attr('data-price'));
        });

        result.totalAmout = price.toFixed(2);

        refreshCalculation();
    });

    $('body').on('keyup', '#discount', function () {
        result.discountRate = $(this).val();
        console.log("result.discountRate: " + result.discountRate);
        refreshCalculation();
    });

    function refreshCalculation() {

        if (result.discountRate > 0) {
            result.discountAmount = (result.totalAmout / 100 * result.discountRate).toFixed(2);
            result.totalPaid = result.totalAmout - result.discountAmount;
        } else {
            result.discountAmount = 0;
            result.totalPaid = result.totalAmout;
        }

        $('.total-amount').text(result.totalAmout);
        $('.total-amount--hidden').val(result.totalAmout);

        $('.discount-amount').text(result.discountAmount);
        $('.discount-amount--hidden').val(result.discountAmount);

        $('.total-paid').text(result.totalPaid);
        $('.total-paid--hidden').val(result.totalPaid);
    }

});