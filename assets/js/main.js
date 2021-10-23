var nav = document.getElementById("MainNav");
var scrollio;
let scrollCondition = false;

$(document).ready(function () {
    $(".dropdown").hover(function () {
        var dropdownMenu = $(this).children(".dropdown-menu");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("open");
        }
    });
});

// $(".owlcarouselBanner").owlCarousel({
//     loop: true,
//     margin: 10,
//     nav: true,
//     responsive: {
//         0: {
//             items: 1,
//         },
//         600: {
//             items: 1,
//         },
//         1000: {
//             items: 1,
//         },
//     },
// });



const _iOSDevice = !!navigator.platform.match(/iPhone|iPod|iPad/);
window.scroll(0, 0);
// smooth scroll
var Scrollbar = window.Scrollbar;
const options = {
    damping: 0.5,
    thumbMinSize: 20,
    renderByPixels: !("ontouchstart" in document),
    alwaysShowTracks: false,
    continuousScrolling: true,
};
if (
    screen.width >= 1024 &&
    !navigator.userAgent.includes("Firefox") &&
    !navigator.userAgent.includes("iPad") && scrollCondition
) {
    $("body").css({
        height: "6000px"
    });
    Scrollbar.init(document.querySelector(".my-scrollbar"));
}

var scrollCount = 0;
$(document).ready(() => {
    $("body").addClass("iosDevice");

    if (!navigator.userAgent.includes("Firefox") && scrollCondition) {
        setTimeout(() => {
            document
                .getElementsByClassName("my-scrollbar")[0]
                .addEventListener("wheel", (e) => {
                    scrollContent(e.deltaY);
                });

            if (
                window.innerWidth >= 1024 &&
                !navigator.userAgent.includes("iPad")
            ) {
                $(".my-scrollbar").css({
                    position: "fixed",
                    top: "0",
                    right: "0",
                    bottom: "0",
                    left: "0",
                });
            }
        });
    }
});

function scrollContent(e) {
    var isElementInView = Utils.isElementInView($('.copyright'), false);
    if (scrollCount >= 0) {
        if (e < 100 && scrollCount != 0) {
            scrollCount += e;
        } else if (e === 100) {
            if (isElementInView) {
                scrollCount = scrollCount
            } else {
                scrollCount += 100
            }
            scrollCount += 100;
        }
    } else {
        scrollCount = 0
    }
    if (screen.width >= 1024 && !_iOSDevice) {
        window.scroll(0, scrollCount);
    }
    // console.log(scrollCount)
}
document.addEventListener('keydown', function (e) {
    switch (e.keyCode) {
        case 37:
            console.log('left')
            break;
        case 38:
            console.log('up');
            scrollContent(-100)
            break;
        case 39:
            console.log('right');
            break;
        case 40:
            console.log('down');
            scrollContent(100)
            break;
    }
});



// chk element visible on
function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};
var Utils = new Utils();


// burger
$(document).ready(function () {
    $('#nav-icon1').click(function () {
        $(this).toggleClass('open');
        if (this.classList.contains('open')) {
            $('.sider').css('display', 'block')
            setTimeout(() => {
                $('.sider').css('opacity', '1');
                $('.sideNave').css('left', '0')
            })
        } else {

            $('.sideNave').css('left', '-300px')
            setTimeout(() => {
                $('.sider').css('opacity', '0');
            }, 300)
            setTimeout(() => {
                $('.sider').css('display', 'none')
            }, 600)
        }
    });
    if (window.innerWidth > 1024) {
        $('.mainDiv.my-scrollbar .main').css('min-height', window.innerHeight - 82 + 'px')
    }

    $('.dots-list').css({
        'opacity': "0",
        "display": "none"
    })
    $('.dots').on('click', (e) => {
        if (e.target.parentNode.nextElementSibling.style.opacity == 0) {
            e.target.parentNode.nextElementSibling.style.display = 'block'
            setTimeout(() => {
                e.target.parentNode.nextElementSibling.style.opacity = '1'
            }, 100)
        } else {
            e.target.parentNode.nextElementSibling.style.opacity = '0'
            setTimeout(() => {
                e.target.parentNode.nextElementSibling.style.display = 'none'
            }, 200)
        }

    })


});


$(document).click(function (e) {

    // Check if click was triggered on or within #menu_content
    // if ($(e.target).closest(".dots").length > 0) {
    //     return false;
    // }

    if ($(e.target).hasClass('fa-ellipsis-v') || $(e.target).hasClass('dots')) {
        return
    } else {
        $('.dots-list').css({
            'opacity': "0",
            "display": "none"
        })
    }
});


// javascript by ahmed

$('.transShareFolderbox1 ').on("click", (e) => {
    if (e.currentTarget.classList.contains('fol-text')) {
        $('.upload-cstm-modal .modal-title').html("Share Folder")
    } else {
        $('.upload-cstm-modal .modal-title').html("Share Document")
    }
})

$(".add-pers").on('click', () => {
    $('.add-pers-row').append(`
    <div class="col-lg-12 d-flex align-items-center mt2 posi-rel">
    <i class="fa fa-times del-row"></i>
             <div class="row">
                  <div class="col-lg-4">
                         <div class="share-modal-last-input">
                                         <label for="">Full Name</label>
                                         <input type="text" name="" id="" placeholder="XYZ Name">
                        </div>
                     </div>
                            <div class="col-lg-4">
                                            <div class="share-modal-last-input">
                                                <label for="">Email Address</label>
                                                <input type="email" name="" id="" placeholder="example@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="share-modal-last-input1">
                                                <label for="">Role</label>
                                                <select name="" id="">
                                                    <option value="">Listing Agent</option>
                                                    <option value="">Listing Agent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="share-modal-last-input">
                                        <label for=""></label>
                                        <select name="" id="">
                                            <option value="">View only</option>
                                            <option value="">View only</option>
                                        </select>
                                    </div>
                                </div>
    `)
    $(".del-row").on('click',(e)=>{
        e.target.parentNode.remove();
    })
})

$(".mod-open").on('click',(e)=>{
    if(e.target.classList.contains('add-trans-mod')){
       
        $('.transac').removeClass('hide')
    }
    else if(e.target.classList.contains('add-peo-mod')){
       
        $('.people').removeClass('hide')
    }
    else{
        $('.transac').addClass('hide')
        $('.people').addClass('hide')
    }
})
$('.csm-md').on('click',(e)=>{
    if(e.currentTarget.classList.contains('del-half')){
        $("#uploadModal .row .firs-col").addClass('hide')
        $("#uploadModal .row .sec-col").addClass('wid100')
        
    }
    else{
        $("#uploadModal .row .firs-col").removeClass('hide')
        $("#uploadModal .row .sec-col").removeClass('wid100')
    }
    if(e.currentTarget.classList.contains('hd-chng')){
        $('#uploadModal .modal-title').html("New Folder")
    }
    else{
        $('#uploadModal .modal-title').html("Upload Document")
    }
})
$(document).ready(function() {
    $('#calendar').evoCalendar({
    })
})

