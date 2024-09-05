$(document).ready(function() {
    // إظهار التابه الخاصة بالبيلنج وإخفاء التابه الخاصة بالدفع عند التحميل
    $('#billing').removeClass('hidden');
    $('#payment').addClass('hidden');
    // تفعيل الكلاس النشط على التابه الحالية
    $('#billing-tab').addClass(' text-custom-orange active  border-gray-400');
    $('#payment-tab').removeClass(
    ' text-custom-orange active  border-gray-400');
    // لما تضغط على زرار "Proceed to Payment"
    $('#payment-tab-button').on('click', function() {
        $('#billing').addClass('hidden');
        $('#payment').removeClass('hidden');
        // تعديل الكلاسات لتغير الألوان والكلاس النشط
        $('#billing-tab').removeClass(
            ' text-custom-orange active  border-gray-400');
        $('#payment-tab').addClass(
            ' text-custom-orange active  border-gray-400');
    });
    // لما تضغط على زرار "Return To Billing Info"
    $('#billing-tab-button').on('click', function() {
        $('#payment').addClass('hidden');
        $('#billing').removeClass('hidden');
        // تعديل الكلاسات لتغير الألوان والكلاس النشط
        $('#payment-tab').removeClass(
            ' text-custom-orange active  border-gray-400');
        $('#billing-tab').addClass(
            ' text-custom-orange active  border-gray-400');
    });
});