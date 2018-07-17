
jQuery.fn.toggleText = function(a,b) {
        return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
}

$(document).ready(function(){
        $('.tgl').css('display', 'none');
        $('h6', '#box-toggle').click(function () {
            $(this).next().slideToggle('slow')
                .siblings('.tgl:visible').slideToggle('fast');
            $(this).toggleText('<i class="fas fa-angle-double-right" style="color:#08c8b0"></i>', '<i class="fas fa-angle-double-down" style="color:#08c8b0" ></i>')
                .siblings('h6').next('.tgl:visible').prev()
                .toggleText('<i class="fas fa-angle-double-down" style="color:#08c8b0"></i>', '<i class="fas fa-angle-double-right" style="color:#08c8b0"></i>')
        });
})
