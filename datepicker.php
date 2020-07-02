<html lang="en">


<body translate="no">
    <main>
        <div class="header2 medium">Booking date</div>

        <div class=" row input-daterange input-group" id="flight-datepicker">
            <div class="form-item col-6">
                <!-- <label class="black-text">From</label><span class="fontawesome-calendar"></span> -->
                <input class="input-sm form-control" id="start-date" type="text" name="start" placeholder="From" data-date-format="DD, MM d"><span class="date-text date-depart"></span>
            </div>
            <div class="form-item col-6">
                <!-- <label class="black-text">To</label><span class="fontawesome-calendar"></span> -->
                <input class="input-sm form-control" id="end-date" type="text" name="end" placeholder="To" data-date-format="DD, MM d"><span class="date-text date-return"></span>
            </div>
        </div>
        <div class="blue-button col-4 mr-auto mt-4">Check available</div>
    </main>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.js"></script>
    <script id="rendered-js">
        // Make your own here: https://eternicode.github.io/bootstrap-datepicker

        var dateSelect = $('#flight-datepicker');
        var dateDepart = $('#start-date');
        var dateReturn = $('#end-date');
        var spanDepart = $('.date-depart');
        var spanReturn = $('.date-return');
        var spanDateFormat = 'ddd, MMMM D yyyy';

        dateSelect.datepicker({
            autoclose: true,
            format: "mm/dd",
            maxViewMode: 0,
            startDate: "now"
        }).
        on('change', function() {
            var start = $.format.date(dateDepart.datepicker('getDate'), spanDateFormat);
            var end = $.format.date(dateReturn.datepicker('getDate'), spanDateFormat);
            spanDepart.text(start);
            spanReturn.text(end);
        });
        //# sourceURL=pen.js
    </script>


</body>

</html>