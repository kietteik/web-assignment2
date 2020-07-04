
jQuery.fn.extend({
    setMenu:function () {
        return this.each(function() {
            var containermenu = $(this);

            var itemmenu = containermenu.find('.menuitem');
            itemmenu.click(function () {
                var submenuitem = containermenu.find('.submenu');
                submenuitem.slideToggle(300);

            });

            $(document).click(function (e) {
                if (!containermenu.is(e.target) &&
                    containermenu.has(e.target).length === 0) {
                     var isopened =
                        containermenu.find('.submenu').css("display");

                     if (isopened == 'block') {
                         containermenu.find('.submenu').slideToggle(500);
                     }
                }
            });
        });
    },

});
$('.menu1').setMenu();

// contact
$("#contactform").validate({
    rules: {
      contactName: "required",
      contactPhone: "required",
      contactEmail:{
        required: true,
        email: true
      },
    },

    messages: {
      contactName: "Làm ơn nhập tên.",
      contactPhone: "Làm ơn nhập số điện thoại.",
      contactEmail: "Làm ơn nhập Email hợp lệ."
    },

    submitHandler: function(form) {
      form.submit();
    }
 });

// product
$("#productform1").validate({
    rules: {
      productName: "required",
      product_desc: "required",
      price: "required",
      image: "required"
    },

    messages: {
      productName: "Làm ơn nhập tên.",
      product_desc: "Làm ơn nhập mô tả.",
      price: "Làm ơn nhập giá.",
      image: "Làm ơn nhập hình ảnh."
    },
    submitHandler: function(form) {
      form.submit();
    }
 });
// product edit
$("#producteditform").validate({
    rules: {
      productName: "required",
      product_desc: "required",
      price: "required",
    },

    messages: {
      productName: "Làm ơn nhập tên.",
      product_desc: "Làm ơn nhập mô tả.",
      price: "Làm ơn nhập giá."
    },
    submitHandler: function(form) {
      form.submit();
    }
 });


// slider
$("#sliderform").validate({
    rules: {
      sliderName: "required",
      image: "required"
    },

    messages: {
      sliderName: "Làm ơn nhập tên.",
      image: "Làm ơn nhập hình ảnh."
    },
    submitHandler: function(form) {
      form.submit();
    }
 });

// slider
$("#slidereditform").validate({
    rules: {
      sliderName: "required"
    },

    messages: {
      sliderName: "Làm ơn nhập tên."
    },
    submitHandler: function(form) {
      form.submit();
    }
 });

//userform
$("#userform").validate({
    rules: {
      userName: "required",
      userUser: "required",
      userPass: "required",
      userEmail: {
        required: true,
        email: true
      }
    },

    messages: {
      userName: "Làm ơn nhập tên.",
      userUser: "Làm ơn nhập tài khoản.",
      userPass: "Làm ơn nhập mật khẩu.",
      userEmail: {
        required: "Làm ơn nhập email.",
        email: "Làm ơn nhập email hợp lệ."
      }
      
    },
    submitHandler: function(form) {
      form.submit();
    }
 });


// vitriform 
$("#vitriform").validate({
    rules: {
      vitriName: "required",
      image: "required"
    },

    messages: {
      vitriName: "Làm ơn nhập tên vị trí.",
      image: "Làm ơn nhập hình ảnh vị trí."
    },
    submitHandler: function(form) {
      form.submit();
    }
 });
$("#vitrieditform").validate({
    rules: {
      vitriName: "required"
    },

    messages: {
      vitriName: "Làm ơn nhập tên vị trí."
    },
    submitHandler: function(form) {
      form.submit();
    }
 });


$.validator.addMethod("validatePassword", function (value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/i.test(value);
        }, "Hãy nhập password từ 8 đến 16 ký tự bao gồm chữ hoa, chữ thường và ít nhất một chữ số");
