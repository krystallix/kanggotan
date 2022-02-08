
function getPageList(totalPages, page, maxLength) {
    if (maxLength < 5) throw "maxLength must be at least 5";

    function range(start, end) {
        return Array.from(Array(end - start + 1), (_, i) => i + start); 
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth*2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
    if (totalPages <= maxLength) {
        // no breaks in list
        return range(1, totalPages);
    }
    if (page <= maxLength - sideWidth - 1 - rightWidth) {
        // no break on left of page
        return range(1, maxLength - sideWidth - 1)
            .concat(0, range(totalPages - sideWidth + 1, totalPages));
    }
    if (page >= totalPages - sideWidth - 1 - rightWidth) {
        // no break on right of page
        return range(1, sideWidth)
            .concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }
    // Breaks on both sides
    return range(1, sideWidth)
        .concat(0, range(page - leftWidth, page + rightWidth),
                0, range(totalPages - sideWidth + 1, totalPages));
}
$.ajax({
    url: "http://103.179.56.179/api/nyadran/all?per_page=1&page=1",
    cache: false,
    success: function(response){
        pageLength = response.data.last_page
        //page
            // Number of items and limits the number of items per page
            var limitPerPage = 2;
            // Total pages rounded upwards
            var totalPages = pageLength;
            // Number of buttons at the top, not counting prev/next,
            // but including the dotted buttons.
            // Must be at least 5:
            var paginationSize = 6; 
            var currentPage;
        
            function showPage(whichPage) {
                if (whichPage < 1 || whichPage > totalPages) return false;
                currentPage = whichPage;
                // Replace the navigation items (not prev/next):            
                $(".pagination li").slice(1, -1).remove();
                getPageList(totalPages, currentPage, paginationSize).forEach( item => {
                    $("<li>").addClass("page-item")
                             .addClass(item ? "current-page" : "disabled")
                             .toggleClass("active", item === currentPage).append(
                        $("<a>").addClass("page-link").attr({
                            href: "javascript:void(0)"}).text(item || "...")
                    ).insertBefore("#next-page");
                });
                // Disable prev/next when at first/last page:
                $("#previous-page").toggleClass("disabled", currentPage === 1);
                $("#next-page").toggleClass("disabled", currentPage === totalPages);
                return true;
            }
        
            // Include the prev/next buttons:
            $(".pagination").append(
                $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                    $("<a>").addClass("page-link").attr({
                        href: "javascript:void(0)"}).append("<i class='bx bx-chevron-left'></i>")
                ),
                $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                    $("<a>").addClass("page-link").attr({
                        href: "javascript:void(0)"}).append("<i class='bx bx-chevron-right'></i>")
                )
            );
            // Show the page links
            showPage(1);
        
            // Use event delegation, as these items are recreated later    
            $(document).on("click", ".pagination li.current-page:not(.active)", function () {
                GetData(+$(this).text())
                return showPage(+$(this).text());
            });
            $("#next-page").on("click", function () {
                if(currentPage == totalPages){
                    //nothing
                }else{
                    GetData(currentPage+1)
                }
                return showPage(currentPage+1);
            });
        
            $("#previous-page").on("click", function () {
                GetData(currentPage-1)
                return showPage(currentPage-1);
            });
    }
});


function GetData(page){
    var settings = {
        "url": "http://103.179.56.179/api/nyadran/all?per_page=1&page="+page,
        "method": "GET",
        "timeout": 0,
    };
    
    $.ajax(settings).done(function (response) {
        function toTitleCase(str) {
            return str.replace(
                /\w\S*/g,
                function (txt) {
                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                }
                );
            }
            data = response.data.data;
            console.log(response.data)
            //table
            nyadran_table = ""
            for (i = 0; i < data.length; i++) {
                nomer = i + 1
                if (i % 2 === 0) {
                    oddeven = 'odd'
                }
                else {
                    oddeven = 'even'
                }
                nyadran_table += "<div> <div class='d-flex " + oddeven + "'> <div class='content-div w-5'>" + nomer + ".</div> <div class='content-div arwah-name'>" + toTitleCase(data[i].name) + "</div> <div class='content-div'> " + toTitleCase(data[i].address) + "</div>"
                for (k = 0; k < data[i].arwahs.length; k++) {
                    if (k > 0) {
                        nyadran_table += "<div class='d-flex " + oddeven + "'> <div class='content-div w-5'></div> <div class='content-div arwah-name transparent'>" + toTitleCase(data[i].name) + "</div> <div class='content-div'> </div> <div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_type) + "." + toTitleCase(data[i].arwahs[k].arwah_name) + "</div> <div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_address) + "</div> </div>"
                    } else {
                        nyadran_table += "<div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_type) + "." + toTitleCase(data[i].arwahs[k].arwah_name) + "</div> <div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_address) + "</div></div>"
                    }
                }
                nyadran_table += "</div>"
            }
            // for(i=0; i<400; i++){
            $("#table-content").html(nyadran_table)
            // }
            lengthRow = $(".odd").length
            lengthRow += $(".even").length
        });
    }
    
    
    $(document).ready(function () {
        $("#search-arwah").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $(".table-content").filter(function () {
                $(this).toggle($(this).find(".arwah-name").text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    
    $(document).ready(function () {
        url = "http://103.179.56.179/api/nyadran/all?per_page=1&page=1"
        GetData(url)
    });
    
    var stat = {
        "url": "http://103.179.56.179/api/nyadran/statistik",
        "method": "GET",
        "timeout": 0,
    };
    
    $.ajax(stat).done(function (response) {
        stats = response.data;
        $("#stats").html("Total sender : " + response.data.total_sender + " Orang. Total Arwah : "+ response.data.total_arwah )
    });
    
    